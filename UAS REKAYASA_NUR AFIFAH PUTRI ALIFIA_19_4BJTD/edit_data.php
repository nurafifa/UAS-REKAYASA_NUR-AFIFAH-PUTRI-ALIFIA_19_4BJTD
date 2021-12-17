 <?php
include 'koneksi.php';
  if (isset($_GET['id'])) {
    $id = ($_GET["id"]);
    $query = "SELECT * FROM suku_bangsa_bahasa WHERE id='$id'";
    $result = mysqli_query($conn, $query);
   
    if(!$result){
      die ("Query Error: ".mysqli_errno($conn).
         " - ".mysqli_error($conn));
    }
    
    $data = mysqli_fetch_assoc($result);
     
       if (!count($data)) {
          echo "<script>alert('Data tidak ditemukan pada database');window.location='index.php';</script>";
       }
  } else {
    echo "<script>alert('Masukkan data id.');window.location='index.php';</script>";
  }         
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
        <h1>Edit Data <?php echo $data['nama_suku']; ?></h1>
      <center>
      <form method="POST" action="proses_edit.php" enctype="multipart/form-data" >
      <section class="base">

        <input name="id" value="<?php echo $data['id']; ?>"  hidden />
        <div>
          <label>suku bangsa</label>
          <input type="text" name="nama_suku" value="<?php echo $data['nama_suku']; ?>" autofocus="" required="" />
        </div>
        <div>
          <label>pulau</label>
         <input type="text" name="pulau" value="<?php echo $data['pulau']; ?>" />
        </div>
        <div>
          <label>provinsi</label>
         <input type="text" name="provinsi" required=""value="<?php echo $data['provinsi']; ?>" />
        </div>
        <div>
          <label>agama</label>
         <input type="text" name="mayoritas" required="" value="<?php echo $data['mayoritas']; ?>"/>
        </div>        
        
        <div>
          <label>bahasa</label>
         <input type="text" name="bahasa" required="" value="<?php echo $data['bahasa']; ?>"/>
        </div>

        <div>
          <label>adat</label>
         <input type="text" name="adat" required="" value="<?php echo $data['adat']; ?>"/>
        </div>

        <div>
          <label>jaringan semantik</label>
         <input type="text" name="jaringan_semantik" required="" value="<?php echo $data['jaringan_semantik']; ?>"/>
        </div>



        <div>
          <label>jaringan semantik</label>
          <img src="assets/<?php echo $data['jaringan_semantik']; ?>" style="width: 120px;float: left;margin-bottom: 5px;">
          <input type="file" name="jaringan_semantik" />
          <i style="float: left;font-size: 11px;color: red">Abaikan jika tidak merubah gambar produk</i>
        </div>
        
        <div>
         <button type="submit">Simpan Perubahan</button>
        </div>
        </section>
      </form>
  </body>
</html>