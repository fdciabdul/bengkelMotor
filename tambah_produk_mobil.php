<?php
include ('head.php');
$statusMsg = '';

if (isset($_POST['submit']))
{
    print_r($_POST);
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
    $insert = $db->query("INSERT INTO `produk` (`id`, `merk`, `status`, `model`, `plat`, `km`, `warna`, `pajak`, `nik`, `nosin`, `noka`, `modal`, `hrg_open`, `hrg_nett`, `cabang`, `photo`, `jenis`) VALUES (NULL, '" . $merk . "', 'ready', '" . $model . "', '" . $plat . "', '" . $km . "', '" . $warna . "', '" . $pajak . "', '" . $nik . "', '" . $nosin . "', '" . $noka . "', '" . $modal_awal . "', '" . $harga_open . "', '" . $harga_nett . "', '" . $cabang . "', '" . json_encode($images_arr) . "', 'Mobil');");
    if ($insert)
    {
        $statusMsg = " image file has been uploaded successfully.";
    }
    else
    {
        $statusMsg = "Failed to upload image";
    }
    echo $statusMsg;
}
?>

<!-- Container Fluid-->
<div class="container-fluid" id="container-wrapper">
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">R&J Motosport </h1>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="./">Tambah Mobil</a></li>
    </ol>
  </div>

  <div class="row">
    <div class="col-lg-6">
      <!-- Form Basic -->


      <!-- Form Sizing -->


      <!-- Horizontal Form -->
      <div class="card mb-4">
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
          <h6 class="m-0 font-weight-bold text-primary">Tambah Mobil</h6>
        </div>
        <div class="card-body">
          <form method="POST" action="" enctype="multipart/form-data">
            <div class="form-group row">
              <label for="inputEmail3" class="col-sm-3 col-form-label">UNIT</label>
              <div class="col-sm-9">
                <input type="text" name="merk" class="form-control" id="inputEmail3" placeholder="MERK.">
              </div>
            </div>S

            <div class="form-group row">
              <label for="inputEmail3" class="col-sm-3 col-form-label">Model</label>
              <div class="col-sm-9">
                <input type="text" name="model" class="form-control" id="inputEmail3" placeholder="Model.">
              </div>
            </div>
            <div class="form-group row">
              <label for="inputPassword3" class="col-sm-3 col-form-label">Plat Nomor</label>
              <div class="col-sm-9">
                <input type="text" name="plat" class="form-control" id="inputPassword3" placeholder="PLAT NO.">
              </div>
            </div>
            <div class="form-group row">
              <label for="inputPassword3" class="col-sm-3 col-form-label">Kilometer</label>
              <div class="col-sm-9">
                <input type="text" name="km" class="form-control" id="inputPassword3" placeholder="KM">
              </div>
            </div>

            <div class="form-group row">
              <label for="inputPassword3" class="col-sm-3 col-form-label">Warna</label>
              <div class="col-sm-9">
                <input type="text" name="warna" class="form-control" id="inputPassword3" placeholder="Warna">
              </div>
            </div>
            <div class="form-group row">
              <label for="inputPassword3" class="col-sm-3 col-form-label">Pajak</label>
              <div class="col-sm-9">
                <input type="text" name="pajak" class="form-control" id="inputPassword3" placeholder="Pajak">
              </div>
            </div>
            <div class="form-group row">
              <label for="inputPassword3" class="col-sm-3 col-form-label">Nik</label>
              <div class="col-sm-9">
                <input type="text" name="nik" class="form-control" id="inputPassword3" placeholder="Nik">
              </div>
            </div>
            <div class="form-group row">
              <label for="inputPassword3" class="col-sm-3 col-form-label">Nosin</label>
              <div class="col-sm-9">
                <input type="text" name="nosin" class="form-control" id="inputPassword3" placeholder="Nosin">
              </div>
            </div>

            <div class="form-group row">
              <label for="inputPassword3" class="col-sm-3 col-form-label">Nomor Rangka</label>
              <div class="col-sm-9">
                <input type="text" name="noka" class="form-control" id="inputPassword3" placeholder="No. Rangka">
              </div>
            </div>
            <!-- modal awal -->
            <div class="form-group row">
              <label for="inputPassword3" class="col-sm-3 col-form-label">Modal</label>
              <div class="col-sm-9">
                <input type="text" name="modal" class="form-control" id="inputPassword3" placeholder="Modal awal">
              </div>
            </div>

            <div class="form-group row">
              <label for="inputPassword3" class="col-sm-3 col-form-label">Harga Open</label>
              <div class="col-sm-9">
                <input type="text" name="harga_open" class="form-control" id="inputPassword3" placeholder="Harga Open">
              </div>
            </div>

            <div class="form-group row">
              <label for="inputPassword3" class="col-sm-3 col-form-label">Harga Nett</label>
              <div class="col-sm-9">
                <input type="text" name="harga_nett" class="form-control" id="inputPassword3" placeholder="Modal awal">
              </div>
            </div>
            <!-- end modal awal -->
            <!-- upload -->
            <div class="form-group row">
              <label for="inputPassword3" class="col-sm-3 col-form-label">Cabang</label>
              <div class="col-sm-9">
                <select class="form-control" name="cabang">
                <option value="durti">-</option>
                  <option value="durti">Duren Tiga</option>
                  <option value="kemang">Kemang</option>
                  <option value="bekasi">Bekasi</option>
                  <option value="bsd">BSD</option>
                </select>
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
