<?= $this->extend('admin/admintemplate'); ?>
<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col">
            <h2 class="mb-2">Info Audience</h2>
            <!-- Begin Page Content -->
            <div class="container-fluid">
                <!-- Page Heading -->





                <?php if (session()->getFlashdata('warning')) : ?>
                    <div class="alert alert-danger" role="alert">

                        <?= session()->getFlashdata('warning'); ?>
                    </div>
                <?php endif; ?>


                <!-- DataTales Example -->
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Data Tables Audience</h6>

                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>Nama</th>
                                        <th>ID User</th>
                                        <th>Alamat</th>
                                        <th>No hp</th>
                                        <th>Pekerjaan</th>
                                        <th>AKSI</th>
                                    </tr>

                                <tbody>
                                    <?php foreach ($audience as $au) : ?>
                                        <tr>

                                            <td><?= $au['nama']; ?></td>
                                            <td><?= $au['id_user']; ?></td>
                                            <td><?= $au['alamat']; ?></td>
                                            <td><?= $au['no_hp']; ?></td>
                                            <td><?= $au['pekerjaan']; ?></td>

                                            <td>


                                                <form action="/admin/deleteaudience/<?= $au['id']; ?>" method="post" class="d-inline">
                                                    <?= csrf_field(); ?>
                                                    <input type="hidden" name="_method" value="DELETE">
                                                    <button type="submit" class="btn btn-danger d-inline " onclick="return confirm('apakah anda yakin?');"><i class="fas fa-fw fa-trash"></i> </button> </form> <br><br>




                                            </td>
                                        </tr>
                                    <?php endforeach ?>





                                    <!-- Scroll to Top Button-->
                                    <a class="scroll-to-top rounded" href="#page-top">
                                        <i class="fas fa-angle-up"></i>
                                    </a>
                        </div>
                    </div>
                </div>

                <?= $this->endSection(); ?>