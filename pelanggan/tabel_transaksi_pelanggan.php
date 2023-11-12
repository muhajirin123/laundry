<?php 
include_once ('../koneksi.php');
session_start()

// if (!isset($_SESSION['id'])) {
// header("location: ../umum/index.php");
// echo "<script>alert('Hayo Login Duluuu!!!');</script>";
// exit;
// }
 ?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Tabel_Transaksi_Pelanggan</title>
  <link rel="stylesheet" type="text/css" href="css/tabel_pelanggan.css">
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
          <a href="tabel_boking.php" class="logo"><img src="img/laundry-machine.png" alt=""><span>Ngumbah.in</span></a>

          <ul class="navbar">
            <li><a href="beranda_pelanggan.php" >Beranda</a></li>
            <li><a href="beranda_pelanggan.php">Tutorial</a></li>
            <li><a href="tabel_boking.php">Pemesanan</a></li>
            <li><a href="tabel_transaksi_pelanggan.php">Transaksi</a></li>
          </ul>

          <div class="main">
            <button type="button" data-bs-toggle="modal"  href="../logout.php" onclick="return confirm('Yakin Ingin Keluar?')" class="user">Keluar</button>
            <div class="bx bx-menu" id="menu-icon"></div>
          </div>
        </header>
   <!--  Navbar End -->

  <div class="text">
    <p >Riawayat Transaksi</p>
  </div>

<div class="container">
  <div class="card shadow-sm ">
       <div class="card-header">
          <p></p>
          <!-- Button trigger modal -->
              <!-- <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#tambah_pesanan">
              Pesan
            </button> -->
        </div>

              <!-- Modal -->
     <!--  <div class="modal fade" id="tambah_pesanan" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header text-white bg-secondary">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Data Pelanggan</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
                      <div class="modal-body ">
                        <form action="tambah_pegawai.php" method="POST">
                         <input type="text" placeholder="Nama" name="nama_pegawai" class="form-control mb-3" required>
                         <input type="password" placeholder="Password" name="" class="form-control mb-3" required>
                       <select class="form-select mb-3" >
                        <option selected>Jenis Kelamin</option>
                        <option value="Laki-Laki">Laki-Laki</option>
                        <option value="Perempuan">Perempuan</option>
                       </select>
                         <input type="text" placeholder="Kontak" name="" class="form-control mb-3" required>
                         <input type="text" placeholder="Alamat" name="" class="form-control" required>
    
                   
                      </div>
                      <div class="modal-footer">
                        <button type="submit" name="" class="btn btn-primary">Simpan</button>
                        </form>
                      </div>
            </div>
          </div>
      </div> -->
      <!-- Modal end -->

        <div class="card-body table-responsive" >
          <table class="table table-bordered " >
            <thead >
              <tr>
                <th width="5">Kode Pemesanan</th>
                <th width="15" id="myInput">Nama</th>
              <!--  <button onclick="myFunction()">Copy text</button> -->
                <th width="10">Alamat</th>
                <th width="30">Tgl Ambil</th>
                <th width="30">Tgl Antar</th>
                <th width="30">Jenis</th>
                <th width="30">Berat</th>
                <th width="30">Jumlah</th>
                <th width="30">Bayar</th>
               
              </tr>
            </thead>
              <?php 
              include '../koneksi.php';
              $no =1;
              $sql_daftar =mysqli_query($koneksi, "SELECT * FROM tb_detail_pesanan INNER JOIN tb_boking ON tb_detail_pesanan.id_boking = tb_boking.id_boking WHERE id_daftar = '".$_SESSION['id']."' ") or die (mysqli_error($koneksi));
              if(mysqli_num_rows($sql_daftar) > 0){
                while($data = mysqli_fetch_array($sql_daftar)){ ?>
                  <tr>
                  <td><?=$no++?></td>
                  <td><?=$data['kode_pemesanan ']?></td>
                  <td><?=$data['nama_pelanggan']?></td>
                  <td><?=$data['alamat_pelanggan']?></td>
                  <td><?=$data['tanggal_ambil']?></td>
                  <td><?=$data['tanggal_antar']?></td>
                  <td><?=$data['jenis']?></td>
                  <td><?=$data['berat']?></td>
                  <td><?=$data['bayar']?></td>
                  


                  <?php 
              } 
                }
               ?>
            <tbody> 
            </tbody>
          </table>
          </div>

  </div>  
</div>
<div style="text-align:  center; margin-bottom: 50px;">
 <p>~~Untuk melakukan konfirmasi penerimaan pesanan dapat dilakukan melalui whatsapp
    <a href="https://api.whatsapp.com/send?phone=6283119534645">
      <br>
      <button type="button" class="btn btn-primary btn-sm">Konfirmasi</button>
      <!-- <img src="img/wa.png" alt="Pengertian HTML" style="width:20px"> -->
    </a>

</div >

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
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3956.4737589977117!2d112.46858911596416!3d-7.412701360435961!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e780f46eb2aa5c5%3A0x2698afa9310a50da!2sRahayu%20Laundry!5e0!3m2!1sid!2sid!4v1670329302213!5m2!1sid!2sid" width="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                  </ul>
                  
                </div>

                <div class="col" style="text-align: center;">
                  <h4>Link</h4>
                  <ul>
                    <li><a href="beranda_pelanggan.php"><i class="fa-solid fa-caret-down"></i>Beranda</a></li>
                    <li><a href="beranda_pelanggan.php"><i class="fa-solid fa-caret-down"></i>Tutorial</a></li>
                    <li><a href="tabel_boking.php"><i class="fa-solid fa-caret-down"></i>Pemesanan</a></li>
                    <li><a href="tabel_transaksi_pelanggan.php"><i class="fa-solid fa-caret-down"></i> Transaksi</a></li>
                  </ul>
                  
                </div>

                <div class="col" style="text-align: center;">
                  <h4>Ikuti Kami</h4>
                  <div class="laundry">
                    <a href="" style="font-size: 40px; line-height: 40px;">
                              <img src="img/laundry.in.png" alt="" >
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
