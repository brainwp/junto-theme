/**
 * Created by root on 04/07/14.
 */
(function($){
    $('.trash').remove();
    $('.tablenav').remove();
    $('.add-new-h2').remove();
    $('#delete-action').remove();
    $('#edit-slug-box').remove();
    $('#date').remove();
    $('#column-date').remove();
    $('.row-actions').remove();
    $('#title').attr('readonly','true');
    $('.brasa-remove-box').each(function(){
        var box = $(this).attr('data-box-id');
        $('#'+box).remove();
    })
})(jQuery);