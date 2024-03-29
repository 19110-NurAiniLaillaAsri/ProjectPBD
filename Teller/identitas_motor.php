<?php
require '../koneksi.php';
require 'function/session.php';
require 'function/kelola_motor.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Identitas Motor</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/inventory.css">
</head>
<body>
<!-- Sidebar -->
	<input type="checkbox" id="nav-toggle"> 
	<div class="sidebar">
		<div class="sidebar-brand">
			<h2><span class="fas fa-box-open"></span><span>judul</span></h1>
		</div>

		<div class="sidebar-menu">
			<ul>
				<li>
                    <a href="hometeller.php" style="text-decoration: none;"><i class="fas fa-table me-2"></i><span>Home</span></a>
                </li>
                <li>
                    <a href="identitas_motor.php" class="active" style="text-decoration: none;"><i class="fas fa-table me-2"></i><span>Identitas Motor</span></a>
                </li>
                <li>
                    <a href="buat_user.php"style="text-decoration: none;"><i class="fas fa-table me-2"></i><span>Buat User</span></a>
                </li>
                <li>
                    <a href="transaksi.php" style="text-decoration: none;"><i class="fas fa-table me-2"></i><span>Transaksi</span></a>
                </li>
			</ul>
		</div>
	</div>
<!--Navbar -->
<div class="main-content">
		<header>
			<h2>
				<label for="nav-toggle">
					<span class="fas fa-bars"></span>
				</label>
				Identitas Motor
			</h2>

			<div class="dropdown">
              <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i><?= ucfirst($_SESSION['Nama']);?></a>

              <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                <!-- <li><a class="dropdown-item" href="buat_user.php">Buat Akun</a></li>
                <div class="dropdown-divider"></div> -->
                <!-- <li><a class="dropdown-item" href="ubahsandi.php">Ubah Kata Sandi</a></li>
                <div class="dropdown-divider"></div> -->
                <li><a class="dropdown-item" href="../logout.php" name="logout">Logout</a></li>
              </ul>
            </div>
		</header>
<!-- Form Identitas Motor -->
		<main>
<!-- Tabel -->
            <div class="container-fluid">
    			<div class="row card mb-4">
                    <div class="table-responsive-xxl">
                        <table class="table" style="min-width: 3000px;">
                            <thead class="text-center">
                                <tr>
                                <th scope="col">No Registrasi</th>
                                <th scope="col">Nama Pemilik</th>
                                <th scope="col">Alamat</th>
                                <th scope="col">No Rangka</th>
                                <th scope="col">No Mesin</th>
                                <th scope="col">Plat No</th>
                                <th scope="col">Merk</th>
                                <th scope="col">No Rangka</th>
                                <th scope="col">Type</th>
                                <th scope="col">Model</th>
                                <th scope="col">Tahun Pembuatan</th>
                                <th scope="col">Isi Silinder</th>
                                <th scope="col">Bahan Bakar</th>
                                <th scope="col">Warna TNKB</th>
                                <th scope="col">Tahun Registrasi</th>
                                <th scope="col">No BPKB</th>
                                <th scope="col">Kode Lokasi</th>
                                <th scope="col">Masa Berlaku STNK</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php
                                while($row = mysqli_fetch_array($query)){
                                    echo '
                                    <form method = "POST">
                                        <div class="invisible position-absolute">
                                            <input type="text" class="form-control" name="getId" value="'.$row['Id'].'">
                                        </div>
                                        <tr>
                                            <td>'.$row['Id'].'</td>
                                            <td>'.$row['NoRegistrasi'].'</td>
                                            <td>'.$row['NamaPemilik'].'</td>
                                            <td>'.$row['Alamat'].'</td>
                                            <td>'.$row['NoRangka'].'</td>
                                            <td>'.$row['NoMesin'].'</td>
                                            <td>'.$row['PlatNo'].'</td>
                                            <td>'.$row['Merk'].'</td>
                                            <td>'.$row['Type'].'</td>
                                            <td>'.$row['Model'].'</td>
                                            <td>'.$row['TahunPembuatan'].'</td>
                                            <td>'.$row['IsiSilinder'].'</td>
                                            <td>'.$row['BahanBakar'].'</td>
                                            <td>'.$row['WarnaTNKB'].'</td>
                                            <td>'.$row['TahunRegistrasi'].'</td>
                                            <td>'.$row['NoBPKB'].'</td>
                                            <td>'.$row['KodeLokasi'].'</td>
                                            <td>'.$row['MasaBerlakuSTNK'].'</td>
                                            
                                        </tr>
                                    </form>';
                                }
                                
                            ?>

                                
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </main>


<!-- Script -->
    <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script> <!-- buat modal -->  

    <!-- <a href="logout.php">logout luar</a> -->
</body>
</html>