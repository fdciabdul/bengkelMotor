<?php
include 'config/config.php';
// check session if user is logged in
if(!isset($_SESSION['username'])){
 
}else{
  header("Location: dashboard.php");
}
if(isset($_POST['username']) && isset($_POST['password'])){
  $username =$db->real_escape_string(($_POST['username']));
  $password = $db->real_escape_string($_POST['password']);
  $result = $db->query("SELECT * FROM user WHERE username = '$username' AND password = '$password'");
  $row = mysqli_fetch_assoc($result);
 
  if(mysqli_num_rows($result) > 0){
 
    if($row['device_id'] === $_COOKIE['uuid']){
    
      $_SESSION['username'] = $username;
      $_SESSION['password'] = $password;
      $_SESSION['id'] = $row['id'];
      $_SESSION['status'] = $row['status'];
      
      $_SESSION['level'] = $row['level'];
      // update is_login to 1
      $db->query("UPDATE user SET is_login = '1' WHERE id = '" . $row['id'] . "'");
      // update device name
      $db->query("UPDATE user SET device_name = '" . $_SERVER['HTTP_USER_AGENT'] . "' WHERE id = '" . $row['id'] . "'");

      if($row['level'] == 'admin'){
        header("Location: dashboard.php");
      }else{
        header("Location: dashboard_marketing_awal.php");
      }
      //header("Location: dashboard.php");
    }else{
     
      echo "
      <script>
      alert('Maaf Device Tidak Sesuai');
      </script>
      ";
      //header("Location: login.php");
    }
   
    
   
  }else{
    echo "<script>alert('Username atau Password salah')</script>";
  }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Login Page</title>
  <link href="https://fonts.googleapis.com/css?family=Karla:400,700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.materialdesignicons.com/4.8.95/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/login.css">
</head>
<body>
  <main class="d-flex align-items-center min-vh-100 py-3 py-md-0">
    <div class="container">
      <div class="card login-card">
        <div class="row no-gutters">
          <div class="col-md-5">
            <img src="./image/bg.jpeg" alt="login" class="login-card-img">
          </div>
          <div class="col-md-7">
            <div class="card-body">
              <div class="brand-wrapper">
                <h2 style="font-weight: bold;">Welcome to R&J Motosport</h2>
              </div>
             
              <form action="" method="post">
                  <div class="form-group">
                    <label for="username" class="sr-only">Username</label>
                    <input type="text" name="username" id="email" class="form-control" placeholder="your username">
                  </div>
                  <div class="form-group mb-4">
                    <label for="password" class="sr-only">Password</label>
                    <input type="password" name="password" id="password" class="form-control" placeholder="your password">
                  </div>
                  <input type="submit" id="login" class="btn btn-block login-btn mb-4" type="button" value="Login">
                </form>
                <br><br><br><br>
                <nav class="login-card-footer-nav">
                  <a href="#!">© R&J Motosport. 2022</a>
                </nav>
            </div>
          </div>
        </div>
      </div>

    </div>
  </main>
  <script>
    var device = localStorage.getItem('device_id');
    if(device == null){
      alert('Device ID anda belum ditambahkan');
      window.location.href='index.php';
    }
    
    </script>
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>
</html>
