<div class="col-md-12 col-lg-12 ">

    <div class="panel panel-default ">
        <div class="panel-heading">
            <div style=""><b>List of Virtual Meeting Room</b></div>
            <div class="clearfix"></div>
        </div>
        <div class="panel-body">
            <?php
            $cr = 1;
            if (!empty($conference)):
                ?>
                <table class="table table-hover" >
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Url</th>
                        </tr>
                    </thead>
                    <tbody id="">
                        <?php foreach ($conference as $each_conference): ?>
                            <tr>
                                <td><?php print $cr; ?></td>
                                <td><?php print $each_conference->name; ?></td>
                                <td><?php print $each_conference->resource_uri; ?></td>
                            </tr>
                            <?php $cr++; ?>    
                        <?php endforeach; ?>
                    </tbody>

                </table>
            <?php else: ?>
                <div>No Conference available</div>
            <?php endif; ?>

        </div>
    </div>
</div>