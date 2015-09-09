jQuery(document).ready(function ($) {
    jQuery('.custom_media_upload').click(function() {
        var send_attachment_bkp = wp.media.editor.send.attachment;
        wp.media.editor.send.attachment = function(props, attachment) {
            jQuery('.custom_media_image').attr('src', attachment.url);
            jQuery('.custom_media_url').val(attachment.url);
//                jQuery('.custom_media_id').val(attachment.id);
            wp.media.editor.send.attachment = send_attachment_bkp;
        }
        wp.media.editor.open();
        return false;
    });
    jQuery('.custom_media_upload2').click(function() {
        var send_attachment_bkp = wp.media.editor.send.attachment;
        wp.media.editor.send.attachment = function(props, attachment) {
            jQuery('.custom_media_image2').attr('src', attachment.url);
            jQuery('.custom_media_url2').val(attachment.url);
//                jQuery('.custom_media_id').val(attachment.id);
            wp.media.editor.send.attachment = send_attachment_bkp;
        }
        wp.media.editor.open();
        return false;
    });

    //редактирование главного слайдера
    jQuery(document).on('click','.change_slide', function(){
        //console.log(jQuery(this));
        var id = jQuery(this).parent().parent().attr('data-slide-id');
        var block = jQuery(this).parent().parent();

        var title = block.children('.curr_title').text();
        var description = block.children('.curr_description').text();
        var url = block.children('.curr_url').children().attr('href');
        var attachment_url = block.children('.curr_img').children().attr('src');

        console.log(title);
        console.log(description);
        console.log(url);
        console.log(attachment_url);

        jQuery('.title').val(title);
        jQuery('.description').text(description);
        jQuery('.url').val(url);
        jQuery('.custom_media_url').val(attachment_url);

        if(jQuery('input').is('.changed')){
           // alert("1");
            jQuery('.changed').val(id);
        }else{
           // alert("2");
            jQuery('.main_slider').append('<input type="hidden" class="changed" name="changed" value="'+id+'">');
        }
        return false;
    });
    //редактирование слайдера наши проекты
    jQuery(document).on('click','.change_project', function(){
        //console.log(jQuery(this));
        var id = jQuery(this).parent().parent().attr('data-slide-id');
        var block = jQuery(this).parent().parent();

        var logo = block.children('.curr_logo').children().attr('src');
        var description = block.children('.curr_description').text();
        var url = block.children('.curr_url').children().attr('href');
        var attachment_url = block.children('.curr_img').children().attr('src');

        jQuery('.custom_media_url2').val(logo);
        jQuery('.description').text(description);
        jQuery('.url').val(url);
        jQuery('.custom_media_url').val(attachment_url);

        if(jQuery('input').is('.changed')){
            // alert("1");
            jQuery('.changed').val(id);
        }else{
            // alert("2");
            jQuery('.our_projects').append('<input type="hidden" class="changed" name="changed" value="'+id+'">');
        }
        return false;
    });
    //редактирование слайдера нам доверяют
    jQuery(document).on('click','.change_trust', function(){
        //console.log(jQuery(this));
        var id = jQuery(this).parent().parent().attr('data-slide-id');
        var block = jQuery(this).parent().parent();

        var attachment_url = block.children('.curr_img').children().attr('src');

        jQuery('.custom_media_url').val(attachment_url);

        if(jQuery('input').is('.changed')){
            // alert("1");
            jQuery('.changed').val(id);
        }else{
            // alert("2");
            jQuery('.trust_us').append('<input type="hidden" class="changed" name="changed" value="'+id+'">');
        }
        return false;
    });
});
