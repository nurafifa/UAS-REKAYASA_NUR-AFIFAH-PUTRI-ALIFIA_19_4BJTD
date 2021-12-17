<?php
// memanggil file koneksi.php untuk melakukan koneksi database
include 'koneksi.php';

	// membuat variabel untuk menampung data dari form
  $nama_suku            = $_POST['nama_suku'];
  $pulau                = $_POST['pulau'];
  $provinsi             = $_POST['provinsi'];
  $mayoritas            = $_POST['mayoritas'];
  $bahasa               = $_POST['bahasa'];
  $adat                 = $_POST['adat'];
  $gambar = $_FILES['jaringan_semantik']['name'];


//upload gambar
if($gambar != "") {

  $file_tmp = $_FILES['jaringan_semantik']['tmp_name'];
  $angka_acak     = $nama_suku;
  $nama_gambar_baru = $angka_acak.'-'.$gambar; 
                move_uploaded_file($file_tmp, 'assets/'.$nama_gambar_baru);
                  $query = "INSERT INTO suku_bangsa_bahasa (nama_suku, pulau, provinsi, mayoritas, bahasa, adat, jaringan_semantik) VALUES ('$nama_suku', '$pulau', '$provinsi', '$mayoritas', '$bahasa', '$adat', '$nama_gambar_baru')";
                  $result = mysqli_query($conn, $query);
                 
                  if(!$result){
                      die ("Query gagal dijalankan: ".mysqli_errno($conn).
                           " - ".mysqli_error($conn));
                  } else {
                    
                    echo "<script>alert('Data berhasil ditambah.');window.location='index.php';</script>";
                  }

} else {
   $query = "INSERT INTO suku_bangsa_bahasa (nama_suku, pulau, provinsi, mayoritas, bahasa, adat, jaringan_semantik) VALUES ('$nama_suku', '$pulau', '$provinsi', '$mayoritas', '$bahasa', '$adat', null)";
                  $result = mysqli_query($conn, $query);
                
                  if(!$result){ //jika error
                      die ("Query gagal dijalankan: ".mysqli_errno($conn).
                           " - ".mysqli_error($conn));
                  } else { //jika berhasil
                    
                    echo "<script>alert('Data berhasil ditambah.');window.location='index.php';</script>";
                  }
}

 
