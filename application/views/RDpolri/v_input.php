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
            <form method="post" action="<?php echo base_url()?>RD_polri/tambah_aksi">
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label>SATKER:</label>
                    <input type="text" class="form-control" name="satker">
                </div>
            </div>
            <div class="card text-center card-header card text-white bg-secondary">PAMEN</div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label>KUAT:</label>
                    <input type="text" class="form-control" name="pamen_kuat">
                </div>
                <div class="form-group col-md-6">
                    <label>POT:</label>
                    <input type="text" class="form-control" name="pamen_pot">
                </div>
            </div>
            <div class="card text-center card-header card text-white bg-secondary">PAMA</div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label>KUAT:</label>
                    <input type="text" class="form-control" name="pama_kuat">
                </div>
                <div class="form-group col-md-6">
                    <label>POT:</label>
                    <input type="text" class="form-control" name="pama_pot">
                </div>
            </div>
            <div class="card text-center card-header card text-white bg-secondary">BINTARA</div>
            <div class="form-row">
                <div class="form-row">
                <div class="form-group col-md-6">
                    <label>KUAT:</label>
                    <input type="text" class="form-control" name="bintara_kuat">
                </div>
                <div class="form-group col-md-6">
                    <label>POT:</label>
                    <input type="text" class="form-control" name="bintara_pot">
                </div>
            </div>
            <div class="form-group">
            	<div class="form-group col-md-13">
                    <label>KETERANGAN:</label>
                    <input type="text" class="form-control" name="ket">
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