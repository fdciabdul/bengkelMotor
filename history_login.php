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
      <li class="breadcrumb-item"><a href="./">History Login</a></li>
    </ol>
  </div>

  <div class="row">
  <div class="col-lg-12">
              <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">History Login</h6>
                </div>
                <div class="table-responsive p-3">
                  <table class="table align-items-center table-flush table-hover" id="dataTableHover">
                    <thead class="thead-light">
                      <tr>
                      <th>Username</th>
                        <th>Device</th>
                        <th>Level</th>
                        <th>Login Terakhir</th>
                        <th>Status Login</th>
                        <th>Lokasi Login</th>
                      </tr>
                    </thead>
                    <tfoot>
                      <tr>
                      <th>Username</th>
                        <th>Device</th>
                        <th>Level</th>
                        <th>Login Terakhir</th>
                        <th>Status Login</th>
                        <th>Lokasi Login</th>
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
						<td>".$row['level']."</td>
            <td>".$row['last_login']."</td>
					
            ";
  					
            if($row['is_login'] == 1){
              echo "<td><span class='logged-in'>●</span> Sedang Login</td>";
            }else{
              echo "<td><span class='logged-out'>●</span> Belum Login</td>";
            }
            
					echo "
          <td> <span id='map'></span></td></tr>
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
   
  /// generate unique_id 
