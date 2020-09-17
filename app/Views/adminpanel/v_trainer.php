<?= $this->extend('admin/admintemplate'); ?>
<?= $this->section('content'); ?>
<div class="container">
    <h2 class="mt-2"> Detail Trainer</h2>
    <div class="row-3">
        <div class="col-6">
            <div class="card mb-3" style="max-width: 540px;">
                <div class="card-body">
                    <h5 class="card-text text-dark"><b>Nama : <?= $trainer['nama']; ?></b></h5>
                    <h5 class="card-text text-dark"><b>ID User : <?= $trainer['id_user']; ?></b></h5>
                    <h5 class="card-text text-dark"><b>Alamat : <?= $trainer['alamat']; ?> </b></h5>
                    <h5 class="card-text text-dark"><b>No_hp : <?= $trainer['no_hp']; ?> </b></h5>
                    <h5 class="card-text text-dark"><b>Proposal : <?= $trainer['proposal']; ?> </b></h5>
                    <h5 class="card-text text-dark"><b>Jenis Trainer : <?= $trainer['jn_trainer']; ?> </b></h5>
                </div>
            </div>
            <a href="/admin/u_trainer/<?= $trainer['id']; ?>" class=" btn btn-warning">Edit </a>



            <a href="/admin/i_anggota" class="btn btn-primary">Kembali Ke Info Trainer</a>
        </div>
    </div>
</div>
</div>
</div>



<?= $this->endSection(); ?>