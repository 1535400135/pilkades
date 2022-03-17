<!-- Tampilkan pesan selamat datang -->

<?php
  // echo '<pre>';
  // print_r($this->session->userdata());
  // echo '</pre>';
?>
<div class="row">

  <!-- <div class="col-lg-3 col-xs-6">
    <div class="small-box bg-aqua">
      <div class="inner">
        <h3><?php echo number_format_short($jmlpemilih->jmlpilih); ?></h3>
        <p>Data Pemilih</p>
      </div>
      <div class="icon">
        <i class="ion ion-document-text "></i>
      </div>
      <a href="<?php echo base_url('penyelenggara'); ?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
    </div>
  </div> -->
  <!-- ./col -->

  <!-- <div class="col-lg-3 col-xs-6">
    <div class="small-box bg-red">
      <div class="inner">
        <h3><?php echo number_format_short($jmlpemilih->jmlss); ?></h3>
        <p>Surat Suara</p>
      </div>
      <div class="icon">
        <i class="ion ion-social-buffer"></i>
      </div>
      <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
    </div>
  </div> -->
  
</div>
<div class="row">
<!-- FLASH MESSAGE -->
    <div class="col-md-12 msg" style="display:none;">
        <?php echo $this->session->flashdata('msg'); ?> 
    </div>
    <form action="<?= base_url('rsa/simpan') ?>" class="form-horizontal" method="post">
        <input type="hidden" value="" name="id"/> 
        <div class="form-body">
            <div class="form-group">
                <label class="control-label col-md-2">Masukan Nilai P</label>
                <div class="col-md-10">
                    <input name="p" placeholder="Nilai P Wajib Menggunakan Bilangan Prima" class="form-control" type="number">
                    <span class="help-block"></span>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-md-2">Masukan Nilai Q</label>
                <div class="col-md-10">
                    <input name="q" placeholder="Nilai Q Wajib Menggunakan Bilangan Prima dan Tidak Boleh Sama Dengan Nilai P" class="form-control" type="number">
                    <span class="help-block"></span>
                </div>
            </div>
        </div>
    <div class="form-group">
        <div class="col-md-6">
            <a href="<?= base_url('rsa/delete/') ?>" class="form-control btn btn-warning">Reset</a>
        </div>
        <div class="col-md-6">
            <button type="submit" class="form-control btn btn-primary"> <i class="glyphicon glyphicon-ok"></i> Simpan</button>
        </div>
    </div>
  </form>

  <div class="col-md-12">
    <h3>Kunci Publik E = <?= $enk ?></h3>
    <h3>Kunci Publik N = <?= $n ?></h3>
  </div>
</div>