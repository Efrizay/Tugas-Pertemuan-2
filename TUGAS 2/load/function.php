<?php

  require 'config.php';

  function numData( $tabel ) {
    global $koneksi;
    $num = mysqli_query($koneksi, "SELECT * FROM $tabel");
    return mysqli_num_rows($num);
  }

  function numQueryData( $query ) {
    global $koneksi;
    $num = mysqli_query($koneksi, $query);
    return mysqli_num_rows($num);
  }

  function viewData( $query ) {
    global $koneksi;
    $result = mysqli_query($koneksi, $query);
    
    if (mysqli_num_rows($result) == 1) {
      return mysqli_fetch_assoc($result);
    }

    $rows = [];
      while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
      }
    return $rows;
  }

  function viewDatas( $query ) {
    global $koneksi;
    $result = mysqli_query($koneksi, $query);

    $rows = [];
      while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
      }
    return $rows;
  }

  function viewAllData($tabel) {
    global $koneksi;
    $query = "SELECT * FROM $tabel ORDER BY id DESC";
    $result = mysqli_query($koneksi, $query);

    $rows = [];
      while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
      }
    return $rows;
  }

  function addData($tabel, $insert) {
    global $koneksi;
    $query = "INSERT INTO $tabel VALUES
              ($insert);";

    mysqli_query($koneksi, $query) or die(mysqli_error($koneksi));
    return mysqli_affected_rows($koneksi);
  }

  function updateData($tabel, $update) {
    global $koneksi;
    $query = "UPDATE $tabel SET
                $update
              WHERE id = $id";
    mysqli_query($koneksi, $query) or die(mysqli_error($koneksi));
    return mysqli_affected_rows($koneksi);
  }

  function deleteData($tabel, $id) {
    global $koneksi;
    mysqli_query($koneksi, "DELETE FROM $tabel WHERE id = '$id'") or die(mysqli_error($koneksi));
    return mysqli_affected_rows($koneksi);
  }

  function queryData($query) {
    global $koneksi;
    mysqli_query($koneksi, $query) or die(mysqli_error($koneksi));
    return mysqli_affected_rows($koneksi);
  }

  function autoId($tabel, $char = 'AKD') {
    global $koneksi;

    $query = "SELECT max(id) as maxKode FROM $tabel";
    $hasil = mysqli_query($koneksi, $query);
    $data = mysqli_fetch_array($hasil);
    $kode = $data['maxKode'];

    $noUrut = (int) substr($kode, 3, 3);

    $noUrut++;

    $huruf = $char;
    $kode = $huruf . sprintf("%03s", $noUrut);
    return $kode;
  }

  function uploadImage( $uploadLocation ) {
    $fileName = $_FILES['image']['name'];
    $fileSize = $_FILES['image']['size'];
    $error    = $_FILES['image']['error'];
    $fileTmp  = $_FILES['image']['tmp_name'];

    $fileExtensionValid = ['jpg', 'jpeg', 'png', 'gif'];
    $fileExtension      = explode('.', $fileName);
    $fileExtension      = strtolower(end($fileExtension));
    if( !in_array($fileExtension, $fileExtensionValid) ) {
      echo "
      <script>
        alert('What you upload is not an image !!!');
      </script>
      ";
      return false;
    }

    if ($fileSize > 3048000) {
        echo "
        <script>
          alert('Image size is more than 3 MB !!!');
        </script>
        ";
        return false;

    $fileNewName = rand(0,999).$_FILES['image']['name'];

    $uploadDir = "./$uploadLocation/";
    if( is_uploaded_file($fileTmp) ) {
      $result = move_uploaded_file( $fileTmp, $uploadDir. $fileNewName );
      if( $result ) {
        return $fileNewName;
      } else {
        echo "
        <script>
          alert('Image upload filed !!!');
        </script>
        ";
      }
    }
  }

?>