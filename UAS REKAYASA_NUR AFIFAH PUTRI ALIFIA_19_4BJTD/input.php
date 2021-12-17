<?php
  include('koneksi.php'); 
  
?>
<!DOCTYPE html>
<html>
  <head>
    <title>TUGAS UAS</title>
    <style type="text/css">
      * {
        font-family: "Trebuchet MS";
      }
      h1 {
        text-transform: uppercase;
        color: salmon;
      }
    button {
          background-color: salmon;
          color: #fff;
          padding: 10px;
          text-decoration: none;
          font-size: 12px;
          border: 0px;
          margin-top: 20px;
    }
    label {
      margin-top: 10px;
      float: left;
      text-align: left;
      width: 100%;
    }
    input {
      padding: 6px;
      width: 100%;
      box-sizing: border-box;
      background: #f8f8f8;
      border: 2px solid #ccc;
      outline-color: salmon;
    }
    div {
      width: 100%;
      height: auto;
    }
    .base {
      width: 400px;
      height: auto;
      padding: 20px;
      margin-left: auto;
      margin-right: auto;
      background: #ededed;
    }
    </style>
  </head>
  <body background= "bck.png">
      <center>
        <h1>Tambah Data Baru</h1>
      <center>
      <form method="POST" action="proses_tambah.php" enctype="multipart/form-data" >
      <section class="base">
        <div>
          <label>suku bangsa</label>
          <input type="text" name="nama_suku" autofocus="" required="" />
        </div>
        <div>
          <label>pulau</label>
         <input type="text" name="pulau" />
        </div>
        <div>
          <label>provinsi</label>
         <input type="text" name="provinsi" required="" />
        </div>
        <div>
          <label>agama</label>
         <input type="text" name="mayoritas" required="" />
        </div> 
        <div>
          <label>bahasa</label>
         <input type="text" name="bahasa" required="" />
        </div>
        <div>
          <label>adat</label>
         <input type="text" name="adat" required="" />
        </div>

        <div>
          <label>jaring Semantik</label>
         <input type="file" name="jaringan_semantik" required="" />
        </div>
        
        <div>
         <button type="submit">Simpan</button>
        </div>
        </section>
      </form>
  </body>
</html>