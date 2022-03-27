<?php 
  switch (@$_GET['page']) {


    case 'Pelanggan':
			include 'page/pelanggan/pelanggan.php';
			break;
		case 'TambahPelanggan':
			include 'page/pelanggan/tambahpelanggan.php';
			break;
		case 'EditPelanggan':
			include 'page/pelanggan/editpelanggan.php';
			break;
		case 'HapusPelanggan':
			include 'page/pelanggan/hapuspelanggan.php';
			break;


		case 'Paket':
			include 'page/paket/paket.php';
			break;
		case 'TambahPaket':
			include 'page/paket/tambahpaket.php';
			break;
		case 'EditPaket':
			include 'page/paket/editpaket.php';
			break;
		case 'HapusPaket':
			include 'page/paket/hapuspaket.php';
			break;


		case 'Karyawan':
			include 'page/karyawan/karyawan.php';
			break;
		case 'TambahKaryawan':
			include 'page/karyawan/tambahkaryawan.php';
			break;
		case 'EditKaryawan':
			include 'page/karyawan/editkaryawan.php';
			break;
		case 'HapusKaryawan':
			include 'page/karyawan/hapuskaryawan.php';
			break;

    
            default :
            include 'page/home.php';
            break;
        }
      ?>