<?php
include('koneksi.php');

?>

<!DOCTYPE html>
<html>

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

    <title>TUGAS UAS</title>
</head>

<body background= "bck.png">
    <?php
    if (isset($_GET['pesan'])) {
        $pesan = $_GET['pesan'];
        if ($pesan == "input") {
            echo "Data berhasil di input.";
        } else if ($pesan == "update") {
            echo "Data berhasil di update.";
        } else if ($pesan == "hapus") {
            echo "Data berhasil di hapus.";
        }
    }
    ?>

    <center>
        <h1 style= "font-family: Trebuchet MS">Jaringan Semantik Suku Bangsa dan Bahasa
        <a href="logout.php" class="py-2 bg-dark text-light rounded" 
        style="text-decoration: none; float: right; margin: 10px; font-size: 20px; padding:10px 24px;">Logout</a>
        </h1><br>
        <p style= "font-family: Trebuchet MS">
            Dibuat Oleh:</br>
            Nur Afifah Putri Alifia (19/JTD 4B)
        </p>
        
        <style>
            .zoomeffect {
                width: 800px;
                height: 400px;
                text-align: center;
                overflow: hidden;
                position: relative;
                cursor: default;
            }

            .zoomeffect img {
                position: relative;
                cursor: pointer;
                transition: all .4s linear;
                width: 100%;
            }

            .zoomeffect:hover img {
                transform: scale(1.2);
            }
        </style>
        <div class="zoomeffect">
            <img src="semantik.png">
        </div>

    </center>


    <form method="get" action="">
        <button style= "background-color: salmon"><a style="color: #FFFFFF;text-decoration: none" class="tombol" href="input.php">+Tambah Data Baru</a></button><br>
        <label style= "font-family: Trebuchet MS" for="cari">Cari Kata Kunci</label>
        <input type="text" name="cari">
    </form>
    </br>

    <table class="table">
        <thead>
            <tr bgcolor="#E9967A">
                <th>No.</th>
                <th>Suku Bangsa</th>
                <th>Pulau</th>
                <th>Provinsi</th>
                <th>Agama</th>
                <th>Bahasa</th>
                <th>Adat</th>
                <th>Jaringan Semantik</th>
                <th>Action</th>
            </tr>
        </thead>
        <?php
        $no = 1;
        //tampilkan data suku
        $query = mysqli_query($conn, "SELECT * FROM suku_bangsa_bahasa");
        if (isset($_GET['cari'])) {
            $search = $_GET['cari'];
            $query = mysqli_query($conn, "SELECT * FROM suku_bangsa_bahasa WHERE  '" .
                $search . "' IN (nama_suku, pulau, provinsi, mayoritas, bahasa, adat)");
        }

        while ($dt = mysqli_fetch_assoc($query)) {
        ?>
            <tbody>
                <tr>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo  $dt['nama_suku']; ?></td>
                    <td><?php echo  $dt['pulau']; ?></td>
                    <td><?php echo  $dt['provinsi']; ?></td>
                    <td><?php echo  $dt['mayoritas']; ?></td>
                    <td><?php echo  $dt['bahasa']; ?></td>
                    <td><?php echo  $dt['adat']; ?></td>
                    <td style="text-align: center;"><img src="assets/<?php echo $dt['jaringan_semantik']; ?>" style="width: 120px;"></td>
                    <td>
                        <a style="color: #FFFFFF;text-decoration: none" class="bg-danger" href="edit_data.php?id=<?php echo $dt['id']; ?>">Edit</a> |
                        <a style="color: #FFFFFF;text-decoration: none" class="bg-warning" href="proses_hapus.php?id=<?php echo $dt['id']; ?>" onclick="return confirm('Anda yakin akan menghapus?')">Hapus</a>
                    </td>

                </tr>
            <?php
        }
            ?>
</body>
<!-- Optional JavaScript; choose one of the two! -->

<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

<!-- Option 2: Separate Popper and Bootstrap JS -->
<!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
    -->

</html>