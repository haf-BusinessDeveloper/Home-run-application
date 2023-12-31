<?= $this->extend('dashboard/dashboard-layout') ?>


<?= $this->section('css-styles') ?>

<?= $this->endSection() ?>

<?= $this->section('content') ?>

<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Room types Settings
        <small>Update</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="<?= base_url('dashboard') ?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="<?= base_url('dashboard') ?>">Room types Settings</a></li>
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
                    <h3 class="box-title">Update room type data</h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <form role="form" method="post">
                    <div class="box-body">
                        <div class="form-group">
                            <label for="room_type_title">room type title</label>
                            <input required type="text" value="<?= $record['room_type_title'] ?>" class="form-control" name="room_type_title" id="room_type_title" placeholder="Enter room type title">
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
    </div>
    <!-- /.row -->

</section>
<!-- /.content -->

<?= $this->endSection() ?>

<?= $this->section('js-scripts') ?>

<?= $this->endSection() ?>