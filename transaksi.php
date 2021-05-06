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
  header('Location:artikel.php');
  
}
  ?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tubes pweb</title>
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

.navbar-default .navbar-nav > .active > a, .navbar-default .navbar-nav > .open > a{
  background-repeat:repeat-x;
  -webkit-box-shadow:inset 0 3px 9px rgba(0,0,0,.075);
  background:rgba(255, 255, 255, 0.3);

}

.navbar-default .navbar-toggle:focus, .navbar-default .navbar-toggle:hover{
  background-color:#ddd;
  background:white;
}

button.navbar-toggle.collapsed{
  margin-top:16px;
  margin-right:52px;
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

.navbar-header a.navbar-brand img{
  height: 30px;
  margin-top: -4px;
}

.navbar-nav > li > a{
  padding-top: 10px;
  padding-bottom: 10px;
}

i.glyphicon.glyphicon-search{
  font-size: 20px;
  color: rgb(184,182,182);

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
.login-box{
  width: 500px;
  height: 510px;
  color: #fff;
  margin: 20px 5px 5px 500px;
  box-sizing: border-box;
  padding: 30px;
  
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

ul{
  color: black;

}


.servis{
  width: 1500px;
  height: 500px;
  background: rgba(0,144,154,0.3);
  color: #fff;
  margin: 100px 0px 0px 0px;
  box-sizing: border-box;
  padding: 30px;
  
}

#about{ 
  padding: 7px 0px 0px 20px;
  margin-top: 79px;
  color: white;
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
  </style>
  <!-- navbar -->
  <nav class="navbar navbar-default navbar-static-top">
    <div class="container" id="navbar">
      <div class="navbar-header">
        <a href="#" class="navbar-brand navbar-link"></a>
        <button class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
      </div>
      <div class="collapse navbar-collapse" id="navcol-1">
        <ul class="nav navbar-nav navbar-right">
          
          <li role="presentation"><a href="#home">HOME</a></li>
          <li role="presentation"><a href="#news">NEWS</a></li>
          <li role="presentation"><a href="#gallery">GALLERY</a></li>

          <li role="presentation"><a href="#about">ABOUT</a></li>
          <li role="presentation"><a href="logout.php">LOGOUT</a></li>
          
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
        <h1><center>Budaya Indonesia</center></h1>
        <div class="row">
          <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
            <i class="glyphicon glyphicon-map-marker"></i>
            <h3>STRATEGIS</h3>
            <p class="text-justify"><strong>Letak </strong> Indonesia secara geografis adalah di wilayah garis Khatulistiwa, diantara dua benua, yaitu benua Asia dan Australia, serta terletak di antara dua samudera yaitu Samudera Hindia dan Samudera Pasifik.dan Indonesia merupaka negara kepulauan yang penuh dengan keragaman budaya, suku bangsa, ras, etnis, agama, maupun bahasa daerah. Meski kaya akan keragaman, namun mereka tetap satu Indonesia. Ini sesuai dengan semboyan Bhineka Tunggal Ika, yang artinya meskipun berbeda-beda tetap satu jua.</p>
          </div>
          <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
            <i class="glyphicon glyphicon-tree-conifer"></i>
            <h3>IKLIM</h3>
            <p class="text-justify"><strong>Indonesia </strong>berada di sepanjang garis khatulistiwa, dan iklimnya cenderung relatif merata sepanjang tahun. Indonesia memiliki dua musim — musim hujan dan musim kemarau — tanpa musim panas atau musim dingin yang ekstrem.Untuk sebagian besar Indonesia, musim kemarau jatuh antara Mei dan Oktober dengan musim hujan antara November dan April.Iklim Indonesia hampir seluruhnya tropis, didominasi oleh iklim hutan hujan tropis yang ditemukan di setiap pulau besar di Indonesia. Jenis iklim yang lebih sejuk memang ada di daerah pegunungan yang 1.300 hingga 1.500 meter (4.300 hingga 4.900 kaki) di atas permukaan laut.</p>
          </div>
          <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
            <i class="glyphicon glyphicon-camera"></i>
            <h3>EKSOTIK</h3>
            <p class="text-justify"><strong>Indonesia </strong>merupakan salah satu dari tiga negara terbesar yang memiliki keanekaragaman flora dan fauna. Fauna Indonesia memiliki keanekaragaman yang tinggi karena wilayahnya yang luas dan berbentuk kepulauan tropis. Keanekaragaman yang tinggi ini disebabkan oleh Garis Wallace dan Potensi kekayaan alamnya sangat luar biasa, baik sumber daya alam hayati maupun non hayati dan Indonesia merupakan negara besar yang terdiri dari berbagai suku, adat dan budaya. Salah satu kebudayaan Indonesia adalah Tari-tarian Tradisional.</p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div id="news">
    <div class="container">
      <div class="row">
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 ">
          <div><img src="assets/img/gambar.jpg">
          <div class="caption">
            <h3 >Gambar 1 </h3>
            <p class="text-justify">Gambar diatas menggabarkan segombolan anak sedang bermain bola di sawah.</p>
            
          </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
          <div ><img src="assets/img/gambar-2-e.jpg">
          <div class="caption">
            <h3>Gambar 2</h3>
            <p class="text-justify">Menggambarkan 3 anak sedang berlarian di sawah dan membawa sebuah bendera merah putih.<br></p>
           
          </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
          <div ><img src="assets/img/gambar-2-f.jpg">
          <div class="caption">
            <h3>Gambar 3</h3>
            <p class="text-justify">Menggambarkan seorang anak sedang mendengarkan radio sampai tertidur   .</p>
            
          </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
          <div><img src="assets/img/gmbr.jpg">
          <div class="caption">
            <h3>Gambar 4</h3>
            <p class="text-justify">Menggambarkan 3 orang anak sedang berjalan lurus menelusuri jalan.<br></p>
         
          </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <h1 style="color: white;"><center>GALERI</center></h1><br>
 <center> <img src="foto2.jpg"><img src="foto4.jpg"> <img src="foto6.jpg"><img src="foto7.jpg"></center>
 <center> <img src="alat1.jpg"><img src="alat2.jpg"> <img src="alat3.jpg"><img src="alat4.jpg"></center>
<br><br><br>
<center><h1 style="color: white;">BOOK NOW</h1></center>
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
   </center>
   
  </div>
  <div class="servis">
   
    <h1>Hafizh Nauval</h1>
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
        <p>Indonesia adalah negara kepulauan yang terdapat di asia bagian tenggara yang dilintasi garis khatulistiwa dan berada di antara daratan benua Asia dan Australia, serta antara Samudra Pasifik dan Samudra Hindia.</p>
      </div>
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
          <h2>Kontak</h2>
         
          <p ><a href="tel://085786203679">Silahkan hubungi kontak kami 085785203679</a></p>
          
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


