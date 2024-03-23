<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website Galeri Foto</title>
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
</head>
 <style>
    *{
     margin: 0;
     padding: 0;
     box-sizing:border-box;
     font-family:'Poppins', sans-serif;
    }

    body {
        /* display: flex */
        /* justify-content: center */
        /* align-items: center; */
        min-height: 100vh;
        background: url('biru.jpg') no-repeat;
        background-size: cover;
        background-position: center;
    }
    
    nav {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        padding: 20px 100px;
        display: flex;
        justify-content: space-between;
        align-items: center;
        z-index: 99;
    }

    .navbar-brand {
        font-size: 2em;
        color: #fff;
        user-select: none;
    }

    .nav-link{
        position: relative;
        font-size: 1.1em;
        color: #fff;
        text-decoration: none;
        font-weight: 500;
        margin-left: 40px;
    }

    .nav-link a::after{
        content: '';
        position: absolute;
        width: 100%;
        height: 3px;
        background: #fff;
        border-radius: 5px;
        transfrom: scaleX(0);
        transfrom-origin: right;
        transition: transfrom .5s;
    }

    .nav.link a::after{
        transfrom-origin: left;
        transfrom: scaleX(1);
    }

    .card {
        position: relative;
        width: 300px;
        height: 510px;
        background: transparent;
        border: 2px solid rgba(255,255,255, .5);
        border-radius: 20px;
    }

 </style>
<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">Website Galeri Foto</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse mt-2" id="navbarNavAltMarkup">
      <div class="navbar-nav me-auto">
      
      </div>
      <a href="register.php" class="btn btn-outline-primary m-1">Daftar</a>
      <a href="login.php" class="btn btn-outline-succes m-1">Masuk</a>
    </div>
  </div>
</nav>

<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card">
                <div class="card-body bg-light">
                    <div class="text-center">
                        <h5>Daftar Akun Baru</h5>
                    </div>
                    <form action="config/aksi_register.php" method="POST">
                        <label class="form-label">Username</label>
                        <input type="text" name="username" class="form-control" required>
                        <label class="form-label">Password</label>
                        <input type="password" name="password" class="form-control" required>
                        <label class="form-label">Email</label>
                        <input type="email" name="email" class="form-control" required>
                        <label class="form-label">Nama Lengkap</label>
                        <input type="text" name="namalengkap" class="form-control" required>
                        <label class="form-label">Alamat</label>
                        <input type="text" name="alamat" class="form-control" required>
                        <div class="d-grid mt-2">
                            <button class="btn btn-primary" type="submit" name="kirim">Daftar</button>
                        </div>
                    </form>
                    <hr>
                    <p>Sudah Punya Akun? <a href="login.php">Login disini!</a></p>
                </div>
            </div>
        </div>
    </div>
</div>

<footer class="d-flex justify-content-center border-top mt-3 bg-light fixed-bottom">
    <p>&copy; UKK RPL 2024 | Viona Kristiana</p>
</footer>









<script type="text/javascript" src="assets/js/boostrap.min.js"></script>
</body>
</html>