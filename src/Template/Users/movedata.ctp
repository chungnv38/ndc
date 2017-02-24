<div class="container-fluid">
    <h3 class="page-title text-black">Moving data from one ArtistID to another ArtistID</h3>
    <h6>Enter the ID number of the Artist you want to delete in the SOURCE and the ID number of Artist all data should be moved to.</h6>
    <h6>The two fields must not be left empty and must only contains numbers larger than zero and must not be the same number in both fields.</h6>
    
    <?php echo $this->Form->create(null,array('url'=>array('controller' => 'Users','action' => 'movedata')));?>
    <div class="row margin-top-20">
        <div class="col-sm-5 table-responsive">
            <table class="table table-bordered table-form">
                <colgroup>
                    <col class="col-sm-4">
                    <col class="col-sm-8">
                </colgroup>
                <tr>
                    <th>Select source</th>
                    <td>
                        <input class="form-control input-sm" type="number" name="source_id" required 
                            value="<?php echo isset($sourceId) ? $sourceId : '';?>"/>
                    </td>
                </tr>
                <tr>
                    <th>Target source</th>
                    <td>
                        <input class="form-control input-sm" type="number" name="target_id" required 
                            value="<?php echo isset($targetId) ? $targetId : '';?>"/>
                    </td>
                </tr>
            </table>
        </div>
        <div class="col-sm-7 table-responsive">
            <span class="fa fa-warning text-red"></span>
            <span>All Prices, Antiques, Signatures, Links, Monogram Texts from this artist will be moved to TARGET and the artist will be deleted</span>
        </div>
    </div>
    <button type="submit" class="btn btn-primary" onclick="if (confirm('Are you sure you want to move data?')) { return true; } return false;">
        <i class="fa fa-truck"></i>&nbsp;&nbsp;<span class="title">Move data</span>
    </button>
    <?php 
        echo $this->Html->getCrumbs(' > ', array(
            'text' => '<i class="fa fa-reply"></i>&nbsp;&nbsp;<span>Back</span>',
            'url' => array('controller' => 'Users', 'action' => 'index'),
            'class'=>'btn btn-danger',
            'escape' => false
        ));
    ?>
    <?php echo $this->Form->end();?>
</div>
