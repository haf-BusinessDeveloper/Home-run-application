<?= $this->extend('dashboard/dashboard-layout') ?>


<?= $this->section('css-styles') ?>
<!-- DataTables -->
<link rel="stylesheet" href="<?= base_url('public/dashboard') ?>/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
<?= $this->endSection() ?>

<?= $this->section('content') ?>

<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Room types Settings
        <small>Trash</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="<?= base_url('dashboard') ?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="<?= base_url('dashboard') ?>">Room types Settings</a></li>
        <li class="active">Trash</li>
    </ol>
</section>

<!-- Main content -->
<section class="content">

    <div class="row">
        <div class="col-xs-12">

            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Data Table</h3>
                    <button class="btn btn-xs btn-danger pull-right"> <i class="fa fa-trash-o"></i> Empty Trash</button>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Room type</th>
                                <th>#</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($records as $key => $record) : ?>
                                <tr>
                                    <td><?= $key + 1 ?></td>
                                    <td><?= $record['room_type_title'] ?></td>
                                    <td>
                                        <a href="">
                                            <button class="btn btn-xs btn-info">
                                                <i class="fa fa-undo"></i> Undo
                                            </button>
                                        </a>
                                        <a href="">
                                            <button class="btn btn-xs btn-danger">
                                                <i class="fa fa-times"></i> Delete
                                            </button>
                                        </a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>#</th>
                                <th>Room type</th>
                                <th>#</th>
                            </tr>
                        </tfoot>
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