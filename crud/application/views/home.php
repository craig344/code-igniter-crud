<?php include('header.php'); ?>

<div class="container">
    <?php if ($response = $this->session->flashdata('response')) { ?>
        <div class="alert alert-dismissible alert-success">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <?php echo $response; ?>
        </div>
    <?php } ?>
    <?php if ($error = $this->session->flashdata('error')) { ?>
        <div class="alert alert-dismissible alert-danger">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <?php echo $error; ?>
        </div>
    <?php } ?>
    <button type="button" class="btn btn-primary" onclick="window.location='<?php echo site_url("home/create"); ?>'">Create new record</button>
    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">Customer Name</th>
                <th scope="col">Phone</th>
                <th scope="col">Address</th>
                <th scope="col">City</th>
                <th>Country</th>
                <th>Operations</th>
            </tr>
        </thead>
        <tbody>
            <?php
            if ($records->num_rows()) {
                foreach ($records->result() as $row) {
            ?><tr>
                        <td><?php echo $row->customerName; ?></td>
                        <td><?php echo $row->phone; ?></td>
                        <td><?php echo $row->address; ?></td>
                        <td><?php echo $row->city; ?></td>
                        <td><?php echo $row->country; ?></td>
                        <td><button type="button" id="<?= $row->id; ?>" class="btn btn-success edit" onclick="window.location='<?php echo site_url("home/edit"); ?>'">Edit</button>
                            <button type="button" id="<?= $row->id; ?>" class="btn btn-danger delete" onclick="window.location='<?php echo site_url("home/delete"); ?>'">Delete</button></td>
                    </tr><?php
                        }
                    } else {
                            ?><tr>
                    <td colspan="6">No records found</td>
                </tr><?php
                    }
                        ?>
        </tbody>
    </table>
</div>
<?php include('footer.php'); ?>