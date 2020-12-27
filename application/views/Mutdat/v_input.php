<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="card mt-4">
        <div class="card-header card text-white bg-primary">
        <h2>Tambah Data Mutdat</h2>
        </div>
        <div class="card-body">
            <?php echo form_open_multipart('Mutdat/tambah_aksi') ?>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label>SATKER:</label>
                    <input type="text" class="form-control" name="satker">
                </div>
                <div class="form-group col-md-3">
                    <label>BULAN:</label>
                    <input type="text" class="form-control" name="bulan">
                </div>
                <div class="form-group col-md-3">
                    <label>FILE :</label>
                    <input type="file" name="berkas" lang="en">
                </div>
            </div>
            <div class="form-group">
                <input type="submit"  class="btn btn-primary"   name="tombol_login" value="Simpan">
            </div>
            <?php echo form_close(); ?>
        </div>
        </div>
    </div>
</body>
</html>