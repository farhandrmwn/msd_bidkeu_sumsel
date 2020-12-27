<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <script src="<?php echo base_url()?>/assets/bootstrap/js/jquery-3.3.1.min.js"></script>
</head>
<body>
 <?php foreach ($konfigurasi as $p): ?>
<div class="jumbotron text-center">
  <h1>Selamat Datang di Halaman User</h1>
    <p>Username : <?php echo $username; ?></p>
    <a href="<?php echo base_url('user/konfigurasi/'.$p->id_satker)?>" class="btn btn-success" role="button">Konfigurasi</a>
    <a href="<?php echo base_url()?>personil/index" class="btn btn-primary" role="button">Personil Bermasalah
    </a>
    <a href="<?php echo base_url()?>rd_polri/index" class="btn btn-danger" role="button">RD Polri</a>
    <a href="<?php echo base_url()?>rd_pns_polri/index" class="btn btn-secondary" role="button">RD PNS Polri</a>
    <a href="<?php echo base_url()?>mutdat/index" class="btn btn-secondary" role="button">Mutdat</a>
    <a href="<?php echo base_url()?>/login/logout_proses" class="btn btn-warning" role="button">Logout</a>
<?php endforeach; ?>
</div>

</body>
</html> 