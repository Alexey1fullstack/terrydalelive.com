

    "user strict";
    var create_project = function(){

        var create_p= $('#create_project');

        var submit_new_project = function(){
            $('#submit-project').click(function(e){
                console.log('sdfsd');
                e.preventDefault();
                var btn = $(this);
                var form = btn.closest('form');
                form.validate({
                    rules: {
                        project_name: {
                            required:true,

                        },
                        work_date:{
                            required:true,
                        },
                        start_time:{
                            required:true,
                        },
                        end__time:{
                            required: true,
                        },
                        break:{
                            required: true,
                            number:true,
                        },
                        overtime:{
                            required: true,
                            number:true,
                        },
                        breakdown:{
                            required: true,
                        },
                        worker:{
                            required: true,

                        },
                        hours:{
                            required: true,
                            number:true,
                        }
                    }
                })

                if (!form.valid()) {
                    return;
                }

                form.submit();


            });
        }

        //for timesheet

        var time_picker = function(){
            $('#kt_timepicker_2, #kt_timepicker_1').timepicker({
                minuteStep: 1,
                defaultTime: '',
                showSeconds: true,
                showMeridian: false,
                snapToStep: true
            });

        }

        var add_break = function(){
            $('#add_break').click(function(){
                _this = $('#break').val();
                if(_this == 1){
                    $('#break').val(0);
                }   else {
                    $('#break').val(1);
                }

            });
        }

        var add_overtime = function(){
            $('#add_overtime').click(function(){
                _this = $('#overtime').val();
                if(_this == 1){
                    $('#overtime').val(0);
                }   else {
                    $('#overtime').val(1);
                }

            });
        }

        return {
            init: function(){
                add_break();
                add_overtime();
                time_picker();
                submit_new_project();


            }
        };


    }();

    jQuery(document).ready(function(){
        create_project.init();
    });

    $('#project_id').select2({
        placeholder: "Select an Project Name",
        minimumResultsForSearch: Infinity
    });


$(function(){
    $(document).on('click','#add_labor',function(e){

    e.preventDefault();
    var repeater_group = $('#labor_section'),
    current_item = $(".labor_group").last(),
    number = current_item.find('.num-mark').text()/1+1,
    new_item = (current_item.clone()).appendTo(repeater_group);
    new_item.find('input').val('');
    //console.log(new_item.find('.num-mark').first().html())
    new_item.find('.num-mark').first().html(number);
    //$(this).closest('.repeater-item').find('.add-item').remove();
    //new_item.find('.add-item').remove();
    }).on('click','#remove_labor',function(e){
    if($('.labor_group').length != 1){
        e.preventDefault();
        $('.labor_group').last().remove();

        }
        return false;

    })

})
