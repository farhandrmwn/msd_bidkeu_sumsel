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
            <form method="post" action="<?php echo base_url()?>Personil/tambah_aksi">
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label>NAMA:</label>
                    <input type="text" class="form-control" name="nama">
                </div>
                <div class="form-group col-md-3">
                    <label>PANGKAT:</label>
                    <input type="text" class="form-control" name="pangkat">
                </div>
                <div class="form-group col-md-3">
                    <label>NRP :</label>
                    <input type="text" class="form-control" name="nrp">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label>JENIS KASUS:</label>
                    <input type="text" class="form-control" name="jenis_kasus">
                </div>
                <div class="form-group col-md-6">
                    <label>PROSES S/D HARI INI:</label>
                    <input type="text" class="form-control" name="proses">
                </div>
            </div>
            <div class="card text-center card-header card text-white bg-secondary">PROSES SIDANG ( TMT INKRACHT )</div>
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label>PIDANA UMUM:</label>
                    <input type="text" class="form-control" name="pidum_ps">
                </div>
                <div class="form-group col-md-4">
                    <label>ETIK / PROFESI:</label>
                    <input type="text" class="form-control" name="etikprofesi_ps">
                </div>
                <div class="form-group col-md-4">
                    <label>DISIPLIN:</label>
                    <input type="text" class="form-control" name="disiplin_ps">
                </div>
            </div>
            <div class="card text-center card-header card text-white bg-secondary">LAMA PUTUSAN</div>
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label>PIDANA UMUM:</label>
                    <input type="text" class="form-control" name="pidum_lp">
                </div>
                <div class="form-group col-md-4">
                    <label>ETIK / PROFESI:</label>
                    <input type="text" class="form-control" name="etikprofesi_lp">
                </div>
                <div class="form-group col-md-4">
                    <label>DISIPLIN:</label>
                    <input type="text" class="form-control" name="disiplin_lp">
                </div>
            </div>
            <div class="card text-center card-header card text-white bg-secondary">TEMPAT MENJALIN HUKUMAN</div>
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label>PIDANA UMUM:</label>
                    <input type="text" class="form-control" name="pidum_tmh">
                </div>
                <div class="form-group col-md-4">
                    <label>ETIK / PROFESI:</label>
                    <input type="text" class="form-control" name="etikprofesi_tmh">
                </div>
                <div class="form-group col-md-4">
                    <label>DISIPLIN:</label>
                    <input type="text" class="form-control" name="disiplin_tmh">
                </div>
            </div>
            <div class="card text-center card-header card text-white bg-secondary">PEMBAYARAN PENGHASILAN</div>
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label>PENGHENTIAN SEMENTARA GAJI ( TMT ):</label>
                    <input type="text" class="form-control" name="penghentian_smntr">
                </div>
                <div class="form-group col-md-4">
                    <label>PEMBAYARAN GAJI 75% ( TMT ):</label>
                    <input type="text" class="form-control" name="byr_gj_tjhlima">
                </div>
                <div class="form-group col-md-4">
                    <label>PENGHENTIAN TUNKUN ( TMT ):</label>
                    <input type="text" class="form-control" name="penghentian_tunkun">
                </div>
            </div>
            <div class="form-group">
            	<div class="form-group col-md-13">
                    <label>DESKRIPSI:</label>
                    <input type="text" class="form-control" name="keterangan">
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