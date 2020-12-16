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
            <form method="post" action="<?php echo base_url()?>RD_pns_polri/tambah_aksi">
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label>SATKER:</label>
                    <input type="text" class="form-control" name="satker">
                </div>
            </div>
            <div class="card text-center card-header card text-white bg-secondary">GOL-IV</div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label>KUAT:</label>
                    <input type="text" class="form-control" name="gol4_kuat" id="gol4_kuat">
                </div>
                <div class="form-group col-md-6">
                    <label>POT:</label>
                    <input type="text" class="form-control" name="gol4_pot" id="gol4_pot">
                </div>
            </div>
            <div class="card text-center card-header card text-white bg-secondary">GOL-III</div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label>KUAT:</label>
                    <input type="text" class="form-control" name="gol3_kuat" id="gol3_kuat">
                </div>
                <div class="form-group col-md-6">
                    <label>POT:</label>
                    <input type="text" class="form-control" name="gol3_pot" id="gol3_pot">
                </div>
            </div>
            <div class="card text-center card-header card text-white bg-secondary">GOL-II</div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label>KUAT:</label>
                    <input type="text" class="form-control" name="gol2_kuat" id="gol2_kuat">
                </div>
                <div class="form-group col-md-6">
                    <label>POT:</label>
                    <input type="text" class="form-control" name="gol2_pot" id="gol2_pot">
                </div>
            </div>
            <div class="card text-center card-header card text-white bg-secondary">JUMLAH</div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label>KUAT:</label>
                    <input type="text" class="form-control" name="jml_kuat" id="jml" readonly="readonly">
                </div>
                <div class="form-group col-md-6">
                    <label>POT:</label>
                    <input type="text" class="form-control" name="jml_pot" id="jml_pot" readonly="readonly">
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
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $("#gol4_kuat, #gol3_kuat, #gol2_kuat").on('input',function() {
            var gol4_kuat  = $("#gol4_kuat").val();
            var gol3_kuat = $("#gol3_kuat").val();
            var gol2_kuat = $("#gol2_kuat").val();

            var jml = parseInt(gol4_kuat) + parseInt(gol3_kuat) + parseInt(gol2_kuat);
            $("#jml").val(jml);
        });
    });
</script>
<script type="text/javascript">
    $(document).ready(function() {
        $("#gol4_pot, #gol3_pot, #gol2_pot").on('input',function() {
            var gol4_pot  = $("#gol4_pot").val();
            var gol3_pot = $("#gol3_pot").val();
            var gol2_pot = $("#gol2_pot").val();

            var jml_pot = parseInt(gol4_pot) + parseInt(gol3_pot) + parseInt(gol2_pot);
            $("#jml_pot").val(jml_pot);
        });
    });
</script>
</body>
</html>