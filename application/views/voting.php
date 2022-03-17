<div class="row">
<!-- FLASH MESSAGE -->
    <div class="col-md-12 msg" style="display:none;">
        <?php echo $this->session->flashdata('msg'); ?> 
    </div>
    <form action="<?= base_url('pemilihan/simpan') ?>" class="form-horizontal" method="post">
        <?php foreach ($calon as $data) { ?>
        <div class="col-md-6 center">
            <div class="panel-group">
                <div class="panel panel-default">
                    <div class="panel-heading"><h4>Nomor Urut <?= $data->nourut ?></h4></div>
                    <div class="panel-body">
                        <div class="col-md-5">
                            <img src="<?= base_url('upload/'.$data->photo) ?>" alt="" height="300" width="200">
                        </div>
                        <div class="col-md-7">
                            <ul>
                                <li>Nama = <b><?= $data->nama ?></b></li>
                                <li>Tempat Lahir = <b><?= $data->tmp_lahir ?></b></li>
                                <li>Tanggal Lahir = <b><?= $data->tgl_lahir ?></b></li>
                                <li>Agama = <b><?= $data->agama?></b></li>
                                <li>Alamat = <b><?= $data->alamat1 ?></b></li>
                                <li>Pendidikan = <b><?= $data->nama_pendidikan ?></b></li>
                                <li>Pekerjaan = <b><?= $data->nama_pekerjaan ?></b></li>
                                <li>Visi = <b><?= $data->organisasi ?></b></li>
                                <li>Misi = <b><?= $data->keterangan ?></b></li>
                            </ul>
                            <input type="radio" class="form-check-input" name="vote" value="<?= $data->id ?>" id="vote" required>
                            <label class="form-check-label" for="vote">Pilih <?= $data->nourut ?></label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php } ?>
        <div class="form-group">
            <div class="col-md-6">
                <input name="e" placeholder="Masukan Nilai E" class="form-control" type="number" required>
                <span class="help-block"></span>
            </div>
            <div class="col-md-6">
                <input name="n" placeholder="Masukan Nilai N" class="form-control" type="number" required>
                <span class="help-block"></span>
            </div>
        </div>
        <div class="form-group">
            
        </div>
        <div class="form-group">
            <div class="col-md-6">
                <a href="<?= base_url('pemilihan') ?>" class="form-control btn btn-warning">Reset</a>
            </div>
            <div class="col-md-6">
                <button type="submit" class="form-control btn btn-primary"> <i class="glyphicon glyphicon-ok"></i> Simpan</button>
            </div>
        </div>
    </form>
</div>