<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <script src="<?php echo base_url()?>/assets/bootstrap/js/jquery-3.3.1.min.js"></script>
</head>
<body>
<div class="jumbotron text-center">
  <h1>Selamat Datang di Halaman User</h1>
    <p>Username : <?php echo $username; ?></p>
    <a href="<?php echo base_url()?>/user/konfigurasi" class="btn btn-success" role="button">Konfigurasi</a>
    <a href="<?php echo base_url()?>/personil/index" class="btn btn-primary" role="button">Personil Bermasalah
    </a>
    <a href="<?php echo base_url()?>/login/logout_proses" class="btn btn-warning" role="button">Logout</a>
</div>

</body>
</html> 