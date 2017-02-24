<div id="ovl_modal_antique_image">
    <div id="modal_antique_image_artist" class="modal fade" tabindex='-1' role="dialog" data-backdrop="true" data-keyboard="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close-modal" data-dismiss="modal"><span class="fa fa-close"></span></button>
                    <h4 class="modal-title">Images Of [<?php echo $this->escape($artist['artist_full_name']);?>]</h4>
                </div>
                <div class="modal-body">
                    <table class="table table-form table-bordered">
                        <colgroup>
                            <col class="col-sm-12">
                        </colgroup>
                        <?php if(!empty($antiqueImages)):?>
                        <?php foreach ($antiqueImages as $image):?>
                        <tr>
                            <td class="text-center">
                                <div class="text-red image-name"><?php echo $image['antique_image_name'];?></div>
                                <div class="image-list">
                                    <img class="mar-t5" src="<?php echo $urlFolderImage.$image['antique_image_hash_name'];?>" />
                                    <a class="delete-image" onclick="deleteImageOnList(this)" data-url="<?php echo $this->url(array('controller' => "Antiques", 'action' => 'deleteimage/'.$image['id'].'/'.$image['antique_image_antique_id'])); ?>">
                                        <i class="fa fa-times-circle-o" title="Delete this image"></i>
                                    </a>
                                </div>
                            </td>
                        </tr>
                        <?php endforeach;?>
                        <?php endif;?>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>