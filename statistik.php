<?php
function rand_color() {
    return '#' . str_pad(dechex(mt_rand(0, 0xFFFFFF)), 6, '0', STR_PAD_LEFT);
}
include('head.php');
//echo date('m/Y');
$bulan       = $db->query("SELECT bulan FROM penjualan ");
$penghasilan = $db->query("SELECT hasil FROM penjualan ");

$hitung = $db->query("SELECT MAX(hasil) AS hasil_penjualan FROM penjualan");
$hitung_penjualan = mysqli_fetch_array($hitung);
$hitung1 = $db->query("SELECT max(harga_sold) as tertinggi FROM `produk` WHERE status='sold' AND harga_sold>=400");
$hitung_penjualan1 = mysqli_fetch_array($hitung1);
$potong = explode(".", $hitung_penjualan1["tertinggi"]);



// model hitung
$diatas10 = $db->query("SELECT COUNT(harga_sold) AS hasil_penjualan,model FROM `produk` WHERE status= 'sold' AND harga_sold<= 50  AND tgl_sold LIKE '%".date('m/Y')."%'");
$data10 = $diatas10->fetch_assoc();
$diatas50 = $db->query("SELECT COUNT(harga_sold) AS hasil_penjualan,model FROM `produk` WHERE status= 'sold' AND harga_sold>= 50 AND harga_sold<=100 AND tgl_sold LIKE '%".date('m/Y')."%'");
$data50 = $diatas50->fetch_assoc();
$diatas100 = $db->query("SELECT COUNT(harga_sold) AS hasil_penjualan,model FROM `produk` WHERE status= 'sold' AND harga_sold>= 101 AND harga_sold<=200 AND tgl_sold LIKE '%".date('m/Y')."%'");
$data100 = $diatas100->fetch_assoc();
$diatas200 = $db->query("SELECT COUNT(harga_sold) AS hasil_penjualan,model FROM `produk` WHERE status= 'sold' AND harga_sold>= 201 AND harga_sold<=300 AND tgl_sold LIKE '%".date('m/Y')."%'");
$data200 = $diatas200->fetch_assoc();
$diatas300 = $db->query("SELECT COUNT(harga_sold) AS hasil_penjualan,model FROM `produk` WHERE status= 'sold' AND harga_sold>= 301 AND harga_sold<=400 AND tgl_sold LIKE '%".date('m/Y')."%'");
$data300 = $diatas300->fetch_assoc();
$diatas400 = $db->query("SELECT COUNT(harga_sold) AS hasil_penjualan,model FROM `produk` WHERE status= 'sold' AND harga_sold>= 401  AND tgl_sold LIKE '%".date('m/Y')."%'");
$data400 = $diatas400->fetch_assoc();

$a = array($data10["hasil_penjualan"], $data50["hasil_penjualan"], $data100["hasil_penjualan"], $data200["hasil_penjualan"], $data300["hasil_penjualan"], $data400["hasil_penjualan"]);
$b = 0;
foreach ($a as $key=>$val) {
    if ($val > $b) {
        $b = $val;
    }
}

?>

<!-- Container Fluid-->
<div class="container-fluid" id="container-wrapper">
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">R&J Motosport </h1>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="./">Tambah User</a></li>
    </ol>
  </div>

  <div class="row">
    <div class="col-lg-8">
      <div class="card shadow mb-4">
        <div class="card-header py-3">
          <h6 class="m-0 font-weight-bold text-primary">Penjualan Perbulan</h6>
        </div>
        <div class="card-body">
          <div class="chart-bar">
            <canvas id="myBarChart"></canvas>
          </div>
          <hr>
          Persentase Penjualan Model Motor Pada Tahun <code><?php echo date("Y"); ?></code> .
        </div>
      </div>
    </div>
    <!-- Donut Chart -->
    <div class="col-lg-4" href="cabang">
      <div class="card shadow mb-4">
        <div class="card-header py-3">
          <h6 class="m-0 font-weight-bold text-primary">Sold by Model</h6>
        </div>
        <div class="card-body">
          <div class="col-sm-4">
          <select onchange="location = this.value;" class="form-control form-control-sm">
           <?php if(isset($_GET['cabang'])){ echo "<option value='statistik.php?cabang=".$_GET['cabang']."'>".$_GET['cabang']."</option>"; echo '<option value="statistik.php">Semua</option>';} else{  echo '<option value="statistik.php">Semua</option>'; } ?>
 <option value="statistik.php?cabang=Kemang#cabang">Kemang</option>
 <option value="statistik.php?cabang=Duren Tiga#cabang">Duren Tiga</option>
 <option value="statistik.php?cabang=Bekasi#cabang">Bekasi</option>
 <option value="statistik.php?cabang=BSD#cabangl">BSD</option>
</select>
            </div>
          <div class="chart-pie pt-4">
            
            <canvas id="myPieChart"></canvas>
          </div>
          <hr>
          Persentase Penjualan Model Motor Pada Bulan <code><?php echo date("m"); ?></code> .
        </div>
      </div>
    </div>
  </div>

 <div class="row">
    <div class="col-lg-8">
      <div class="card shadow mb-4">
        <div class="card-header py-3">
          <h6 class="m-0 font-weight-bold text-primary">Range Harga per Sold</h6>
        </div>
        <div class="card-body">
          <div class="chart-bar">
            <canvas id="soldChart"></canvas>
          </div>
          <hr>
         
        </div>
      </div>
    </div>
    <div class="col-lg-4" href="cabang">
      <div class="card shadow mb-4">
        <div class="card-header py-3">
          <h6 class="m-0 font-weight-bold text-primary">Sold by Model</h6>
        </div>
        <div class="card-body">
          <div class="col-sm-4">
          <select onchange="location = this.value;" class="form-control form-control-sm">
           <?php if(isset($_GET['cabang'])){ echo "<option value='statistik.php?cabang=".$_GET['cabang']."'>".$_GET['cabang']."</option>"; echo '<option value="statistik.php">Semua</option>';} else{  echo '<option value="statistik.php">Semua</option>'; } ?>
 <option value="statistik.php?cabang=Kemang#cabang">Kemang</option>
 <option value="statistik.php?cabang=Duren Tiga#cabang">Duren Tiga</option>
 <option value="statistik.php?cabang=Bekasi#cabang">Bekasi</option>
 <option value="statistik.php?cabang=BSD#cabangl">BSD</option>
</select>
            </div>
          <div class="chart-pie pt-4">
            
            <canvas id="rangechart"></canvas>
          </div>
          <hr>
          Persentase Penjualan Model Motor Pada Bulan <code><?php echo date("m"); ?></code> .
        </div>
      </div>
    </div>
</div>
</div>
<!--Row-->

<?php include('footer.php'); ?>
<script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-datalabels@2.0.0  "></script>
<script src="js/image-uploader.min.js"></script>
<script>
  $('.input-images-2').imageUploader();
</script>

<script>
  // Set new default font family and font color to mimic Bootstrap's default styling

 var ctx = document.getElementById("myPieChart");
  var piearray = [<?php 
        if(isset($_GET['cabang'])){
          $cabang = $_GET['cabang'];
         // $merk       = $db->query("SELECT merk FROM penjualan_model WHERE bulan='".date("m")."' AND cabang='$cabang'");
          $model = $db->query("select model,count(model) as hasil
          from penjualan_model  where cabang like '%".$cabang."' 
          group by model asc;");
       
        while ($p = mysqli_fetch_array($model)) { echo '"' . $p['hasil'] . '",';}}else{
          $model = $db->query("select model,count(model) as hasil
          from penjualan_model  where bulan='".date("m")."' 
          group by model asc;");
          while ($p = mysqli_fetch_array($model)) { echo '"' . $p['hasil'] . '",';}

        } ?>]
        piearray.sort(function(a, b) {
  return a - b;
});

var arr = piearray;
  // Pie Chart Example
  var ctx = document.getElementById("myPieChart");
  var myPieChart = new Chart(ctx, {
    type: 'pie',
    data: {
      labels: [<?php 
        if(isset($_GET['cabang'])){
          $cabang = $_GET['cabang'];
         // $merk       = $db->query("SELECT merk FROM penjualan_model WHERE bulan='".date("m")."' AND cabang='$cabang'");
          $model = $db->query("select model,count(model) as hasil
          from penjualan_model  where cabang like '%".$cabang."' 
          group by model ASC ORDER BY `hasil` ASC;");
       
        while ($p = mysqli_fetch_array($model)) { echo '"' . $p['model'] . '",';}}else{
          $model = $db->query("select model,count(model) as hasil
          from penjualan_model  where bulan='".date("m")."' 
         group by model ASC ORDER BY `hasil` ASC");
          while ($p = mysqli_fetch_array($model)) { echo '"' . $p['model'] . '",';}

        } ?>],
      datasets: [{
        data: [<?php 
        if(isset($_GET['cabang'])){
          $cabang = $_GET['cabang'];
         // $merk       = $db->query("SELECT merk FROM penjualan_model WHERE bulan='".date("m")."' AND cabang='$cabang'");
          $model = $db->query("select model,count(model) as hasil
          from penjualan_model  where cabang like '%".$cabang."' 
          group by model ASC ORDER BY `hasil` ASC;");
       
        while ($p = mysqli_fetch_array($model)) { echo '"' . $p['hasil'] . '",';}}else{
          $model = $db->query("select model,count(model) as hasil
          from penjualan_model  where bulan='".date("m")."' 
          group by model ASC ORDER BY `hasil` ASC;");
          while ($p = mysqli_fetch_array($model)) { echo '"' . $p['hasil'] . '",';}

        } ?>],
        backgroundColor: [<?php $model = $db->query("select model,count(model) as hasil
          from penjualan_model  where bulan='".date("m")."' 
          group by model ASC ORDER BY `hasil` ASC;");
          while ($p = mysqli_fetch_array($model)) { echo '"' . rand_color() . '",';}

         ?>],
        hoverBackgroundColor: [<?php $model = $db->query("select model,count(model) as hasil
          from penjualan_model  where bulan='".date("m")."' 
          group by model desc;");
          while ($p = mysqli_fetch_array($model)) { echo '"' . rand_color() . '",';}

         ?>],
        hoverBorderColor: "rgba(234, 236, 244, 1)",
      }],
    },
    options: {
      maintainAspectRatio: false,
      // dispal label
      plugins: {
        datalabels: {
          formatter: (value) => {
            return value + '%';
          }
        }
      },
      tooltips: {
        backgroundColor: "rgb(255,255,255)",
        bodyFontColor: "#858796",
        borderColor: '#dddfeb',
        borderWidth: 1,
        xPadding: 15,
        yPadding: 15,
        displayColors: true,
        caretPadding: 10,
      },
      legend: {
        display: true
      },
     // cutoutPercentage: 0,
    },
  });
</script>
<script>
  // Set new default font family and font color to mimic Bootstrap's default styling
         // Set new default font family and font color to mimic Bootstrap's default styling
         Chart.defaults.global.defaultFontFamily = 'Nunito', '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
  Chart.defaults.global.defaultFontColor = '#858796';

  function number_format(number, decimals, dec_point, thousands_sep) {
    // *     example: number_format(1234.56, 2, ',', ' ');
    // *     return: '1 234,56'
    number = (number + '').replace(',', '').replace(' ', '');
    var n = !isFinite(+number) ? 0 : +number,
      prec = !isFinite(+decimals) ? 0 : Math.abs(decimals),
      sep = (typeof thousands_sep === 'undefined') ? ',' : thousands_sep,
      dec = (typeof dec_point === 'undefined') ? '.' : dec_point,
      s = '',
      toFixedFix = function(n, prec) {
        var k = Math.pow(10, prec);
        return '' + Math.round(n * k) / k;
      };
    // Fix for IE parseFloat(0.55).toFixed(0) = 0;
    s = (prec ? toFixedFix(n, prec) : '' + Math.round(n)).split('.');
    if (s[0].length > 3) {
      s[0] = s[0].replace(/\B(?=(?:\d{3})+(?!\d))/g, sep);
    }
    if ((s[1] || '').length < prec) {
      s[1] = s[1] || '';
      s[1] += new Array(prec - s[1].length + 1).join('0');
    }
    return s.join(dec);
  }

  // Bar Chart Example
  var ctx = document.getElementById("myBarChart");
  var myBarChart = new Chart(ctx, {
    type: 'bar',
    data: {
      labels:  ["Januari", "Februari", "Maret", "April", "Mey", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember"],
      datasets: [{
        label: "Jumlah",
        backgroundColor: "#4e73df",
        hoverBackgroundColor: "#2e59d9",
        borderColor: "#4e73df",
        data: [<?php while ($p = mysqli_fetch_array($penghasilan)) { echo '"' . $p['hasil'] . '",';}?>],
      }],
    },
  options: {
    layout: {
      padding: {
        left: 0,
        right: 0,
        top: 15,
        bottom: 0
      }
    },
    events: [],
    responsive: true,
    maintainAspectRatio: false,
    legend: {
      display: false
    },
    scales: {
      yAxes: [{
        ticks: {
          beginAtZero: true,
          display: false
        }
      }]
    },
    animation: {
      duration: 1,
      onComplete: function() {
        var chartInstance = this.chart,
          ctx = chartInstance.ctx;

        ctx.font = Chart.helpers.fontString(Chart.defaults.global.defaultFontSize, Chart.defaults.global.defaultFontStyle, Chart.defaults.global.defaultFontFamily);
        ctx.textAlign = 'center';
        ctx.textBaseline = 'bottom';

        this.data.datasets.forEach(function(dataset, i) {
          var meta = chartInstance.controller.getDatasetMeta(i);
          meta.data.forEach(function(bar, index) {
            if (dataset.data[index] > 0) {
              var data = dataset.data[index];
              ctx.fillText(data, bar._model.x, bar._model.y);
            }
          });
        });
      }
    }
  }
});
</script>

<script>
  // Set new default font family and font color to mimic Bootstrap's default styling
         // Set new default font family and font color to mimic Bootstrap's default styling
         Chart.defaults.global.defaultFontFamily = 'Nunito', '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
  Chart.defaults.global.defaultFontColor = '#858796';

  function number_format(number, decimals, dec_point, thousands_sep) {
    // *     example: number_format(1234.56, 2, ',', ' ');
    // *     return: '1 234,56'
    number = (number + '').replace(',', '').replace(' ', '');
    var n = !isFinite(+number) ? 0 : +number,
      prec = !isFinite(+decimals) ? 0 : Math.abs(decimals),
      sep = (typeof thousands_sep === 'undefined') ? ',' : thousands_sep,
      dec = (typeof dec_point === 'undefined') ? '.' : dec_point,
      s = '',
      toFixedFix = function(n, prec) {
        var k = Math.pow(10, prec);
        return '' + Math.round(n * k) / k;
      };
    // Fix for IE parseFloat(0.55).toFixed(0) = 0;
    s = (prec ? toFixedFix(n, prec) : '' + Math.round(n)).split('.');
    if (s[0].length > 3) {
      s[0] = s[0].replace(/\B(?=(?:\d{3})+(?!\d))/g, sep);
    }
    if ((s[1] || '').length < prec) {
      s[1] = s[1] || '';
      s[1] += new Array(prec - s[1].length + 1).join('0');
    }
    return s.join(dec);
  }

  // Bar Chart Example
  var ctx = document.getElementById("soldChart");
  var myBarChart = new Chart(ctx, {
    type: 'bar',
    data: {
      labels:  ["<50", "50-100", "101 - 200", "201 - 300", "301 - 400", ">401"],
      datasets: [{
        label: "Jumlah",
        backgroundColor: "<?php echo rand_color(); ?>",
        hoverBackgroundColor: "#2e59d9",
        borderColor: "#4e73df",
        data: ["<?php echo $data10["hasil_penjualan"]; ?>","<?php echo $data50["hasil_penjualan"]; ?>","<?php echo $data100["hasil_penjualan"]; ?>","<?php echo $data200["hasil_penjualan"]; ?>","<?php echo $data300["hasil_penjualan"]; ?>","<?php echo $data400["hasil_penjualan"]; ?>",],
      }],
    },
  options: {
    layout: {
      padding: {
        left: 0,
        right: 0,
        top: 15,
        bottom: 0
      }
    },
    events: [],
    responsive: true,
    maintainAspectRatio: false,
    legend: {
      display: false
    },
    scales: {
      yAxes: [{
        ticks: {
          beginAtZero: true,
          display: false
        }
      }]
    },
    animation: {
      duration: 1,
      onComplete: function() {
        var chartInstance = this.chart,
          ctx = chartInstance.ctx;

        ctx.font = Chart.helpers.fontString(Chart.defaults.global.defaultFontSize, Chart.defaults.global.defaultFontStyle, Chart.defaults.global.defaultFontFamily);
        ctx.textAlign = 'center';
        ctx.textBaseline = 'bottom';

        this.data.datasets.forEach(function(dataset, i) {
          var meta = chartInstance.controller.getDatasetMeta(i);
          meta.data.forEach(function(bar, index) {
            if (dataset.data[index] > 0) {
              var data = dataset.data[index];
              ctx.fillText(data, bar._model.x, bar._model.y);
            }
          });
        });
      }
    }
  }
});


</script>


<script>
  // Set new default font family and font color to mimic Bootstrap's default styling

 var ctx = document.getElementById("rangechart");
  var piearray = [<?php 
        if(isset($_GET['cabang'])){
          $cabang = $_GET['cabang'];
         // $merk       = $db->query("SELECT merk FROM penjualan_model WHERE bulan='".date("m")."' AND cabang='$cabang'");
          $model = $db->query("select model,count(model) as hasil
          from penjualan_model  where cabang like '%".$cabang."' 
          group by model asc;");
       
        while ($p = mysqli_fetch_array($model)) { echo '"' . $p['hasil'] . '",';}}else{
          $model = $db->query("select model,count(model) as hasil
          from penjualan_model  where bulan='".date("m")."' 
          group by model asc;");
          while ($p = mysqli_fetch_array($model)) { echo '"' . $p['hasil'] . '",';}

        } ?>]
        piearray.sort(function(a, b) {
  return a - b;
});

var arr = piearray;
  // Pie Chart Example
  var ctx = document.getElementById("rangechart");
  var myPieChart = new Chart(ctx, {
    type: 'pie',
    data: {
      labels: [<?php 
        if(isset($_GET['cabang'])){
          $cabang = $_GET['cabang'];
         // $merk       = $db->query("SELECT merk FROM penjualan_model WHERE bulan='".date("m")."' AND cabang='$cabang'");
          $model = $db->query("select model,count(model) as hasil
          from penjualan_model  where cabang like '%".$cabang."' 
          group by model ASC ORDER BY `hasil` ASC;");
       
        while ($p = mysqli_fetch_array($model)) { echo '"' . $p['model'] . '",';}}else{
          $model = $db->query("select model,count(model) as hasil
          from penjualan_model  where bulan='".date("m")."' 
         group by model ASC ORDER BY `hasil` ASC");
          while ($p = mysqli_fetch_array($model)) { echo '"' . $p['model'] . '",';}

        } ?>],
      datasets: [{
        data: [<?php 
        if(isset($_GET['cabang'])){
          $cabang = $_GET['cabang'];
         // $merk       = $db->query("SELECT merk FROM penjualan_model WHERE bulan='".date("m")."' AND cabang='$cabang'");
          $model = $db->query("select model,count(model) as hasil
          from penjualan_model  where cabang like '%".$cabang."' 
          group by model ASC ORDER BY `hasil` ASC;");
       
        while ($p = mysqli_fetch_array($model)) { echo '"' . $p['hasil'] . '",';}}else{
          $model = $db->query("select model,count(model) as hasil
          from penjualan_model  where bulan='".date("m")."' 
          group by model ASC ORDER BY `hasil` ASC;");
          while ($p = mysqli_fetch_array($model)) { echo '"' . $p['hasil'] . '",';}

        } ?>],
        backgroundColor: [<?php $model = $db->query("select model,count(model) as hasil
          from penjualan_model  where bulan='".date("m")."' 
          group by model ASC ORDER BY `hasil` ASC;");
          while ($p = mysqli_fetch_array($model)) { echo '"' . rand_color() . '",';}

         ?>],
        hoverBackgroundColor: [<?php $model = $db->query("select model,count(model) as hasil
          from penjualan_model  where bulan='".date("m")."' 
          group by model desc;");
          while ($p = mysqli_fetch_array($model)) { echo '"' . rand_color() . '",';}

         ?>],
        hoverBorderColor: "rgba(234, 236, 244, 1)",
      }],
    },
    options: {
      maintainAspectRatio: false,
      // dispal label
      plugins: {
        datalabels: {
          formatter: (value) => {
            return value + '%';
          }
        }
      },
      tooltips: {
        backgroundColor: "rgb(255,255,255)",
        bodyFontColor: "#858796",
        borderColor: '#dddfeb',
        borderWidth: 1,
        xPadding: 15,
        yPadding: 15,
        displayColors: true,
        caretPadding: 10,
      },
      legend: {
        display: true
      },
     // cutoutPercentage: 0,
    },
  });
</script>