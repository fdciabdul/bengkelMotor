<div class="col-xl-3 col-md-6 mb-4">
              <div class="card h-100">
                <div class="card-body">
                  <div class="row align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-uppercase mb-1">Total Motor</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?php
                      // count all produk
                      $query = "SELECT COUNT(*) AS total FROM produk WHERE jenis='motor' AND status='ready' OR status='booked' OR status='maintance'";
                      $result = $db->query($query);
                      $data = $result->fetch_assoc();
                      echo $data['total'];
                      ?>
                      </div>
                     
                    </div>
                    <div class="col-auto">
                      <i class="fa fa-motorcycle fa-2x text-primary"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Earnings (Annual) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card h-100">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-uppercase mb-1">Total Mobil</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?php
                      // count all produk
                      $query = "SELECT COUNT(*) AS total FROM produk WHERE jenis='mobil'";
                      $result = $db->query($query);
                      $data = $result->fetch_assoc();
                      echo $data['total'];
                      ?>
                      </div>
                     
                    </div>
                    <div class="col-auto">
                      <i class="fa fa-car fa-2x text-success"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- New User Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card h-100">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-uppercase mb-1">Admin</div>
                      <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">2</div>
                   
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-user fa-2x text-info"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Pending Requests Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card h-100">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-uppercase mb-1">Total Sold</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?php
                      // count all sold 
                      $penghasilan = $db->query("SELECT hasil FROM penjualan");
$hasil = 0;
while ($arrayhasil = mysqli_fetch_assoc($penghasilan)) {
	$hasil += $arrayhasil['hasil'];
}
echo $hasil;
                      ?></div>
                     
                    </div>
                    <div class="col-auto">
                      <i class="fa fa-users fa-2x text-primary"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
