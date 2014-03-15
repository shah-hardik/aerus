<div class="col-md-12 col-lg-12 ">

    <div class="panel panel-default ">
        <div class="panel-heading">
            <div style=""><b>List of DNS Server</b></div>
            <div class="clearfix"></div>
        </div>
        <div class="panel-body">
            <?php
            $cr = 1;
            if (!empty($dns)):
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
                        <?php foreach ($dns as $each_dns): ?>
                            <tr>
                                <td><?php print $cr; ?></td>
                                <td><?php print $each_dns->address; ?></td>
                                <td><?php print $each_dns->resource_uri; ?></td>
                            </tr>
                            <?php $cr++; ?>    
                        <?php endforeach; ?>
                    </tbody>

                </table>
            <?php else: ?>
                <div>No DNS Server available</div>
            <?php endif; ?>

        </div>
    </div>
</div>