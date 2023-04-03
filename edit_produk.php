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
$arr = $db->query("SELECT * from produk");
if (isset($_GET['action']))
{
    if ($arrayuser["level"] == 'admin')
    {

        if ($_GET['action'] == 'delete')
        {
			echo "<script>if (confirm('Apakah kamu yakin ingin menghapus produk ini?')) {
				// Save it!
				console.log('Thing was saved to the database.');
			  } else {
				// Do nothing!
				window.location.href='edit_produk.php';
			  }
			  </script>";
           $db->query("DELETE FROM produk WHERE id = '" . $_GET['id'] . "'");
            
            echo "<script>window.location.href='edit_produk.php'</script>";
        }
    }
    else
    {
        echo "<script>alert('Anda Tidak Memiliki Akses')</script>";
    }
}
if (isset($_GET['maintance']))
{
    if ($arrayuser["level"] == 'admin')
    {

     
			echo "<script>if (confirm('Apakah kamu yakin ingin mengubah status produk ini?')) {
				// Save it!
				console.log('Thing was saved to the database.');
			  } else {
				// Do nothing!
				window.location.href='edit_produk.php';
			  }
			  </script>";
           $db->query("UPDATE produk SET status = 'maintance' WHERE id = '" . $_GET['maintance'] . "'");
            
            echo "<script>window.location.href='edit_produk.php'</script>";
    
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
			<li class="breadcrumb-item"><a href="./">Dashboard</a></li>
		</ol>
	</div>

	<div class="row">
		<!-- Earnings (Monthly) Card Example -->
		<?php include './partials/dashboard_atas.php'; ?>
		<!-- Area Chart -->
	</div>
	<div class="row">
		<div class="col-lg-12">
			<div class="card mb-4">
				<div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
					<h6 class="m-0 font-weight-bold text-primary">List Kendaraan</h6>
				</div>


				<div class="col-12">
					<div class="btn-group submitter-group float-left">
						<div class="input-group-prepend">
							<div class="btn btn-info">Merk</div>
						</div>
						<select class="form-control status-dropdown1">
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
					<div class="btn-group submitter-group float-right">
						<div class="input-group-prepend">
							<div class="btn btn-info">Cabang</div>
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
								<th>PHOTO</th>
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
						<td>
						
						<div class='exampleimage'>
						<img id='exampleimage' src='" . $photo[0] . "' class='img img-fluid' />
						</div>
						</td>
						<td> 
						<a href='frm_edit?edit=" . $row['id'] . "' class='btn btn-info btn-icon-split btn-sm'>
						<span class='icon text-white-50'>
						  <i class='fas fa-plus'></i>
						</span>
						<span class='text'>Edit Produk</span>
					  </a> 
					  
					  <a href='edit_produk?action=delete&id=" . $row['id'] . "' class='btn btn-danger btn-icon-split btn-sm'>
					  <span class='icon text-white-50'>
						<i class='fas fa-trash'></i>
					  </span>
					  <span class='text'>Hapus Produk</span>
					</a> 
						<a href='?maintance=" . $row['id'] . "' class='btn btn-warning btn-icon-split btn-sm'>
						<span class='icon text-white-50'>
						  <i class='fas fa-edit'></i>
						</span>
						<span class='text'>Maintance</span>
					  </a> 
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
</div>
</div>
<!-- Pie Chart -->




<!--Row-->


<?php include ('footer.php'); ?>

<script>
	$(document).ready(function() {

		var swal_alert = localStorage.getItem("alert");

		if (swal_alert != 1) {
			Swal.fire({
				icon: 'info',
				title: 'Pemberitahuan',
				text: 'Besok diadakan pertemuan',
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
		}

		localStorage.setItem("alert", "1");

	});
</script>
