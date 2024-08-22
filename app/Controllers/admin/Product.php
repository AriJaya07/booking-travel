<?php

namespace App\Controllers\admin;

use App\Controllers\BaseController;
use App\Models\NewsModel;
use App\Models\masterdata\CategoryModel;
use App\Models\masterdata\GuideInfoModel;
use App\Models\product\ActivityMainModel;
use App\Models\product\ActivityOptionsModel;
use App\Models\product\ActivityOptionsAvaibilityModel;
use App\Models\product\ActivityOptionsTimeslotModel;
use App\Models\product\ActivityOptionsPriceModel;
use App\Models\product\ActivityPhotoModel;
use App\Models\product\ActivityItineraryModel;

class Product extends BaseController
{
    public function index(): string
    {        
        $M_category = new CategoryModel();
        $data['category_records'] = $M_category->findAll();
        $M_guideinfo = new GuideInfoModel();
        $data['guideinfo_records'] = $M_guideinfo->findAll();
		
        return view('admin/product/add_content', $data).
                view('admin/product/functions_content');
    }

    public function showForm($id){
        $M_category = new CategoryModel();
        $data['category_records'] = $M_category->findAll();
        $M_guideinfo = new GuideInfoModel();
        $data['guideinfo_records'] = $M_guideinfo->findAll();

        if($id!==null || $id!==""){
            $M_activity_main = new ActivityMainModel();
            $data['activity_records'] = $M_activity_main->getDataById($id);
        }
        		
        return view('admin/product/add_content', $data).
                view('admin/product/functions_content');
    }

    public function productPage() {
        $M_activity_main = new ActivityMainModel();
        $data['activity_records'] = $M_activity_main->findWithFilePath();
        return view('admin/product/list_content', $data);
    }

    public function optionsList() {
        $parentId = $this->request->getGet('parent_id');

        $M_activityOpt= new ActivityOptionsModel();

        $param = [
            'activity_main_id' => $parentId,
        ];

        $data['data'] = $M_activityOpt->getByConditions($param, 'last_update', 'DESC');;
        $data['status'] = 'success';

        return $this->response->setJSON($data);
    }

    public function showFormOptions(){
        $id = $this->request->getGet('id');

        if($id!==null || $id!==""){
            $M_activityOpt = new ActivityOptionsModel();
            $M_activityOptAvail= new ActivityOptionsAvaibilityModel();
            $M_activityOptTimeslot= new ActivityOptionsTimeslotModel();

            $param = [
                'options_id' => $id,
            ];

            $opt_data = $M_activityOpt->getDataById($id);
            $avaibility_data = $M_activityOptAvail->getByConditions($param, 'last_update', 'desc');

            $opt_data["avaibility_data"] = '';
            $opt_data["timeslot_data"] = '';

            if(count($avaibility_data)>0) {
                $opt_data["avaibility_data"] = $avaibility_data;
    
                $opt_data["timeslot_data"] = $M_activityOptTimeslot->getByConditions(['avaibility_id'=>$avaibility_data[0]['id']],'','');
            } 
            
            $data['data'] = $opt_data;
            $data['status'] = 'success';
        }

        return $this->response->setJSON($data);

    }

    public function refreshCsrf() {
        $data["token"] = csrf_hash();
        return $this->response->setJSON($data);
    }

    public function save()
    {
        // var_dump($this->request->getPost('highlights'));die;
        // lakukan validasi
        $validation =  \Config\Services::validation();
        $validation->setRules([
            'title' => 'required',
            'introduce' => 'required',
            'description' => 'required'
        ]);
        $isDataValid = $validation->withRequest($this->request)->run();
        
        // jika data valid, simpan ke database
        if($isDataValid){
            try {
                $M_activity = new ActivityMainModel();
                if($this->request->getPost('main_id') !== null && $this->request->getPost('main_id') !== ""){
                    // Data to be updated
                    $data = [
                        "category_id" => $this->request->getPost('category_id'),
                        "title" => $this->request->getPost('title'),
                        "introduce" => $this->request->getPost('introduce'),
                        "description" => $this->request->getPost('description'),
                        "highlights" => json_encode($this->request->getPost('highlights')),
                        "inclusions" => json_encode($this->request->getPost('inclusions')),
                        "exclusions" => json_encode($this->request->getPost('exclusions')),
                        "guide_info_id" => $this->request->getPost('guide_info_id'),
                        "important_information" => $this->request->getPost('important_information'),
                        "last_update" => date("Y-m-d H:i:s"),
                    ];

                    // Insert the data and get the last inserted ID
                    $M_activity->update($this->request->getPost('main_id'), $data);

                    // Set flashdata for success message
                    // $this->session->setFlashdata('success', 'Content added successfully.');
                    // $this->session->setFlashdata('pId', $lastInsertedID);

                    $data = [
                        'status'  => 'success',
                        'message' => 'Data processed successfully',
                        'data'    => [
                            'pId' => $this->request->getPost('main_id'),
                        ],
                    ];
                } else {
                    // Data to be inserted
                    $data = [
                        "category_id" => $this->request->getPost('category_id'),
                        "title" => $this->request->getPost('title'),
                        "introduce" => $this->request->getPost('introduce'),
                        "description" => $this->request->getPost('description'),
                        "highlights" => json_encode($this->request->getPost('highlights')),
                        "inclusions" => json_encode($this->request->getPost('inclusions')),
                        "exclusions" => json_encode($this->request->getPost('exclusions')),
                        "guide_info_id" => $this->request->getPost('guide_info_id'),
                        "important_information" => $this->request->getPost('important_information'),
                        "reg_date" => date("Y-m-d H:i:s"),
                        "last_update" => date("Y-m-d H:i:s"),
                    ];

                    // Insert the data and get the last inserted ID
                    $lastInsertedID = $M_activity->insertData($data);
        
                    // Set flashdata for success message
                    // $this->session->setFlashdata('success', 'Content added successfully.');
                    // $this->session->setFlashdata('pId', $lastInsertedID);

                    $data = [
                        'status'  => 'success',
                        'message' => 'Data processed successfully',
                        'data'    => [
                            'pId' => $lastInsertedID,
                        ],
                    ];
                }                
            } catch (\Exception $e) {
                echo $e;
                
                $data = [
                    'status'  => 'failed',
                    'message' => $e,
                    'data'    => [],
                ];
                // Handle database-related exception
            }
        } else {
            $data = [
                'status'  => 'failed',
                'message' => $validation->getErrors(),
                'data'    => [],
            ];
        }

        // Send the response as JSON
        return $this->response->setJSON($data);
    }

    public function saveOptionsSetup()
    {
        // var_dump($this->request->getPost('title'));die;
        // lakukan validasi
        $validation =  \Config\Services::validation();
        $validation->setRules([
            'title' => 'required',
        ]);
        $isDataValid = $validation->withRequest($this->request)->run();
        
        // jika data valid, simpan ke database
        if($isDataValid){
            try {
                $M_activityOpt = new ActivityOptionsModel();
                if($this->request->getPost('option_id') !== null && $this->request->getPost('option_id') !== ""){
                    // Data to be updated
                    $data = [
                        'title' => $this->request->getPost('title'),
                        'languages' => json_encode($this->request->getPost('languages')),
                        'private' => $this->request->getPost('private'),
                        'group_size' => $this->request->getPost('group_size'),
                        'is_audio_guide' => $this->request->getPost('is_audio_guide'),
                        'audio_guide' => json_encode($this->request->getPost('audio_guide')),
                        'is_info_booklets' => $this->request->getPost('is_info_booklets'),
                        'info_booklets' => json_encode($this->request->getPost('info_booklets')),
                        'is_time_length' => $this->request->getPost('is_time_length'),
                        'time_duration_val' => ($this->request->getPost('is_time_length') == 1 ? ($this->request->getPost('time_duration_val').' '.$this->request->getPost('time_duration_type')) : ''),
                        'time_validity_val' => ($this->request->getPost('is_time_length') == 2 ? $this->request->getPost('time_validity_val') : ''),
                        'stop_accept_time' => $this->request->getPost('stop_accept_time'),
                        'last_update' => date("Y-m-d H:i:s"),
                    ];

                    // Insert the data and get the last inserted ID
                    $M_activityOpt->update($this->request->getPost('option_id'), $data);

                    $data = [
                        'status'  => 'success',
                        'message' => 'Data processed successfully',
                        'data'    => [
                            'pId' => $this->request->getPost('option_id'),
                        ],
                    ];
                } else {
                    // Data to be inserted
                    $data = [                        
                        'activity_main_id' => $this->request->getPost('activity_main_id'),
                        'title' => $this->request->getPost('title'),
                        'languages' => json_encode($this->request->getPost('languages')),
                        'private' => $this->request->getPost('private'),
                        'group_size' => $this->request->getPost('group_size'),
                        'is_audio_guide' => $this->request->getPost('is_audio_guide'),
                        'audio_guide' => json_encode($this->request->getPost('audio_guide')),
                        'is_info_booklets' => $this->request->getPost('is_info_booklets'),
                        'info_booklets' => json_encode($this->request->getPost('info_booklets')),
                        'is_time_length' => $this->request->getPost('is_time_length'),
                        'time_duration_val' => ($this->request->getPost('is_time_length') == 1 ? ($this->request->getPost('time_duration_val').' '.$this->request->getPost('time_duration_type')) : ''),
                        'time_validity_val' => ($this->request->getPost('is_time_length') == 2 ? $this->request->getPost('time_validity_val') : ''),
                        'stop_accept_time' => $this->request->getPost('stop_accept_time'),
                        'reg_date' => date("Y-m-d H:i:s"),
                        'last_update' => date("Y-m-d H:i:s"),
                        'status' => 'active'
                    ];

                    // Insert the data and get the last inserted ID
                    $lastInsertedID = $M_activityOpt->insertData($data);

                    $data = [
                        'status'  => 'success',
                        'message' => 'Data processed successfully',
                        'data'    => [
                            'pId' => $lastInsertedID,
                        ],
                    ];
                }                
            } catch (\Exception $e) {
                echo $e;
                
                $data = [
                    'status'  => 'failed',
                    'message' => $e,
                    'data'    => [],
                ];
                // Handle database-related exception
            }
        } else {
            $data = [
                'status'  => 'failed',
                'message' => $validation->getErrors(),
                'data'    => [],
            ];
        }

        // Send the response as JSON
        return $this->response->setJSON($data);
    }

    public function deleteOption($id) {
        $result = '';
        $M_activityOpt = new ActivityOptionsModel();
        
        $M_optAvaibility = new ActivityOptionsAvaibilityModel;
        $M_optTimeSlot = new ActivityOptionsTimeslotModel;
        $M_optPrice = new ActivityOptionsPriceModel;

        if($M_activityOpt->find($id)){
            $vaibility_data = $M_optAvaibility->where('options_id', $id)->findAll();
            foreach($vaibility_data as $data) {
                $M_optTimeSlot->delete(['avaibility_id' => $data['id']]);
                $M_optPrice->delete(['avaibility_id' => $data['id']]);
                $M_optAvaibility->delete($data['id']);
                
            }
            $data = $M_activityOpt->delete($id);

            $result = [
                'status'  => 'success',
                'message' => 'Delete successfully',
            ];
        } else {
            $result = [
                'status'  => 'error',
                'message' => 'Data not found',
            ];
        }

        return $this->response->setJSON($result);
    }

    public function saveOptionsMeetingPoint()
    {
        // lakukan validasi
        $validation =  \Config\Services::validation();
        $validation->setRules([
            'meeting_point' => 'required',
            'describe_point' => 'required',
        ]);
        $isDataValid = $validation->withRequest($this->request)->run();
        
        // jika data valid, simpan ke database
        if($isDataValid){
            try {
                $M_activityOpt = new ActivityOptionsModel();
                if($this->request->getPost('option_id') !== null && $this->request->getPost('option_id') !== ""){
                    // Data to be updated
                    $data = [
                        'meeting_point' => $this->request->getPost('meeting_point'),
                        'meeting_point_maplink' => $this->request->getPost('meeting_point_maplink'),
                        'describe_point' => $this->request->getPost('describe_point'),
                        'time_before_activity' => $this->request->getPost('time_before_activity'),
                        'last_update' => date("Y-m-d H:i:s"),
                    ];

                    // Insert the data and get the last inserted ID
                    $M_activityOpt->update($this->request->getPost('option_id'), $data);

                    $data = [
                        'status'  => 'success',
                        'message' => 'Data processed successfully',
                        'data'    => [
                            'pId' => $this->request->getPost('option_id'),
                        ],
                    ];
                }
            } catch (\Exception $e) {
                echo $e;
                
                $data = [
                    'status'  => 'failed',
                    'message' => $e,
                    'data'    => [],
                ];
                // Handle database-related exception
            }
        } else {
            $data = [
                'status'  => 'failed',
                'message' => $validation->getErrors(),
                'data'    => [],
            ];
        }

        // Send the response as JSON
        return $this->response->setJSON($data);
    }

    public function saveOptionsAvaibility()
    {
        // lakukan validasi
        $validation =  \Config\Services::validation();
        $validation->setRules([
            'schedule_name' => 'required',
            'schedule_minpax' => 'required',
            'schedule_maxpax' => 'required',
        ]);
        $isDataValid = $validation->withRequest($this->request)->run();
        
        // jika data valid, simpan ke database
        if($isDataValid){
            try {
                $M_activityOptAvail = new ActivityOptionsAvaibilityModel();
                if($this->request->getPost('avail_id') !== null && $this->request->getPost('avail_id') !== ""){
                    // Data to be updated
                    $data = [
                        'options_id' => $this->request->getPost('option_id'),
                        'schedule_name' => $this->request->getPost('schedule_name'),
                        'schedule_start_date' => date("Y-m-d H:i:s", strtotime($this->request->getPost('schedule_start_date'))),
                        'schedule_end_date' => ($this->request->getPost('schedule_chk')==1 ? date("Y-m-d H:i:s", strtotime($this->request->getPost('schedule_end_date'))) : null),
                        'schedule_minpax' => $this->request->getPost('schedule_minpax'),
                        'schedule_maxpax' => $this->request->getPost('schedule_maxpax'),
                        'last_update' => date("Y-m-d H:i:s"),
                    ];

                    // Insert the data and get the last inserted ID
                    $M_activityOptAvail->update($this->request->getPost('avail_id'), $data);

                    $result = [
                        'status'  => 'success',
                        'message' => 'Data processed successfully',
                        'data'    => [
                            'pId' => $this->request->getPost('avail_id'),
                        ],
                    ];

                    $price_id = $this->request->getPost('price_id');

                    if(count($price_id)>0) {
                        $avaibility_id = $this->request->getPost('avail_id');
                        $from = $this->request->getPost('from');
                        $to = $this->request->getPost('to');
                        $cust_pays = $this->request->getPost('cust_pays');
                        $price_type = $this->request->getPost('price_type');

                        $M_activityOptPrice = new ActivityOptionsPriceModel();

                        for($i=0;$i<count($price_id);$i++) {
                            if($price_id[$i] !== "0") {
                                $data = [
                                    'avaibility_id' => $avaibility_id,
                                    'from' => $from[$i],
                                    'to' => $to[$i],
                                    'cust_pays' => ($cust_pays[$i] !== '' ? $cust_pays[$i] : 0),
                                    'price_type' => $price_type[$i],
                                ];
            
                                // Insert the data and get the last inserted ID
                                $M_activityOptPrice->update($price_id[$i], $data);
                            } else {
                                $data = [
                                    'avaibility_id' => $avaibility_id,
                                    'from' => $from[$i],
                                    'to' => $to[$i],
                                    'cust_pays' => ($cust_pays[$i] !== '' ? $cust_pays[$i] : 0),
                                    'price_type' => $price_type[$i],
                                ];
                    
                                // Insert the data and get the last inserted ID
                                $M_activityOptPrice->insertData($data);
                            }
                        }
                    }
                } else {
                    // Data to be inserted
                    $data = [                        
                        'options_id' => $this->request->getPost('option_id'),
                        'schedule_name' => $this->request->getPost('schedule_name'),
                        'schedule_start_date' => date("Y-m-d H:i:s", strtotime($this->request->getPost('schedule_start_date'))),
                        'schedule_end_date' => ($this->request->getPost('schedule_chk')==1 ? date("Y-m-d H:i:s", strtotime($this->request->getPost('schedule_end_date'))) : null),
                        'schedule_minpax' => $this->request->getPost('schedule_minpax'),
                        'schedule_maxpax' => $this->request->getPost('schedule_maxpax'),
                        'reg_date' => date("Y-m-d H:i:s"),
                        'last_update' => date("Y-m-d H:i:s"),
                    ];

                    // Insert the data and get the last inserted ID
                    $lastInsertedID = $M_activityOptAvail->insertData($data);

                    $result = [
                        'status'  => 'success',
                        'message' => 'Data processed successfully',
                        'data'    => [
                            'pId' => $lastInsertedID,
                        ],
                    ];
                }
            } catch (\Exception $e) {
                echo $e;
                
                $result = [
                    'status'  => 'failed',
                    'message' => $e,
                    'data'    => [],
                ];
                // Handle database-related exception
            }
        } else {
            $result = [
                'status'  => 'failed',
                'message' => $validation->getErrors(),
                'data'    => [],
            ];
        }

        // Send the response as JSON
        return $this->response->setJSON($result);
    }

    public function saveOptionsTimeslot()
    {
        $timeslot_id = $this->request->getPost('timeslot_id');
        try {
            $M_activityOptTime = new ActivityOptionsTimeslotModel();
            if($timeslot_id !== null && $timeslot_id !== ""){
                // Data to be updated
                $data = [
                    'avaibility_id' => $this->request->getPost('avaibility_id'),
                    'days' => $this->request->getPost('days'),
                    'time_slot' => json_encode($this->request->getPost('time_slot')),
                ];

                // Insert the data and get the last inserted ID
                $M_activityOptTime->update($timeslot_id, $data);

                $data = [
                    'status'  => 'success',
                    'message' => 'Data processed successfully',
                    'data'    => [
                        'pId' => $timeslot_id,
                    ],
                ];
            } else {
                // Data to be inserted
                $data = [
                    'avaibility_id' => $this->request->getPost('avaibility_id'),
                    'days' => $this->request->getPost('days'),
                    'time_slot' => json_encode($this->request->getPost('time_slot')),
                ];

                // Insert the data and get the last inserted ID
                $lastInsertedID = $M_activityOptTime->insertData($data);

                $data = [
                    'status'  => 'success',
                    'message' => 'Data processed successfully',
                    'data'    => [
                        'pId' => $lastInsertedID,
                    ],
                ];
            }
        } catch (\Exception $e) {
            echo $e;
            
            $data = [
                'status'  => 'failed',
                'message' => $e,
                'data'    => [],
            ];
            // Handle database-related exception
        }

        // Send the response as JSON
        return $this->response->setJSON($data);
    }

    public function saveOptionsPrice()
    {
        $data = [
            'status'  => '',
            'message' => '',
            'data'    => [],
        ];

        $price_id = $this->request->getPost('price_id');
        $avaibility_id = $this->request->getPost('avaibility_id');
        $from = $this->request->getPost('from');
        $to = $this->request->getPost('to');
        $cust_pays = $this->request->getPost('cust_pays');
        $price_type = $this->request->getPost('price_type');

        $M_activityOptPrice = new ActivityOptionsPriceModel();

        for($i=0;$i<count($price_id);$i++) {
            // var_dump($cust_pays[$i]);die;
            if($price_id[$i] !== "0") {

            } else {
                $data = [                    
                    'avaibility_id' => $avaibility_id,
                    'from' => $from[$i],
                    'to' => $to[$i],
                    'cust_pays' => $cust_pays[$i],
                    'price_type' => $price_type[$i],
                ];
    
                // Insert the data and get the last inserted ID
                $lastInsertedID = $M_activityOptPrice->insertData($data);
    
                $data = [
                    'status'  => 'success',
                    'message' => 'Data processed successfully',
                    'data'    => [
                        'pId' => $lastInsertedID,
                    ],
                ];
            }
        }
            
        // Send the response as JSON
        return $this->response->setJSON($data);
    }
    public function showFormItinerary(){
        $id = $this->request->getGet('itinerary_id');

        $result = '';

        if($id!==null || $id!==""){
            $M_activityItinerary = new ActivityItineraryModel();

            $data = $M_activityItinerary->getDataById($id);
            
            if(count($data)>0) {
                $result = [
                    'status'  => 'success',
                    'message' => 'Data processed successfully',
                    'data'    => $data,
                ];
            } else {
                $result = [
                    'status'  => 'success',
                    'message' => 'Data processed successfully',
                    'data'    => [],
                ];

            }
        }

        return $this->response->setJSON($result);

    }

    public function deleteItinerary($id) {
        $result = '';
        $M_activityItinerary = new ActivityItineraryModel();

        if($M_activityItinerary->find($id)){
            $data = $M_activityItinerary->deleteById($id);

            $result = [
                'status'  => 'success',
                'message' => 'Delete successfully',
            ];
        } else {
            $result = [
                'status'  => 'error',
                'message' => 'Data not found',
            ];
        }

        return $this->response->setJSON($result);
    }

    public function getItinerary() {
        $main_id = $this->request->getGet('activity_main_id');

        try{            
            $M_activityItinerary = new ActivityItineraryModel();
            $result = $M_activityItinerary->getByConditions('activity_main_id="'.$main_id.'"', 'idx, last_update', 'asc');
            
            if(count($result)>0) {
                $result = [
                    'status'  => 'success',
                    'message' => 'Data processed successfully',
                    'data'    => $result,
                ];
            } else {
                $result = [
                    'status'  => 'success',
                    'message' => 'Data processed successfully',
                    'data'    => [],
                ];

            }

        } catch (\Exception $e) {
            echo $e;
            
            $result = [
                'status'  => 'failed',
                'message' => $e,
                'data'    => [],
            ];
            // Handle database-related exception
        }
        
        return $this->response->setJSON($result);
    }

    public function saveItinerary()
    {

        $result = '';
        // lakukan validasi
        $validation =  \Config\Services::validation();
        $validation->setRules([
            'location_name' => 'required',
        ]);
        $isDataValid = $validation->withRequest($this->request)->run();
        
        // jika data valid, simpan ke database
        if($isDataValid){
            try {
                $M_activityItinerary = new ActivityItineraryModel();
                if($this->request->getPost('itinerary_id') !== null && $this->request->getPost('itinerary_id') !== ""){
                    // Data to be updated
                    $data = [
                        'activity_main_id' => $this->request->getPost('activity_main_id'),
                        'location_name' => $this->request->getPost('location_name'),
                        'descriptions' => $this->request->getPost('descriptions'),
                        'idx' => $this->request->getPost('idx'),
                        'last_update' => date("Y-m-d H:i:s"),
                    ];

                    // Insert the data and get the last inserted ID
                    $M_activityItinerary->update($this->request->getPost('itinerary_id'), $data);

                    $result = [
                        'status'  => 'success',
                        'message' => 'Data processed successfully',
                        'data'    => [
                            'pId' => $this->request->getPost('itinerary_id'),
                        ],
                    ];
                } else {
                    // Data to be inserted
                    $data = [
                        'activity_main_id' => $this->request->getPost('activity_main_id'),
                        'location_name' => $this->request->getPost('location_name'),
                        'descriptions' => $this->request->getPost('descriptions'),
                        'idx' => $this->request->getPost('idx'),
                        'reg_date' => date("Y-m-d H:i:s"),
                        'last_update' => date("Y-m-d H:i:s"),
                    ];

                    // Insert the data and get the last inserted ID
                    $lastInsertedID = $M_activityItinerary->insertData($data);

                    $result = [
                        'status'  => 'success',
                        'message' => 'Data processed successfully',
                        'data'    => [
                            'pId' => $lastInsertedID,
                        ],
                    ];
                }
            } catch (\Exception $e) {
                echo $e;
                
                $result = [
                    'status'  => 'failed',
                    'message' => $e,
                    'data'    => [],
                ];
                // Handle database-related exception
            }
        } else {
            $result = [
                'status'  => 'failed',
                'message' => $validation->getErrors(),
                'data'    => [],
            ];
        }

        // Send the response as JSON
        return $this->response->setJSON($result);
    }
    

    public function getOptPrice() {
        $avaibility_id = $this->request->getGet('avaibility_id');
        
        $M_activityOptPrice = new ActivityOptionsPriceModel();

        $param = [
            'avaibility_id' => $avaibility_id,
        ];

        $data['data'] = $M_activityOptPrice->getByConditions($param, 'from', 'asc');
        $data['status'] = 'success';

        return $this->response->setJSON($data);

    }

    // ACTIVITY UPLOAD PHOTO
    public function upload()
    {
        $file = $this->request->getFile('file');
        $parentId = $this->request->getPost('parent_id');

        // Check if the file is uploaded successfully
        if ($file->isValid())
        {
            // Move the uploaded file to a writable directory
            $newName = $file->getRandomName();
            $file->move(ROOTPATH ."public/activity/uploads", $newName);

            // Insert image information into the database
            $data = [
                'activity_id' => $parentId,
                'name' => "activity_upload",
                'filename' => $newName,
                'file_path' => 'activity/uploads/'.$newName,
                'reg_date' => date("Y-m-d H:i:s"),
                'last_update' => date("Y-m-d H:i:s"),
            ];

            $M_upload = new ActivityPhotoModel();
            $M_upload->insert($data);

            return $this->response->setJSON(['status' => 'success']);
        }
        else
        {
            // Handle the error
            return $this->response->setStatusCode(500)->setJSON(['error' => $file->getErrorString()]);
        }
    }

    public function getUpload() {
        $parentId = $this->request->getGet('parent_id');

        $M_upload = new ActivityPhotoModel();

        $param = [
            'activity_id' => $parentId,
        ];

        $data['data'] = $M_upload->getUploadByConditions($param, 'last_update', 'DESC');
        $data['status'] = 'success';

        return $this->response->setJSON($data);
    }

    public function deletePhoto($id) {
        $result = '';
        $M_upload = new ActivityPhotoModel();

        if($M_upload->find($id)){
            $dataOld = $M_upload->getById($id);
            $fileName ="./".$dataOld->file_path;

            $data = $M_upload->deleteById($id);

            if($data !== false){
                if (file_exists($fileName)) {
                    unlink($fileName);
                } else {
                    // File not found.
                }
            }

            $result = [
                'status'  => 'success',
                'message' => 'Delete successfully',
            ];
        } else {
            $result = [
                'status'  => 'error',
                'message' => 'Data not found',
            ];
        }

        return $this->response->setJSON($result);
    }
}