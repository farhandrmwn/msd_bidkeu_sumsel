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
        <?php foreach($rdpolri as $rd) { ?>
            <form method="post" action="<?php echo base_url()?>RD_polri/update">
            <div class="form-row">
            <input type="hidden" class="form-control" name="id" value="<?php echo $rd->id ?>">
                <div class="form-group col-md-6">
                    <label>SATKER:</label>
                    <input type="text" class="form-control" name="satker" value="<?= $rd->satker ?>">
                </div>
            </div>
            <div class="card text-center card-header card text-white bg-secondary">PAMEN</div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label>KUAT:</label>
                    <input type="text" class="form-control" name="pamen_kuat" id="pmn_kuat" value="<?= $rd->pamen_kuat ?>">
                </div>
                <div class="form-group col-md-6">
                    <label>POT:</label>
                    <input type="text" class="form-control" name="pamen_pot" id="pmn_pot" value="<?= $rd->pamen_pot ?>">
                </div>
            </div>
            <div class="card text-center card-header card text-white bg-secondary">PAMA</div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label>KUAT:</label>
                    <input type="text" class="form-control" name="pama_kuat" id="pm_kuat" value="<?= $rd->pama_kuat ?>">
                </div>
                <div class="form-group col-md-6">
                    <label>POT:</label>
                    <input type="text" class="form-control" name="pama_pot" id="pm_pot" value="<?= $rd->pama_pot ?>">
                </div>
            </div>
            <div class="card text-center card-header card text-white bg-secondary">BINTARA</div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label>KUAT:</label>
                    <input type="text" class="form-control" name="bintara_kuat" id="bntr_kuat" value="<?= $rd->bintara_kuat ?>">
                </div>
                <div class="form-group col-md-6">
                    <label>POT:</label>
                    <input type="text" class="form-control" name="bintara_pot" id="bntr_pot" value="<?= $rd->bintara_pot ?>">
                </div>
            </div>
            <div class="card text-center card-header card text-white bg-secondary">JUMLAH</div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label>KUAT:</label>
                    <input type="text" class="form-control" name="jml_kuat" id="jml" readonly="readonly" value="<?= $rd->jml_kuat ?>">
                </div>
                <div class="form-group col-md-6">
                    <label>POT:</label>
                    <input type="text" class="form-control" name="jml_pot" id="jml_pot" readonly="readonly" value="<?= $rd->jml_pot ?>">
                </div>
            </div>
            
            <div class="form-group">
            	<div class="form-group col-md-13">
                    <label>KETERANGAN:</label>
                    <input type="text" class="form-control" name="ket" value="<?= $rd->ket ?>">
                </div>
            </div>
            <div class="form-group">
                <input type="submit"  class="btn btn-primary" value="Simpan">
            </div>
            </form>
        <?php } ?>
        </div>
        </div>
    </div>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $("#pmn_kuat, #pm_kuat, #bntr_kuat").on('input',function() {
            var pmn_kuat  = $("#pmn_kuat").val();
            var pm_kuat = $("#pm_kuat").val();
            var bntr_kuat = $("#bntr_kuat").val();

            var jml = parseInt(pmn_kuat) + parseInt(pm_kuat) + parseInt(bntr_kuat);
            $("#jml").val(jml);
        });
    });
</script>
<script type="text/javascript">
    $(document).ready(function() {
        $("#pmn_pot, #pm_pot, #bntr_pot").on('input',function() {
            var pmn_pot  = $("#pmn_pot").val();
            var pm_pot = $("#pm_pot").val();
            var bntr_pot = $("#bntr_pot").val();

            var jml_pot = parseInt(pmn_pot) + parseInt(pm_pot) + parseInt(bntr_pot);
            $("#jml_pot").val(jml_pot);
        });
    });
</script>
</body>
</html>