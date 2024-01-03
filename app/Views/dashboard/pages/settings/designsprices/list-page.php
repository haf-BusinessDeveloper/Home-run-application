<?= $this->extend('dashboard/dashboard-layout') ?>


<?= $this->section('css-styles') ?>
<!-- DataTables -->
<link rel="stylesheet" href="<?= base_url('public/dashboard') ?>/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
<?= $this->endSection() ?>

<?= $this->section('content') ?>

<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Designs prices Settings
        <small>List</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="<?= base_url('dashboard') ?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="<?= base_url('dashboard') ?>">Designs prices Settings</a></li>
        <li class="active">List</li>
    </ol>
</section>

<!-- Main content -->
<section class="content">

    <div class="row">

        <?php
        $session = session();
        $deleted_successfuly = $session->getFlashdata('deleted_successfuly');
        if ($deleted_successfuly) : ?>
            <div class="col-md-12">
                <div class="alert alert-danger alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <h4><i class="icon fa fa-ban"></i> Alert!</h4>
                    data deleted successfuly !
                </div>
            </div>
        <?php endif; ?>
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
                                <th>design title</th>
                                <th>design image</th>
                                <th>price per square meter</th>
                                <th>#</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($records as $key => $record): ?>
                            <tr>
                                <td><?= $key + 1 ?></td>
                                <td><?= $record['design_title'] ?></td>
                                <td><img width="200px" src="<?= base_url('writable/uploads/') ?><?= $record['design_image'] ?>" alt=""></td>
                                <td><?= $record['price_per_square_meter'] ?></td>
                                <td>
                                    <a href="<?= base_url('dashboard/settings/Designsprices/show/') ?><?= $record['design_price_id'] ?>">
                                        <button class="btn btn-xs btn-primary">
                                            <i class="fa fa-eye"></i> View
                                        </button>
                                    </a>
                                    <a href="<?= base_url('dashboard/settings/Designsprices/update/') ?><?= $record['design_price_id'] ?>">
                                        <button class="btn btn-xs btn-warning">
                                            <i class="fa fa-edit"></i> Edit
                                        </button>
                                    </a>
                                    <a href="<?= base_url('dashboard/settings/Designsprices/delete/') ?><?= $record['design_price_id'] ?>">
                                        <button class="btn btn-xs btn-danger">
                                            <i class="fa fa-times"></i> Delete
                                        </button>
                                    </a>
                                </td>
                            </tr>
                            <?php endforeach;
                            if (! $records) :
                            ?>
                                <tr>
                                    <td colspan="5" class="text-center">There is no data to display.</td>
                                </tr>
                            <?php endif; ?>
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>#</th>
                                <th>design title</th>
                                <th>design image</th>
                                <th>price per square meter</th>
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