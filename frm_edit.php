<?php
include ('head.php');
$statusMsg = '';
if($_SESSION['username'] == ''){
    echo "<script>
     window.location.href='login.php'</script>";
}
else if($_SESSION['level'] == 'marketing'){
    echo "<script>
     window.location.href='dashboard_marketing_awal.php'</script>";
}
else
{
}

if(empty($_GET['edit'])){
    echo "<script>window.location.href='dashboard.php'</script>";
}
$produk = $db->query("SELECT * FROM produk WHERE id = '" . $_GET['edit'] . "'");
if (isset($_POST['submit']))
{
   // print_r($_POST);
    // File upload configuration
    $targetDir = "uploads/";
    $allowTypes = array(
        'jpg',
        'png',
        'jpeg',
        'gif'
    );
    $merk = $_POST['merk'];
    $plat = $_POST['plat'];
    $model = $_POST['model'];
    $warna = $_POST['warna'];
    $pajak = $_POST['pajak'];
    $nik = $_POST['nik'];
    $nosin = $_POST['nosin'];
    $noka = $_POST['noka'];
    $harga_open = $_POST['harga_open'];
    $harga_nett = $_POST['harga_nett'];
    $km = $_POST['km'];
    $modal_awal = $_POST['modal'];
    $cabang = $_POST['cabang'];
    $keterangan = $_POST['keterangan'];
    $marketing_jual = $_POST['marketing_jual'];
    $marketing_beli = $_POST['marketing_beli'];
    $harga_sold =$_POST['harga_sold'];
    $tgl_sold = $_POST['tgl_sold'];
    $source = $_POST['source'];
     $metode = $_POST['metode'];
      $customer_beli = $_POST['customer_beli'];
       $no_telpon = $_POST['no_telpon'];
    $images_arr = array();
    foreach ($_FILES['images']['name'] as $key => $val)
    {
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
        if (in_array($fileType, $allowTypes))
        {
            // Store images on the server
            if (move_uploaded_file($_FILES['images']['tmp_name'][$key], $targetFilePath))
            {
                $images_arr[] = $targetFilePath;
            }
            else
            {
                $statusMsg = "Sorry, there was an error uploading your file.";
            }
        }
        else
        {
            $statusMsg = 'Sorry, only JPG, JPEG, PNG, & GIF files are allowed to upload.';
        }
    }
   print_r($images_arr);
   if(count($images_arr) < 1){
       $insert = $db->query("UPDATE `produk` SET `merk` = '".$merk."',  `model` = '".$model."', `plat` = '".$plat."', `km` = '".$km."', `warna` = '".$warna."', `pajak` = '".$pajak."', `nik` = '".$nik."', `nosin` = '".$nosin."', `noka` = '".$noka."', `modal` = '".$modal_awal."', `hrg_open` = '".$harga_open."',  `hrg_nett` = '".$harga_nett."', `cabang` = '".$cabang."', `marketing_jual` = '".$marketing_jual."', `marketing_beli` = '".$marketing_beli."', `keterangan` = '".$keterangan."', `tgl_sold` = '".$tgl_sold."', `harga_sold` = '".$harga_sold."', `source` = '".$source."', `metode_pembayaran` = '".$metode."', `customer_beli` = '".$customer_beli."', `no_telpon` = '".$no_telpon."' WHERE `produk`.`id` = '".$_GET['edit']."';"); 
   }else{
    $insert = $db->query("UPDATE `produk` SET `merk` = '".$merk."',  `model` = '".$model."', `plat` = '".$plat."', `km` = '".$km."', `warna` = '".$warna."', `pajak` = '".$pajak."', `nik` = '".$nik."', `nosin` = '".$nosin."', `noka` = '".$noka."', `modal` = '".$modal_awal."', `hrg_open` = '".$harga_open."',  `hrg_nett` = '".$harga_nett."', `cabang` = '".$cabang."', `marketing_jual` = '".$marketing_jual."', `marketing_beli` = '".$marketing_beli."', `keterangan` = '".$keterangan."', `tgl_sold` = '".$tgl_sold."', `harga_sold` = '".$harga_sold."', `source` = '".$source."',`photo`= '" . json_encode($images_arr) . "' WHERE `produk`.`id` = '".$_GET['edit']."';");
   }
// show error
    // if (!$insert)
    // {
    //     echo $db->error;
    // }
    // else
    // {
    //     echo "<script>window.location.href='dashboard.php'</script>";
    // }

    if ($insert)
    {
        $statusMsg = " Success Edit Product .";
    }
    else
    {
        $statusMsg = "Failed to upload image";
    }
    echo "<script>alert('".$statusMsg."')</script>";
}
?>

<!-- Container Fluid-->
<div class="container-fluid" id="container-wrapper">
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">R&J Motosport </h1>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="./">Tambah Motor</a></li>
    </ol>
  </div>

  <div class="row">
    <div class="col-lg-6">
      <!-- Form Basic -->


      <!-- Form Sizing -->


      <!-- Horizontal Form -->
      <?php
      while ($row = $produk->fetch_assoc())
      {
        echo '
      <div class="card mb-4">
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
          <h6 class="m-0 font-weight-bold text-primary">Tambah Motor</h6>
        </div>
        <div class="card-body">
          <form method="POST" action="" enctype="multipart/form-data">
          <div class="form-group row" id="merk">
          <label for="inputPassword3"  class="col-sm-3 col-form-label"> List Unit</label>
          <div class="col-sm-9">
            <select class="form-control" name="merk" id="unit">
            <option value="'.$row['merk'].'">'.$row['merk'].'</option>
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
        </div>

            <div class="form-group row">
              <label for="inputEmail3" class="col-sm-3 col-form-label">Model</label>
              <div class="col-sm-9">
                <input type="text" name="model" value="'.$row['model'].'" class="form-control" id="inputEmail3" placeholder="Model.">
              </div>
            </div>
            <div class="form-group row">
              <label for="inputPassword3" class="col-sm-3 col-form-label">Plat Nomor</label>
              <div class="col-sm-9">
                <input type="text" name="plat" value="'.$row['plat'].'" class="form-control" id="inputPassword3" placeholder="PLAT NO.">
              </div>
            </div>
            <div class="form-group row">
              <label for="inputPassword3" class="col-sm-3 col-form-label">Kilometer</label>
              <div class="col-sm-9">
                <input type="text" name="km" value="'.$row['km'].'" class="form-control" id="inputPassword3" placeholder="KM">
              </div>
            </div>

            <div class="form-group row">
              <label for="inputPassword3" class="col-sm-3 col-form-label">Warna</label>
              <div class="col-sm-9">
                <input type="text" name="warna" value="'.$row['warna'].'" class="form-control" id="inputPassword3" placeholder="Warna">
              </div>
            </div>
            <div class="form-group row">
              <label for="inputPassword3" class="col-sm-3 col-form-label">Pajak</label>
              <div class="col-sm-9">
                <input type="text" name="pajak" value="'.$row['pajak'].'" class="form-control" id="inputPassword3" placeholder="Pajak">
              </div>
            </div>
            <div class="form-group row">
              <label for="inputPassword3" class="col-sm-3 col-form-label">Nik</label>
              <div class="col-sm-9">
                <input type="text" name="nik" value="'.$row['nik'].'" class="form-control" id="inputPassword3" placeholder="Nik">
              </div>
            </div>
            <div class="form-group row">
              <label for="inputPassword3" class="col-sm-3 col-form-label">Nosin</label>
              <div class="col-sm-9">
                <input type="text" name="nosin" value="'.$row['nosin'].'" class="form-control" id="inputPassword3" placeholder="Nosin">
              </div>
            </div>

            <div class="form-group row">
              <label for="inputPassword3" class="col-sm-3 col-form-label">Nomor Rangka</label>
              <div class="col-sm-9">
                <input type="text" name="noka" value="'.$row['noka'].'" class="form-control" id="inputPassword3" placeholder="No. Rangka">
              </div>
            </div>
            <!-- modal awal -->
            <div class="form-group row">
              <label for="inputPassword3" class="col-sm-3 col-form-label">Modal</label>
              <div class="col-sm-9">
                <input type="text" name="modal" value="'.$row['modal'].'" class="form-control" id="inputPassword3" placeholder="Modal awal">
              </div>
            </div>

            <div class="form-group row">
              <label for="inputPassword3" class="col-sm-3 col-form-label">Harga Open</label>
              <div class="col-sm-9">
                <input type="text" name="harga_open" value="'.$row['hrg_open'].'" class="form-control" id="inputPassword3" placeholder="Harga Open">
              </div>
            </div>

            <div class="form-group row">
              <label for="inputPassword3" class="col-sm-3 col-form-label">Harga Nett</label>
              <div class="col-sm-9">
                <input type="text" name="harga_nett" value="'.$row['hrg_nett'].'" class="form-control" id="inputPassword3" placeholder="Modal awal">
              </div>
            </div>
            <!-- end modal awal -->
            <!-- upload -->
            <div class="form-group row">
              <label for="inputPassword3" class="col-sm-3 col-form-label">Cabang</label>
              <div class="col-sm-9">
                <select class="form-control" name="cabang">
                <option value="'.$row['cabang'].'">'.$row['cabang'].'</option>
                <option value="-">-</option>
                  <option value="Duren Tiga">Duren Tiga</option>
                  <option value="kemang">Kemang</option>
                  <option value="bekasi">Bekasi</option>
                  <option value="bsd">BSD</option>
                </select>
              </div>
            </div>


            <div class="form-group row">
            <label for="inputPassword3" class="col-sm-3 col-form-label">Marketing Jual</label>
            <div class="col-sm-9">
              <input type="text" name="marketing_jual" value="'.$row['marketing_jual'].'" class="form-control" id="inputPassword3" placeholder="Marketing Jual">
            </div>
          </div>

          <div class="form-group row">
          <label for="inputPassword3" class="col-sm-3 col-form-label">Marketing Beli</label>
          <div class="col-sm-9">
            <input type="text" name="marketing_beli" value="'.$row['marketing_beli'].'" class="form-control" id="inputPassword3" placeholder="Marketing Beli">
          </div>
        </div>
        <div class="form-group row">
        <label for="inputPassword3" class="col-sm-3 col-form-label">Harga Sold</label>
        <div class="col-sm-9">
          <input type="text" name="harga_sold" value="'.$row['harga_sold'].'" class="form-control" id="inputPassword3" placeholder="Harga Sold">
        </div>
      </div>
      <div class="form-group row">
      <label for="inputPassword3" class="col-sm-3 col-form-label">Keterangan</label>
      <div class="col-sm-9">
        <textarea type="text" name="keterangan"  class="form-control" id="inputPassword3"  rows="9">'.$row['keterangan'].'</textarea>
      </div>
    </div>
    <div class="form-group row">
    <label for="inputPassword3" class="col-sm-3 col-form-label">Tanggal Sold</label>
    <div class="col-sm-9">
      <input type="text" name="tgl_sold" value="'.$row['tgl_sold'].'" class="form-control" id="inputPassword3" placeholder="Tanggal Sold" >
    </div>
  </div>
  
    <div class="form-group row">
    <label for="inputPassword3" class="col-sm-3 col-form-label">Source</label>
    <div class="col-sm-9">
      <input type="text" name="source" value="'.$row['source'].'" class="form-control" id="inputPassword3" placeholder="Source" >
    </div>
  </div>
  
   <div class="form-group row">
    <label for="inputPassword3" class="col-sm-3 col-form-label">Metode Pembayaran</label>
    <div class="col-sm-9">
      <input type="text" name="metode" value="'.$row['metode_pembayaran'].'" class="form-control" id="inputPassword3" placeholder="Metode Pembayaran" >
    </div>
  </div>
  
  
     <div class="form-group row">
    <label for="inputPassword3" class="col-sm-3 col-form-label">Customer Beli</label>
    <div class="col-sm-9">
      <input type="text" name="customer_beli" value="'.$row['customer_beli'].'" class="form-control" id="inputPassword3" placeholder="Customer Beli" >
    </div>
  </div>
  
     <div class="form-group row">
    <label for="inputPassword3" class="col-sm-3 col-form-label">No. Telpon Customer </label>
    <div class="col-sm-9">
      <input type="text" name="no_telpon" value="'.$row['no_telpon'].'" class="form-control" id="inputPassword3" placeholder="Customer Beli" >
    </div>
  </div>
  
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
          ';
      }
          ?>
        </div>
      </div>
    </div>


  </div>
  <!--Row-->

  <?php include ('footer.php'); ?>

  <script src="js/image-uploader.min.js"></script>
  <script>
    $('.input-images-2').imageUploader();
  </script>
