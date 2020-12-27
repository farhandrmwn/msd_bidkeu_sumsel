<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="card mt-4">
        <div class="card-header card text-white bg-primary">
        <h2>Tambah Data Personil</h2>
        </div>
        <div class="card-body">
            <?php foreach($personil as $p){ ?>
            <form method="post" action="<?php echo base_url()?>Personil/update">
                <input type="hidden" class="form-control" name="id_pyb" value="<?php echo $p->id_pyb ?>">
                <div class="form-row">
                <div class="form-group col-md-6">
                    <label>SATKER:</label>
                    <input type="text" class="form-control" name="nama" value="">
                </div>
                <div class="form-group col-md-3">
                    <label>BULAN:</label>
                    <input type="text" class="form-control" name="pangkat">
                </div>
                <div class="form-group col-md-3">
                    <label>FILE :</label>
                    <input type="text" class="form-control" name="nrp">
                </div>
            </div>
                <input type="submit"  class="btn btn-primary" value="Simpan">
            </div>
            </form>
            <?php } ?>
        </div>
        </div>
    </div>
</body>
</html>