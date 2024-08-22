<?php
$csrf_token = csrf_hash();
?>

<script>
    function generateOptionHour(selected) {
        hour = ''
        for(i=0;i<=23;i++) {
            value = i.toString().padStart(2, '0')

            if(value === selected) {
                hour+= `
                    <option value="${value}" selected>${value}</option>
                `;
            } else {                    
                hour+= `
                    <option value="${value}">${value}</option>
                `;
            }
        }

        return hour
    }

    function generateOptionMinutes(selected) {
        minutes = ''

        for(i=0;i<=55;i+=5) {
            value = i.toString().padStart(2, '0')

            if(value === selected) {
                minutes+= `
                    <option value="${value}" selected>${value}</option>
                `;
            } else {                    
                minutes+= `
                    <option value="${value}">${value}</option>
                `;
            }
        }

        return minutes
    }

    function addTimeSlot(button) {
        type = $(button).data("type")

        hour="";
        minutes="";

        hour = generateOptionHour('');
        minutes = generateOptionMinutes('');

        $("#time_"+type).append(
                `<div class="col-lg-3 mb-1">
                    <div class="input-group input-group-sm">
                        <select name="time_hour_${type}[]" data-type="${type}" onchange="saveTimeSlot(event, this)" class="form-control">
                        ${hour}
                        </select>
                        &nbsp; : &nbsp;                                            
                        <select name="time_minutes_${type}[]" data-type="${type}" onchange="saveTimeSlot(event, this)" class="form-control">
                            ${minutes}
                        </select>
                        <span class="input-group-append">
                            <div class="btn btn-info btn-sm" onclick="delTime(this)"><i class="info fas fa-trash"></i></div>
                        </span>
                    </div>
                </div>`
            )
    }

    function saveTimeSlot(event, select) {
        type = $(select).data("type")
        let values = [];
        // Get all select elements with name 'time_hour[]'
        const selects_hour = document.querySelectorAll('select[name="time_hour_'+type+'[]"]');
        const selects_minutes = document.querySelectorAll('select[name="time_minutes_'+type+'[]"]');

        for(let i=0; i < selects_hour.length; i++) {
            let time = selects_hour[i].value + ':' + selects_minutes[i].value;

            values.push(time)
        }

        avail_id = $("#avail_id").val()
        timeslot_id = $("#timeslot_id_"+type).val()

        $.ajax({
            type: 'POST',
            url: '<?= base_url() ?>admin/product/saveOptionsTimeslot', // Update with your server-side processing script
            data: {
                avaibility_id:avail_id,
                timeslot_id:timeslot_id,
                days:type,
                time_slot:values,
            },
            success: function(response) {
                if (response.status === 'success') {
                    $("#timeslot_id_"+type).val(response.data.pId)
                    // refreshCSRFToken()
                } else {
                    // Handle error response
                    console.error(response.message["title"]);
                }
            },
            error: function(xhr, status, error) {
                // Handle AJAX request error
                console.error(error);
            }
        });
    }

    function delTime(e) {
        type = $(e).data('type')
        idx = $(e).data('idx')

        $(`.time_hour_${type}_${idx}`).remove()
    }

    function addTierPrice(button) {
        // countBefore = $('.class-form-price').length;
        minPax = Number($('form#formActivityOptions #schedule_minpax').val())
        maxPax = Number($('form#formActivityOptions #schedule_maxpax').val())

        status = $(button).data("stat")

        html = '';

        if(status !== 'add') {
            $.get('<?= base_url('admin/getOptPrice') ?>?avaibility_id='+$('form#formActivityOptions #avail_id').val(), function(response) {
                data = response.data;

                if(data.length>0) {
                    for(i=0; i<data.length; i++) {
                        if(i<data.length-1) {
                            toInput = `<input name='participants_to[]' id='participants_to_${i}' data-n="${i}" type="text" value="${data[i].to}" onchange="changePax(this)" class="form-control">`;
                        } else {
                            toInput = `${data[i].to}`;
                        }

                        html += `<tr>
                                <td>  
                                    <div class="row class-form-price">
                                        <input name='price_id[]' type="hidden" value="${data[i].id}" class="form-control">
                                        <input name='from[]' id="from_${i}" type="hidden" value="${data[i].from}" class="form-control">
                                        <input name='to[]' id="to_${i}" type="hidden" value="${data[i].to}" class="form-control">
                                        <input name='price_type[]' type="hidden" value="${data[i].price_type}" class="form-control">
                                        <label><span class="min-pax-${i}">${data[i].from}</span>&nbsp;to&nbsp;<span class="max-pax-${i}">${toInput}</span></label>
                                    </div>
                                </td>
                                <td>
                                    <div class="input-group">
                                        <input name='cust_pays[]' type="text" value="${data[i].cust_pays}" class="form-control">&nbsp;IDR
                                    </div>
                                </td>
                                <td>
                                    <button type="button" data-stat="add" onclick="addTierPrice(this)" class="btn btn-block btn-outline-info btn-sm"><i class="fas fa-plus"></i> Tier Price</button>
                                </td>
                            </tr>`
                    }
                } else {
                    html += `
                    <tr>
                        <td>  
                            <div class="row class-form-price">
                                <input name='price_id[]' type="hidden" value="0" class="form-control">
                                <input name='from[]' id="from_${0}" type="hidden" value="${minPax}" class="form-control">
                                <input name='to[]' id="to_${0}" type="hidden" value="${maxPax}" class="form-control">
                                <input name='price_type[]' type="hidden" value="everyone" class="form-control">
                                <label><span class="min-pax-0">${minPax}</span> to <span class="max-pax-0">${maxPax}</span></label>
                            </div>
                        </td>
                        <td>
                            <div class="input-group">
                                <input name='cust_pays[]' type="text" class="form-control">&nbsp;IDR
                            </div>
                        </td>
                        <td>
                            <button type="button" data-stat="add" onclick="addTierPrice(this)" class="btn btn-block btn-outline-info btn-sm"><i class="fas fa-plus"></i> Tier Price</button>
                        </td>
                    </tr>`
                }

                $('#price_table').html(html)
            });
        } else {
            count = $('.class-form-price').length;
            lastNum = Number(count-1);
            lastFrom = Number($('#from_'+(lastNum)).val())

            $('.max-pax-'+(lastNum)).html(
                `<input name='participants_to[]' id='participants_to_${lastNum}' data-n="${lastNum}" type="text" value="${lastFrom}" onchange="changePax(this)" class="form-control">`
            )
            $('#to_'+(lastNum)).val(lastFrom)

            $('#price_table').append(
                `<tr>
                    <td>  
                        <div class="row class-form-price">
                            <input name='price_id[]' type="hidden" value="0" class="form-control">
                            <input name='from[]' id="from_${count}" type="hidden" value="${lastFrom+1}" class="form-control">
                            <input name='to[]' id="to_${count}" type="hidden" value="${maxPax}" class="form-control">
                            <input name='price_type[]' type="hidden" value="everyone" class="form-control">
                            <label><span class="min-pax-${count}">${lastFrom+1}</span> to <span class="max-pax-${count}">${maxPax}</span></label>
                        </div>
                    </td>
                    <td>
                        <div class="input-group">
                            <input name='cust_pays[]' type="text" class="form-control">&nbsp;IDR
                        </div>
                    </td>
                    <td>
                        <button type="button" data-stat="add" onclick="addTierPrice(this)" class="btn btn-block btn-outline-info btn-sm"><i class="fas fa-plus"></i> Tier Price</button>
                    </td>
                </tr>`
            )
        }
    }

    function changePax(e) {
        count = $('.class-form-price').length;
        minPax = Number($('form#formActivityOptions #schedule_minpax').val())
        maxPax = Number($('form#formActivityOptions #schedule_maxpax').val())


        n = $(e).data('n')

        this_min = Number($('.min-pax-'+(n)).text())
        this_max = Number(e.value)

        if(this_max < this_min) {
            alert(`Number can't be less then from`)
            $('#participants_to_'+n).val(this_min)
        } else if(this_max > (maxPax-1)) {
            alert(`Number must be less than max pax`)
            $('#participants_to_'+n).val(this_min)
        } else {
            for(i=n; i<count; i++) {
                num = i+1
                value = Number($('#participants_to_'+i).val())
                if(num !== 0) {
                    $('.min-pax-'+(num)).html(value+1)
                    $('#from_'+(num)).val(value+1)
                    if(num == (count-1)) {
                        $('.max-pax-'+(num)).html(maxPax)
                        $('#to_'+(num)).val(maxPax)
                    } else {
                        // $('.max-pax-'+(num)).html(value+1)
                        $('#to_'+(n)).val(this_max)
                        $('#participants_to_'+num).val(value+1)
                    }
                }
            }
        }
    }

    $(document).ready(function() {
        var csrfToken = "<?php echo $csrf_token; ?>";

        /** init function */
        $('.textarea').summernote()
        // BS-Stepper Init
        var stepper = new Stepper($('.bs-stepper')[0])

        $('[data-toggle="tooltip"]').tooltip()
        
        // Select2
        $('.select2').select2({
            tags: true,  // Enable tagging (to add new options)
        });

        $('.select2-wotag').select2();

        /** init function */

        var timeslotForm = $('#schedule_view');
        // timeslotForm.addClass('sel-hidden');
        

        var $modalOptionForm = $('#modal_option_form'); // Cache the selector
        var initialFormOption = $modalOptionForm.html(); // Store the initial HTML content

        $("#btnPreviousMain").click(function(){
            stepper.previous()
        })

        $("#btnPreviousUpload").click(function(){
            stepper.previous()
        })

        $("#btnPreviousOption").click(function(){
            stepper.previous()
        })

        select2Multiple("highlights")
        select2Multiple("inclusions")
        select2Multiple("exclusions")

        function select2Multiple(id) {
            // Listen for the select2:opening event
            $('#'+id).on('select2:opening', function(e) {
                var highlightedText = $('.select2-search__field').val();

                if (e.keyCode === 13 && highlightedText.trim() !== '') {
                    // Prevent the default behavior of Enter key
                    e.preventDefault();

                    // Check if the entered value already exists
                    if ($('#'+id).find('option:contains("' + highlightedText + '")').length === 0) {
                        // Add the new option
                        var newOption = new Option(highlightedText, highlightedText, true, true);
                        $('#'+id).append(newOption).trigger('change');
                    }
                }
            });

            // Listen for the select2:select event
            $('#'+id).on('select2:select', function (e) {
                // This event is triggered when an item is selected in the dropdown
                // You can handle this event if you need to perform any action when an item is selected
                // console.log('Selected:', e.params.data);
                // console.log('Selected:', $('#highlights').val());
            });
        }

        function disableBtn() {
            $('.btn').addClass('disabled')
        }
        function enableBtn() {
            $('.btn').removeClass('disabled')
        }

        $("#btnNextUpload").click(function(){
            disableBtn()
            // Serialize the form data
            var formData = $('#formActivityMain').serialize();

            // Send the form data using AJAX
            $.ajax({
                type: 'POST',
                url: '<?= base_url() ?>admin/product/save', // Update with your server-side processing script
                data: formData,
                success: function(response) {
                    if (response.status === 'success') {
                        $("#main_id").val(response.data.pId)
                        refreshCSRFToken()
                        uploadList()
                        enableBtn()
                        stepper.next()
                    } else {
                        // Handle error response
                        console.error(response.message["title"]);
                    }
                },
                error: function(xhr, status, error) {
                    // Handle AJAX request error
                    console.error(error);
                }
            });
        })

        $("#btnNextOption").click(function(){
            disableBtn()
            stepper.next()
            optionsList()
        })

        $("#btnNextItinerary").click(function(){
            stepper.next()
            itineraryList()

            $('#btn_add_itinerary').click(function(){
                document.getElementById("formActivityIniterary").reset();
                $('#modal_addedit_itinerary').modal('show');
            })
        })

        // DropzoneJS Demo Code Start
        Dropzone.autoDiscover = false

        // Get the template HTML and remove it from the doumenthe template HTML and remove it from the doument
        var previewNode = document.querySelector("#template")
        previewNode.id = ""
        var previewTemplate = previewNode.parentNode.innerHTML
        previewNode.parentNode.removeChild(previewNode)

        var myDropzone = new Dropzone(document.body, { // Make the whole body a dropzone
        url: "<?= base_url() ?>admin/product/upload", // Set the url
        thumbnailWidth: 80,
        thumbnailHeight: 80,
        parallelUploads: 20,
        previewTemplate: previewTemplate,
        autoQueue: true, // Make sure the files aren't queued until manually added
        previewsContainer: "#previews", // Define the container to display the previews
        clickable: ".fileinput-button" // Define the element that should be used as click trigger to select files.
        })

        myDropzone.on("sending", function(file, xhr, formData) {
            disableBtn()
            formData.append("csrf_test_name", ""+$('input[name="<?= csrf_token() ?>"]').val());
            formData.append("parent_id", $("#main_id").val());
        })

        // Hide the total progress bar when nothing's uploading anymore
        myDropzone.on("queuecomplete", function() {
            this.removeAllFiles();
            // document.querySelector("#total-progress").style.opacity = "0"
            refreshCSRFToken()
            uploadList()
            enableBtn()
        })

        function optionsList() {
            $.get('<?= base_url('admin/product/optionsList') ?>?parent_id='+$("#main_id").val(), function(response) {
                // console.log(response.data.length)
                data = response.data;
                print='';
                for(i=0; i<data.length; i++) {
                    // console.log(data[i].tittle)
                    print += `
                                    <div class="col-6 mt-2">
                                        <div class="card">
                                            <div class="card-header d-flex p-0">
                                                <h4 class="card-title p-3">${data[i].title}</h4>
                                                <ul class="nav nav-pills ml-auto p-2">
                                                <li class="nav-item dropdown">
                                                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">
                                                        <i class="fas fa-list"></i>
                                                    </a>
                                                    <div class="dropdown-menu">
                                                    <a class="dropdown-item btnAddEditOption" data-id="${data[i].id}">Edit</a>
                                                    <a class="dropdown-item btnDeleteOption" data-id="${data[i].id}">Delete</a>
                                                    </div>
                                                </li>
                                                </ul>
                                            </div><!-- /.card-header -->
                                            <div class="card-body">
                                                <div class="tab-content">
                                                    <p class="mt-2" style="font-weight:700;">Status <span class="text-success">${data[i].status}<span></p>
                                                </div>
                                                <!-- /.tab-content -->
                                            </div><!-- /.card-body -->
                                        </div>
                                    </div>
                    `;
                }

                $("#options_list").html(print)
                enableBtn()

                addeditoptions('.btnAddEditOption')

                $('.btnDeleteOption').click(function(e) {
                    disableBtn()
                    e.preventDefault();
                    option_id = $(this).data("id");
                    csrf_hash = $('input[name="<?= csrf_token() ?>"]').val()

                    $.ajax({
                        type: 'POST',
                        url: '<?= base_url('admin/deleteOption') ?>/' + option_id,
                        data: {
                            "<?= csrf_token() ?>": csrf_hash
                        },
                        success: function(response) {
                            if (response.status === 'success') {
                                alert(response.message);
                                optionsList()
                                refreshCSRFToken()
                                enableBtn()
                                // Optionally, you can remove the deleted product from the DOM
                                // $(this).closest('tr').remove();
                            } else {
                                alert(response.message);
                                enableBtn()
                            }
                        },
                        error: function(xhr, status, error) {
                            alert('Error: ' + error);
                        }
                    });
                })
            });
        }

        function uploadList() {
            $.get('<?= base_url('admin/product/getUpload') ?>?parent_id='+$("#main_id").val(), function(response) {
                data = response.data;
                print='';
                for(i=0; i<data.length; i++) {
                    print += `
                                <div class="col-sm-2">
                                    <a class="btn btn-danger btn-xs btn-del-img" data-id="${data[i].id}" style="position: absolute;left:80%;opacity:0.7">
                                        <i class="fas fa-trash"></i>
                                    </a>
                                    <a href="<?= base_url() ?>${data[i].file_path}" target="_blank" data-toggle="lightbox" data-title="sample 9 - red" data-gallery="gallery">
                                        <img src="<?= base_url() ?>${data[i].file_path}" class="img-fluid mb-2" alt="red sample"/>
                                    </a>
                                </div>
                    `;
                }

                $("#gallery_list").html(print)

                $('.btn-del-img').click(function(e) {
                    disableBtn()
                    e.preventDefault();
                    id = $(this).data("id");
                    csrf_hash = $('input[name="<?= csrf_token() ?>"]').val()

                    $.ajax({
                        type: 'POST',
                        url: '<?= base_url('admin/deletePhoto') ?>/' + id,
                        data: {
                            "<?= csrf_token() ?>": csrf_hash
                        },
                        success: function(response) {
                            if (response.status === 'success') {
                                alert(response.message);
                                uploadList()
                                refreshCSRFToken()
                                enableBtn()
                            } else {
                                alert(response.message);
                                enableBtn()
                            }
                        },
                        error: function(xhr, status, error) {
                            alert('Error: ' + error);
                        }
                    });
                })
            });
        }

        /** add option modal */
        addeditoptions = function(elementId){
            $(elementId).click(function(){   
                disableBtn()             
                optionsProperties();
                option_id = $(this).data("id");

                if(option_id !== 0) {
                    $.ajax({
                        type: 'GET',
                        url: '<?= base_url() ?>admin/product/showFormOptions', // Update with your server-side processing script
                        data: {id:option_id},
                        success: function(response) {
                            if (response.status === 'success') {
                                formActivityOptionsReset()

                                $('form#formActivityOptions #meetingpoint-tab').removeClass('disabled');
                                $('form#formActivityOptions #price-tab').removeClass('disabled');

                                $('form#formActivityOptions #option_id').val(response.data.id)
                                $('form#formActivityOptions #title').val(response.data.title)
                                
                                if(response.data.languages !== null) {
                                    gOptionSelect(response.data.languages, 'form#formActivityOptions #languages')
                                }

                                $('form#formActivityOptions #private').val(response.data.private)
                                $('form#formActivityOptions #group_size').val(response.data.group_size)
                                
                                if(response.data.is_audio_guide == "1") {
                                    $('form#formActivityOptions #is_audio_guide').prop('checked', true);
                                    $('form#formActivityOptions #clss-audio_guide').removeClass('sel-hidden');
                                }
                                gOptionSelect(response.data.audio_guide, 'form#formActivityOptions #audio_guide')

                                if(response.data.is_info_booklets == "1") {
                                    $('form#formActivityOptions #is_info_booklets').prop('checked', true);
                                    $('form#formActivityOptions #clss-info_booklets').removeClass('sel-hidden');
                                }
                                gOptionSelect(response.data.info_booklets, 'form#formActivityOptions #info_booklets')

                                $('form#formActivityOptions [name="is_time_length"][value="'+response.data.is_time_length+'"]').prop('checked', true);
                                if(response.data.is_time_length == '1') {
                                    $("form#formActivityOptions #duration_opt").removeClass('sel-hidden');
                                    data = response.data.time_duration_val.split(" ")
                                    $('form#formActivityOptions #time_duration_val').val(data[0])
                                    $('form#formActivityOptions #time_duration_type').val(data[1])
                                }
                                if(response.data.is_time_length == '2') {
                                    $("form#formActivityOptions #valid_opt").removeClass('sel-hidden');
                                    $('#time_validity_val').val(response.data.time_validity_val)
                                }
                                
                                $('form#formActivityOptions #stop_accept_time').val(response.data.stop_accept_time)

                                $('form#formActivityOptions #meeting_point').val(response.data.meeting_point)
                                $('form#formActivityOptions #meeting_point_maplink').val(response.data.meeting_point_maplink)
                                $('form#formActivityOptions #describe_point').val(response.data.describe_point)
                                $('form#formActivityOptions #time_before_activity').val(response.data.time_before_activity)

                                /** avaibility */
                                if (response && response.data && response.data.avaibility_data && response.data.avaibility_data.length > 0) {
                                    if (response.data.avaibility_data[0]) {
                                        avaibility_data = response.data.avaibility_data[0]

                                        $('form#formActivityOptions #avail_id').val(avaibility_data.id)
                                        $('form#formActivityOptions #schedule_name').val(avaibility_data.schedule_name)
                                        $('form#formActivityOptions #schedule_start_date').val(moment(avaibility_data.schedule_start_date).format("MM/DD/YYYY"))
                                        if(avaibility_data.schedule_end_date !== null) {
                                            $("#schedule_chk").prop('checked', true)
                                            $('.hide-enddate').css({
                                                'display': '' 
                                            });
                                            $('form#formActivityOptions #schedule_end_date').val(moment(avaibility_data.schedule_end_date).format("MM/DD/YYYY"))
                                        }
                                        
                                        $('form#formActivityOptions #schedule_minpax').val(avaibility_data.schedule_minpax)
                                        $('form#formActivityOptions #schedule_maxpax').val(avaibility_data.schedule_maxpax)

                                        timeslotForm.removeClass('sel-hidden');

                                        addTierPrice('')
                                    }
                                }

                                /** timeslot */
                                $('.input-timeslot').html('')

                                timeslot_data = response.data.timeslot_data
                                if (response && response.data && response.data.timeslot_data && response.data.timeslot_data.length > 0) {
                                    if (response.data.timeslot_data) {
                                        timeslot_data.forEach(function(element, index) {
                                            timeslot_id = element.id
                                            type = element.days
                                            time_slot = JSON.parse(element.time_slot)

                                            $('#timeslot_id_'+type).val(timeslot_id)

                                            time_slot.forEach(function(element, index) {
                                                hour = element.split(':')[0]
                                                minutes = element.split(':')[1]

                                                hour = generateOptionHour(hour);                                                
                                                minutes = generateOptionMinutes(minutes);

                                                $("#time_"+type).append(
                                                    `<div class="col-lg-3 mb-1 time_hour_${type}_${index}">
                                                        <div class="input-group input-group-sm">
                                                            <select name="time_hour_${type}[]" data-type="${type}" onchange="saveTimeSlot(event, this)" class="form-control">
                                                            ${hour}
                                                            </select>
                                                            &nbsp; : &nbsp;                                            
                                                            <select name="time_minutes_${type}[]" data-type="${type}" onchange="saveTimeSlot(event, this)" class="form-control">
                                                                ${minutes}
                                                            </select>
                                                            <span class="input-group-append">
                                                                <div class="btn btn-info btn-sm" data-type="${type}" data-idx="${index}" onclick="delTime(this)"><i class="info fas fa-trash"></i></div>
                                                            </span>
                                                        </div>
                                                    </div>`
                                                )
                                            })
                                        })
                                    }
                                }                              
                                
                                $('#modal_option').modal('show');
                                enableBtn()
                            } else {
                                // Handle error response
                                console.error(response.message);
                            }
                        },
                        error: function(xhr, status, error) {
                            // Handle AJAX request error
                            console.error(error);
                        }
                    });
                } else {
                    // formActivityOptionsReset()
                    resetModalForm();
                    
                    /** non active tab */
                    $('form#formActivityOptions .nav-link').removeClass('active');
                    $('form#formActivityOptions .tab-pane').removeClass('show active');
                    $('form#formActivityOptions .nav-link').addClass('disabled');
                    /** */

                    /** active tab setup */
                    $('form#formActivityOptions #setup-tab').removeClass('disabled');
                    $('form#formActivityOptions #setup-tab').addClass('active');
                    $('form#formActivityOptions #tabs-setup').addClass('show active');
                    /** */

                    $('#modal_option').modal('show');
                    enableBtn()
                }
                
            })
        }

        function formActivityOptionsReset(){
            $("form#formActivityOptions").trigger("reset");
            $('#clss-audio_guide').addClass('sel-hidden');
            $('#clss-info_booklets').addClass('sel-hidden');
            $("#duration_opt").addClass('sel-hidden');
            $("#valid_opt").addClass('sel-hidden');
        }

        function optionsProperties() {
            $("#is_audio_guide").change(function() {
                if (this.checked) {
                    $('#clss-audio_guide').removeClass('sel-hidden');
                } else {
                    $('#clss-audio_guide').addClass('sel-hidden');
                }
            })

            $("#is_info_booklets").change(function() {
                if (this.checked) {
                    // $("#info_booklets").prop("disabled",false);
                    $('#clss-info_booklets').removeClass('sel-hidden');
                } else {
                    $('#clss-info_booklets').addClass('sel-hidden');
                }
            })

            $("#time_duration").click(function(){
                $("#duration_opt").removeClass('sel-hidden');
                $("#valid_opt").addClass('sel-hidden');
            })

            $("#time_validity").click(function(){
                $("#valid_opt").removeClass('sel-hidden');
                $("#duration_opt").addClass('sel-hidden');
            })

            $("#schedule_chk").change(function() {
                if (this.checked) {
                    $('.hide-enddate').css({
                        'display': '' 
                    });
                } else {
                    $('.hide-enddate').css({
                        'display': 'none' 
                    });
                }
            })

            $('.datepicker').daterangepicker({
                parentEl: $('#modal_option'),
                singleDatePicker: true,
                showDropdowns: true,
            });

            /** save option setup */
            $("#btn_opt_setup").click(function() {
                disableBtn()
                option_id = $('form#formActivityOptions #option_id').val()

                if(option_id !== '' && option_id !== 0) {
                    var formData = $('#formActivityOptions').serializeArray();

                    // Send the form data using AJAX
                    $.ajax({
                        type: 'POST',
                        url: '<?= base_url() ?>admin/product/saveOptionsSetup', // Update with your server-side processing script
                        data: formData,
                        success: function(response) {
                            if (response.status === 'success') {
                                refreshCSRFToken()

                                /** to meetingpoint tab after success save */
                                $('form#formActivityOptions .nav-link').removeClass('active');
                                $('form#formActivityOptions .tab-pane').removeClass('active');
                                $('form#formActivityOptions #meetingpoint-tab').addClass('active');
                                $('form#formActivityOptions #tab-meetingpoint').addClass('show active');
                                enableBtn()
                                optionsList()
                            } else {
                                // Handle error response
                                console.error(response.message);
                            }
                        },
                        error: function(xhr, status, error) {
                            // Handle AJAX request error
                            console.error(error);
                        }
                    });
                } else {
                    var formData = $('#formActivityOptions').serializeArray();
                    formData.push({ name: 'activity_main_id', value: $("#main_id").val() });

                    // Send the form data using AJAX
                    $.ajax({
                        type: 'POST',
                        url: '<?= base_url() ?>admin/product/saveOptionsSetup', // Update with your server-side processing script
                        data: formData,
                        success: function(response) {
                            if (response.status === 'success') {
                                $("#option_id").val(response.data.pId)
                                refreshCSRFToken()

                                /** to meetingpoint tab after success save */
                                $('form#formActivityOptions .nav-link').removeClass('active');
                                $('form#formActivityOptions .tab-pane').removeClass('active');
                                $('form#formActivityOptions .nav-link').removeClass('disabled');
                                $('form#formActivityOptions #meetingpoint-tab').addClass('active');
                                $('form#formActivityOptions #tab-meetingpoint').addClass('show active');

                                enableBtn()
                                optionsList()

                            } else {
                                // Handle error response
                                console.error(response.message);
                            }
                        },
                        error: function(xhr, status, error) {
                            // Handle AJAX request error
                            console.error(error);
                        }
                    });
                }
            })

            $('#btn_opt_meeting').click(function() {
                disableBtn()
                var formData = $('#formActivityOptions').serializeArray();

                $.ajax({
                    type: 'POST',
                    url: '<?= base_url() ?>admin/product/saveOptionsMeetingPoint', // Update with your server-side processing script
                    data: formData,
                    success: function(response) {
                        if (response.status === 'success') {
                            refreshCSRFToken()

                            /** to price tab after success save */
                            $('form#formActivityOptions .nav-link').removeClass('active');
                            $('form#formActivityOptions .tab-pane').removeClass('active');
                            $('form#formActivityOptions #price-tab').addClass('active');
                            $('form#formActivityOptions #tab-price').addClass('show active');
                            enableBtn()
                        } else {
                            // Handle error response
                            response.message?.meeting_point ? alert(response.message?.meeting_point) : ''
                            response.message?.describe_point ? alert(response.message?.describe_point) : ''
                        }
                    },
                    error: function(xhr, status, error) {
                        // Handle AJAX request error
                        console.error(error);
                    }
                });
            })

            $('#btn_opt_avail').click(function() {
                disableBtn()
                var formData = $('#formActivityOptions').serializeArray();

                $.ajax({
                    type: 'POST',
                    url: '<?= base_url() ?>admin/product/saveOptionsAvaibility',
                    data: formData,
                    success: function(response) {
                        if (response.status === 'success') {
                            $("#avail_id").val(response.data.pId)
                            $('#schedule_view').removeClass('sel-hidden');
                            addTierPrice('')
                            refreshCSRFToken()
                            enableBtn()
                        } else {
                            // Handle error response
                            console.error(response.message);
                        }
                    },
                    error: function(xhr, status, error) {
                        // Handle AJAX request error
                        console.error(error);
                    }
                });
            })
        }

        function itineraryList() {
            $.get('<?= base_url('admin/getItinerary') ?>?activity_main_id='+$("#main_id").val(), function(response) {
                data = response.data;
                print='';
                for(i=0; i<data.length; i++) {
                    print += `
                            <tr>
                                <td>
                                    <strong>${data[i].location_name}</strong>
                                    <p class="text-muted">${data[i].descriptions}</p>
                                </td>
                                <td>${data[i].idx}</td>
                                <td>
                                    <a class="btn btn-xs btn-edit-itinerary" data-id="${data[i].id}">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <a class="btn btn-xs btn-del-itinerary" data-id="${data[i].id}">
                                        <i class="fas fa-trash"></i>
                                    </a>
                                </td>
                            </tr>
                    `;
                }

                $("#itinerary_table_data").html(print)

                $('.btn-edit-itinerary').click(function() {
                    itinerary_id = $(this).data("id");

                    $.get('<?= base_url('admin/showFormItinerary') ?>?itinerary_id='+itinerary_id, function(response) {
                        data = response.data;

                        $("form#formActivityIniterary #itinerary_id").val(data.id)
                        $("form#formActivityIniterary #location_name").val(data.location_name)
                        $("form#formActivityIniterary #descriptions").val(data.descriptions)
                        $("form#formActivityIniterary #idx").val(data.idx)
                        
                        $('#modal-itinerary-title').text('Edit Itinerary')
                        $('#modal_addedit_itinerary').modal('show');
                    });
                })
                
                $('.btn-del-itinerary').click(function(e) {
                    disableBtn()
                    e.preventDefault();
                    itinerary_id = $(this).data("id");
                    csrf_hash = $('input[name="<?= csrf_token() ?>"]').val()

                    $.ajax({
                        type: 'POST',
                        url: '<?= base_url('admin/deleteItinerary') ?>/' + itinerary_id,
                        data: {
                            "<?= csrf_token() ?>": csrf_hash
                        },
                        success: function(response) {
                            if (response.status === 'success') {
                                alert(response.message);
                                itineraryList()
                                refreshCSRFToken()
                                enableBtn()
                                // Optionally, you can remove the deleted product from the DOM
                                // $(this).closest('tr').remove();
                            } else {
                                alert(response.message);
                                enableBtn()
                            }
                        },
                        error: function(xhr, status, error) {
                            alert('Error: ' + error);
                        }
                    });
                })
            });
        }

        $('#btn_save_itinerary').click(function() {
            disableBtn()
            var formData = $('#formActivityIniterary').serializeArray();
                    formData.push({ name: 'activity_main_id', value: $("#main_id").val() });

            $.ajax({
                type: 'POST',
                url: '<?= base_url() ?>admin/product/saveItinerary', // Update with your server-side processing script
                data: formData,
                success: function(response) {
                    if (response.status === 'success') {
                        $('#modal_addedit_itinerary').modal('hide');
                        itineraryList()
                        refreshCSRFToken()
                        enableBtn()
                    } else {
                        // Handle error response
                        response.message?.location_name ? alert(response.message?.location_name) : ''
                        enableBtn()
                    }
                },
                error: function(xhr, status, error) {
                    // Handle AJAX request error
                    console.error(error);
                    enableBtn()
                }
            });
        })

        function gOptionSelect(sData, elementId) {
            var exclusions = JSON.parse(sData)
            var selectElement = document.querySelector(elementId);

            if(exclusions !== null) {
                exclusions.forEach(function(exclusion) {
                    var option = document.createElement('option');
                    option.value = exclusion;
                    if (exclusions.includes(exclusion)) {
                    option.selected = true;
                    }
                    option.textContent = exclusion;
                    selectElement.appendChild(option);
                });
            } else {
                selectElement.innerHTML = '';
            }
        }

        // Function to refresh CSRF token
        function refreshCSRFToken() {
            $.get('<?= base_url('admin/refreshCsrf') ?>', function(response) {
                // console.log(response.token)
                $('input[name="<?= csrf_token() ?>"]').val(response.token);
            });
        }
        
        
        // Function to reset the form to its initial state
        function resetModalForm() {
            $modalOptionForm.html(initialFormOption);
            bindFormEventHandlers()
        }

        
        function bindFormEventHandlers() {
            // Bind your event handlers here
            $('form#formActivityOptions .select2.select2-container.select2-container--default').remove();
            var $example = $('.select2-wotag').select2();
            $example.select2();
            optionsProperties()
        }    

        
        
    });
</script>
