<?php


if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $target_dir = "uploads/";
    $nama_gambar = basename($_FILES["file"]["name"]);
    $target_file = $target_dir .$nama_gambar;
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    // Check if image file is a actual image or fake image
    if (isset($_POST["submit"])) {
        $check = getimagesize($_FILES["file"]["tmp_name"]);
        if ($check !== false) {
            echo "File is an image - " . $check["mime"] . ".";
            $uploadOk = 1;
        } else {
            echo "File is not an image.";
            $uploadOk = 0;
        }
    }

    if ($uploadOk == 0) {
      echo "Sorry, your file was not uploaded.";
  } else {
      if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)) {
          echo "The file ". htmlspecialchars(basename($_FILES["file"]["name"])) . " has been uploaded.";
      } else {
          echo "Sorry, there was an error uploading your file.";
      }
  }
    //jalankan perintah untuk insert ke database
    $judul = $_POST['judul'];
    $deskripsi   = $_POST['deskripsi'];
    $isi = $_POST['isi'];
    $tglpublish = $_POST['tglpublish'];
    $penulis = $_POST['penulis'];

    if ($_POST['id'] !== "") {
      $sql = "update artikel set judul = '$judul', deskripsi='$deskripsi', gambarr='$nama_gambar' where id = '".$_POST['id']."' ";
    }else{
      $sql = "insert into artikel(judul, deskripsi, isi, tgl_publish, penulis, gambarr) values ('$judul','$deskripsi','$isi','$tglpublish','$penulis','$nama_gambar') ";
    }
    
  
    $result = $conn->query($sql);
  }
  