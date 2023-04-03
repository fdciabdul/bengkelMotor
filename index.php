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
  
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <script src="https://kit.fontawesome.com/c997be33cc.js" crossorigin="anonymous"></script>
  <style>
 @import url(//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css);
@import url(https://fonts.googleapis.com/css?family=Roboto:400,300);

/*Ignore me, I'm just page styling*/
html {font-family: 'Roboto', sans-serif;font-size:16px;line-height:1em;height:100%;}
body {
    background:linear-gradient(0deg, rgba(0 0 0 / 85%), rgba(215 222 247 / 85%)), url(https://i.postimg.cc/fyZZHSg8/302478812-161522499815770-4825970924461240545-n.jpg);
  background-size:cover;
background-position: center center;
background-repeat: no-repeat;
background-attachment: fixed;
-webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  overflow: hidden;
  z-index: -1;
}

.container {
  display: table;
  height: 95vh;
  width: 90%;
  padding-bottom: 5vh;
  margin: auto auto;
  z-index: -1;
}
.content {
  display: table-cell;
  text-align: center;
  vertical-align: middle;
}

h1 {
  font-family: "Lato", sans-serif;
  font-size: 36px;
  font-weight: 300;
  color: #FFFFFF;
}

.icon-container {
  margin-top: 30px;
  width: 100%;
  height: 60px;
}

.icon {
  cursor: pointer;
  position: relative;
  display: inline-block;
  width: 60px;
  height: 60px;
  margin-left: 12px;
  margin-right: 12px;
  border-radius: 30px;
  overflow: hidden;
  
  background-color: #06070c52;
}
.icon::before, .icon::after {
  content: "";
  position: absolute;
  top: 0;
  left: 0;
  height: 100%;
  width: 100%;
  transition: all 0.25s ease;
  border-radius: 30px;
}
.icon i {
  position: relative;
  color: #FFFFFF;
  font-size: 30px;
  margin-top: 15px;
  transition: all 0.25s ease;
}

.icon-fill::before {
  transition-duration: 0.5s;
  box-shadow: inset 0 0 0 1px #16A085;
}
.icon-fill:hover::before {
    
  box-shadow: inset 0 0 0 60px #16A085;
}

.icon-enter::after {
  box-shadow: inset 0 0 0 1px #EB9532;
}
.icon-enter::before {
  border-radius: 0;
  margin-left: -100%;
  box-shadow: inset 0 0 0 60px #EB9532;
}
.icon-enter:hover::before {
  margin-left: 0;
}

.icon-expand::after {
  box-shadow: inset 0 0 0 1px #C82647;
}
.icon-expand::before {
  background: #C82647;
  box-shadow: inset 0 0 0 60px #2d2c3e;
}
.icon-expand:hover::before {
  box-shadow: inset 0 0 0 1px #2d2c3e;
}

.icon-collapse::before {
  border-radius: 0;
}
.icon-collapse:hover::before {
  box-shadow: inset 0 30px 0 0 #8CC63F, inset 0 -30px 0 0 #8CC63F;
}
.icon-collapse::after {
  box-shadow: inset 0 0 0 1px #8CC63F;
}

.icon-rotate {
  box-shadow: inset 0 0 0 1px #7E3661;
}
.icon-rotate::after, .icon-rotate::before {
  border: 0px solid transparent;
}
.icon-rotate:hover::before {
  transition: border-top-width 0.3s ease, border-top-color 0.3s ease;
  border-width: 60px;
  border-top-color: #7E3661;
}
.icon-rotate:hover::after {
  transition: border-left-width 0.3s ease, border-left-color 0.3s ease;
  border-width: 60px;
  border-left-color: #7E3661;
}
.icon-rotate:hover {
  transition: background 0.001s ease 0.3s;
  background: #7E3661;
}
.icon-rotate i {
  z-index: 1;
}

.logo{
    width: 250px;
}
</style>
</head>

<body id="page-top">

<div class="container">
  <div class="content">
   <img class="logo" src="logo_home.png" alt="">
    <div class="icon-container">
     <a href="https://www.instagram.com/rnj_motosport/?hl=en"> <div class="icon icon-fill"><i class="fa fa-instagram"></i></div></a>
      <a href="https://www.youtube.com/c/RnJTV450"><div class="icon icon-enter"><i class="fa fa-youtube"></i></div></a>
      <!-- <div class="icon icon-rotate"><i class="fa fa-whatsapp"></i></div> -->
      <a href="login.php"> <div class="icon icon-collapse"><i class="fa fa-sign-in"></i></div></a>
    </div>
  </div>
</div>

</body>
</html>