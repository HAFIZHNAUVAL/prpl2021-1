<?php
require_once("koneksi2.php");

$sql_get = "SELECT * FROM transaksi";
$query_transaksi = mysqli_query($conn, $sql_get);
$results = [];
while($row = mysqli_fetch_assoc($query_transaksi)){
  $results[] = $row;
}
  ?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tubes Responsi</title>
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
 
</head>

<body>
  <style  type="text/css">
    body{
  margin: 0px;
  background-color: black;
}
ul.nav.navbar-nav.navbar-right{
  margin-top:12px;
  margin-right:18px;
}
.navbar-default .navbar-nav > .active > a, .navbar-default .navbar-nav > .active > a:focus, .navbar-default .navbar-nav > .active > a:hover{
  color:black;
  background-color:#e7e7e7;
}
.navbar-default .navbar-nav > li > a:focus, .navbar-default .navbar-nav > li > a:hover{
  color:#dad9d9;
  background-color:transparent;
}
.navbar-default .navbar-nav > li > a{
  color:#b8b6b6;
}
.navbar-brand, .navbar-nav > li > a{
  text-shadow:0 1px 0 rgba(255,255,255,.25);
}
nav.navbar.navbar-default{
  height: 100px;
  background: none;
  box-shadow: none;
  border: none;
  padding-top: 25px;
  padding-left: 30px;
  padding-right: 75px;
}

#background{
  margin-top:-120px;
  background-size:cover;
  padding-top:111px;
  height:638px;
  max-height:1112px;
  max-width: auto;
  position: relative;

}
.slide1,.slide2,.slide3{
  position: absolute;
  width: 100%;
  height: 100%
}
.slide1{
  background: url('logo1.jpg') no-repeat center;
  background-size: cover;
  animation: fade 8s infinite;
  -webkit-animation: fade 8s infinite; 
}
.slide2{
  background: url('logo2.jpg') no-repeat center;
  background-size: cover;
  animation: fade2 8s infinite;
  -webkit-animation: fade2 8s infinite; 
}
.slide3{
  background: url('logo3.jpg') no-repeat center;
  background-size: cover;
  animation: fade3 8s infinite;
  -webkit-animation: fade3 8s infinite; 
}
@keyframes fade {
  0%{opacity: 0}
  33.333%{opacity: 0}
  66.666%{opacity: 0}
  100%{opacity: 1}
}
@keyframes fade2 {
  0%{opacity: 0}
  33.333%{opacity: 2}
  66.666%{opacity: 0}
  100%{opacity: 0}
}
@keyframes fade3 {
  0%{opacity: 0}
  33.333%{opacity: 0}
  66.666%{opacity: 2}
  100%{opacity: 0}
}
#background .jumbotron{
  background:none;
  margin-left:137px;
  max-width:1000px;
  margin-top:22px;
}
#background .jumbotron h1{
  font-family:nexa;
  color:white;
  margin-bottom:-12px;
}

#background .jumbotron p{
  font-family:raleway;
  color:white;
  margin-bottom:-12px;
  margin-top:27px;
  padding-right:307px;

}
#home{
   color:grey;
   font-size: 130%;
}
#news{
  margin-top: 31px;
   background: rgba(0,144,154,0.3);
  padding-top: 43px;
  padding-bottom: 25px;
  color: white;
}
.login-box{
  width: 550px;
  height: 700px;
  color: #fff;
  margin: 20px 5px 5px 500px;
  box-sizing: border-box;
  padding: 30px;
  background: rgba(0,144,154,0.3);
  
}
.avatar{
  width: 100px;
  height: 100px;
  border-radius: 50%;
  position: absolute;
  top: -50px;
  left: calc(50% - 50px);
}
h1{
  margin-top: 0px;
  padding: 0 0 20px;
  text-align: center;
  font-size: 22px;
}
.login-box p{
  margin-bottom: 0px;
  padding: 0px;
  font-weight: bold;
}
.login-box input{
  width: 100%;
  margin-bottom: 20px;
}
.login-box input[type="text"]{
  border: none;
  border-bottom: 1px solid #fff;
  background: transparent;
  outline: none;
  height: 40px;
  color: #fff;
  font-size: 16px;
}
ul{
  color: black;

}
.servis{
  width: 1500px;
  height: 500px;
  text-align: left;
  color: #fff;
  margin: 100px 0px 0px 0px;
  box-sizing: border-box;
  padding: 30px;
  background: rgba(0,144,154,0.3);
}
 .garis_vertikal{
    border-left: 1px solid white;
    height: 400px;
    text-align: central;
    margin: -330px 0px 0px 700px;
  }
#about{ 
  padding: 7px 0px 0px 20px;
  margin-top: 79px;
  color: white;
  font-size: 15px;
}
#about .container{
  width: 100%;
  padding: 20px;
}
 img {
     width: 300px;
     height: 300px;
     padding: 10px;
     margin: 5px 5px 5px 5px;
   } 
#icon{
  color:white;
  font-size:37px;
  margin-top:20px;
  position:static;
}

#icon i.fa.fa-facebook-official{
  margin-left:17px;
}

#icon i.fa.fa-twitter-square{
  margin-left:17px;
}

#icon i.fa.fa-youtube-play{
  margin-left:17px;
}
#container {
  text-align: center;
}
footer {
        background: rgba(0,144,154,0.3);
        font-size: 120%;
        padding: 7px 0px 0px 20px;
        height: 60px;
        color: white;
      }
  #about .container.footer .col-lg-6.col-md-6.col-sm-12.col-xs-12{
  font-family:petitamedium;
  color:#eee;
}
  </style>
  <!-- navbar -->
  <nav class="navbar navbar-default navbar-static-top">
    
      <div class="navbar-header">
        <a href="#" class="navbar-brand navbar-link"></a>
        <button class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
      </div>
      <div class="collapse navbar-collapse" id="navcol-1">
        <ul class="nav navbar-nav navbar-right">
          
          <li role="presentation"><a href="#home">HOME</a></li>
          <li role="presentation"><a href="#news">TESIMONI</a></li>
          <li role="presentation"><a href="#galery">GALLERY</a></li>
          <li role="presentation"><a href="#style">STYLE</a></li>
          <li role="presentation"><a href="#book">BOOK NOW</a></li>
          <li role="presentation"><a href="#about">ABOUT</a></li>
          <li role="presentation"><a href="sign_in.php">LOGOUT</a></li>
          
        </ul>
        <center><h1>BARBERSHOPNIA</h1></center>
      </div>
    </div>
  </nav>
  <!-- navbar -->
  <!-- jumbotron -->
  <div id="background">
    <div class="slide1"></div>
    <div class="slide2"></div>
    <div class="slide3"></div>
    <div class="jumbotron">
          
    </div>
  </div>
  <!-- jumbotron -->
  <!-- container atas -->
  <div id="home">
    <div class="isi">
      <div class="container atas">
        <br><br><br><br><br><br><br>
        <h1><center>BABERSHOPNIA</center></h1>
        <div class="row">
          <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
           
            <h3>QUALITY</h3>
            <p class="text-justify"><strong>Kualitas? </strong>kami mengedepankan kualitas agar  karakter & lifestyle yang kamu inginkan memuaskan,tenang saja para pekerja barbershop yang kami miliki sudah profesional dan tau bentuk rambut yang diinginkan</p>
          </div>
          <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
         
            <h3>BOOKING ONLINE</h3>
            <p class="text-justify"><strong>Antrian dan Menunggu? </strong>kini di barbershopnia tidak perlu lagi mengantri dan menunggu yang sangat membosankan,langsung saja pesan jadwal potong rambut kamu lewat website kami.</p>
          </div>
          <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
           
            <h3>KEBERSIHAN & FASILITAS</h3>
            <p class="text-justify"><strong>Kebersihan & fasilitas </strong>yang ada di Barbershopnia sudah terjamin tidak usah khawatir</p>
          </div>
        </div>
      </div>
    </div>
  </div>
<br><br><br><br><br><br>
  <div id="news">
    <h1 style="color: white;">Apa Kata Mereka Tentang Barbershopnia </h1><br><br>
    
       <center> <img src="orang-1.jpg" style="border-radius: 50%;"><img src="orang2.jpg" style="border-radius: 50%;"> <img src="orang3.jpg" style="border-radius: 50%;"><img src="orang4.jpg" style="border-radius: 50%;"></center>
       <h3 style="margin: 50px 0px 0px 250px;" >ALi</h3>
       <p style=" margin: 30px 5px 0px 150px;">Bagus,gaya rambut sesuai yang saya inginkan</p>   
       <h3 style="margin: -70px 0px 0px 550px;">Ahmad </h3><br><br>
       <p style="margin: -10px 0px 0px 500px;">Saya sangat puas karena <br> potonganya rapih dan sesuai</p>
       <h3 style="margin: -90px 0px 0px 870px;">Raffi</h3> </h3><br><br>
       <p style="margin: -10px 0px 0px 800px;">fasilitas yang diberikan sangat <br> bagus ,dan potongannya rapih</p>
       <h3 style="margin: -90px 0px 0px 1200px;">Mikel</h3> </h3><br><br>
       <p style="margin: -10px 0px 0px 1150px;">Mantap apik tenan bro</p><br><br><br><br><br><br><br><br>
         
          </div>
          </div>
        </div>
      </div>
    </div>
  </div>
<br><br><br>
  <h1 style="color: white;" id="galery"><center>GALERI</center></h1><br>
 <center> <img src="foto2.jpg"><img src="foto4.jpg"> <img src="foto6.jpg"><img src="foto7.jpg"></center>
 <center> <img src="alat1.jpg"><img src="alat2.jpg"> <img src="alat3.jpg"><img src="alat4.jpg"></center>
<br><br><br>
<div id="style">
  <div class="servis" >
  <h1 style=" margin: 30px 0px 0px -800px;">WE ARE OPEN</h1>
    <p style=" margin: 20px 0px 0px 250px;">Monday - Wednesday<br>9:00 am to 8:00 pm <br><br><br>Friday<br>9:00 am to 8:00 pm <br><br><br>Friday<br>10:00 am to 4:00 pm <br><br><br>Sunday<br>Closed</p>

    <div class="garis_vertikal">
      <h1>Stylist Services</h1>
      <br>
      <p style="text-align: center;">Women 35.000 <br><br>Men 25.000<br><br>Childreen 20.000<br><br><br><h1>Color Hair </h1><p style="text-align: center;">semua jenis warna rambut dengan harga 100.000</p> </p><br><br><br><br>
    </div>   
  </div>
</div>
  <br><br><br><br><br><br><br><br><br><br>
  <div id="book">
    <center><h1 style="color: white; margin: 20px;">BOOK NOW</h1></center>
     <div class="login-box">
   <center>
      <h1>Form Booking</h1>
       <form action="transaksi.php" method="POST">
      <table>
        <tr>
          <td>Nama Member</td>
          <td>:</td>
          <td>
            <input type="text" name="nama">
          </td>
        </tr>
        <tr>
          <td>Model Rambut</td>
          <td>:</td>
          <td>
            <input type="text" name="model">
          </td>
        </tr>
        <tr>
          <td>Harga</td>
          <td>:</td>
          <td>
            <input type="number" name="harga">
          </td>
        </tr>
        <tr>
          <td>Tanggal</td>
          <td>:</td>
          <td>
            <input type="date" name="tanggal">
          </td>
        </tr>
        <tr>
          <td>Cabang</td>
          <td>:</td>
          <td>
            <input type="text" name="cabang">
          </td>
        </tr>
      </table>
      
      <ul>
      <li><button type="submit" name="submit">Submit</button></li>      
    </ul>
      
     </form>
     <br><br><br>
     <h1>NOTA PEMBAYARAN</h1>
     <table border="1">
    <tr>
     <center>
       <td>No Antrian</td>
      <td>Nama Member</td>
      <td>Model Rambut</td>
      <td>Harga</td>
      <td>Tanggal</td>
      <td>Cabang</td>
      <td>Pembatalan Booking</td>
     </center>
    </tr>
    <?php 
     $no = 1;
    foreach ($results as $results) :

     ?>
    <tr>
      <td> <?= $no; ?> </td>
      <td> <?= $results['nama'] ?> </td>
      <td> <?= $results['model'] ?> </td>
      <td> <?= $results['harga'] ?> </td>
      <td> <?= $results['tanggal'] ?> </td>
      <td> <?= $results['cabang'] ?> </td>
      <td>
       <center> <a href="cancel.php?id_member=<?= $results["id_member"]; ?>" onclick="return confirm ('yakin data akan di hapus?');">Hapus</a></center>
      </td>
    </tr>
    <?php 
    $no++;
    endforeach;
     ?> 
  </table>
   </center>
  </div>
  </div>
  <br><br><br>
  <!-- container news -->
  <!-- gallery -->
  
  <!-- gallery -->
  <!-- about -->
  <div id="about">
    <div class="container footer">
      <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
        <h2>About Us</h2>
        <p >Barbershopnia berdiri sejak 2018,Gaya setiap salon tentu berbeda, tetapi perbedaan barbershop dan salon terletak pada kapsternya yang memahami gaya terkini dari tatanan rambut pria. Mulai yang biasa digunakan oleh selebritas ternama hingga berdasarkan jenis lagu yang disukai. Semua pengetahuan ini hadir karena kesamaan pemikiran dan pola pikir pria. Bahkan para konsumen bisa bertanya potongan rambut apa yang cocok dengan wajah dan kepribadian sehingga hasilnya sempurna.</p>
      </div>
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
          <h2 >Contac</h2 >      
          <p ><a href="https://api.whatsapp.com/send?phone=6285712115436&text=Hi">Silahkan hubungi kontak kami 085712115436</a></p>
          <div id="icon"><a href="https://www.instagram.com/hafiz.eka12"><i class="fa fa-instagram "></i></a><a href="https://www.facebook.com/hafizeka.ramdani"><i class="fa fa-facebook-official"></i></a><a href="https://www.twitter.com/Hafiz94387164"><i class="fa fa-twitter-square"></i></a><a href="https://www.youtube.com/embed/CBGBZzUr-Oo"><i class="fa fa-youtube-play"></i></a></div>
        </div>
    </div>          
  </div>
  <!-- about -->

  <!-- kaki -->
<footer>
        <center><br>&copy; Copyright 2020 Hafizh Nauval</center>
      </footer>
  <!-- kaki -->
  <script src="assets/js/jquery.min.js"></script>
  <script src="assets/bootstrap/js/bootstrap.min.js"></script>

</body>

</html>
<?php
require_once("koneksi2.php");
if(isset($_POST['submit'])){
  $nama = $_POST['nama'];
  $model = $_POST['model'];
  $harga = $_POST['harga'];
  $tanggal = $_POST['tanggal'];
  $cabang = $_POST['cabang'];

  $sql_insert = "INSERT INTO transaksi VALUES('$nama', '$model', '$harga', '$tanggal', '$cabang')";
  mysqli_query($conn, $sql_insert);
   
}
  ?>