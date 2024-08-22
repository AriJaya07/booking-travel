<?= $this->extend('admin/layout/admin_layout') ?>

<?= $this->section('content') ?>

<?php
  $id = isset($activity_records["id"]) ? $activity_records["id"] : "";
  $category_id = isset($activity_records["category_id"]) ? $activity_records["category_id"] : "";
  $title = isset($activity_records["title"]) ? $activity_records["title"] : "";
  $introduce = isset($activity_records["introduce"]) ? $activity_records["introduce"] : "";
  $description = isset($activity_records["description"]) ? $activity_records["description"] : "";
  $highlights = isset($activity_records["highlights"]) ? json_decode($activity_records["highlights"], true) : [];
  $inclusions = isset($activity_records["inclusions"]) ? json_decode($activity_records["inclusions"], true) : [];
  $exclusions = isset($activity_records["exclusions"]) ? json_decode($activity_records["exclusions"], true) : [];
  $guide_info_id = isset($activity_records["guide_info_id"]) ? $activity_records["guide_info_id"] : "";
  $important_information = isset($activity_records["important_information"]) ? $activity_records["important_information"] : "";
  $reg_date = isset($activity_records["reg_date"]) ? $activity_records["reg_date"] : "";
  $last_update = isset($activity_records["last_update"]) ? $activity_records["last_update"] : "";
?>

<section class="content-header">
    <div class="container-fluid">
    <div class="row mb-2">
        <div class="col-sm-6">
        <h1>New Product</h1>
        </div>
    </div>
    </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<div class="content">
    <div class="container-fluid">
      <div class="row">
          <div class="col-md-12">
            <div class="card card-default">
              <div class="card-header">
                <h3 class="card-title"></h3>
              </div>
              <div class="card-body">                
                <div class="row">
                  <div class="col-md-12">
                    <div class="bs-stepper">
                      <div class="bs-stepper-header" style="max-width: 100%;" role="tablist">
                        <!-- your steps here -->
                        <div class="step" data-target="#details-part">
                          <button type="button" class="step-trigger" role="tab" aria-controls="details-part" id="details-part-trigger">
                            <span class="bs-stepper-circle">1</span>
                            <span class="bs-stepper-label">Product Detail</span>
                          </button>
                        </div>
                        <div class="line"></div>
                        <div class="step" data-target="#upload-part">
                          <button type="button" class="step-trigger" role="tab" aria-controls="upload-part" id="upload-part-trigger">
                            <span class="bs-stepper-circle">2</span>
                            <span class="bs-stepper-label">Photo Upload</span>
                          </button>
                        </div>
                        <div class="line"></div>
                        <div class="step" data-target="#option-part">
                          <button type="button" class="step-trigger" role="tab" aria-controls="option-part" id="option-part-trigger">
                            <span class="bs-stepper-circle">3</span>
                            <span class="bs-stepper-label">Option Setup</span>
                          </button>
                        </div>
                        <div class="line"></div>
                        <div class="step" data-target="#itinerary-part">
                          <button type="button" class="step-trigger" role="tab" aria-controls="itinerary-part" id="itinerary-part-trigger">
                            <span class="bs-stepper-circle">4</span>
                            <span class="bs-stepper-label">Itinerary</span>
                          </button>
                        </div>
                      </div>
                      <div class="bs-stepper-content">
                        <!-- your steps content here -->
                        <div id="details-part" class="content" role="tabpanel" aria-labelledby="details-part-trigger">
                        <div class="row">
                        <div class="col-12">
                            <form method="post" id="formActivityMain">
                                <input type="hidden" name="main_id" id="main_id" class="form-control" value="<?= $id ?>">
                                <!--?= csrf_field() ?-->
                                <!-- CSRF Token -->
                                <input type="hidden" name="<?= csrf_token() ?>" value="<?= csrf_hash() ?>">
                                <div class="form-group">
                                    <label for="category_id">Category</label>
                                    <select class="custom-select" id="category_id" name="category_id">
                                        <?php 
                                        foreach($category_records as $category) {
                                          if($category_id == $category['id']) {
                                            echo '<option value="'.$category['id'].'" selected>'.$category['name'].'</option>';
                                          } else {
                                            echo '<option value="'.$category['id'].'">'.$category['name'].'</option>';
                                          }
                                        }
                                        ?>        
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="title">Title</label>
                                    <input type="text" name="title" id="title" class="form-control" value="<?= $title ?>" required>
                                </div>
                                <div class="form-group">
                                    <label>Introduce</label>
                                    <textarea name="introduce" id="introduce"  rows="3" class="form-control" required><?= $introduce ?></textarea>
                                </div>
                                <div class="form-group">
                                    <label>Description</label>
                                    <textarea name="description" id="description"  rows="5" class="form-control" required><?= $description ?></textarea>
                                </div>                            
                                <div class="form-group">
                                  <label>Highlights</label>
                                  <div class="select2-purple">
                                      <select name="highlights[]" id="highlights" class="select2" multiple="multiple" data-placeholder="Select a Highlight" data-dropdown-css-class="select2-purple" style="width: 100%;">
                                        <?php                                      
                                          foreach($highlights as $highlight) {
                                            $isSelected = in_array($highlight, $highlights) ? 'selected' : '';
                                            echo "<option value=\"$highlight\" $isSelected>$highlight</option>";
                                          }
                                        ?>
                                      </select>
                                  </div>
                                </div>
                                <div class="form-group">
                                  <label>Inclusions</label>
                                  <div class="select2-purple">
                                      <select name="inclusions[]" id="inclusions" class="select2" multiple="multiple" data-placeholder="Select a Inclusions" data-dropdown-css-class="select2-purple" style="width: 100%;">
                                        <?php                                      
                                          foreach($inclusions as $inclusion) {
                                            $isSelected = in_array($inclusion, $inclusions) ? 'selected' : '';
                                            echo "<option value=\"$inclusion\" $isSelected>$inclusion</option>";
                                          }
                                        ?>
                                      </select>
                                  </div>
                                </div>
                                <div class="form-group">
                                  <label>Exclusions (optional)</label>
                                  <div class="select2-purple">
                                      <select name="exclusions[]" id="exclusions" class="select2" multiple="multiple" data-placeholder="Select a Exclusions" data-dropdown-css-class="select2-purple" style="width: 100%;">
                                        <?php                                      
                                          foreach($exclusions as $exclusion) {
                                            $isSelected = in_array($exclusion, $exclusions) ? 'selected' : '';
                                            echo "<option value=\"$exclusion\" $isSelected>$exclusion</option>";
                                          }
                                        ?>
                                      </select>
                                  </div>
                                </div>
                                <div class="form-group">
                                    <label for="guide_info_id">Guide Info</label>
                                    <select class="custom-select" id="guide_info_id" name="guide_info_id">
                                        <?php 
                                        foreach($guideinfo_records as $guideinfo) {
                                            echo '<option value="'.$guideinfo['id'].'">'.$guideinfo['name'].'</option>';
                                        }
                                        ?>        
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Important Information</label>
                                    <textarea name="important_information" id="important_information"  rows="5" class="form-control textarea" required><?= $important_information ?></textarea>
                                </div>
                            </form>
                            <div style="text-align: right;">
                                <button class="btn btn-primary" id="btnNextUpload">Next</button>
                            </div>
                            </div>
                            </div>
                        </div>
                        <div id="upload-part" class="content" role="tabpanel" aria-labelledby="upload-part-trigger">
                          <div class="col-12">
                            <form  method="post" id="imageForm" enctype="multipart/form-data">
                              <div id="actions" class="row">
                                <div class="col-lg-6">
                                  <div class="btn-group w-100">
                                    <span class="btn btn-success col fileinput-button">
                                      <i class="fas fa-plus"></i>
                                      <span>Add Photo</span>
                                    </span>
                                  </div>
                                </div>
                              </div>
                              <div class="table table-striped files" id="previews">
                                <div id="template" class="row mt-2">
                                  <div class="col-auto">
                                      <span class="preview"><img src="data:," alt="" data-dz-thumbnail /></span>
                                  </div>
                                  <div class="col d-flex align-items-center">
                                      <p class="mb-0">
                                        <span class="lead" data-dz-name></span>
                                        (<span data-dz-size></span>)
                                      </p>
                                      <strong class="error text-danger" data-dz-errormessage></strong>
                                  </div>
                                  <div class="col-4 d-flex align-items-center">
                                      <div class="progress progress-striped active w-100" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0">
                                        <div class="progress-bar progress-bar-success" style="width:0%;" data-dz-uploadprogress></div>
                                      </div>
                                  </div>
                                </div>
                              </div>
                            </form>
                          </div>
                          <div class="col-12">
                            <div id="gallery_list" class="row">
                            </div>
                          </div>
                          <div class="col-12">
                            <button class="btn btn-primary" id="btnPreviousMain">Previous</button>
                            <button class="btn btn-primary float-right" id="btnNextOption">Next</button>
                          </div>
                        </div>
                        <div id="option-part" class="content" role="tabpanel" aria-labelledby="option-part-trigger">
                          <div class="row">
                            <div class="col-12">
                              <button class="btn btn-success btnAddEditOption" data-id="0" id="btnAddOption">Add Option</button>
                            </div>
                          </div>                      
                          <div id="options_list" class="row">
                          </div>
                          <div class="col-12 mt-2">
                            <button class="btn btn-primary" id="btnPreviousUpload">Previous</button>
                            <button class="btn btn-primary float-right" id="btnNextItinerary">Next</button>
                          </div>
                        </div>
                        <div id="itinerary-part" class="content" role="tabpanel" aria-labelledby="itinerary-part-trigger">
                          <div class="row">
                            <div class="col-md-12">
                              <div class="form-group">
                                <label>
                                  Itinerary List
                                  &nbsp;
                                  <a class="btn btn-outline-primary btn-xs" id="btn_add_itinerary">
                                      <i class="fas fa-plus"></i>
                                  </a>
                                </label>
                                <table class="table table-bordered">
                                  <thead>
                                    <tr>
                                      <th>Location</th>
                                      <th style="width:25px">Idx</th>
                                      <th style="width:20px"></th>
                                    </tr>
                                  </thead>
                                  <tbody id="itinerary_table_data">
                                  </tbody>
                                </table>
                              </div>
                            </div>
                          </div>
                          
                          <div class="col-12 mt-2">
                            <button class="btn btn-primary" id="btnPreviousOption">Previous</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- /.card -->
          </div>
        </div>
    <!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content -->

<div class="modal fade" id="modal_option" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-backdrop="false" data-keyboard="false">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h4 id="modal-xl-title" class="modal-title">Option Detail</h4>
        <button type="button" class="close" id="btn_modal_option" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" id="modal_option_form">
        <form class="form-horizontal" id="formActivityOptions">
          <input name='option_id' id='option_id' class='form-control' type='hidden' value=''>

          <div class="row">
            <div class="col-12">
              <div class="row">
                <div class="col-5 col-sm-3">
                  <div class="nav flex-column nav-tabs h-100" id="vert-tabs-tab" role="tablist" aria-orientation="vertical">
                    <a class="nav-link active" id="setup-tab" data-toggle="pill" href="#tabs-setup" role="tab" aria-controls="tabs-setup" aria-selected="true">Option setup</a>
                    <a class="nav-link" id="meetingpoint-tab" data-toggle="pill" href="#tab-meetingpoint" role="tab" aria-controls="tab-meetingpoint" aria-selected="false">Meeting Point</a>
                    <a class="nav-link" id="price-tab" data-toggle="pill" href="#tab-price" role="tab" aria-controls="tab-price" aria-selected="false">Availability & Pricing</a>
                  </div>
                </div>
                <div class="col-7 col-sm-9">
                  <div class="tab-content" id="vert-tabs-tabContent">
                    <div class="tab-pane text-left fade show active" id="tabs-setup" role="tabpanel" aria-labelledby="setup-tab">
                      <div class="form-group">
                        <label>Title</label>
                        <input name='title' id='title' type="text" class="form-control">
                      </div>
                      <label>Activity setup</label>
                      <div class="form-group">
                        <label>What languages does the guide speak during the activity? Choose all that apply.</label>
                        <div class="select2-purple select-lang">
                          <select name="languages[]" id="languages" class="select2-wotag" multiple="multiple" data-placeholder="Select a Language" data-dropdown-css-class="select2-purple" style="">
                            <option value='Indonesian'>Indonesian</option>
                            <option value='English'>English</option>
                          </select>
                        </div>
                      </div>
                      <div class="form-group">
                        <label>Is this a private activity?</label>
                        <select name="private" id="private" class="form-control" style="width: 100%;">
                          <option value='0'>No</option>
                          <option value='1'>Yes</option>
                        </select>
                      </div>
                      <div class="form-group">
                        <label>Maximum group size </label>
                        <select name="group_size" id="group_size" class="form-control" style="width: 100%;">
                          <option value='0'>select</option>
                          <?php
                          for($i=1; $i<=100; $i++){
                            echo "<option value='".$i."'>".$i."</option>";
                          }
                          ?>
                        </select>
                      </div>
                      <label>What guide materials do you provide? Choose all that apply.</label>
                      <div class="form-group"> 
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" name="is_audio_guide" id="is_audio_guide" value="1">
                          <label class="form-check-label">Audio guides and headphones</label>
                        </div>
                        <div id="clss-audio_guide" class="select2-purple sel-hidden">
                          <select name="audio_guide[]" id="audio_guide" class="select2-wotag" multiple="multiple" data-placeholder="Select a Language" data-dropdown-css-class="select2-purple" style="">
                            <option value='Indonesian'>Indonesian</option>
                            <option value='English'>English</option>
                          </select>
                        </div>
                      </div>
                      <div class="form-group">                      
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" name="is_info_booklets" id="is_info_booklets" value="1">
                          <label class="form-check-label">Information booklets</label>
                        </div>
                        <div id="clss-info_booklets" class="select2-purple sel-hidden">
                          <select name="info_booklets[]" id="info_booklets" class="select2-wotag" multiple="multiple" data-placeholder="Select a Language" data-dropdown-css-class="select2-purple" style="">
                            <option value='Indonesian'>Indonesian</option>
                            <option value='English'>English</option>
                          </select>
                        </div>
                      </div>
                      <label>Time and length</label>
                      <div class="form-group">
                        <label>Which best describes your activity? </label>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="is_time_length" id="time_duration" value="1">
                          <label class="form-check-label">It lasts for a specific amount of time (duration)</label>
                        </div>
                        <div id="duration_opt" class="input-group sel-hidden">
                          <div class="input-group-prepend">
                            <span class="input-group-text">
                              <input name='time_duration_val' id='time_duration_val' type="number" class="form-control" style="width: 40%;">
                              
                              <select name="time_duration_type" id="time_duration_type" class="form-control" style="width: 60%;">
                                <option value='0'>Select</option>
                                <option value='Minute'>Minute(s)</option>
                                <option value='Hour'>Hour(s)</option>
                                <option value='Day'>Day(s)</option>
                              </select>
                            </span>
                          </div>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="is_time_length" id="time_validity" value="2">
                          <label class="form-check-label">Customers can use their ticket anytime during a certain period (validity)</label>
                        </div>
                        <div id="valid_opt" class="form-group sel-hidden">
                          <select name="time_validity_val" id="time_validity_val" class="form-control">
                            <option value='0'>Select</option>
                            <option value='Valid for a period of time from date booked'>Valid for a period of time from date booked</option>
                            <option value='Valid for a period of time from first activation'>Valid for a period of time from first activation</option>
                            <option value='Valid on the date booked'>Valid on the date booked</option>
                          </select>
                        </div>
                      </div>
                      <label>Confirming bookings and cut-off time </label>
                      <div class="form-group">
                        <label> How far in advance do you stop accepting new bookings before the activity starts?</label>
                        <select name="stop_accept_time" id="stop_accept_time" class="form-control">
                          <option value='0'>Select</option>
                          <?php
                            $j=1;

                            for($i=0; $i<100; $i++){
                              if($i<=90){
                                if($i>0 && $i<90) {
                                  $i+=4;
                                }
                                echo "<option value='".$i." Minutes'>".$i." Minutes</option>";
                              } else {
                                $j+=1;
                                echo "<option value='".$j." Hours'>".$j." Hours</option>";
                              }
                            }
                          ?>
                        </select>
                      </div>
                      <div class="group-btn">
                        <button type="button" class="btn btn-info float-right" id="btn_opt_setup">Save</button>
                      </div>
                    </div>
                    <div class="tab-pane fade" id="tab-meetingpoint" role="tabpanel" aria-labelledby="meetingpoint-tab">
                      <div class="form-group">
                        <label>Meeting point</label>
                        <input name='meeting_point' id='meeting_point' type="text" class="form-control">
                      </div>
                      <div class="form-group">
                        <label>Map Link</label>
                        <input name='meeting_point_maplink' id='meeting_point_maplink' type="text" class="form-control">
                      </div>
                      <div class="form-group">
                        <label>Describe the meeting point</label>
                        <textarea name='describe_point' id='describe_point' class="form-control" rows="3"></textarea>
                      </div>
                      <div class="form-group">
                        <label>How early do customers need to arrive so that the activity can start on time? </label>
                        <select name="time_before_activity" id="time_before_activity" class="form-control">
                          <option value='0'>Select</option>
                          <option value='Not relevant for this activity'>Not relevant for this activity</option>
                          <?php
                            for($i=5; $i<=30; $i+=5){
                              echo "<option value='".$i." m'>".$i." minutes before the activity</option>";
                            }
                          ?>
                        </select>
                      </div>
                      <div class="group-btn">
                        <button type="button" class="btn btn-info float-right" id="btn_opt_meeting">Save</button>
                      </div>
                    </div>
                    <div class="tab-pane fade" id="tab-price" role="tabpanel" aria-labelledby="price-tab">
                      <input name='avail_id' id='avail_id' type="hidden" class="form-control">
                      <div class="form-group">
                        <label>Name your schedule</label>
                        <input name='schedule_name' id='schedule_name' type="text" class="form-control">
                      </div>
                      <div class="form-group">
                        <label>What’s the starting date of your activity? </label>
                        <div class="row">
                          <div class="col-md-6">
                            <div class="input-group">
                              <div class="input-group-prepend">
                                <span class="input-group-text">
                                  <i class="far fa-calendar-alt"></i>
                                </span>
                              </div>
                              <input type="text" class="form-control float-right datepicker" value="<?php echo date("m/d/Y"); ?>" name="schedule_start_date" id="schedule_start_date">
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="input-group hide-enddate" style="display: none;">
                              <div class="input-group-prepend">
                                <span class="mr-2">To</span>
                                <span class="input-group-text">
                                  <i class="far fa-calendar-alt"></i>
                                </span>
                              </div>
                              <input type="text" class="form-control float-right datepicker" value="<?php echo date("m/d/Y"); ?>" name="schedule_end_date" id="schedule_end_date">
                            </div>
                          </div>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" name="schedule_chk" id="schedule_chk" value="1">
                          <label class="form-check-label">My activity has an end date </label>
                        </div>
                      </div>
                      <div class="form-group">
                        <label>How many participants can you take per time slot? </label>
                        <div class="row">
                          <div class="col-md-6">
                            <div class="input-group">
                              <input name='schedule_minpax' id='schedule_minpax' type="text" class="form-control" placeholder="Min">
                              <input name='schedule_maxpax' id='schedule_maxpax' type="text" class="form-control" placeholder="Max">
                            </div>
                          </div>
                        </div>
                      </div>
                      <div id="schedule_view" class="sel-hidden">
                        <div class="form-group">
                          <label>Schedule</label>
                          <table class="table table-bordered">
                            <thead>
                              <tr>
                                <th style="width:25px">Day</th>
                                <th>Time Slot</th>
                              </tr>
                            </thead>
                            <tbody>
                              <?php
                                $days = ["mon", "tue", "wed", "thu", "fri", "sat", "sun"];

                                for($i=0;$i<count($days);$i++){
                                  echo '
                                    <tr>
                                      <td>
                                        '.ucfirst($days[$i]).'
                                      </td>
                                      <td>
                                        <div class="row input-timeslot" id="time_'.$days[$i].'">
                                        </div>
                                        <input name="timeslot_id_'.$days[$i].'" id="timeslot_id_'.$days[$i].'" type="hidden" class="form-control">
                                        <button type="button" class="btn btn-block btn-outline-info btn-sm" data-type="'.$days[$i].'" onclick="addTimeSlot(this)" style="width:100px">Add time slot</button>
                                      </td>
                                    </tr>
                                  ';
                                }
                              ?>
                            </tbody>
                          </table>
                        </div>
                        <div class="form-group">
                            <label>Set the price for your activity</label>
                            <table class="table table-bordered">
                              <thead>
                                <tr>
                                  <th>Price per participant</th>
                                  <th>Customer pays</th>
                                  <th></th>
                                </tr>
                              </thead>
                              <tbody id="price_table">
                                <!-- <form method="post" id="form_opt_price">
                                </form> -->
                              </tbody>
                            </table>
                        </div>
                      </div>
                      <div class="group-btn">
                        <button type="button" class="btn btn-info float-right" id="btn_opt_avail">Save</button>
                      </div>
                    </div>
                    <div class="tab-pane fade" id="tab-schedule" role="tabpanel" aria-labelledby="schedule-tab">
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </form>
      </div>
      <!-- <div class="modal-footer">
          <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
          <button type="submit" class="btn btn-info priv-save" id="btngeneralform">Save</button>
      </div> -->
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>

<div class="modal fade" id="modal_addedit_itinerary" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-backdrop="false" data-keyboard="false">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 id="modal-itinerary-title" class="modal-title">Add Itinerary</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-12">
            <form method="post" id="formActivityIniterary">
              <div class="form-group">
                <label>Location</label>
                <input name='itinerary_id' id='itinerary_id' type="hidden" class="form-control">
                <input name='location_name' id='location_name' type="text" class="form-control">
              </div>
              <div class="form-group">
                <label>Describe Location</label>
                <textarea name='descriptions' id='descriptions' class="form-control" rows="3"></textarea>
              </div>
              <div class="form-group">
                <label>Position Number</label>
                <input name='idx' id='idx' type="number" class="form-control">
              </div>
            </form>
          </div>
        </div>
      </div>
      <div class="modal-footer">
          <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
          <button class="btn btn-primary float-right" id="btn_save_itinerary">Save</button>
      </div>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>

<?= $this->endSection() ?>