<?= $this->extend('dashboard/dashboard-layout') ?>


<?= $this->section('css-styles') ?>

<?= $this->endSection() ?>

<?= $this->section('content') ?>

<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Users Management
        <small>Update</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="<?= base_url('dashboard') ?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="<?= base_url('dashboard') ?>">Users Management</a></li>
        <li class="active">Update</li>
    </ol>
</section>

<!-- Main content -->
<section class="content">
    <div class="row">
        <?php
        $session = session();
        $updated_successfuly = $session->getFlashdata('updated_successfuly');
        if ($updated_successfuly) : ?>
                <div class="col-md-12">
            <div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4><i class="icon fa fa-check"></i> Alert!</h4>
                Success updated Data.
            </div>
            </div>
        <?php endif; ?>
        <!-- left column -->
        <div class="col-md-7">
            <!-- general form elements -->
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Update user data</h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <form role="form" method="post">
                    <div class="box-body">
                        <div class="form-group">
                            <label for="full_name">Full Name</label>
                            <input required value="<?= $record['full_name'] ?>" type="text" class="form-control" name="full_name" id="full_name" placeholder="Enter Full Name">
                        </div>
                        <div class="form-group">
                            <label for="national_id">National ID</label>
                            <input required value="<?= $record['national_id'] ?>" type="text" class="form-control" name="national_id" id="national_id" placeholder="Enter National ID">
                        </div>
                        <div class="form-group">
                            <label for="phone_number">Phone Number</label>
                            <input required value="<?= $record['phone_number'] ?>" type="text" class="form-control" name="phone_number" id="phone_number" placeholder="Enter Phone Number">
                        </div>
                        <div class="form-group">
                            <label for="address">Address</label>
                            <textarea type="text" class="form-control" name="address" id="address" placeholder="Enter Address"><?= $record['address'] ?></textarea>
                        </div>
                        <div class="form-group">
                            <label for="is_whats_available">
                                <input <?= ($record['is_whats_available'] == '1') ? 'checked' : '' ?> value="1" type="checkbox" name="is_whats_available" id="is_whats_available">
                                Is Whats available?</label>
                        </div>

                        <!-- select -->
                        <div class="form-group">
                            <label for="user_status">User Status</label>
                            <select required name="user_status" id="user_status" class="form-control">
                                <option value="">Choose</option>
                                <option <?= ($record['user_status'] == '1') ? 'selected' : '' ?> value="1">Active</option>
                                <option <?= ($record['user_status'] == '0') ? 'selected' : '' ?> value="0">Not Active</option>
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
        <div class="col-md-5">
            <!-- Change Password -->
            <div class="box box-info">
                <div class="box-header with-border">
                    <h3 class="box-title">Change Password</h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <form class="form-horizontal">
                    <div class="box-body">
                        <div class="form-group">
                            <label for="user_email" class="col-sm-2 control-label">Email</label>

                            <div class="col-sm-10">
                                <input required value="<?= $record['full_name'] ?>" type="email" class="form-control" name="user_email" placeholder="Email">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="password" class="col-sm-2 control-label">Password</label>

                            <div class="col-sm-10">
                                <input required value="<?= $record['full_name'] ?>" type="password" class="form-control" name="password" placeholder="Password">
                            </div>
                        </div>
                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer">
                        <button type="submit" class="btn btn-default">Cancel</button>
                        <button type="submit" class="btn btn-warning pull-right">Change</button>
                    </div>
                    <!-- /.box-footer -->
                </form>
            </div>
            <!-- /.box -->

        </div>
        <!--/.col (right) -->
    </div>
    <!-- /.row -->
    
</section>
<!-- /.content -->

<?= $this->endSection() ?>

<?= $this->section('js-scripts') ?>

<?= $this->endSection() ?>