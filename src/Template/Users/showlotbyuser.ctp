<div class="container-fluid">
    <h3 class="page-title text-black">List <?php echo $action . ' ' . $controller; ?>s of <?php echo $username; ?> on <?php echo $date; ?></h3>
    <div class="clearfix"></div>
    <div class="row">
        <div class="col-sm-12">
            <table class="table table-bordered table-form">
                <colgroup>
                    <col class="col-sm-4">
                    <col class="col-sm-7">
                </colgroup>
                <tr>
                    <th>ID</th>
                    <th>NAME</th>
                </tr>
                <?php
                        foreach($datas as $key => $value){ 
                                            ?>
                    <tr>
                        <td class="text-left"><?php echo $value['id']?></td>
                        <td class="text-left"><?php echo $value['name']?></td>
                    </tr>
                <?php
                        }
                ?>
            </table>
        </div>
    </div>
</div>
