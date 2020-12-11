<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="card mt-4">
        <div class="card-header">
        <h2>Konfigurasi</h2>
        </div>
        <div class="card-body">
            <form method="post" action="<?php echo base_url()?>user/tambah">
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label>Nama Kabag:</label>
                    <input type="text" class="form-control" name="nama_kabag">
                </div>
                <div class="form-group col-md-4">
                    <label>Jabatan Kabag:</label>
                    <input type="text" class="form-control" name="jabatan_kabag">
                </div>
                <div class="form-group col-md-4">
                    <label>NRP Kabag:</label>
                    <input type="text" class="form-control" name="nrp_kabag">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label>Nama Kasikeu:</label>
                    <input type="text" class="form-control" name="nama_kasikeu">
                </div>
                <div class="form-group col-md-4">
                    <label>Jabatan Kasikeu:</label>
                    <input type="text" class="form-control" name="jabatan_kasikeu">
                </div>
                <div class="form-group col-md-4">
                    <label>NRP Kasikeu:</label>
                    <input type="text" class="form-control" name="nrp_kasikeu">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label>Nama Kasi:</label>
                    <input type="text" class="form-control" name="nama_kasi">
                </div>
                <div class="form-group col-md-4">
                    <label>Jabatan Kasi:</label>
                    <input type="text" class="form-control" name="jabatan_kasi">
                </div>
                <div class="form-group col-md-4">
                    <label>NRP Kasi:</label>
                    <input type="text" class="form-control" name="nrp_kasi">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label>Nama Kepala Kepolisian:</label>
                    <input type="text" class="form-control" name="nama_kepala">
                </div>
                <div class="form-group col-md-4">
                    <label>Jabatan Kepala Kepolisian:</label>
                    <input type="text" class="form-control" name="jabatan_kepala">
                </div>
                <div class="form-group col-md-4">
                    <label>NRP Kepala Kepolisian:</label>
                    <input type="text" class="form-control" name="nrp_kepala">
                </div>
            </div>
            <div class="form-group">
                <input type="submit"  class="btn btn-primary"   name="tombol_login" value="Simpan">
            </div>
            </form>
        </div>
        </div>
    </div>
</body>
</html>