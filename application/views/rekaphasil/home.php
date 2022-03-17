<div class="msg" style="display:none;">
  <?php echo @$this->session->flashdata('msg'); ?>
</div>

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
<!-- Default box -->
<div class="box">

    <div class="box-body">
        <div class="panel panel-primary">
            <div class="panel-body">
                <span class="pull-right">
                <button class="btn btn-default" onclick="document.location.reload(true);"><i class="glyphicon glyphicon-refresh"></i> Reload</button>
                </span>
                <?php 
                echo '<h4 class="text-muted"><b>Rekapitulasi Hasil Pemilihan Kepala Desa Tahun '.$this->session->userdata('thn_data').'</b></h4>';
                ?>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 text-center">
                <h3>Grafik Persentase Perolehan Suara</h3>
                <div>
                    <canvas id="canvassatu"></canvas>
                </div>
            </div>
    	</div>
    </div>
    <div class="box-footer">
        &nbsp;
    </div><!-- /.box-footer-->
</div><!-- /.box -->


<!--Load chart js-->
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