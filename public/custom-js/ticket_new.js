
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
                    project_id: {
                        required:true,
                    },
                    ticket_subject:{
                        required:true,
                    },
                    ticket_num:{
                        number: true,
                        required:true,
                    },
                    start_date:{
                        required: true,
                    },
                    user_id:{
                        required: true,
                    },
                    end_date:{
                        required: true,
                    },
                    work_description: {
                        required: true,
                    },
                    photos: {
                        required: true,
                    },

                }
            })

            if (!form.valid()) {
                return;
            }

            form.submit();


        });
    }

    var new_client = function()
    {
        $('#new-client-btn').click(function(){
            var _this = $(this);
            var client_modal = $('#new_client');
            var form = _this.closest('form');
            var inputs = $('#new_client input');
            form.validate({
                rules:{
                    new_client_name:{
                        required:true,
                    },
                }
            })

            if(!form.valid()){
                return;
            }
            _this.addClass('kt-spinner kt-spinner--right kt-spinner--sm kt-spinner--light').attr('disabled', true);
            form.ajaxSubmit({
            url: "{{url('create_client')}}",
            success: function(response, status, xhr, $form) {
                // similate 2s delay
                if(response.success == 'true'){
                    swal.fire("New client has been created!", "Please use new client.","success");
                    _this.removeClass('kt-spinner kt-spinner--right kt-spinner--sm kt-spinner--light').attr('disabled', false);
                    client_modal.modal('hide');
                    form[0].reset();


                    //location.reload();
                } else {
                    swal.fire("The client existed with same name!","Please use another name.", "error");
                    _this.removeClass('kt-spinner kt-spinner--right kt-spinner--sm kt-spinner--light').attr('disabled', false);
                    client_modal.modal('hide');
                    form[0].reset();

                    // showErrorMsg(form, 'danger', 'Incorrect username or password. Please try again.');
                }
            },
            error: function() {

                    btn.removeClass('kt-spinner kt-spinner--right kt-spinner--sm kt-spinner--light').attr('disabled', false);
                    showErrorMsg(form, 'danger', 'Incorrect username or password. Please try again.');


            }
        });


        })

    }

    var file_change = function(){
        $('.fileupload-group input').change(function () {
            $('.fileupload-group p').text(this.files.length + " file(s) selected");
        });
    }

    var ticket_option = function(){
        $('#ticket_op').click(function(){
            _this = $('#ticket_option').val();
            if(_this == 1){
                $('#ticket_option').val(0);
            }   else {
                $('#ticket_option').val(1);
            }

        });
    }
    //public function
    return {
        init: function(){
            ticket_option();
            submit_new_project();
            new_client();
            file_change();
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
    $('#project_id').on('select2:select', function(e){
        var option = $('#project_id').find(':selected').attr('data-option');
        if(option == 1){
            $("#advanced_form").fadeIn();
        }  else {
            $("#advanced_form").fadeOut();
        }
    });


})




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

    }).on('click','#add_labor_des',function(e){

e.preventDefault();
var repeater_group = $('#labor_des_section'),
   current_item = $(".labor_des_group").last(),
 number = current_item.find('.num-mark').text()/1+1,
new_item = (current_item.clone()).appendTo(repeater_group);
new_item.find('input').val('');
//console.log(new_item.find('.num-mark').first().html())
new_item.find('.num-mark').first().html(number);
//$(this).closest('.repeater-item').find('.add-item').remove();
//new_item.find('.add-item').remove();
}).on('click','#remove_labor_des',function(e){
if($('.labor_des_group').length != 1){
    e.preventDefault();
$('.labor_des_group').last().remove();
}
return false;

}).on('click','#add_material',function(e){

e.preventDefault();
var repeater_group = $('#material_section'),
   current_item = $(".material_group").last(),
 number = current_item.find('.num-mark').text()/1+1,
new_item = (current_item.clone()).appendTo(repeater_group);
new_item.find('input').val('');
//console.log(new_item.find('.num-mark').first().html())
new_item.find('.num-mark').first().html(number);
//$(this).closest('.repeater-item').find('.add-item').remove();
//new_item.find('.add-item').remove();
}).on('click','#remove_material',function(e){
if($('.material_group').length != 1){
    e.preventDefault();
$('.material_group').last().remove();
}
return false;

}).on('click','#add_material_des',function(e){

e.preventDefault();
var repeater_group = $('#material_des_section'),
   current_item = $(".material_des_group").last(),
 number = current_item.find('.num-mark').text()/1+1,
new_item = (current_item.clone()).appendTo(repeater_group);
new_item.find('input').val('');
//console.log(new_item.find('.num-mark').first().html())
new_item.find('.num-mark').first().html(number);
//$(this).closest('.repeater-item').find('.add-item').remove();
//new_item.find('.add-item').remove();
}).on('click','#remove_material_des',function(e){
if($('.material_des_group').length != 1){
    e.preventDefault();
$('.material_des_group').last().remove();
}
return false;

}).on('click','#add_equip',function(e){

e.preventDefault();
var repeater_group = $('#equip_section'),
   current_item = $(".equip_group").last(),
 number = current_item.find('.num-mark').text()/1+1,
new_item = (current_item.clone()).appendTo(repeater_group);
new_item.find('input').val('');
//console.log(new_item.find('.num-mark').first().html())
new_item.find('.num-mark').first().html(number);
//$(this).closest('.repeater-item').find('.add-item').remove();
//new_item.find('.add-item').remove();
}).on('click','#remove_equip',function(e){
if($('.equip_group').length != 1){
    e.preventDefault();
$('.equip_group').last().remove();
}
return false;

}).on('click','#add_equipment_des',function(e){

e.preventDefault();
var repeater_group = $('#equip_des_section'),
   current_item = $(".equip_des_group").last(),
 number = current_item.find('.num-mark').text()/1+1,
new_item = (current_item.clone()).appendTo(repeater_group);
new_item.find('input').val('');
//console.log(new_item.find('.num-mark').first().html())
new_item.find('.num-mark').first().html(number);
//$(this).closest('.repeater-item').find('.add-item').remove();
//new_item.find('.add-item').remove();
}).on('click','#remove_equipment_des',function(e){
if($('.equip_des_group').length != 1){
    e.preventDefault();
$('.equip_des_group').last().remove();
}
return false;

})
});
