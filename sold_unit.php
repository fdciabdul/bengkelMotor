<?php 
include('head.php');
$statusMsg = '';
if(!isset($_GET['bulan'])){
$arr = $db->query("SELECT * FROM `produk` WHERE `status` LIKE 'sold'  ORDER BY `produk`.`tgl_sold`  ASC");
}else{
    $arr = $db->query("SELECT * FROM `produk` WHERE `status` LIKE 'sold' and tgl_sold LIKE '%/".$_GET['bulan']."/".date('Y')."%' ORDER BY `produk`.`tgl_sold`  ASC");
}
if (isset($_GET['status']))
{
    if ($_SESSION["level"] == 'admin')
    {

        if ($_GET['status'] == 'ready')
        {
            $db->query("UPDATE produk SET status = 'ready' WHERE id = '" . $_GET['id'] . "'");
            $db->query("UPDATE penjualan SET hasil = hasil - 1 WHERE bulan='" . date('m') . "'");
              $db->query("DELETE FROM penjualan_model WHERE id = '" . $_GET['id'] . "'");
            echo "<script>alert('Berhasil Mengubah Status Menjadi Ready')</script>";
            echo "<script>window.location.href='dashboard.php'</script>";
        }
        else if ($_GET['status'] == 'booked')
        {
            $db->query("UPDATE produk SET status = 'booked' WHERE id = '" . $_GET['id'] . "'");
            echo "<script>alert('Berhasil Mengubah Status Menjadi Booked')</script>";
            echo "<script>window.location.href='dashboard.php'</script>";
        }
    }
    else
    {
        echo "<script>alert('Anda Tidak Memiliki Akses')</script>";
    }
}
?>

<!-- Container Fluid-->

<div class="container-fluid" id="container-wrapper">
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">R&J Motosport </h1>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="./">History Login</a></li>
    </ol>
  </div>

  <div class="row">
  <div class="col-lg-12">
              <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Unit Sold</h6>
                </div>
                  <div class="form-group col-md-4">
          <select onchange="location = this.value;" class="form-control">
           <option value="sold_unit"> FILTER BULAN</option>
                <option value="sold_unit">SEMUA</option>
 <option value="sold_unit?bulan=1">JANUARI</option>
 <option value="sold_unit?bulan=2">FEBUARI</option>
 <option value="sold_unit?bulan=3">MARET</option>
 <option value="sold_unit?bulan=4">APRIK</option>
  <option value="sold_unit?bulan=5">MEI</option>
   <option value="sold_unit?bulan=6">JUNI</option>
    <option value="sold_unit?bulan=7">JULI</option>
     <option value="sold_unit?bulan=8">AGUSTUS</option>
      <option value="sold_unit?bulan=9">SEPTEMBER</option>
       <option value="sold_unit?bulan=10">OKTOBER</option>
        <option value="sold_unit?bulan=11">NOVEMBER</option>
         <option value="sold_unit?bulan=12">DESEMBER</option>
</select>
            </div>
                <div class="table-responsive p-3">
				<table id="example" class="table table-bordered table-striped" width="100%">
						<thead>
							<tr>
								<th>UNIT</th>
								<th>STATUS</th>
								<th>MODEL</th>
								<th>PLAT</th>
								<th>KM</th>
								<th>WARNA</th>
								<th>PAJAK</th>
								<th>NIK</th>
								<th>NOSIN</th>
								<th>NOKA</th>
								<th>MODAL</th>
								<th>HRG.OPEN</th>
								<th>HRG.NETT</th>
								<th>CABANG</th>
                                <th>MARKETING JUAL</th>
                                <th>MARKETING BELI</th>
                                <th>HARGA SOLD</th>
                                <th>KETERANGAN</th>
                                
                                <th>TANGGAL SOLD</th>
                                
                                <th>SOURCE</th>
                                 <th>METODE PEMBAYARAN</th>
                                  <th>CUSTOMER BELI</th>
                                   <th>NO. TELPON</th>
								<th>PHOTO</th>
                                <th>AKSI</th>
                                <th>UBAH STATUS</th>
							</tr>
						</thead>
						<tbody>

							<?php
while ($row = mysqli_fetch_assoc($arr))
{
    $photo = json_decode($row['photo']);
    //print_r($photo );
    $status;
    if ($row['status'] == 'ready')
    {
        $status = '<span class="badge badge-success">Ready</span>';
    }
    else if ($row['status'] == 'booked')
    {
        $status = '<span class="badge badge-warning">Booked</span>';
    }
    else
    {
        $status = '<span class="badge badge-primary">Terjual</span>';
    }
    echo "
					<tr>
						<td>" . $row['merk'] . "</td>
						<td contenteditable='true'>" . $status . "</td>
						<td>" . $row['model'] . "</td>
						<td>" . $row['plat'] . "</td>
						<td>" . $row['km'] . "</td>
						<td>" . $row['warna'] . "</td>
						<td>" . $row['pajak'] . "</td>
						<td>" . $row['nik'] . "</td>
						<td>" . $row['nosin'] . "</td>
						<td>" . $row['noka'] . "</td>
						<td>" . $row['modal'] . "</td>
						<td>" . $row['hrg_open'] . "</td>
						<td>" . $row['hrg_nett'] . "</td>
						<td>" . $row['cabang'] . "</td>
                        <td>" . $row['marketing_jual'] . "</td>
                        <td>" . $row['marketing_beli'] . "</td>
                        <td>" . $row['harga_sold'] . "</td>
                        <td>" . $row['keterangan'] . "</td>
                        <td>" . $row['tgl_sold'] . "</td>
                         <td>" . $row['source'] . "</td>
                          <td>" . $row['metode_pembayaran'] . "</td>
                           <td>" . $row['customer_beli'] . "</td>
                            <td>" . $row['no_telpon'] . "</td>
                        <td>
						
                        <div id='carouselExampleIndicators' class='carousel slide' data-ride='carousel'>
                        <ol class='carousel-indicators'>";
                        $active = 'active';
                        for($i=0;$i<count($photo);$i++)
                        {
                          echo "<li data-target='#carouselExampleIndicators' data-slide-to='".$i."' class='".$active."'></li>";
                          $active = '';
                        }
                        echo "</ol>
                        <div class='carousel-inner'>";
                        $active = 'active';
                        for($i=0;$i<count($photo);$i++)
                        {
                          echo "<div class='carousel-item ".$active."'>
                          <img class='d-block w-100' src='".$photo[$i]."' alt='First slide'>
                          </div>";
                          $active = '';
                        }
                        
            
                echo " <a class='carousel-control-prev' href='#carouselExampleIndicators' role='button' data-slide='prev'>
                <span class='carousel-control-prev-icon' aria-hidden='true'></span>
                <span class='sr-only'>Previous</span>
              </a>
              <a class='carousel-control-next' href='#carouselExampleIndicators' role='button' data-slide='next'>
                <span class='carousel-control-next-icon' aria-hidden='true'></span>
                <span class='sr-only'>Next</span>
              </a></div>
                        </td>";
                        echo "
						<td> 
						<a href='frm_edit?edit=" . $row['id'] . "' class='btn btn-info btn-icon-split btn-sm'>
						<span class='icon text-white-50'>
						  <i class='fas fa-plus'></i>
						</span>
						<span class='text'>Edit Produk</span>
					  </a> 
					  
					  <a href='edit_produk?action=delete&id=" . $row['id'] . "' class='btn btn-danger btn-icon-split btn-sm'>
					  <span class='icon text-white-50'>
						<i class='fas fa-plus'></i>
					  </span>
					  <span class='text'>Hapus Produk</span>
					</a> 
					</td>
					
					";
                    echo "
                    <td><a href='?status=ready&id=" . $row['id'] . "' class='btn btn-info btn-sm'>Ready</a> 
                </td>
                
                ";
}

?>

						</tbody>

					</table>
                </div>
              </div>
            </div>
  </div>
  <!--Row-->

  <?php include('footer.php'); ?>
  
  <script src="js/image-uploader.min.js"></script>
  <script>
    $('.input-images-2').imageUploader();
  
var x = document.getElementById("demo");

$(document).ready(function() {
  if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(showPosition);
  } else { 
    x.innerHTML = "Geolocation is not supported by this browser.";
  }



function showPosition(position) {
  document.getElementById("map").innerHTML = "<a href='https://www.google.com/maps/place/" + position.coords.latitude +"+" 
  + position.coords.longitude + "/@" + position.coords.latitude +"," + position.coords.longitude +",15z' target='_blank'>Lihat di Google Maps</a>";

}
})
</script>
   
 
