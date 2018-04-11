function checkCropSize(className,xId,yId,wId,hId,resHtml){
    xStart = $('#'+xId).val();
    yStart = $('#'+yId).val();
    width = $('#'+wId).val();
    height = $('#'+hId).val();
    imgSrc = $(className).attr('src');

    if(width && height){
        $('#progressbar').show();
        $.ajax({
            type: 'POST',
            url: '/index/imagesize',
            dataType: 'json',
            data: {x: xStart, y: yStart, w: width, h:height, imgStr:imgSrc},
            success: function(response) {
                //consolo.log(response);
                $('#'+resHtml).html('Size: '+ response.size+' KB').show();
                $('#progressbar').hide();
            }

        });

    }else{
        // $('#message-box-info .mb-content').html('<p>Nothing Cropped</p>');
        // $('#message-box-info').toggleClass("open");
        alert('Nothing Cropped');
    }

}
$(document).ready(function(){
    $("#datatable-example.sortable tbody").sortable({
            helper: fixHelperModified,
            stop: updateIndex
        }).disableSelection();
});
var fixHelperModified = function (e, tr) {
        var $originals = tr.children();
        var $helper = tr.clone();
        $helper.children().each(function (index) {
            $(this).width($originals.eq(index).width())
        });
        return $helper;
    },
            updateIndex = function (e, ui) {
                
                $('table tbody tr:odd').removeClass('alt-row');
                $('table tbody tr:even').removeClass().addClass('alt-row');
                var ids = [($('table tbody tr').size() - 1)];
                var idsIndex = 0;
                $('table tbody tr').each(function (i) {
                    rcheckbox = $(this).find(':checkbox');
                    if (rcheckbox.length > 0) {
                        ids[idsIndex] = rcheckbox.val();
                        idsIndex++;
                    }
                });
                rids = ids.join(',');
                var reorderUrl = $('table.sortable').attr('data-reorderUrl');
//                var reorderUrl = '<?php echo $this->url('admin/default', array('controller' => 'itempictures', 'action' => 'reorder', 'id' => $this->itemId)); ?>';
//                alert(reorderUrl);
                $.post(
                        reorderUrl,
                        {
                            ids: rids
                        },
                function (response) {

                },'json');

            };