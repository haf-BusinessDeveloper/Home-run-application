<?= $this->extend('dashboard/dashboard-layout') ?>


<?= $this->section('css-styles') ?>
<!-- DataTables -->
<link rel="stylesheet" href="<?= base_url('public/dashboard') ?>/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
<?= $this->endSection() ?>

<?= $this->section('content') ?>

<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Orders Management
        <small>List</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="<?= base_url('dashboard') ?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="<?= base_url('dashboard') ?>">Orders Management</a></li>
        <li class="active">List</li>
    </ol>
</section>

<!-- Main content -->
<section class="content">

    <div class="row">
        <div class="col-xs-12">

            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Data Table</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Client Name</th>
                                <th>Unit Type</th>
                                <th>Total Cost</th>
                                <th>Created at</th>
                                <th>Deadline Deleivery</th>
                                <th>Order Status</th>
                                <th>#</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($records as $key => $record) : ?>
                                <tr>
                                    <td><?= $key + 1 ?></td>
                                    <td><?= $record['client_full_name'] ?></td>
                                    <td><?= $record['real_estate_unit_type'] ?></td>
                                    <td><?= $record['total_unit_finishing_cost'] ?></td>
                                    <td><?= $record['client_order_created_at'] ?></td>
                                    <td><?= $record['proposed_deadline_for_deleivery'] ?></td>
                                    <td><?= $record['client_order_status'] ?></td>
                                    <td>
                                        <a href="<?= base_url('dashboard/orders/show/' . $record['client_order_id']) ?>">
                                            <button class="btn btn-xs btn-primary">
                                                <i class="fa fa-eye"></i> View
                                            </button>
                                        </a>
                                        <?php if ($record['client_order_status']) { ?>
                                            <?php if ($record['client_order_status'] != "Order Canceled" &&  $record['client_order_status'] != "New Order" &&  $record['client_order_status'] != "Contracted") { ?>
                                                <a href="<?= base_url('dashboard/contracts/create/' . $record['client_order_id']) ?>">
                                                    <button class="btn btn-xs btn-primary">
                                                        <i class="fa fa-print"></i> Create a contract
                                                    </button>
                                                </a>
                                            <?php } ?>
                                        <?php } ?>
                                        <a href="<?= base_url('dashboard/orders/update/' . $record['client_order_id']) ?>">
                                            <button class="btn btn-xs btn-warning">
                                                <i class="fa fa-edit"></i> Edit
                                            </button>
                                        </a>
                                        <a href="<?= base_url('dashboard/orders/delete/' . $record['client_order_id']) ?>">
                                            <button class="btn btn-xs btn-danger">
                                                <i class="fa fa-times"></i> Delete
                                            </button>
                                        </a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->

</section>
<!-- /.content -->

<?= $this->endSection() ?>

<?= $this->section('js-scripts') ?>
<!-- DataTables -->
<script src="<?= base_url('public/dashboard') ?>/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="<?= base_url('public/dashboard') ?>/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>

<!-- page script -->
<script>
    $(function() {
        $('#example1').DataTable()
        $('#example2').DataTable({
            'paging': true,
            'lengthChange': false,
            'searching': false,
            'ordering': true,
            'info': true,
            'autoWidth': false
        })
    })
</script>
<?= $this->endSection() ?>