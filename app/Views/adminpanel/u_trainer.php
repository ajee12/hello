<?= $this->extend('admin/admintemplate'); ?>
<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col">
            <h2 class="my-3">Daftar Trainer</h2>
            <hr>
            <form action="/admin/saveTrainer/<?= $trainer['id']; ?>" method="post" enctype="multipart/form-data">
                <?= csrf_field(); ?>

                <label for="id_user"></label>
                <input type="hidden" value="<?= session()->get('id'); ?>" id="id_user" name=" id_user"> <?= form_open('/home/trainer') ?>

                <div class="form-group row">
                    <label for="nama" class="col-sm-3 col-form-label">Nama</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control  <?= ($validation->hasError('nama')) ?
                                                                    'is-invalid' : ''; ?> " id="nama" name="nama" autofocus value="<?= old('nama'); ?>">

                        <div class="invalid-feedback">
                            <?= $validation->getError('nama'); ?>
                        </div>

                    </div>

                </div>

                <div class="form-group row">
                    <label for="no_hp" class="col-sm-3 col-form-label">No hp</label>
                    <div class="col-sm-9">
                        <input type="number" min="0" class="form-control  <?= ($validation->hasError('no_hp')) ?
                                                                                'is-invalid' : ''; ?> " id="no_hp" name="no_hp" autofocus value="<?= old('no_hp'); ?>">

                        <div class="invalid-feedback">
                            <?= $validation->getError('no_hp'); ?>
                        </div>

                    </div>
                </div>
                <div class="form-group row">
                    <label for="alamat" class="col-sm-3 col-form-label">Alamat</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control <?= ($validation->hasError('alamat')) ?
                                                                    'is-invalid' : ''; ?>" id="alamat" name="alamat" autofocus value="<?= old('Alamat'); ?>">

                        <div class="invalid-feedback">
                            <?= $validation->getError('alamat'); ?>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="gambar" class="col-sm-3 col-form-label">Proposal </label>
                    <div class="col-sm-9">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input <?= ($validation->hasError('proposal')) ?
                                                                            'is-invalid' : ''; ?>" id="proposal" name="proposal" onchange="previewImg()">
                            <div class="invalid-feedback">
                                <?= $validation->getError('proposal'); ?>
                            </div>
                            <label class="custom-file-label" for="Proposal">Pilih File..</label>
                        </div>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="jn_trainer" class="col-sm-3 col-form-label">Trainer</label>
                    <div class="col-sm-9">


                        <select class="form-control <?= ($validation->hasError('jn_trainer')) ?
                                                        'is-invalid' : ''; ?>" id="jn_trainer" name="jn_trainer">
                            <option>Pilih Trainer</option>
                            <option>Webinar</option>
                            <option>Pelatihan</option>
                            <option>Vidio Trainer</option>
                        </select>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Daftar</button>


        </div>
    </div>
</div>

</form>
</div>
</div>
</div>
</div>

<?= $this->endSection(); ?>