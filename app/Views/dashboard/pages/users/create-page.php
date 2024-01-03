<?= $this->extend('dashboard/dashboard-layout') ?>


<?= $this->section('css-styles') ?>

<?= $this->endSection() ?>

<?= $this->section('content') ?>

<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Users Management
        <small>Create</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="<?= base_url('dashboard') ?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="<?= base_url('dashboard') ?>">Users Management</a></li>
        <li class="active">Create</li>
    </ol>
</section>

<!-- Main content -->
<section class="content">
    <div class="row">

        <?php
        $session = session();
        $added_successfuly = $session->getFlashdata('added_successfuly');
        if ($added_successfuly) : ?>
            <div class="col-md-12">
                <div class="alert alert-success alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <h4><i class="icon fa fa-check"></i> Alert!</h4>
                    Success inserted Data.
                </div>
            </div>
        <?php endif; ?>
        <!-- left column -->
        <div class="col-md-7">
            <!-- general form elements -->
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Create a new user</h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <form role="form" method="post">
                    <div class="box-body">
                        <div class="form-group">
                            <label for="full_name">Full Name</label>
                            <input required type="text" class="form-control" name="full_name" id="full_name" placeholder="Enter Full Name">
                        </div>
                        <div class="form-group">
                            <label for="national_id">National ID</label>
                            <input required type="text" class="form-control" name="national_id" id="national_id" placeholder="Enter National ID">
                        </div>
                        <div class="form-group">
                            <label for="phone_number">Phone Number</label>
                            <input required type="text" class="form-control" name="phone_number" id="phone_number" placeholder="Enter Phone Number">
                        </div>
                        <div class="form-group">
                            <label for="address">Address</label>
                            <textarea type="text" class="form-control" name="address" id="address" placeholder="Enter Address"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="is_whats_available">
                                <input required value="1" type="checkbox" name="is_whats_available" id="is_whats_available">
                                Is Whats available?</label>
                        </div>

                        <div class="form-group">
                            <label for="user_email" class="control-label">Email</label>
                            <input required type="email" class="form-control" name="user_email" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <label for="password" class="control-label">Password</label>
                            <input required type="password" class="form-control" name="password" placeholder="Password">
                        </div>

                        <!-- select -->
                        <div class="form-group">
                            <label for="user_status">User Status</label>
                            <select required name="user_status" id="user_status" class="form-control">
                                <option value="">Choose</option>
                                <option value="1">Active</option>
                                <option value="0">Not Active</option>
                            </select>
                        </div>
                    </div>
                    <!-- /.box-body -->

                    <div class="box-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
            <!-- /.box -->

        </div>
        <!--/.col (left) -->
        <!-- right column -->
        <!-- <div class="col-md-5">
            <div class="box box-info">
                <div class="box-header with-border">
                    <h3 class="box-title">Change Password</h3>
                </div>
                <form class="form-horizontal">
                    <div class="box-body">
                        <div class="form-group">
                            <label for="user_email" class="col-sm-2 control-label">Email</label>

                            <div class="col-sm-10">
                                <input required type="email" class="form-control" name="user_email" placeholder="Email">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="password" class="col-sm-2 control-label">Password</label>

                            <div class="col-sm-10">
                                <input required type="password" class="form-control" name="password" placeholder="Password">
                            </div>
                        </div>
                    </div>
                    <div class="box-footer">
                        <button type="submit" class="btn btn-default">Cancel</button>
                        <button type="submit" class="btn btn-warning pull-right">Change</button>
                    </div>
                </form>
            </div>

        </div> -->
        <!--/.col (right) -->
    </div>
    <!-- /.row -->

</section>
<!-- /.content -->

<?= $this->endSection() ?>

<?= $this->section('js-scripts') ?>

<?= $this->endSection() ?>