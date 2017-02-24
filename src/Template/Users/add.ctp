<div class="container-fluid">
    <h3 class="page-title text-black">Administration Of Users - Add New User</h3>
    <div class="row">
        <?php echo $this->Form->create(null,array('url'=>array('controller' => 'Users','action' => 'add')));?>
            <?php include 'item.ctp';?>
            <button type="submit" class="btn btn-primary" tabindex="6">
                <i class="fa fa-gavel"></i>&nbsp;&nbsp;<span class="title">Submit</span>
            </button>
            <?php 
                echo $this->Html->getCrumbs(' > ', array(
                                            'text' => '<i class="fa fa-reply"></i>&nbsp;&nbsp;<span>Back</span>',
                                            'url' => array('controller' => 'Users', 'action' => 'index'),
                                            'class'=>'btn btn-danger',
                                            'escape' => false,
                                            "tabindex" => 7
                                        ));
            ?>
        <?php echo $this->Form->end();?>
    </div>
</div>
