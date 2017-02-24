<div class="container-fluid">
<div class="container-fluid">
    <h3 class="page-title text-black">Statistics</h3>
    <div class="clearfix"></div>
    <div class="row">
        <?php echo $this->Form->create(null,array('url'=>array('controller' => 'Users','action' => 'userworking')));?>
            <div class="col-sm-9 table-responsive">
                <table class="table">
                    <col class="col-sm-3">
                    <col class="col-sm-3">
                    <col class="col-sm-3">
                    <tr>
                        <td>
                            <div class = "input-group">
                                <span class = "input-group-addon">From</span>
                                <input class="form-control input-sm" name="from" id="from" type="text" value="<?php echo $from_date ?>" />
                            </div>
                        </td>
                        <td>
                            <div class = "input-group">
                                <span class = "input-group-addon">To</span>
                                <input class="form-control input-sm" name="to" id="to" type="text" value="<?php echo $to_date ?>" />
                            </div>
                        </td>
                        <td>
                            <select name="code" class="form-control input-sm">
                                <!-- <option value="">All users</option> -->
                                <?php
                                $user = ($user)?$user:null;
                                foreach ($users as $v){
                                    if($v['id'] == $user) $selected = 'selected';
                                    else $selected = '';
                                    echo "<option $selected value='".$v['id']."'>".$v['user_login_name']."</option>";
                                }
                                ?>
                            </select>
                        </td>
                        <td>
                            <select name="type_object" class="form-control input-sm">
                                <option value="artist">Artist</option>
                                <option value="art">Art</option>
                                <option value="antique">Antique</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="3">
                            <button type="submit" class="btn btn-primary">
                                <i class="fa fa-search"></i>&nbsp;&nbsp;<span class="title">Export</span>
                            </button>
                        </td>
                    </tr>
                </table>
            </div>
        <?php echo $this->Form->end();?>
        <!-- <div class="col-sm-12">
            <table class="table table-bordered table-form">
                <colgroup>
                    <col class="col-sm-4">
                    <col class="col-sm-2">
                    <col class="col-sm-2">
                    <col class="col-sm-1">
                    <col class="col-sm-2">
                </colgroup>
                <tr>
                    <th>User</th>
                    <th>Date</th>
                    <th>Numbers</th>
                    <th>Actions</th>
                    <th>Tables</th>
                </tr>
                <?php
                if(!$isPost){
                    echo "<tr><td class='text-center' colspan='4'>Please click on the search button</td></tr>";
                }else{
                    if(!count($aryStatistics)) echo "<tr><td class='text-center' colspan='4'>Data not found</td></tr>";
                    else{
                        foreach($aryStatistics as $kUser => $vUser){ // Max 20 user
                            foreach ($vUser as $kDate => $vDate) {
                                foreach($vDate as $kController => $vController){ // Max 7 Controller
                                    foreach($vController as $kAction => $vAction){ // Max 3 Action
                                        if($vAction){
                                            ?>
                    <tr>
                        <td class="text-left">
                            <?php
                                if(isset($tempIds[$kUser][$kDate][$kController][$kAction]) && $tempIds[$kUser][$kDate][$kController][$kAction]){        
                                    $ids = substr($tempIds[$kUser][$kDate][$kController][$kAction], 0, -1);
                                }else{
                                    $ids = 0;
                                }
                            ?>
                            <?php echo $this->Html->link($kUser,
                                array('controller' => 'Users','action' => 'showlotbyuser/'.$kUser.'/'.$kDate.'/'.$kController.'/'.$kAction.'/'.$ids),
                                array('class'=>'ext-left','target' => '_blank'));
                            ?>
                        </td>
                        <td class="text-left"><?php echo $kDate?></td>
                        <td class="text-right"><?php echo $vAction?></td>
                        <td class="text-left"><?php echo $kAction?></td>
                        <td class="text-left"><?php echo $kController?></td>
                    </tr>
                                            <?php
                                        }
                                    }
                                }
                            }
                        }
                    }
                }
                ?>
            </table>
        </div> -->
    </div>
</div>
