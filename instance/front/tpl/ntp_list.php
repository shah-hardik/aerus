<div class="col-md-12 col-lg-12 ">

    <div class="panel panel-default ">
        <div class="panel-heading">
            <div style=""><b>List of NTP Servers</b></div>
            <div class="clearfix"></div>
        </div>
        <div class="panel-body">
            <?php
            $cr = 1;
            if (!empty($ntp)):
                ?>
                <table class="table table-hover" >
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Address</th>
                            <th>Url</th>
                        </tr>
                    </thead>
                    <tbody id="">
                        <?php foreach ($ntp as $each_ntp): ?>
                            <tr>
                                <td><?php print $cr; ?></td>
                                <td><?php print $each_ntp->address; ?></td>
                                <td><?php print $each_ntp->resource_uri; ?></td>
                            </tr>
                            <?php $cr++; ?>    
                        <?php endforeach; ?>
                    </tbody>
                </table>
            <?php else: ?>
                <div>No NTP Server available</div>
            <?php endif; ?>

        </div>
    </div>
</div>