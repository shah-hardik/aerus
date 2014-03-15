<div class="col-md-12 col-lg-12 ">

    <div class="panel panel-default ">
        <div class="panel-heading">
            <div style=""><b>List of Aliases</b></div>
            <div class="clearfix"></div>
        </div>
        <div class="panel-body">
            <?php
            $cr = 1;
            if (!empty($conference_aliases)):
                ?>
                <table class="table table-hover" >
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Alias</th>
                            <th>Description</th>
                        </tr>
                    </thead>
                    <tbody id="">
                        <?php foreach ($conference_aliases as $each_conference): ?>
                            <tr>
                                <td><?php print $cr; ?></td>
                                <td><?php print $each_conference->alias; ?></td>
                                <td><?php print $each_conference->description; ?></td>
                            </tr>
                            <?php $cr++; ?>    
                        <?php endforeach; ?>
                    </tbody>

                </table>
            <?php else: ?>
                <div>No Alias available</div>
            <?php endif; ?>

        </div>
    </div>
</div>