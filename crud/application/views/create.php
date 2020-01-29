<?php include('header.php'); ?>

<div class="container">
    <?php echo form_open('home/save', ['class' => 'form-horizontal']); ?>
    <fieldset>
        <div class="container"></div>
        <legend>Create a New Record</legend>
        <div class="row">
            <div class="col-6">
                <div class="form-group">
                    <?php echo form_label('Customer Name', 'name')." ".form_error('name');
                    echo form_input(['id' => 'name', 'name' => 'customerName', 'placeholder' => 'Enter Full Name', 'class' => 'form-control']); ?>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-6">
                <div class="form-group">
                    <?php echo form_label('Phone', 'phone')." ".form_error('phone');
                    echo form_input(['id' => 'phone', 'name' => 'phone', 'placeholder' => 'Enter Phone', 'class' => 'form-control']); ?>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-6">
                <div class="form-group">
                    <?php echo form_label('Address', 'address')." ".form_error('address');
                    echo form_input(['id' => 'address', 'name' => 'address', 'placeholder' => 'Enter Address', 'class' => 'form-control']); ?>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-6">
                <div class="form-group">
                    <?php echo form_label('City', 'city')." ".form_error('city');
                    echo form_input(['id' => 'city', 'name' => 'city', 'placeholder' => 'Enter City', 'class' => 'form-control']); ?>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-6">
                <div class="form-group">
                    <?php echo form_label('Country', 'country')." ".form_error('country');
                    echo form_input(['id' => 'country', 'name' => 'country', 'placeholder' => 'Enter Country', 'class' => 'form-control']); ?>
                </div>
            </div>
        </div>




        <?php echo form_submit(['value' => 'Submit', 'class' => 'btn btn-primary']); ?>
    </fieldset>
    <?php echo form_close(); ?>
</div>

<?php include('footer.php'); ?>