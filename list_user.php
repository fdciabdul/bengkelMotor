<?php 
include('head.php');
$statusMsg = '';
$arr = $db->query("SELECT * from user");
 
?>

<!-- Container Fluid-->
<div class="container-fluid" id="container-wrapper">
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">R&J Motosport </h1>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="./">List User</a></li>
    </ol>
  </div>

  <div class="row">
  <div class="col-lg-12">
              <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">List User</h6>
                </div>
               
                <div class="table-responsive p-3">
                  <table class="table align-items-center table-flush table-hover" id="dataTableHover">
                    <thead class="thead-light">
                      <tr>
                      <th>Username</th>
                       
                        <th>Device</th>
                        <th>Nama</th>
                        <th>Login Terakhir</th>
                        <th>Sedang Login</th>
                      </tr>
                    </thead>
                    <tfoot>
                      <tr>
                      <th>Username</th>
                        <th>Device</th>
                        <th>Nama</th>
                        <th>Login Terakhir</th>
                        <th>Manage</th>
                      </tr>
                    </tfoot>
                    <tbody>
                        <?php 
				while($row = mysqli_fetch_assoc($arr)) {
          
$result = new WhichBrowser\Parser($row['device_name']);
				//print_r($photo );
					echo "
					<tr>
						<td>".$row['username']."</td>
            <td>".$result->os->toString()."</td>
						<td>".$row['nama']."</td>
						<td>".$row['last_login']."</td>
						<td>".$row['is_login']."</td>
					</tr>
					";
				}				?>
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
</script>
  a