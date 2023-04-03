

<?php
include 'config/config.php';
require_once './vendor/autoload.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link href="image/logo.png" rel="icon">
  <title>R&J Motosport - Dashboard</title>
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <link href="css/ruang-admin.css" rel="stylesheet">
  <link href="css/image-uploader.min.css" rel="stylesheet">
  <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />
  <link href="https://cdn.datatables.net/responsive/1.0.0/css/dataTables.responsive.css" rel="stylesheet">

  <link rel="stylesheet" href="css/jquery.yzhanimageviewer.min.css" />
  <link rel="stylesheet" href="css/style.min.css">
<link rel="stylesheet" href="css/fontello.css">
<!-- Blue-Slider JS -->
<script src="js/blue-slider.js"></script>
  <link href="vendor/select2/dist/css/select2.min.css" rel="stylesheet" type="text/css">
  <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@3.6.12/dist/js/splide.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@3.6.12/dist/js/splide.min.js"></script>
  <style>
 

@media (min-width: 480px) {
  div.form {
    display: table;
  }
  div.form .checkbox {
    width: 50%;
    display: inline-table;
    margin: 5px 0;
  }
  /* spacing between checkboxes and label*/
  div.form .checkbox + input {
    margin-left: 2px;
  }

}
    .content{
  padding: 40px 0;
}
.fade2 {
    transform: scale(0.9);
    opacity: 0;
    transition: all .2s linear;
    display: block !important;
}

.fade2.show {
    opacity: 1;
    transform: scale(1);
}
/*
.filter-wrapper{
  padding: 30px 0;
}*/

.filter-checkbox{
  margin-left: 30px
}
.filter-checkbox:first-child{
  margin-left:0
}
.logged-in {
  color: #00ff00;
}

.logged-out {
  color: #ff0000;
}
</style>
</head>
<?php
error_reporting(0);

function gen_uuid()
{
  return sprintf(
    '%04x%04x-%04x-%04x-%04x-%04x%04x%04x',
    // 32 bits for "time_low"
    mt_rand(0, 0xffff),
    mt_rand(0, 0xffff),

    // 16 bits for "time_mid"
    mt_rand(0, 0xffff),

    // 16 bits for "time_hi_and_version",
    // four most significant bits holds version number 4
    mt_rand(0, 0x0fff) | 0x4000,

    // 16 bits, 8 bits for "clk_seq_hi_res",
    // 8 bits for "clk_seq_low",
    // two most significant bits holds zero and one for variant DCE1.1
    mt_rand(0, 0x3fff) | 0x8000,

    // 48 bits for "node"
    mt_rand(0, 0xffff),
    mt_rand(0, 0xffff),
    mt_rand(0, 0xffff)
  );
}

if (isset($_GET['id'])) {


  $iduser = base64_decode($_GET['id']);
  // set uuid to cookie
  // cookie never expire

  // update uuid to database user

  $sqluser = $db->query("SELECT * FROM user WHERE id = '$iduser'");
  $check_row = mysqli_fetch_assoc($sqluser);
  // CHECK if cookie is set
  // CHECK if cookie is set to the same value as the database
  // if statusdevice is 1, redirect to dashboard
  if ($check_row['status_device'] == 1) {
  // redirect to index.php with delay 5 seconds
echo "mohon maaf device anda sudah terdaftar dan link tidak bisa digunakan lagi<br>";
echo "Menunggu 5 detik untuk delay ke index";
?>
<script>
  setTimeout("location.href = 'index.php';",5000);
 </script>
<?php
  }
  if ($_COOKIE['uuid'] === $check_row['device_id']) {
    // cookie is set and valid
    // do something
    //$db->query($sql);
    // header('location: index.php');
    //echo " cookie is set ";
  } else {
    // cookie is set but not valid
    // do something else
    
    $unik = gen_uuid();
   
    $sql = "UPDATE user SET device_id = '".$unik."' WHERE id = '$iduser'";
    $sqlstatusdevice = "UPDATE user SET status_device = '1' WHERE id = '$iduser'";
    
    //echo " cookie is not set ";
    setcookie('uuid', $unik ,  time() + (10 * 365 * 24 * 60 * 60)); // 86400 = 1 day
    $db->query($sqlstatusdevice);
    $db->query($sql);

   ?>
   <style>
    li {
  padding: 10px 0 0 10px;
  list-style-type: none;
  position: relative;
}

li::before {
  content: '👍';
  position: absolute;
  padding-right: 10px;
  transform: translateX(-100%);
}

/* everything below is for demo appearances and not important to the concept */

body {
  box-sizing: border-box;
  display: grid;
  place-items: center;
  min-height: 100vh;
  margin: 0;
  padding: 20px;
  color: #f5f2eb;
  background-color: #81728a;
  font: 1.25rem/1.5 'Lora', serif;
}

.wrapper {
  padding: 20px;
  border-radius: 10px;
  background-color: #0002;
}

h1 {
  margin: 0;
}

ul {
  margin: 0 0 0 40px;
  padding: 0;
}

</style>
<div class="wrapper">
  <h1>Selamat Perangkat Anda Berhasil Ditambahkan!</h1>
  
  Silahkan download kredensial di bawah ini,
  ingat link ini hanya bisa digunakan 1 kali saja
  <ul>
    <li>Jangan Lupa Save detail Login anda.</li>
    <li>Username : <?php echo $check_row['username']; ?></li>
    <li>Password : <?php echo $check_row['password']; ?></li>
  </ul>
  <textarea class=form-control" id="text-val" rows="4" style="display:none;">
  Mohon jaga kredensial anda dengan baik, jangan pernah memberikan kredensial anda kepada siapapun.&#13;&#10;
  ==============================================================&#13;&#10;
    Username :  <?php echo $check_row['username']; ?>&#13;&#10;
    Password : <?php echo $check_row['password']; ?>&#13;&#10;
  ==============================================================&#13;&#10;
  Copyrigth RnJ Motosport 2022 - <?php echo date("Y"); ?> | All Right Reserved
    </textarea><br/>
    <input type="button" class="btn btn-info" id="dwn-btn" value="Download File User dan Password"/> -   <a href="index.php" class="btn btn-info"> Kembali ke Halaman Login</a>
</div>

<?php
    // header('location: index.php');
   
  }
} else {
  //header('location: index.php');
}
?>

<script>function download(filename, text) {
    var element = document.createElement('a');
    element.setAttribute('href', 'data:text/plain;charset=utf-8,' + encodeURIComponent(text));
    element.setAttribute('download', filename);

    element.style.display = 'none';
    document.body.appendChild(element);

    element.click();

    document.body.removeChild(element);
}

// Start file download.
document.getElementById("dwn-btn").addEventListener("click", function(){
    // Generate download of hello.txt file with some content
    var text = document.getElementById("text-val").value;
    var filename = "userpass.txt";
    
    download(filename, text);
}, false);
</script>