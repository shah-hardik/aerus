<div class="col-md-12 col-lg-12 ">

    <div class="panel panel-default ">
        <div class="panel-heading">
            <div style=""><b>VM Manager</b></div>
            <div class="clearfix"></div>
        </div>
        <div class="panel-body">
            <?php
            $cr = 1;
            if (!empty($vm)):
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
                        <?php foreach ($vm as $each_vm): ?>
                            <tr>
                                <td><?php print $cr; ?></td>
                                <td><?php print $each_vm->address; ?></td>
                                <td><?php print $each_vm->resource_uri; ?></td>
                            </tr>
                            <?php $cr++; ?>    
                        <?php endforeach; ?>
                    </tbody>
                </table>
            <?php else: ?>
                <div>No VM Manager available</div>
            <?php endif; ?>

        </div>
    </div>
</div>