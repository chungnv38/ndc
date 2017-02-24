<?php
    function convert_time($objTime, $format = 'dd-MM-yyyy'){
        $date = $objTime->modify('-7 hours')
                        ->i18nFormat($format);
        return $date;
    }    
?>

<div class="container-fluid">
    <h3 class="page-title text-black">History Log - <?php echo $user_name ?></h3>
    <div class="clearfix"></div>
    <div class="row">
        <?php echo $this->Form->create(null,array('url'=>array('controller' => 'Users','action' => 'showlog',$id)));?>
            <div class="col-sm-6 table-responsive">
                <table class="table">
                    <col class="col-sm-6">
                    <col class="col-sm-6">
                    <tr>
                        <td>
                            <div class = "input-group">
                                <span class = "input-group-addon">From</span>
                                <input class="form-control input-sm" name="from" id="from" type="text" value="<?php echo $from_date ?>" required/>
                            </div>
                        </td>
                        <td>
                            <div class = "input-group">
                                <span class = "input-group-addon">To</span>
                                <input class="form-control input-sm" name="to" id="to" type="text" value="<?php echo $to_date ?>" required/>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <button type="submit" class="btn btn-primary">
                                <i class="fa fa-search"></i>&nbsp;&nbsp;<span class="title">Search</span>
                            </button>
                        </td>
                    </tr>
                </table>
            </div>
        <?php echo $this->Form->end();?>
        <div class="col-sm-12">
            <table class="table table-bordered table-form">
                <colgroup>
                    <col class="col-sm-3">
                    <col class="col-sm-4">
                    <col class="col-sm-5">
                </colgroup>
                <tr>
                    <th>Date</th>
                    <th>Login Time</th>
                    <th>Logout Time</th>
                </tr>
                <?php foreach ($logs as $log){  ?>
                <tr>
                    <td><?php echo (!empty($log['action_log_datetime'])) ? convert_time($log['action_log_datetime']) : '' ?></td>
                    <td>
                    <?php 
                    if($log['action_log_action'] == 'login'){
                        echo (!empty($log['action_log_datetime'])) ? convert_time($log['action_log_datetime'], 'HH:mm') : ''; 
                    }
                    ?>
                    </td>
                    <td>
                    <?php 
                    if($log['action_log_action'] == 'logout'){
                        echo (!empty($log['action_log_datetime'])) ? convert_time($log['action_log_datetime'], 'HH:mm') : ''; 
                    }
                    ?>
                    </td>
                </tr>
                <?php } ?>
            </table>
        </div>
    </div>
</div>
