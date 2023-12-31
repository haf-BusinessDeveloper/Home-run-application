<?= $this->extend('dashboard/dashboard-layout') ?>


<?= $this->section('css-styles') ?>

<?= $this->endSection() ?>

<?= $this->section('content') ?>

<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Designs prices Settings
        <small>Show</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="<?= base_url('dashboard') ?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="<?= base_url('dashboard') ?>">Designs prices Settings</a></li>
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
                    <h3 class="box-title">Show design price data</h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->

                <div class="box-body">
                    <div class="form-group">
                        <label for="design_title">Design title</label>
                        <input disabled value="<?= $record['design_title'] ?>" type="text" class="form-control" name="design_title" id="design_title" placeholder="Enter design title">
                    </div>
                    <div class="form-group">
                        <label for="room_type_id">Room Type</label>
                        <select disabled type="text" class="form-control" name="room_type_id" id="room_type_id" placeholder="Enter design title">
                            <option value="">Choose ...</option>
                            <?php foreach ($roomsTypesList as $key => $roomType) { ?>
                                <option <?= ($record['room_type_id'] == $roomType['room_type_id']) ? 'selected' : '' ?> value="<?= $roomType['room_type_id'] ?>"><?= $roomType['room_type_title'] ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="design_image">Design image</label><br>
                        <img width="450px" src="<?= base_url('writable/uploads/') ?><?= $record['design_image'] ?>" alt="">
                    </div>
                    <div class="form-group">
                        <label for="price_per_square_meter">Price per square meter</label>
                        <input disabled value="<?= $record['price_per_square_meter'] ?>" type="text" class="form-control" name="price_per_square_meter" id="price_per_square_meter" placeholder="Enter Price per square meter">
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