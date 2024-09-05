<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
 <!-- boootstrap -->
    <link href="vendor/css/bootstrap/bootstrap.min.css" rel="stylesheet">
      <link href="vendor/css/bootstrap/bootstrap.css" rel="stylesheet">
      <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous"> -->
  

    <!-- icon dan fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"> -->

    <!-- tema css -->
    <link href="css/tampilan.css" rel="stylesheet">
	<title>Inventory Barang</title>
</head>
<body>


<!-- Menu -->
    <nav class="navbar navbar-default navbar-fixed-top navbar-custom  ">
      <div class="container">
        <div class="navbar-header page-scroll">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">navigation</span> Menu <i class="fa fa-bars"></i>
          </button>
          <!-- <img src="images/Logokominfo.jpeg" alt="kominfo"> -->
          <a class="navbar-brand" href="index.php">Data Aset</a>
        </div>

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav navbar-right">
            <li class="page-scroll">
              <a href="index.php">Beranda</a>
            </li>
            <li class="page-scroll">
              <a href="inventarisbr.php">Inventaris baru</a>
            </li>
            <li class="page-scroll">
              <a href="#">Inventaris lama</a>
            </li>
            <li class="page-scroll">
              <a href="#tentang"></a>
            </li>
            <li class="page-scroll">
              <a href="#tentang">Tentang</a>
            </li>
            <li class="page-scroll">
              <a class="btn btn-secondary dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Login</a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="admin/loginadmin.php">Admin</a></li>
                <li><a class="dropdown-item" href="petugas/login_petugas.php">Petugas</a></li>
              </ul>
            </li>
          </ul>
        </div>

 

      </div>
    </nav>	

               <!-- Header atau gambar-->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <img class="first-slide" src="images/gambarkominfo.jpg" alt="First slide">
        </div>
        <!-- <div class="item">
          <img class="second-slide" src="images/" alt="Second slide">
        </div>
        <div class="item">
          <img class="third-slide" src="images/" alt="Third slide">
        </div> -->
      </div>
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
       
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        
        <span class="sr-only">Next</span>
      </a>
    </div>

   
     <!-- Login Feature Section Start -->

     <section id="tentang" class="section-margin" style="margin-bottom: 100pt;">
      
        <div class="row content" id="login">
      <div class="col-lg-12 danger text-center zero-panel">
        <div class="col-lg-12 zero-panel-content">
          <div class="jumbotron">
          <h2> Tentang Website Inventory </h2><br>
          <p>Website pendataan inventaris Kantor Kominfotik Brebes dirancang untuk mempermudah pengelolaan aset dan inventaris secara digital. Dengan tampilan yang user-friendly dan fitur yang intuitif, website ini memungkinkan staf untuk melacak, mengelola, serta memperbarui data inventaris dengan cepat dan akurat. Sistem ini mendukung transparansi dan efisiensi dalam pemantauan penggunaan barang, penggantian aset, serta perencanaan kebutuhan inventaris di masa depan. Selain itu, adanya laporan real-time memudahkan pengambilan keputusan manajerial yang lebih tepat.</p></div>
          
        
        </div>
        <br>
        
         
          
          
          
        
      </div>
    </div>
    </section>

    <!-- footer -->

    <footer class="footer container">
	
  <section class="col-sm-12" style="margin-top: 1px;">
  <div class="col-lg-10 col-lg-offset-1 text-center">
  <br>
  <ul class="list-inline">
  <li>
  <a href="https://www.facebook.com/profile.php?id=100010977574440&locale=id_ID" target="_blank"><i class="fa fa-facebook fa-fw fa-2x"></i></a>
  </li>
  <li>
  <a href="https://github.com/irhamzakki" target="_blank"><i class="fa fa-github fa-fw fa-2x"></i></a>
  </li>
  <li>
  <a href="https://www.linkedin.com/in/irham-zakki-01909827a/ target="_blank"><i class="fa fa-linkedin fa-fw fa-2x"></i></a>
  </li>
  </ul>
  <hr class="medium">
  <p class="text-muted" style="font-size: 16px;">Copyright &copy;<script>document.write(new Date().getFullYear());</script> Moezakkii__ All rights reserved</p>
  </div>
  </section>
  </footer>

 <!-- jQuery -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>

    <!--include-->
    <script src="vendor/css/js/bootstrap.min.js"></script>
</body>
</html>