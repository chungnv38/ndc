<div class="container-fluid">
<div class="container-fluid">
    <h3 class="page-title text-black">Status sync database</h3>
    <div class="clearfix"></div>
    <div class="row">
        <div class="col-sm-12">
            <table class="table table-bordered table-form">
                <colgroup>
                    <col class="col-sm-3">
                    <col class="col-sm-3">
                    <col class="col-sm-3">
                    <col class="col-sm-3">
                </colgroup>
                <tr>
                    <th>Object</th>
                    <th>Localpage</th>
                    <th>Server Online</th>
                    <th>Difference</th>
                </tr>
                <tr>
                    <td>Artists</td>
                    <td><?php echo $artists;?></td>
                    <td><?php echo $artistsOL;?></td>
                    <td><?php echo ($artists - $artistsOL);?></td>
                </tr>
                <tr>
                    <td>Arts</td>
                    <td><?php echo $arts;?></td>
                    <td><?php echo $artsOL;?></td>
                    <td><?php echo ($arts - $artsOL);?></td>
                </tr>
                <tr>
                    <td>Antiques</td>
                    <td><?php echo $antiques;?></td>
                    <td><?php echo $antiquesOL;?></td>
                    <td><?php echo ($antiques - $antiquesOL);?></td>
                </tr>
                <tr>
                    <td>ArtWork</td>
                    <td><?php echo $artwork;?></td>
                    <td><?php echo $artworkOL;?></td>
                    <td><?php echo ($artwork - $artworkOL);?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
