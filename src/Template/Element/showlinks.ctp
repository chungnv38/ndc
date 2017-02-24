<div id="ovl_modal_link">
    <div id="modal_links_artist" class="modal fade" tabindex='-1' role="dialog" data-backdrop="true" data-keyboard="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close-modal" data-dismiss="modal"><span class="fa fa-close"></span></button>
                    <h4 class="modal-title">Links Of [<?php echo $this->escape($artist['artist_full_name']);?>]</h4>
                </div>
                <div class="modal-body">
                    <table class="table table-form table-bordered">
                        <colgroup>
                            <col class="col-sm-12">
                        </colgroup>
                        <?php if(!empty($links)):?>
                        <?php foreach ($links as $link):?>
                        <tr>
                            <td>
                                <a class="cursor-pointer" target="_blank" href="<?php echo $link['artist_link_url'];?>"><?php echo $link['artist_link_url'];?></a>
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