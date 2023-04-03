
<?php
include ('head.php');
$statusMsg = '';

if (isset($_POST['submit']))
{
  // insert notif
  $sql = "update user set status_notif = '0',notif = '" . $_POST['notif'] ."',judul_notif = '" . $_POST['judul_notif'] ."'";
  $db->query($sql);
  $statusMsg = "<script>alert('Notifikasi berhasil diperbarui');</script>";

}else if (isset($_POST['notif_khusus']))
{
  // insert notif
  $sql = "update user set status_notif = '0',notif = '" . $_POST['notif'] ."',judul_notif = '" . $_POST['judul_notif'] ."' where username = '" . $_POST['username'] ."'";
  $db->query($sql);
  $statusMsg = "<script>alert('Notifikasi berhasil diperbarui');</script>";

}

echo $statusMsg;
?>
<!-- Container Fluid-->
<div class="container-fluid" id="container-wrapper">
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">R&J Motosport </h1>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="./">Setting</a></li>
    </ol>
  </div>

  <div class="row">
    <div class="col-lg-6">
      <!-- Form Basic -->


      <!-- Form Sizing -->


      <!-- Horizontal Form -->
      <div class="card mb-4">
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
          <h6 class="m-0 font-weight-bold text-primary">Setting</h6>
        </div>
        <div class="card-body">
          <form method="POST" action="" enctype="multipart/form-data">
          
          <div class="form-group row">
              <label for="inputEmail3" class="col-sm-3 col-form-label">Judul Notif</label>
              <div class="col-sm-9">
                <input type="text" name="judul_notif" class="form-control" id="inputEmail3" placeholder="Isi judul pemberitahuan." >
              </div>
            </div>
            <div class="form-group row">
              <label for="inputEmail3" class="col-sm-3 col-form-label">Pemberitahuan</label>
              <div class="col-sm-9">
                <textarea type="text" name="notif" class="form-control" id="inputEmail3" placeholder="Isi pemberitahuan." rows="5"></textarea>
              </div>
            </div>
       
            <!-- end upload -->
            <div class="form-group row">
              <div class="col-sm-10">
                <button type="submit" name="submit" class="btn btn-primary">Tambah</button>
              </div>
            </div>
          </form>
        </div>
      </div>

      <div class="card mb-4">
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
          <h6 class="m-0 font-weight-bold text-primary">Setting Notifkasi Khusus</h6>
        </div>
        <div class="card-body">
          <form method="POST" action="" >

          <div class="form-group row">
              <label for="inputEmail3" class="col-sm-3 col-form-label">Judul Notif</label>
              <div class="col-sm-9">
                <input type="text" name="judul_notif" class="form-control" id="inputEmail3" placeholder="Isi judul pemberitahuan." >
              </div>
            </div>
          <div class="form-group row">
              <label for="inputEmail3" class="col-sm-3 col-form-label">Pemberitahuan</label>
              <div class="col-sm-9">
                <textarea type="text" name="notif" class="form-control" id="inputEmail3" placeholder="Isi pemberitahuan." rows="5"></textarea>
              </div>
            </div>
            <div class="form-group row">
              <label for="inputEmail3" class="col-sm-3 col-form-label">Username</label>
              <div class="col-sm-9">
                <input type="text" name="username" class="form-control" id="inputEmail3" placeholder="Isi pemberitahuan." >
              </div>
            </div>
           
            <!-- end upload -->
            <div class="form-group row">
              <div class="col-sm-10">
                <button type="submit" name="notif_khusus" class="btn btn-primary">Tambah</button>
              </div>
            </div>
          </form>
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
  