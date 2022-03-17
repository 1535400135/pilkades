<!-- Tampilkan pesan selamat datang -->

<?php
  // echo '<pre>';
  // print_r($this->session->userdata());
  // echo '</pre>';
?>
<?php
        $labels[] = $this->session->userdata('thn_data');
        $hasil1[] = $rekapsatu;
        $hasil2[] = $rekapdua;
        $hasil3[] = $rekaptiga;
        $hasil4[] = $rekapempat;
        $hasil5[] = $rekaplima;
        $hasil6[] = $rekapenam;
        // $hasil2[] = (float) $data->B;
        // $hasil3[] = (float) $data->C;
        // $hasil4[] = (float) $data->D;
        // $hasil5[] = (float) $data->E;
        // if ($data->SUARA > 0) {
        //     $stok[] = (float) ($data->SUARA /($data->DPTL+$data->DPTP))*100;
        // } else { $stok[] = 0;}
?>
<div class="row">
  <div class="col-lg-4 col-xs-6">
    <div class="small-box bg-aqua">
      <div class="inner">
        <h3><?php echo number_format_short($jmlcalon); ?></h3>
        <p>Data Calon</p>
      </div>
      <div class="icon">
        <i class="ion ion-document-text "></i>
      </div>
    </div>
  </div>
  <div class="col-lg-4 col-xs-6">
    <div class="small-box bg-red">
      <div class="inner">
        <h3><?php echo number_format_short($warga); ?></h3>
        <p>Data Pemilih</p>
      </div>
      <div class="icon">
        <i class="ion ion-document-text "></i>
      </div>
    </div>
  </div>
  <!-- ./col -->  
  <div class="col-lg-4 col-xs-6">
    <!-- small box -->
    <div class="small-box bg-green">
      <div class="inner">
        <?php
        if (($jmlvote > 0)) {
          $persen = ($jmlvote / $warga) * 100;
        } else {
          $persen = 0;
        }
        ?>
        <h3><?php echo number_format($persen).'%'; ?></h3>
        <p>Tingkat Partisipasi</p>
      </div>
      <div class="icon">
        <i class="ion ion-stats-bars"></i>
      </div>
    </div>
  </div>
  <!-- ./col -->
</div><!-- ./row -->
<div class="row">
  <div class="col-md-12 text-center">
    <h3>Grafik Persentase Perolehan Suara</h3>
    <div>
        <canvas id="canvassatu"></canvas>
    </div>
  </div>
</div>

<!-- FLASH MESSAGE -->
<div class="msg" style="display:none;">
  <?php echo $this->session->flashdata('msg'); ?>
</div>

<script type="text/javascript" src="<?php echo base_url().'assets/plugins/chartjs/Chart.min.js'?>"></script>
<script type="text/javascript" src="<?php echo base_url().'assets/plugins/chartjs/utils.js'?>"></script>
<script>
    var color = Chart.helpers.color;
    var ctx = document.getElementById("canvassatu").getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: <?php echo json_encode($labels);?>,
            datasets: [{
                label: 'Calon No 1',
                data: <?php echo json_encode($hasil1);?>,
                    backgroundColor: color(window.chartColors.red).alpha(0.8).rgbString(),
                    borderColor: window.chartColors.red,
                    borderWidth: 1
                },
                {
                    label: 'Calon No 2',
                    data: <?php echo json_encode($hasil2);?>,
                    backgroundColor: color(window.chartColors.orange).alpha(0.8).rgbString(),
                    borderColor: window.chartColors.orange,
                    borderWidth: 1
                },
                {
                    label: 'Calon No 3',
                    data: <?php echo json_encode($hasil3);?>,
                    backgroundColor: color(window.chartColors.purple).alpha(0.8).rgbString(),
                    borderColor: window.chartColors.purple,
                    borderWidth: 1
                },
                {
                    label: 'Calon No 4',
                    data: <?php echo json_encode($hasil4);?>,
                    backgroundColor: color(window.chartColors.blue).alpha(0.8).rgbString(),
                    borderColor: window.chartColors.blue,
                    borderWidth: 1
                },
                {
                    label: 'Calon No 5',
                    data: <?php echo json_encode($hasil5);?>,
                    backgroundColor: color(window.chartColors.grey).alpha(1.0).rgbString(),
                    borderColor: window.chartColors.grey,
                    borderWidth: 1
                },
                {
                    label: 'Calon No 6',
                    data: <?php echo json_encode($hasil6);?>,
                    backgroundColor: color(window.chartColors.green).alpha(0.8).rgbString(),
                    borderColor: window.chartColors.grey,
                    borderWidth: 1
                },
            ]
        },
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero:true
                    }
                }]
            },
        }
    });

</script>

