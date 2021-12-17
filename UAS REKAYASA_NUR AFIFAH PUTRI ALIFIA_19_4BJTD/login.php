<?php
// Cek apakah tombol submit sudah di tekan apa belum
if ( isset($_POST["submit"])) {
// Cek Username dan Password
    if( $_POST["username"] == "fia" && $_POST["password"]== "fia") {
// Jika Benar, redirect ke halaman admin
    header("Location:index.php");
    exit;    
}  else {
// Jika salah, tampilkan pesan kesalahan
    $error = true;
        }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TUGAS UAS</title>

    <script src="https://kit.fontawesome.com/c23da44e2d.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">


</head>
<body background= "bck.png">

<main>
    <div class="container text-center">
        <h1 class="py-4 bg-dark text-light rounded"><i class="fas fa-swatchbook"></i>Welcome!</h1>
    
        <div class="d-flex justify-content-center">
            <form action="" method="post" class="w-50">
                <div class="py-2">
                    <div class="input-group">
                        <div class="input-group-text bg-warning"><i class='fas fa-id-badge'></i></div>
                        <input type="text" class="form-control" name="username" id="username" placeholder="Username">
                    </div>
                </div>
                <div class="pt-2">
                    <div class="input-group">
                        <div class="input-group-text bg-warning"><i class='fas fa-id-badge'></i></div>
                        <input type="password" class="form-control" name="password" id="password" placeholder="Password">
                    </div>
                </div>
                <br>
                
                <button class="py-2 bg-dark text-light rounded" style= "font-family: Trebuchet MS; padding: 10px 24px; font-size: 20px" type="submit" name="submit">Login</button>

            </form>
        </div>
    </div>
</main>




<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
