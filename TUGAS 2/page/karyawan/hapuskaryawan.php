<?php 

  if (!isset($_GET['id'])) {
    header("Location: ?page=Karyawan");
    exit;
  }


  $id = $_GET['id'];

  if (deleteData('tbl_karyawan', $id) > 0) {
    echo "<script>
            alert('Data berhasil dihapus');
            document.location.href = '?page=Karyawan';
          </script>";
  } else {
    echo "<script>
            alert('Data gagal dihapus');
          </script>";  
  }
?>
