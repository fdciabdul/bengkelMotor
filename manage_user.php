<?php 
include('head.php');
$statusMsg = '';
$arr = $db->query("SELECT * from user");
if (isset($_GET['action']))
{
    if ($_GET['action'] == 'delete')
    {
      echo "<script>if (confirm('Apakah kamu yakin ingin menghapus user ini?')) {
				// Save it!
				console.log('Thing was saved to the database.');
			  } else {
				// Do nothing!
				window.location.href='edit_produk.php';
			  }
			  </script>";
        $db->query("DELETE FROM user WHERE id = '" . $_GET['id'] . "'");
        echo "<script>window.location.href='manage_user.php'</script>";
    }
}
?>

<!-- Container Fluid-->
<div class="container-fluid" id="container-wrapper">
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">R&J Motosport </h1>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="./">Manage User</a></li>
    </ol>
  </div>

  <div class="row">
  <div class="col-lg-12">
              <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Manage User</h6>
                </div>
                <div class="col-lg-4">
                  <a href="add_user" class="btn btn-info btn-icon-split btn-sm">
                    <span class="icon text-white-50">
                      <i class="fas fa-plus"></i>
                    </span>
                    <span class="text">Add User</span>
                  </a>
                </div>
                <div class="table-responsive p-3">
                  <table class="table align-items-center table-flush table-hover" id="dataTableHover">
                    <thead class="thead-light">
                      <tr>
                      <th>Username</th>
                        <th>Device</th>
                        <th>Nama</th>
                        <th>Login Terakhir</th>
                        <th>Manage</th>
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
          
$result = new WhichBrowser\Parser($_SERVER['HTTP_USER_AGENT']);
				//print_r($photo );
					echo "
					<tr>
						<td>".$row['username']."</td>
            <td>".$result->os->toString()."</td>
						<td>".$row['nama']."</td>
						<td>".$row['last_login']."</td>
						<td><a href='edit_user?id=".$row['id']."' class='btn btn-primary btn-icon-split btn-sm'>
            <span class='icon text-white-50'>
              <i class='fas fa-edit'></i>
            </span>
            <span class='text'>Edit User</span> </a> <a href='manage_user?action=delete&id=".$row['id']."' class='btn btn-danger btn-icon-split btn-sm'>
            <span class='icon text-white-50'>
              <i class='fas fa-trash'></i>
            </span>
            <span class='text'>Delete User</span> </a>
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