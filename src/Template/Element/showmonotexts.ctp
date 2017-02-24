<div id="ovl_modal_text">
    <div id="modal_monotext_artist" class="modal fade" tabindex='-1' role="dialog" data-backdrop="true" data-keyboard="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close-modal" data-dismiss="modal"><span class="fa fa-close"></span></button>
                    <h4 class="modal-title">Monogram Text Of [<?php echo $this->escape($artist['artist_full_name']);?>]</h4>
                </div>
                <div class="modal-body">
                    <table class="table table-form table-bordered">
                        <colgroup>
                            <col class="col-sm-12">
                        </colgroup>
                        <?php if(!empty($monotexts)):?>
                        <?php foreach ($monotexts as $text):?>
                        <tr>
                            <td><?php echo $this->escape($text['artist_monotext_text'])?></td>
                        </tr>
                        <?php endforeach;?>
                        <?php endif;?>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>