<?= $this->extend('dashboard/dashboard-layout') ?>


<?= $this->section('css-styles') ?>

<?= $this->endSection() ?>

<?= $this->section('content') ?>

<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Users Management
        <small>Show</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="<?= base_url('dashboard') ?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="<?= base_url('dashboard') ?>">Users Management</a></li>
        <li class="active">Show</li>
    </ol>
</section>

<!-- Main content -->
<section class="content">
    <div class="row">
        <!-- left column -->
        <div class="col-md-7">
            <!-- general form elements -->
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Show user data</h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                    <div class="box-body">
                        <div class="form-group">
                            <label for="full_name">Full Name</label>
                            <input type="text" class="form-control" name="full_name" id="full_name" placeholder="Enter Full Name">
                        </div>
                        <div class="form-group">
                            <label for="national_id">National ID</label>
                            <input type="text" class="form-control" name="national_id" id="national_id" placeholder="Enter National ID">
                        </div>
                        <div class="form-group">
                            <label for="phone_number">Phone Number</label>
                            <input type="text" class="form-control" name="phone_number" id="phone_number" placeholder="Enter Phone Number">
                        </div>
                        <div class="form-group">
                            <label for="address">Address</label>
                            <textarea type="text" class="form-control" name="address" id="address" placeholder="Enter Address"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="is_whats_available">
                                <input type="checkbox" name="is_whats_available" id="is_whats_available">
                                Is Whats available?</label>
                        </div>

                        <div class="form-group">
                            <label for="user_email" class="control-label">Email</label>
                            <input type="email" class="form-control" name="user_email" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <label for="password" class="control-label">Password</label>
                            <input type="password" class="form-control" name="password" placeholder="Password">
                        </div>

                        <!-- select -->
                        <div class="form-group">
                            <label for="user_status">User Status</label>
                            <select required name="user_status" id="user_status" class="form-control">
                                <option value="">Choose</option>
                                <option value="1">Active</option>
                                <option value="0">Not Active</option>
                                <option>option 4</option>
                                <option>option 5</option>
                            </select>
                        </div>
                    </div>
                    <!-- /.box-body -->

            </div>
            <!-- /.box -->

        </div>
        <!--/.col (left) -->
    </div>
    <!-- /.row -->
    
</section>
<!-- /.content -->

<?= $this->endSection() ?>

<?= $this->section('js-scripts') ?>

<?= $this->endSection() ?>