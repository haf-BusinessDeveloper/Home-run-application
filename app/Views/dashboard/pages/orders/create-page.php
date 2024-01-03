<?= $this->extend('dashboard/dashboard-layout') ?>


<?= $this->section('css-styles') ?>

<?= $this->endSection() ?>

<?= $this->section('content') ?>

<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Orders Management
        <small>Create</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="<?= base_url('dashboard') ?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="<?= base_url('dashboard') ?>">Orders Management</a></li>
        <li class="active">Create</li>
    </ol>
</section>

<!-- Main content -->
<section class="content">
    <div class="row">
        <!-- left column -->
        <div class="col-md-12">
            <!-- general form elements -->
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Client Data</h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <form role="form">
                    <div class="box-body">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="client_full_name">Full Name</label>
                                <input type="text" class="form-control" name="client_full_name" id="client_full_name" placeholder="Enter Full Name">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="client_email" class="control-label">Client Email</label>
                                <input type="email" class="form-control" name="client_email" placeholder="Client Email">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="client_phone_number" class="control-label">Client Phone Number</label>
                                <input type="text" class="form-control" name="client_phone_number" placeholder="Client Phone Number">
                            </div>
                        </div>
                    </div>
                    <!-- /.box-body -->

                    <!-- <div class="box-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div> -->
                </form>
            </div>
            <!-- /.box -->

        </div>
        <!--/.col (left) -->
        <div class="col-md-12">
            <!-- general form elements -->
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Real estate unit data</h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <form role="form">
                    <div class="box-body">
                        <!-- select -->
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="real_estate_unit_type">Real Estate Unit Type</label>
                                <select required name="real_estate_unit_type" id="real_estate_unit_type" class="form-control">
                                    <option value="">Choose</option>
                                    <option value="1">Active</option>
                                    <option value="0">Not Active</option>
                                    <option>option 4</option>
                                    <option>option 5</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="location_latitude">Latitude</label>
                                <input type="text" class="form-control" name="location_latitude" id="location_latitude" placeholder="Enter location latitude">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="location_longitude">Longitude</label>
                                <input type="text" class="form-control" name="location_longitude" id="location_longitude" placeholder="Enter location longitude">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="client_address">Address</label>
                                <textarea type="text" class="form-control" name="client_address" id="client_address" placeholder="Enter Address"></textarea>
                            </div>
                        </div>
                    </div>
                    <!-- /.box-body -->

                    <!-- <div class="box-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div> -->
                </form>
            </div>
            <!-- /.box -->

        </div>
        <!--/.col (left) -->
        <div class="col-md-12">
            <!-- general form elements -->
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Real estate unit rooms</h3>
                    <button class="btn btn-xs btn-primary pull-right"> <i class="fa fa-plus-circle"></i> add new</button>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <form role="form">
                    <div class="box-body">
                        <table class="table table-bordered">
                            <tr>
                                <th style="width: 10px">#</th>
                                <th>Room Type</th>
                                <th>count</th>
                                <th>#</th>
                            </tr>
                            <tr>
                                <td>1.</td>
                                <td>Update software</td>
                                <td>2</td>
                                <td>
                                    <button class="btn btn-xs btn-danger"> <i class="fa fa-times-circle"></i> delete</button>

                                </td>
                            </tr>
                        </table>

                    </div>
                    <!-- /.box-body -->

                    <!--<div class="box-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div> -->
                </form>
            </div>
            <!-- /.box -->

        </div>
        <!--/.col (left) -->
        <div class="col-md-12">
            <!-- general form elements -->
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Room Type [ bedroom ] -
                        <div style="margin-top: 10px;">
                        <input type="text" name="length" id="length" placeholder="length" style="width: 80px;"> X
                        <input type="text" name="width" id="width" placeholder="width" style="width: 80px;"> X <input type="text" name="height" id="height" placeholder="height" style="width: 80px;">
                        </div>
                    </h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <form role="form">
                    <div class="box-body">

                        <div class="row">
                            <div class="col-md-12">

                                <div class="col-md-4">
                                    <!-- Widget: user widget style 1 -->
                                    <div class="box box-widget widget-user">
                                        <input class="img-circle" type="checkbox" name="" id="">
                                        <!-- Add the bg color to the header using any of the bg-* classes -->
                                        <div class="widget-user-header bg-black" style="background: url('<?= base_url('public/dashboard') ?>/dist/img/photo1.png') center center;">
                                            <h3 class="widget-user-username">Elizabeth Pierce</h3>
                                            <h5 class="widget-user-desc">Web Designer</h5>
                                        </div>
                                        <div class="widget-user-image">
                                            <img class="img-circle" src="<?= base_url('public/dashboard') ?>/dist/img/user3-128x128.jpg" alt="User Avatar">
                                        </div>
                                        <div class="box-footer">
                                            <div class="row">
                                                <div class="col-sm-2 border-right">
                                                    <div class="description-block">
                                                        <!-- <h5 class="description-header">3,200</h5>
                    <span class="description-text">SALES</span> -->
                                                    </div>
                                                    <!-- /.description-block -->
                                                </div>
                                                <!-- /.col -->
                                                <div class="col-sm-8 border-right">
                                                    <div class="description-block">
                                                        <h5 class="description-header">13,000</h5>
                                                        <span class="description-text">Price per square meter</span>
                                                    </div>
                                                    <!-- /.description-block -->
                                                </div>
                                                <!-- /.col -->
                                                <div class="col-sm-2">
                                                    <div class="description-block">
                                                        <!-- <h5 class="description-header">35</h5>
                    <span class="description-text">PRODUCTS</span> -->
                                                    </div>
                                                    <!-- /.description-block -->
                                                </div>
                                                <!-- /.col -->
                                            </div>
                                            <!-- /.row -->
                                        </div>
                                    </div>
                                    <!-- /.widget-user -->
                                </div>
                                <!-- /.col -->
                            </div>
                        </div>

                    </div>
                    <!-- /.box-body -->

                    <div class="box-footer">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="square_meters">square_meters</label>
                                    <input type="text" class="form-control" name="square_meters" id="square_meters">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="price_per_square_meter">price_per_square_meter</label>
                                    <input type="text" class="form-control" name="price_per_square_meter" id="price_per_square_meter">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="total_cost_of_room_finishing">total_cost_of_room_finishing</label>
                                    <input type="text" class="form-control" name="total_cost_of_room_finishing" id="total_cost_of_room_finishing">
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <!-- /.box -->

        </div>
        <!--/.col (left) -->


        <div class="col-md-12">
            <!-- general form elements -->
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Other Order data</h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <form role="form">
                    <div class="box-body">
                        <div class="form-group">
                            <label for="client_order_details">Client Order Details</label>
                            <textarea type="text" class="form-control" name="client_order_details" id="client_order_details"></textarea>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="total_unit_finishing_cost">Total unit finishing cost</label>
                            <input type="text" class="form-control" name="total_unit_finishing_cost" id="total_unit_finishing_cost" placeholder="Enter total unit finishing cost">
                        </div>
                        </div>
                        
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="proposed_deadline_for_deleivery">Deadline</label>
                                <input type="date" class="form-control" name="proposed_deadline_for_deleivery" id="proposed_deadline_for_deleivery" placeholder="Enter proposed deadline for deleivery">
                            </div>
                        </div>
                        
                        <div class="col-md-4">
                        <!-- select -->
                        <div class="form-group">
                            <label for="preferred_payment_method">Preferred Payment Method</label>
                            <select required name="preferred_payment_method" id="preferred_payment_method" class="form-control">
                                <option value="">Choose</option>
                                <option value="1">Active</option>
                                <option value="0">Not Active</option>
                                <option>option 4</option>
                                <option>option 5</option>
                            </select>
                        </div>
                        </div>

                        <div class="form-group">
                            <label for="admin_notes">Admin notes</label>
                            <textarea type="text" class="form-control" name="admin_notes" id="admin_notes"></textarea>
                        </div>

                        <div class="form-group">
                            <label for="order_details">Order details</label>
                            <textarea type="text" class="form-control" name="order_details" id="order_details"></textarea>
                        </div>
                        <div class="col-md-3">
                        <!-- select -->
                        <div class="form-group">
                            <label for="order_status">Order Status</label>
                            <select required name="order_status" id="order_status" class="form-control">
                                <option value="">Choose</option>
                                <option value="1">Active</option>
                                <option value="0">Not Active</option>
                                <option>option 4</option>
                                <option>option 5</option>
                            </select>
                        </div>
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
    </div>
    <!-- /.row -->

</section>
<!-- /.content -->

<?= $this->endSection() ?>

<?= $this->section('js-scripts') ?>

<?= $this->endSection() ?>