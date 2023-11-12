<?php 
include_once ('../koneksi.php');
 session_start();

if (isset($_POST['simpan'])) {
    $nama = htmlspecialchars($_POST['nama']);
    $username = htmlspecialchars($_POST['username']);
    $pass = htmlspecialchars($_POST['pass']);
    $kontak = htmlspecialchars($_POST['kontak']);
    $alamat = htmlspecialchars($_POST['alamat']);
    $level = htmlspecialchars($_POST['level']);
    $sql = "INSERT INTO tb_daftar (nama_pelanggan, username, password_pelanggan, kontak_pelanggan, alamat_pelanggan, level) VALUES ('$nama', '$username', '$pass', '$kontak', '$alamat', '$level');";
    mysqli_query($koneksi, $sql);

     echo "<script>window.location='tabel_pelanggan.php';</script>";
}
 ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Tabel_Pesanan</title>
	<link rel="stylesheet" type="text/css" href="css/tabel_pegawai.css">
	<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.css">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

	
	<!-- Template Start -->
 	<meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">


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
			<li><a href="beranda_admin.php" class="active">Beranda</a></li>
			<li><a href="tabel_admin.php" >Admin</a></li>
            <li><a href="tabel_pegawai.php">Pegawai</a></li>
            <li><a href="tabel_pelanggan.php">Pelanggan</a></li>
            <li><a href="tabel_pesanan.php">Pesanan</a></li>
            <li><a href="tabel_transaksi.php">Transaksi</a></li>
            <li><a href="tabel_laporan.php">Laporan</a></li>
		</ul>

		<div class="main">
            <button type="button" class="user"><a style="color :black;" href="../logout.php" onclick="return confirm('Yakin Ingin Keluar?')">Keluar</a></button>
            <div class="bx bx-menu" id="menu-icon"></div>
        </div>
	</header>
	 <!--  Navbar End -->

	<div class="text">
		<p >Data Pesanan</p>
	</div>

	<!-- Konten Strat -->

		<div class="container">
			<div class="card shadow-sm ">
					 <div class="card-header ">

							<!-- Button trigger modal -->
							   <!-- 	<button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#tambah_pesanan">
						  		Tambah
								</button> -->
					  </div>

					  	  	<!-- Modal -->
					<div class="modal fade" id="tambah_pesanan" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
						  <div class="modal-dialog">
						    <div class="modal-content">
						      <div class="modal-header text-white bg-secondary">
						        <h5 class="modal-title" id="exampleModalLabel">Tambah Data Pelanggan</h5>
						        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
						      </div>
						      				<div class="modal-body ">
									      		
											       <form action="" method="POST">
										       <input type="text" placeholder="Masukkan Nama" name="nama" class="form-control mb-3" required>
										       <input type="text" placeholder="Masukkan Username" name="username" class="form-control mb-3" required>
										       <input type="password" placeholder="Masukkan Password" name="pass" class="form-control mb-3" required>
										       <input type="text" placeholder="Masukkan Kontak/ No.HP" name="kontak" class="form-control mb-3" required>
										       <input type="text" placeholder="Masukkan Alamat" name="alamat" class="form-control mb-3" required>
										       <select name="level" class="form-select" aria-label="Default select example">
										       	<option value="pelanggan">Pelanggan</option>
										       	<option value="Admin" disabled>Admin</option>
										       	<option value="Pegawai"disabled>Pegawai</option>

										       </select>
									     
									      	</div>
									      	<div class="modal-footer">
									        	<button type="submit" name="" class="btn btn-primary">Simpan</button>
									       		</form>
						      				</div>
						    </div>
						  </div>
					</div>
					<!-- Modal end -->

					<!-- Card Link Start -->
					<!-- 	  <div class="card-header">
						    <ul class="nav nav-pills card-header-pills">
						      <li class="nav-item">
						        <a class="nav-link " href="#">Proses</a>
						      </li>
						      <li class="nav-item">
						        <a class="nav-link" href="#">Selesai</a>
						      </li>
						    </ul>
						  </div> -->	
						  <!-- Card Link End -->

						  <!-- Card Body Start -->
						<div class="card-body table-responsive">
							<table class="table table-bordered " >
								<thead >
									<tr>
										<th width="5">No</th>
										<th width="15" id="myInput">Kode Pemesanan</th>
									<!-- 	<button onclick="myFunction()">Copy text</button> -->
										<th width="10">Nama</th>
										<th width="15">Kontak</th>
										<th width="30">Alamat</th>
										<th width="15">Tanggal Pemesanan</th>
										<th width="30">Status</th>
										<th width="30">Aksi</th>
									</tr>
								</thead>
									
						            <!-- <?php 
						            include '../koneksi.php';

						            $no = mysqli_query($koneksi, "SELECT kode_pemesanan FROM tb_boking ORDER BY kode_pemesanan DESC");
						            $kd_pesan = mysqli_fetch_array($no);
						            $kode = $kd_pesan['kode_pemesanan'];

						            $urut = substr($kode, 6, 3);
						            $tambah = (int) $urut + 1;
						            $bln = date('m');
						            $thn = date('Y');

						            if (strlen($tambah) ==1) {
						              $format = "NG" .$bln.$thn."0".$tambah;
						            }elseif (strlen($tambah) == 2) {
						               $format = "NG" .$bln.$thn.$tambah;
						            }

						             ?> -->
								<tbody>	
									<?php 
							include '../koneksi.php';
							$no =1;
							$sql_daftar =mysqli_query($koneksi, "SELECT * FROM tb_boking INNER JOIN tb_daftar ON tb_boking.id_daftar = tb_daftar.id_daftar ") or die (mysqli_error($koneksi));
							if(mysqli_num_rows($sql_daftar) > 0){
								while($data = mysqli_fetch_array($sql_daftar)){ ?>
									<tr>
									<td><?=$no++?></td>
									<td><?=$data['kode_pemesanan']?></td>
									<td><?=$data['nama_pelanggan']?></td>
									<td><?=$data['kontak_pelanggan']?></td>
									<td><?=$data['alamat_pelanggan']?></td>
									<td><?=$data['tgl_pemesanan']?></td>
									<td><?=$data['status']?></td>
									<td> 
									<!-- Modal Button Ubah Start -->
										<a type="button" data-bs-target="#ubah<?= $data['id_daftar'];?>" class="btn btn-warning btn-sm" data-bs-toggle="modal" >Ubah</a>								
										<!-- Modal Button Ubah End -->

										<a href="pelanggan/hapus_admin.php?id=<?= $data['id_daftar'] ?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin Ingin Hapus?')">Hapus</a>	
									</td>
									</tr>
									<!-- Modal Edit Start -->
									  	<div class="modal fade" id="ubah<?=$data['id_daftar'];?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
										  <div class="modal-dialog">
										    <div class="modal-content">
										      <div class="modal-header text-white bg-secondary">
										        <h5 class="modal-title" id="exampleModalLabel">Ubah Status</h5>
										        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
										      </div>
										      			<div class="modal-body">
										      	<!-- <div class="form-group"> -->
										  
													   <form action="pelanggan/ubah_pesanan.php" method="POST">
													   	<input type="hidden" name="id_boking" value="<?= $data['id_boking']?>" >
													       <select name="level"  class="form-select" 
									                        ?>
													       	<option value="Boking" >Boking</option>
													       	<option value="Proses" >Proses</option>      	
													       	<option value="Selesai">Selesai</option>
													       	<option value="Diterima">Diterima</option>

													       	</select>
													       	
													      <!--  </div> -->
													      </div>
													      <div class="modal-footer">
													       
													        <button type="submit" name="ubah" value="ubah" class="btn btn-primary">Ubah</button>
													        </form>
													      
										      			</div>
										    </div>
										  </div>
										</div>
									
									<!-- Modal Edit End -->
								<?php
								}
							}else {
								echo "<tr><td colspan =\"4\" align=\"center\">Data tidak ditemukan</td></tr>";
							}

							 ?>
								</tbody>
							</table>
					  	</div>
					  	<!-- Card Link End -->
					  	
			</div>	
		</div>
<!--  Konten End -->
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
						<li><a href="beranda_admin.php"><i class="fa-solid fa-caret-down"></i> Beranda</a></li>
						<li><a href="tabel_admin.php"><i class="fa-solid fa-caret-down"></i> Admin</a></li>
                        <li><a href="tabel_pegawai.php"><i class="fa-solid fa-caret-down"></i> Pegawai</a></li>
                        <li><a href="tabel_pelanggan.php"><i class="fa-solid fa-caret-down"></i> Pelanggan</a></li>
                        <li><a href="tabel_pesanan.php"><i class="fa-solid fa-caret-down"></i> Pesanan</a></li>
                        <li><a href="tabel_transaksi.php"><i class="fa-solid fa-caret-down"></i> Transaksi</a></li>
                        <li><a href="tabel_laporan.php"><i class="fa-solid fa-caret-down"></i> Laporan</a></li>
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


