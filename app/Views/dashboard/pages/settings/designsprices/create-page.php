<?= $this->extend('dashboard/dashboard-layout') ?>


<?= $this->section('css-styles') ?>

<?= $this->endSection() ?>

<?= $this->section('content') ?>

<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Designs prices Settings
        <small>Create</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="<?= base_url('dashboard') ?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="<?= base_url('dashboard') ?>">Designs prices Settings</a></li>
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
                    <h3 class="box-title">Create a new design price</h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <form role="form" method="post" enctype="multipart/form-data">
                    <div class="box-body">
                        <div class="form-group">
                            <label for="design_title">Design title</label>
                            <input required type="text" class="form-control" name="design_title" id="design_title" placeholder="Enter design title">
                        </div>
                        <div class="form-group">
                            <label for="design_image">Design image</label>
                            <input required type="file" class="form-control" name="design_image" id="design_image">
                        </div>
                        <div class="form-group">
                            <label for="price_per_square_meter">Price per square meter</label>
                            <input required type="text" class="form-control" name="price_per_square_meter" id="price_per_square_meter" placeholder="Enter Price per square meter">
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