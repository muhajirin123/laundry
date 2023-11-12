<?php 
include_once ('../koneksi.php');
session_start();
if(!isset($_SESSION['id'])) {
header("location: ../umum/index.php");
echo "<script>alert('Hayo Login Duluuu!!!');</script>";
exit;
}
 ?>
 ?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Beranda_Pegawai</title>
    <link rel="stylesheet" type="text/css" href="css/beranda_pegawai.css">
    <link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">

    <link rel="stylesheet"
    href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">

</head>
<body>

<!-- Navbar Start -->
    <header>
        <a href="tabel_pegawai.php" class="logo"><img src="img/laundry-machine.png" alt="" style="width: 60px; padding-right: 3px;"><span>Ngumbah.in</span></a>

        <ul class="navbar">
             <li><a href="beranda_pegawai.php" class="active">Beranda</a></li>
            <li><a href="tabel_pegawai.php">Pegawai</a></li>
             <li><a href="tabel_pelanggan.php">Pelanggan</a></li>
            <li><a href="tabel_pesanan.php">Pesanan</a></li>
            <li><a href="tabel_transaksi.php">Transaksi</a></li>
        </ul>

        <div class="main">
            <button type="button" class="user"><a style="color :black;" href="../logout.php" onclick="return confirm('Yakin Ingin Keluar?')">Keluar</a></button>
            <div class="bx bx-menu" id="menu-icon"></div>
        </div>
    </header>
     <!--  Navbar End -->

    <div class="text">
        <!-- <p >Input Pegawai</p> -->
    </div>

<!-- Modal Start Daftar -->
    <div class="modal fade" id="daftar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                      <div class="modal-header text-white bg-secondary">
                        <h5 class="modal-title" id="exampleModalLabel">Daftar Dulu yaa..</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                                    <div class="modal-body mb-2">
                        <!-- <div class="form-group"> -->
                                        <form action="" method="POST">
                                           <label for="name">Nama</label>
                                           <input class="form-control" type="text" name="nama" id="name" placeholder="Isi Nama" required="required" data-validation-required-message="Mohon Isi Nama Anda" >
                                           <label style="margin-top: 10px;" for="username">Username</label>
                                           <input class="form-control" type="text" name="username" id="username" placeholder="Isi Username" required="required" data-validation-required-message="Mohon Isi username" >
                                           <label style="margin-top: 10px;" for="password">Password</label>
                                           <input class="form-control" type="text" name="pass" id="password" placeholder="Isi Password" required="required" data-validation-required-message="Mohon Isi Password" >
                                           <label style="margin-top: 10px;" for="hp">Nomor Handphone</label>
                                           <input class="form-control" type="text" name="kontak" id="hp" placeholder="Isi Nomor Handphone" required="required" data-validation-required-message="Mohon Isi No.Handphone" >
                                           <label style="margin-top: 10px;" for="alamat">Alamat</label>
                                           <input class="form-control" type="text" name="alamat" id="alamat" placeholder="Isi Alamat" required="required" data-validation-required-message="Mohon Isi Alamat" >
                                  <!--  </div> -->
                                    </div>
                                     <div class="modal-footer">
                                   
                                        <button type="submit" name="daftar" class="btn btn-primary">Daftar</button>
                                        </form>
                                    </div>
                    </div>
                  </div>
            </div>
     <!-- Modal End Daftar -->
<!-- Modal Start Login -->
<div class="modal fade" id="masuk" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                      <div class="modal-header text-white bg-secondary">
                        <h5 class="modal-title" id="exampleModalLabel">Daftar Dulu yaa..</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                                    <div class="modal-body mb-2">
                        <!-- <div class="form-group"> -->
                                        <form action="login.php" method="POST">
                                        
                                           <label style="margin-top: 10px;" for="username">Username</label>
                                           <input class="form-control" type="text" name="username" id="username" placeholder="Masukkan Username" required="required" data-validation-required-message="Mohon Isi username" >
                                           <label style="margin-top: 10px;" for="password">Password</label>
                                           <input class="form-control" type="password" name="pass" id="password" placeholder="Masukkan Password" required="required" data-validation-required-message="Mohon Isi Password" >
                                          
                                  <!--  </div> -->
                                    </div>
                                     <div class="modal-footer">
                                   
                                        <button type="submit" name="login" class="btn btn-primary">Masuk</button>
                                        </form>
                                    </div>
                    </div>
                  </div>
            </div>
<!-- Modal End Login-->

    <!-- Header Start -->
    <div id="beranda" class="container-fluid px-0 px-md-5 mb-5" style="background-color: skyblue;">
        <div class="row align-items-center px-3 py-3">
            <div class="col-lg-6 col-md-6 col-sm-6 text-center text-lg-left">
                <h4 class="text-white mb-4 mt-3 mt-lg-0">Selamat datang <?= $_SESSION['nama_pelanggan']?> di</h4>
                <h1 class="display-3 font-weight-bold text-white">Website Jasa Laundry</h1>
                <h1 class="font-weight-bold text-white">Ngumbah.In</h1>
            </div>
            <div class="col-md-6 col-lg-6 col-sm-6 text-center text-lg-right">
                <img class="" src="img/laundry-machine.png" alt="" style="width: 70%;">
            </div>
        </div>
    </div>
    <!-- Header End -->


    <!-- Facilities Start -->
    <div class="container-fluid pt-5 ">
        <div class="container">
            <div class="text-center pb-2">
                <h1 class="mb-4">Melayani</h1>
            </div>
            <div class="row">
                <div class="col-md-4 col-lg-3 col-sm-4 text-center team mb-5">
                    <div class="position-relative" style="border-radius: 100%;">
                        <img class="" src="img/washing-clothes.png" alt="" style="width: 50%;" >
                    </div>
                    <h4>.</h4>
                    <h4>Cuci Basah</h4>
                    <h4>Rp 2.000/Kg</h4>
                </div>
                <div class="col-md-4 col-lg-3 col-sm-4 text-center team mb-5">
                    <div class="position-relative" style="border-radius: 100%;">
                        <img class="" src="img/laundry.png" alt=""style="width: 50%;" >
                    </div>
                    <h4>.</h4>
                    <h4>Cuci Kering</h4>
                    <h4>Rp 3.000/Kg </h4>
                </div>
                <div class="col-md-4 col-lg-3 col-sm-4 text-center team mb-5">
                    <div class="position-relative" style="border-radius: 100%;">
                        <img class="" src="img/laundry setrika.png" alt=""style="width: 50%;" >
                    </div>
                    <h4>.</h4>
                    <h4>Cuci Setrika</h4>
                    <h4>Rp 5.000/Kg </h4>
                </div>
                <div class="col-md-4 col-lg-3 col-sm-4 text-center team mb-5">
                    <div class="position-relative" style="border-radius: 100%;">
                        <img class="" src="img/iron.png" alt=""style="width: 50%;" >
                    </div>
                    <h4>.</h4>
                    <h4>Setrika</h4>
                    <h4>Rp 3.000/Kg </h4>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-lg-3 col-sm-4 text-center team mb-5">
                    <div class="position-relative" style="border-radius: 100%;">
                        <img class="" src="img/bed-sheets.png" alt=""style="width: 50%;" >
                    </div>
                    <h4>.</h4>
                    <h4>Bed Cover Besar</h4>
                    <h4>Rp 18.000/potong </h4>
                </div>
                <div class="col-md-4 col-lg-3 col-sm-4 text-center team mb-5">
                    <div style="border-radius: 100%;">
                        <img class="" src="img/bed-sheets 2.png" style="width: 50%; padding: 20px;">
                    </div>
                    <h4>.</h4>
                    <h4>Bed Cover Kecil</h4>
                    <h4>Rp 15.000/potong </h4>
                </div>
        
                <div class="col-md-4 col-lg-3 col-sm-4 text-center team mb-5">
                    <div class="position-relative" style="border-radius: 100%;">
                        <img class="" src="img/laundry setrika.png" alt=""style="width: 50%;" >
                    </div>
                    <h4>.</h4>
                    <h4>Sprei</h4>
                    <h4>Rp 5.000/potong </h4>
                </div>
                <div class="col-md-4 col-lg-3 col-sm-4 text-center team mb-5">
                    <div class="position-relative" style="border-radius: 100%;">
                        <img class="" src="img/blanket.png" alt=""style="width: 50%;" >
                    </div>
                    <h4>.</h4>
                    <h4>Selimut</h4>
                    <h4>Rp 10.000/potong </h4>
                </div>
            </div>
            <div class="text-center">
                <h4>
                    .
                </h4>
                <h4>
                    Dan Lain-lain
                </h4>
            </div><br><br>
        </div>
        <div class="container">
            <div class="text-center pb-2">
                <h1 class="mb-4">Keunggulan</h1>
            </div>
            <div class="row">
                <div class="col-md-6 col-lg-3 col-sm-6 text-center team mb-5">
                    <div class="position-relative" style="border-radius: 100%;">
                        <img class="" src="img/shipment.png" alt="" style="width: 50%;" >
                    </div>
                    <h4>.</h4>
                    <h4>Pick Up Delivery</h4>
                </div>
                <div class="col-md-6 col-lg-3 col-sm-6 text-center team mb-5">
                    <div class="position-relative" style="border-radius: 100%;">
                        <img class="" src="img/skin-care.png" alt=""style="width: 50%;" >
                    </div>
                    <h4>.</h4>
                    <h4>Higienis</h4>
                </div>
<!--                 <div class="col-md-6 col-lg-4 col-sm-6 text-center team mb-5">
                    <div class="position-relative" style="border-radius: 100%;">
                        <img class="" src="img/iron.png" alt=""style="width: 50%;" >
                    </div>
                    <h4>.</h4>
                    <h4>Steam Iron</h4>
                </div> -->
<!--                 <div class="col-md-6 col-lg-4 col-sm-6 text-center team mb-5">
                    <div class="position-relative" style="border-radius: 100%;">
                        <img class="" src="img/timer.png" alt=""style="width: 50%;" >
                    </div>
                    <h4>.</h4>
                    <h4>Express</h4>
                </div>  -->   
                <div class="col-md-6 col-lg-3 col-sm-6 text-center team mb-5">
                    <div class="position-relative" style="border-radius: 100%;">
                        <img class="" src="img/best-price.png" alt=""style="width: 50%;" >
                    </div>
                    <h4>.</h4>
                    <h4>Harga Bersaing</h4>
                </div> 
                <div class="col-md-6 col-lg-3 col-sm-6 text-center team mb-5">
                    <div class="position-" style="border-radius: 100%;">
                        <img class="" src="img/guarantee.png" alt=""style="width: 50%;" >
                    </div>
                    <h4>.</h4>
                    <h4>Garansi 100%</h4>
                </div>       
                
            </div>
        </div>
    </div>

    <div id="tutorial" class="container-fluid mr-4 ml-4 center" style="text-align:center;">
            <div class="text-center pb-2">
                <h1 class="mb-4">Cara Pemesanan</h1>
            </div>
            <img src="img/cara.png" style="width: 80%; border-radius: 10px;">
        
    </div>


    <!--   Footer Start -->
    <div class="footer">
        <div class="content">
            <div class="isi">
                <div class="col" style="text-align: center;">
                    <h4>Tentang Kami</h4>
                    <ul>
                        <a href=""><i class="fa-solid fa-location-dot"></i></a>
                        <span>Alamat</span>
                        <p>Dusun Pecarikan RT. 02/ RW. 03 Desa Jetis, Kec Jetis, Kab Mojokerto, Jawa timur</p>
                        <iframe src="https://www.google.co.id/maps/search/Dusun+Pecarikan+RT.+02%2F+RW.+03+Desa+Jetis,+Kec+Jetis,+Kab+Mojokerto,+Jawa+timur/@-7.4138225,112.4697121,17z/data=!3m1!4b1" style="width: 100%"></iframe>
                    </ul>
                    
                </div>

                <div class="col" style="text-align: center;">
                    <h4>Link</h4>
                    <ul>
                        <li><a href="beranda_admin.php"><i class="fa-solid fa-caret-down"></i> Beranda</a></li>
                        <li><a href="tabel_pegawai.php"><i class="fa-solid fa-caret-down"></i> Pegawai</a></li>
                        <li><a href="tabel_pelanggan.php"><i class="fa-solid fa-caret-down"></i> Pelanggan</a></li>
                        <li><a href="tabel_pesanan.php"><i class="fa-solid fa-caret-down"></i> Pesanan</a></li>
                        <li><a href="tabel_transaksi.php"><i class="fa-solid fa-caret-down"></i> Transaksi</a></li>
                    </ul>
                    
                </div>

                <div class="col" style="text-align: center;">
                    <h4>Ikuti Kami</h4>
                    <div >
                        
                        <a href="" style="font-size: 40px; line-height: 40px;">
                        <img src="img/laundry.in.png" alt="" >
                        <!-- <span class="text-white">Ngumbah.In</span> -->
                        </a>
                    </div>
                    <div class="social">
                        <a href=""><i class="fa-brands fa-whatsapp"></i></a>
                        <a href="#"><i class="fa-brands fa-facebook"></i></a>
                        <a href="#"><i class="fa-brands fa-instagram"></i></a>
                    </div>

                </div>

                
            </div>
            
        </div>
        
    </div>

    <div class="copyright" style="border-top: 1px solid rgba(23, 162, 184, .2); background: #222327;" >
            <p class="m-0 text-center text-white">
                &copy; <a class="text-primary font-weight-bold" href="#">Ngumbah.in</a>. All Rights Reserved. Designed
                by
                <a class="text-primary font-weight-bold" href="https://www.its.ac.id/teo/id/beranda/">DTEO ITS</a>
            </p>
        </div>

<!--   Footer End -->

    <script type="text/javascript" src="js/navbar2.js"></script>
</body>
</html>

<?php 
// }
 ?>