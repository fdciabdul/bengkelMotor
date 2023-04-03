<?php
include('head.php');
$statusMsg = '';
$status = '';
$insertid = '';
if (isset($_POST['submit'])) {
  // print_r($_POST);
  // File upload configuration
  $targetDir = "uploads/";
  $allowTypes = array(
    'jpg',
    'png',
    'jpeg',
    'gif'
  );
  $username = $_POST['username'];
  $password = $_POST['password'];
  $nama = $_POST['nama'];
  $level = $_POST['level'];

  $images_arr = array();
  foreach ($_FILES['images']['name'] as $key => $val) {
    $image_name = $_FILES['images']['name'][$key];
    $tmp_name = $_FILES['images']['tmp_name'][$key];
    $size = $_FILES['images']['size'][$key];
    $type = $_FILES['images']['type'][$key];
    $error = $_FILES['images']['error'][$key];

    // File upload path
    $fileName = basename($_FILES['images']['name'][$key]);
    $targetFilePath = $targetDir . $fileName;

    // Check whether file type is valid
    $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);
    if (in_array($fileType, $allowTypes)) {
      // Store images on the server
      if (move_uploaded_file($_FILES['images']['tmp_name'][$key], $targetFilePath)) {
        $images_arr[] = $targetFilePath;
      } else {
        $statusMsg = "Sorry, there was an error uploading your file.";
      }
    } else {
      $statusMsg = 'Sorry, only JPG, JPEG, PNG, & GIF files are allowed to upload.';
    }
  }
  if (count($images_arr) > 0) {
    // Insert image file name into database
    $insert = $db->query("INSERT INTO `user` (`id`, `username`, `password`, `level`, `nama`, `last_login`, `device_name`, `is_login`, `photo`) VALUES (NULL, '" . $username . "', '" . $password . "', '" . $level . "', '" . $nama . "', '', 'null', '0', '" . json_encode($images_arr) . "');");
    if ($insert) {
      $statusMsg = "<script>
        Swal.fire(
            'Good job!',
            'Berhasil Upload Image',
            'success'
          )
          </script>
          
          
          
          ";
      $insertid = $db->insert_id;
      $status = 'berhasil';
    } else {
      print("Error description: " . mysqli_error($db));
    }
    //print_r($images_arr);
  }
  echo $statusMsg;
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
    <div class="col-lg-6">
      <!-- Form Basic -->


      <!-- Form Sizing -->


      <!-- Horizontal Form -->
      <div class="card mb-4">
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
          <h6 class="m-0 font-weight-bold text-primary">Tambah User</h6>
        </div>
        <div class="card-body">
          <?php
          if ($status == 'berhasil') {
            echo ' <div class="alert alert-success" role="alert">
                <h4 class="alert-heading">Berhasil Menambahkan User!</h4>
                <p>
                  Mohon Berikan Link Berikut ini kepada Marketing untuk menambahkan device.
                 <br>
                  <font style="color:red;">perhatian : Link ini hanya bisa digunakan 1 kali . <br> jika admin tidak sengaja membuka link ini , harap hapus user kemudian tambahkan kembali</font>

                </p>
                <hr>
                <p class="mb-0">
                <input class="form-control form-control-sm  mb-3" type="text" placeholder=".form-control-sm" value="  https://' . $_SERVER['HTTP_HOST'] . '/tambah_device?id=' . base64_encode($insertid) . '">
                
                </p>
              </div>';
          }
          ?>

          <form method="POST" action="" enctype="multipart/form-data">
            <div class="form-group row">
              <label for="inputEmail3" class="col-sm-3 col-form-label">Nama</label>
              <div class="col-sm-9">
                <input type="text" name="nama" class="form-control" id="inputEmail3" placeholder="Nama.">
              </div>
            </div>
            <div class="form-group row">
              <label for="inputEmail3" class="col-sm-3 col-form-label">Username</label>
              <div class="col-sm-9">
                <input type="text" name="username" class="form-control" id="inputEmail3" placeholder="Username.">
              </div>
            </div>
            <div class="form-group row">
              <label for="inputPassword3" class="col-sm-3 col-form-label">Password</label>
              <div class="input-group col-sm-9 " id="show_hide_password">

                <input type="text" name="password" class="form-control" placeholder="Password" aria-label="Password" aria-describedby="basic-addon1">
                <div class="input-group-prepend">
                  <a href="" class="input-group-text"><i class="fa fa-eye-slash" aria-hidden="true"></i></a>
                </div>
              </div>
            </div>

            <div class="form-group row">
              <label for="inputPassword3" class="col-sm-3 col-form-label">Level</label>
              <div class="col-sm-9">
                <select class="form-control" name="level">
                  <option value="marketing">Marketing</option>
                  <option value="admin">Admin</option>
                </select>
              </div>
            </div>
            <!-- end modal awal -->
            <!-- upload -->
            <div class="form-group row">
              <label for="inputPassword3" class="col-sm-3 col-form-label">Photo</label>
              <div class="col-sm-9">
                <div class="input-images-2"></div>
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
    </div>


  </div>
  <!--Row-->

  <?php include('footer.php'); ?>

  <script src="js/image-uploader.min.js"></script>
  <script>
    $('.input-images-2').imageUploader();
    $(document).ready(function() {

      $("#show_hide_password a").on('click', function(event) {
        event.preventDefault();
        if ($('#show_hide_password input').attr("type") == "text") {
          $('#show_hide_password input').attr('type', 'password');
          $('#show_hide_password i').addClass("fa-eye-slash");
          $('#show_hide_password i').removeClass("fa-eye");
        } else if ($('#show_hide_password input').attr("type") == "password") {
          $('#show_hide_password input').attr('type', 'text');
          $('#show_hide_password i').removeClass("fa-eye-slash");
          $('#show_hide_password i').addClass("fa-eye");
        }
      });
    });
  </script>