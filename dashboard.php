<?php
include ('head.php');
if (!isset($_SESSION['username']))
{
    echo "<script>
	   window.location.href='login.php'</script>";
}
else
{
}
$user = $db->query("SELECT * FROM user WHERE username = '" . $_SESSION['username'] . "'");
$arrayuser = mysqli_fetch_assoc($user);
$jenis = "";
if(empty($_GET['jenis'])){
	if($arrayuser['level'] == 'admin'){
		echo "<script>
	   window.location.href='dashboard_marketing_awal.php</script>";
	}else{
	 echo '<script>
	   window.location.href="dashboard_marketing_awal.php?jenis=1"</script>';
	}
}
if (isset($_GET['jenis'])){
	$jenis = $_GET['jenis'];
	
}
else{
	$jenis = "";
}
$arr = $db->query("SELECT * from produk where jenis like '%".$jenis."%'");

if (isset($_GET['status']))
{
    if ($arrayuser["level"] == 'admin')
    {

        if ($_GET['status'] == 'sold')
        {
            $db->query("UPDATE produk SET status = 'sold' WHERE id = '" . $_GET['id'] . "'");
            $db->query("UPDATE penjualan SET hasil = hasil + 1 WHERE bulan='" . date('m') . "'");
			// insert into penjualan_model by month 
			$db->query("INSERT INTO penjualan_model (`id`, `merk`, `model`, `bulan`, `tahun`, `cabang`) VALUES ('" . $_GET['id'] . "', '" . $_GET['merk'] . "', '" . $_GET['model'] . "', '" . date('m') . "', '" . date('Y') . "', '" . $_GET['cabang'] . "');");
            echo "<script>alert('Berhasil Mengubah Status Menjadi Sold')</script>";
            echo "<script>window.location.href='dashboard.php'</script>";

        }
        else if ($_GET['status'] == 'booked')
        {
            $db->query("UPDATE produk SET status = 'booked' WHERE id = '" . $_GET['id'] . "'");
            echo "<script>alert('Berhasil Mengubah Status Menjadi Booked')</script>";
            echo "<script>window.location.href='dashboard.php'</script>";
        }
         else if ($_GET['status'] == 'ready')
        {
            $db->query("UPDATE produk SET status = 'ready' WHERE id = '" . $_GET['id'] . "'");
            echo "<script>alert('Berhasil Mengubah Status Menjadi Ready')</script>";
            echo "<script>window.location.href='dashboard.php'</script>";
        }
    }
    else
    {
        echo "<script>alert('Anda Tidak Memiliki Akses')</script>";
    }
}

?>

<?php
if($arrayuser['status_notif'] == '0'){

	// replace {nama} to nama 
	$pesan = str_replace("{nama}", $arrayuser['nama'], $arrayuser['notif']);
	?>
	<script>	Swal.fire({
				icon: 'info',
				title: '<?php echo $arrayuser['judul_notif']; ?>',
				text: "<?php echo $pesan; ?>",
				allowOutsideClick: () => {
					const popup = Swal.getPopup()
					popup.classList.remove('swal2-show')
					setTimeout(() => {
						popup.classList.add('animate__animated', 'animate__headShake')
					})
					setTimeout(() => {
						popup.classList.remove('animate__animated', 'animate__headShake')
					}, 500)
					return false
				}
			})
		
	</script>
	
	<?php

// update status notif to 1
	$db->query("UPDATE user SET status_notif = '1' WHERE username = '" . $_SESSION['username'] . "'");

}else{

?>
		

<?php
}
?>
<div class="container-fluid" id="container-wrapper">
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
		<h1 class="h3 mb-0 text-gray-800">Welcome back <?php echo $_SESSION['username']; ?> in R&J Motosport </h1>
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
		</ol>
	</div>

	<div class="row">
		<!-- Earnings (Monthly) Card Example -->

		<?php
		if ($arrayuser["level"] == 'admin')
		{
			
		include './partials/dashboard_atas.php'; 
		}
		?>
		
		
		<!-- Area Chart -->
	</div>
	<div class="row">
		<div class="col-lg-12">
			<div class="card mb-4">
				<div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
					<h6 class="m-0 font-weight-bold text-primary">List Kendaraan</h6>
				</div>


				<div class="col-12">
					<div class="btn-group submitter-group float-left sm">
						<div class="input-group-prepend">
							<div class="btn btn-info btn-sm">Unit</div>
						</div>
						<select class="form-control status-dropdown1 input-sm">
						    	<option value="">Semua</option>
						<option value="Honda">Honda</option>
                  <option value="Yamaha">Yamaha</option>
                  <option value="KTM">KTM</option>
                  <option value="Ducati">Ducati</option>
                  <option value="Harley Davidson">Harley Davidson</option>
                  <option value="Piaggio">Piaggio</option>
                  <option value="Kawasaki">Kawasaki</option>
				  <option value="APRILIA">APRILIA</option>
                  
                  <option value="MV AGUSTA">MV AGUSTA</option>
                  <option value="Lain Lain">Lain Lain</option>
						</select>
					</div>
					<div class="btn-group submitter-group float-right sm">
						<div class="input-group-prepend">
							<div class="btn btn-info btn-sm">Cabang</div>
						</div>
						<select class="form-control status-dropdown">
							<option value="">Semua</option>
							<option value="Duren Tiga">Duren Tiga</option>
							<option value="Bekasi">Bekasi</option>
							<option value="Kemang">Kemang</option>
							<option value="BSD">BSD</option>
						</select>
					</div>
				</div>

				<div class="table-responsive p-3">
					<table id="example" class="table table-bordered table-striped" width="100%">
						<thead>
							<tr>
								<th>UNIT</th>
									<th>PHOTO</th>
								<th>STATUS</th>
									<?php
								if ($arrayuser["level"] == 'admin')
								{
								?>
								<th>MODAL</th>
								<?php } ?>
								<th>OPEN</th>
								<th>NETT</th>
								<th>MODEL</th>
								<th>PLAT</th>
								<th>KM</th>
								<th>WARNA</th>
								<th>PAJAK</th>
								<th>NIK</th>
								<th>NOSIN</th>
								<th>NOKA</th>
							
								<th>CABANG</th>
							
								<?php
								if ($arrayuser["level"] == 'admin')
								{
								?>
								<th>KETERANGAN</th>
								<th>UBAH STATUS</th>
								<?php } ?>
							</tr>
						</thead>
						<tbody>

							<?php
while ($row = mysqli_fetch_assoc($arr))
{
    $photo = json_decode($row['photo']);
	if ($row['status'] == 'sold')
	{
	}else{
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
      else if ($row['status'] == 'maintance')
    {
        $status = '<span class="badge badge-info">Maintance</span>';
    }
    else
    {
        $status = '<span class="badge badge-primary">Terjual</span>';
    }
    echo "
					<tr>
						<td>" . $row['merk'] . "</td>
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
						<td contenteditable='true'>" . $status . "</td>";
						
							if($arrayuser["level"] == 'admin')
						{
							echo "<td>" . $row['modal'] . "</td>";
						}
						echo "
							<td>" . $row['hrg_open'] . "</td>
								<td>" . $row['hrg_nett'] . "</td>
						<td>" . $row['model'] . "</td>
						<td>" . $row['plat'] . "</td>
						<td>" . $row['km'] . "</td>
						<td>" . $row['warna'] . "</td>
						<td>" . $row['pajak'] . "</td>
						<td>" . $row['nik'] . "</td>
						<td>" . $row['nosin'] . "</td>
						<td>" . $row['noka'] . "</td>";

					
						//<td>" . $row['modal'] . "</td>

echo "					
					
						<td>" . $row['cabang'] . "</td>
					";

						
						if($arrayuser["level"] == 'admin')
						{
							echo "
							<td>" . $row['keterangan'] . "</td>
						<td><a href='?status=booked&id=" . $row['id'] . "' class='btn btn-info btn-sm'>Booked</a> <a href='?status=sold&id=" . $row['id'] . "&cabang=" . $row['cabang'] . "&model=" . $row['model'] . "&merk=" . $row['merk'] . "'' class='btn btn-warning btn-sm'>Sold</a> <a href='?status=ready&id=" . $row['id'] . "' class='btn btn-success btn-sm'>Ready</a>
					</td>
					
					";
						}
}
}

?>

						</tbody>

					</table>
				</div>
			</div>
		</div>
	</div>
</div>
</div>
<!-- Pie Chart -->




<!--Row-->


<?php include ('footer.php'); ?>

<script>
	
		

	$('.carousel').carousel({
  interval: 2000
})
</script>


