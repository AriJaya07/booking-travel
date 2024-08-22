<?php

namespace App\Controllers\activity;

use App\Libraries\Tools;

use App\Controllers\BaseController;
use App\Models\masterdata\GuideInfoModel;
use App\Models\product\ActivityMainModel;
use App\Models\product\ActivityOptionsModel;
use App\Models\product\ActivityOptionsAvaibilityModel;
use App\Models\product\ActivityOptionsTimeslotModel;
use App\Models\product\ActivityOptionsPriceModel;
use App\Models\product\ActivityPhotoModel;
use App\Models\product\ActivityItineraryModel;
use App\Models\product\ActivityReviewModel;

class Activity extends BaseController
{
    public function index(): string
    {
        return view("landing-page/detail-activity/detail-activity");
    }

    public function getActivityDetail($id) {
        
        $tools = new Tools();

        $M_activitymain = new ActivityMainModel();
        $data = $M_activitymain->getDataById($id);

        $data['highlights'] = isset($data["highlights"]) ? json_decode($data["highlights"], true) : [];
        $data['inclusions'] = isset($data["inclusions"]) ? json_decode($data["inclusions"], true) : [];
        $data['exclusions'] = isset($data["exclusions"]) ? json_decode($data["exclusions"], true) : [];

        $M_activityphoto = new ActivityPhotoModel();
        $data['imageBanner'] = $M_activityphoto->getUploadByConditions(['activity_id' => $id], 'last_update', 'asc');

        $M_activityoptions = new ActivityOptionsModel();
        $optData = $M_activityoptions->getByConditions(['activity_main_id' => $id], 'last_update', 'asc');
        
        $M_activityoptionsprice = new ActivityOptionsPriceModel();
        $data['price'] = $M_activityoptionsprice->getLowestPrice($id);
        
        $M_guideinfo = new GuideInfoModel();
        $guideInfo = $M_guideinfo->getDataById($data['guide_info_id']);
        $data['guide_info'] = $guideInfo['name'];

        $n = 0;
        $durations = [];
        $lang = [];//a b
        $about_livetourguide = '';
        $maxpax = [];
        
        foreach($optData as $opt) {
            $time_duration = isset($opt["time_duration_val"]) ? $opt["time_duration_val"] : '';// a b c
            $languages = isset($opt["languages"]) ? json_decode($opt["languages"], true) : [];// a b c
            $opt["audio_guide"] = isset($opt["audio_guide"]) ? json_decode($opt["audio_guide"], true) : [];// a b c
            $opt["info_booklets"] = isset($opt["info_booklets"]) ? json_decode($opt["info_booklets"], true) : [];// a b c

            if($time_duration!=='') {
                $second = 0;
                $sTime = explode(" ", $time_duration);
                $dur = $sTime[0];
                $type = $sTime[1];

                $second = $tools->toSecond($type, $dur);

                $durations[$n] = [$second, $type];
            }

            if(count($languages)>0) {
                for($i=0; $i<count($languages);$i++) {
                    $currentLang = $languages[$i];
                    if(count($lang)>0){
                        $filteredArray = array_filter($lang, function($value) use ($currentLang) {
                            return $value === $currentLang;
                        });
    
                        if(empty($filteredArray)) {
                            $lang[count($lang)] = $currentLang;
                            $about_livetourguide .= $currentLang.', ';
                        }
                        
                    } else {
                        $lang[0] = $currentLang;
                        $about_livetourguide .= $currentLang.', ';
                    }
                }
            }
            
            // decode languages
            $opt["languages"] = $languages;

            $data['options'][$n] = $opt;

            /** select avaibility */
            $M_activityoptionsavail = new ActivityOptionsAvaibilityModel();
            $availData = $M_activityoptionsavail->getByConditions(['options_id' => $opt['id']], 'last_update', 'asc');

            $avn = 0;
            $avail_max = 0;
            foreach($availData as $d) {
                $avail_max = $d["schedule_maxpax"];

                $data['options'][$n]['avaibility'][$avn] = $d;
                $M_activityoptionstimeslot = new ActivityOptionsTimeslotModel();
                $timeslot = $M_activityoptionstimeslot->getByConditions(['avaibility_id' => $d['id']], 'id', 'asc');

                $tmn = 0;
                foreach($timeslot as $time) {
                    $time["time_slot"] = isset($time["time_slot"]) ? json_decode($time["time_slot"], true) : [];

                    $data['options'][$n]['avaibility'][$avn]['timeslot'][$tmn] = $time;
                    
                    $tmn++;
                }

                $M_activityoptionsprice = new ActivityOptionsPriceModel();
                $price = $M_activityoptionsprice->getByConditions(['avaibility_id' => $d['id']], 'from', 'asc');

                $pn = 0;
                foreach($price as $p) {
                    $data['options'][$n]['avaibility'][$avn]['price'][$pn] = $p;
                    
                    $pn++;
                }

                $avn++;
            }
            $maxpax[$n] = $avail_max;

            $n++;

        }

        $about_livetourguide = rtrim($about_livetourguide, ", ");

        $lowestType = $durations[0][1];
        $lowest = $durations[0][0];
        $highestType = $durations[0][1];
        $highest = $durations[0][0];

        $estimatedDuration = '';

        foreach ($durations as $duration) {
            if ($duration[0] < $lowest) {
                $lowest = $duration[0];
                $lowestType = $duration[1];

                $estimatedDuration = $tools->toTimeType($lowestType, $lowest);
            }
            if ($duration[0] > $highest) {
                $highest = $duration[0];
                $highestType = $duration[1];

                $estimatedDuration .= ' - '. $tools->toTimeType($highestType, $highest);
            }
        }

        $data['estimated_durations'] = $estimatedDuration;
        $data['about_livetourguide'] = $about_livetourguide;
        $data['quota'] = max($maxpax);
        
        $M_activityitinerary = new ActivityItineraryModel();
        $data["itinerary"] = $M_activityitinerary->getByConditions(['activity_main_id' => $id], 'idx', 'asc');

        return $this->response->setJSON($data);
    }

    public function getOptions($id, $pax, $date) {
        $day = date('D', strtotime($date));

        $M_activityoptions = new ActivityOptionsModel();
        $optData = $M_activityoptions->getByConditions(['activity_main_id' => $id], 'last_update', 'asc');

        $n = 0;        
        foreach($optData as $opt) {
            $opt["languages"] = isset($opt["languages"]) ? json_decode($opt["languages"], true) : [];
            $opt["audio_guide"] = isset($opt["audio_guide"]) ? json_decode($opt["audio_guide"], true) : [];
            $opt["info_booklets"] = isset($opt["info_booklets"]) ? json_decode($opt["info_booklets"], true) : [];

            $data['options'][$n] = $opt;

            /** select avaibility */
            $M_activityoptionsavail = new ActivityOptionsAvaibilityModel();
            $availData = $M_activityoptionsavail->getByConditions(['options_id' => $opt['id']], 'last_update', 'asc');

            $M_activityreview = new ActivityReviewModel();
            $reviewData = $M_activityreview->getByConditions(['options_id' => $opt['id']], 'last_update', 'asc');

            $totalReview = 0;
            $avrRate = 0;
            if(count($reviewData)>0) {
                $totalReview = count($reviewData);
                $totalRate = 0;
                foreach($reviewData as $review) {
                    $totalRate += $review['rate'];
                }

                $avrRate = $totalRate/count($reviewData);
                $data['options'][$n]['rate'] = $avrRate;
                $data['options'][$n]['countReview'] = $totalReview;
            } else {                
                $data['options'][$n]['rate'] = $avrRate;
                $data['options'][$n]['countReview'] = $totalReview;
            }

            if(count($availData)>0) {
                $avn = 0;
                foreach($availData as $d) {
                    $data['options'][$n]['avaibility'][$avn] = $d;
                    $M_activityoptionstimeslot = new ActivityOptionsTimeslotModel();
                    $timeslot = $M_activityoptionstimeslot->getByConditions(['avaibility_id' => $d['id'], 'days' => $day], 'id', 'asc');

                    $tmn = 0;
                    if(count($timeslot)>0){
                        foreach($timeslot as $time) {
                            $time["time_slot"] = isset($time["time_slot"]) ? json_decode($time["time_slot"], true) : [];
    
                            $data['options'][$n]['avaibility'][$avn]['timeslot'][$tmn] = $time;
                            
                            $tmn++;
                        }
                    } else {
                        $data['options'][$n]['avaibility'][$avn]['timeslot'] = [];
                    }

                    $M_activityoptionsprice = new ActivityOptionsPriceModel();
                    $price = $M_activityoptionsprice->getByConditions('avaibility_id="'.$d['id'].'" AND ('.$pax.' BETWEEN `from` AND `to`)', 'from', 'asc');

                    $pn = 0;
                    if(count($price)>0){
                        foreach($price as $p) {
                            $data['options'][$n]['avaibility'][$avn]['price'][$pn] = $p;

                            $data['options'][$n]['price_per_pax'] = $p['cust_pays'];
                            
                            $pn++;
                        }
                    } else {
                        $data['options'][$n]['avaibility'][$avn]['price'] = [];
                    }

                    $avn++;
                }

                $data['options'][$n]['total_pax'] = $pax;
            } else {
                $data['options'][$n]['avaibility'][$avn] = [];
                $data['options'][$n]['price_per_pax'] = 0;
                $data['options'][$n]['total_pax'] = 0;
            }

            $n++;

        }

        return $this->response->setJSON($data);
    }

    public function getActivityList() {
        $M_activitymain = new ActivityMainModel();
        $data = $M_activitymain->getAllActivityWithPrice();

        return $this->response->setJSON($data);
    }
}