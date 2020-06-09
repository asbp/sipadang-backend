<div class="container-fluid">

    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"><?= $header ?></h1>
    </div>

    <div class="row">
        <?php if (!empty($error)) { ?>
            <div class="col-lg-12">
                <div class="alert alert-danger">
                    <?= $error ?>
                </div>
            </div>
        <?php } ?>
        <?php if (!empty($success)) { ?>
            <div class="col-lg-12">
                <div class="alert alert-success">
                    <?= $success ?>
                </div>
            </div>
        <?php } ?>
        <div class="col-lg-12">
            <div class="card mb-4">
                <div class="card-header">
                    Form dosen
                </div>
                <form action="<?= $action_url ?>" method="post" class="m-4">
                    <?= @$input_hidden_dosen_id ?>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">NIP</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control"  name="nip" value="<?= @$dosen->nip ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">NIK</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control"  name="nik" value="<?= @$dosen->nik ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">NIDN</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control"  name="nidn" value="<?= @$dosen->nidn ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Gelar Depan</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="gelar_depan" value="<?= @$dosen->gelar_depan ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Nama Dosen</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="nama_dosen" value="<?= @$dosen->nama_dosen_orig ?>" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Gelar Belakang</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="gelar_belakang" value="<?= @$dosen->gelar_belakang ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Jurusan</label>
                        <div class="col-sm-10">
                            <select class="form-control" name="kode_jur" required>
                                <option disabled selected>Pilih jurusan</option>
                                <?php foreach ($option_jurusan as $item) { ?>
                                    <option value="<?= $item->kode_jur ?>" <?= $item->kode_jur == @$dosen->kode_jur ? "selected" : "" ?>><?= "($item->kode_jur) $item->nama_resmi/$item->nama_jur" ?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Jenis Kelamin</label>
                        <div class="col-sm-10">
                            <select class="form-control" name="jk" required>
                                <option disabled selected>Pilih jenis kelamin</option>
                                <option value="L" <?= @$dosen->jk == "L" ? "selected" : "" ?>>Laki-laki</option>
                                <option value="P" <?= @$dosen->jk == "P" ? "selected" : "" ?>>Perempuan</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Aktif?</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control-plaintext"  name="aktif" value="Y" readonly>
                        </div>
                    </div>
                    <button class="btn btn-primary" type="submit" name="add" value="true">Masukkan</button>
                </form>
            </div>
        </div>
    </div>
</div>