<?php
include 'koneksi.php';

  $id                   = $_POST['id'];
  $nama_suku            = $_POST['nama_suku'];
  $pulau                = $_POST['pulau'];
  $provinsi             = $_POST['provinsi'];
  $mayoritas            = $_POST['mayoritas'];
  $bahasa               = $_POST['bahasa'];
  $adat                 = $_POST['adat'];
  $jaringan_semantik    = $_FILES['jaringan_semantik']['name'];


// //jika ada gambar
  if($jaringan_semantik != "") { 
    $file_tmp = $_FILES['jaringan_semantik']['tmp_name'];   
    $angka_acak     = $nama_suku;
    $nama_gambar_baru = $angka_acak.'-'.$jaringan_semantik;
    
                  //untuk memindahkan gambar
                  move_uploaded_file($file_tmp, 'assets/'.$nama_gambar_baru); 
                  $query  = "UPDATE suku_bangsa_bahasa SET nama_suku = '$nama_suku', pulau = '$pulau', provinsi = '$provinsi', mayoritas = '$mayoritas', bahasa = '$bahasa', adat = '$adat', jaringan_semantik = '$nama_gambar_baru'";
                    $query .= "WHERE id = '$id'";
                    $result = mysqli_query($conn, $query);
                    if(!$result){
                        die ("Query gagal dijalankan: ".mysqli_errno($conn).
                             " - ".mysqli_error($conn));
                    } else {
                      echo "<script>alert('Data berhasil diubah.');window.location='index.php';</script>";
                    }
      
    } else {
   

      $query  = "UPDATE suku_bangsa_bahasa SET nama_suku = '$nama_suku', pulau = '$pulau', provinsi = '$provinsi', mayoritas = '$mayoritas', bahasa = '$bahasa', adat = '$adat', jaringan_semantik = '$jaringan_semantik'";
      $query .= "WHERE id = '$id'";
      $result = mysqli_query($conn, $query);
     
      if(!$result){ //jika error
            die ("Query gagal dijalankan: ".mysqli_errno($conn).
                             " - ".mysqli_error($conn));
      } else {
      
          echo "<script>alert('Data berhasil diubah.');window.location='index.php';</script>";
      }
    }

 