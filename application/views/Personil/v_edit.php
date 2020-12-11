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
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label>NAMA:</label>
                    <input type="text" class="form-control" name="nama" value="<?php echo $p->nama ?>">
                </div>
                <div class="form-group col-md-3">
                    <label>PANGKAT:</label>
                    <input type="text" class="form-control" name="pangkat" value="<?php echo $p->pangkat ?>">
                </div>
                <div class="form-group col-md-3">
                    <label>NRP :</label>
                    <input type="text" class="form-control" name="nrp" value="<?php echo $p->nrp ?>">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label>JENIS KASUS:</label>
                    <input type="text" class="form-control" name="jenis_kasus" value="<?php echo $p->jenis_kasus ?>">
                </div>
                <div class="form-group col-md-6">
                    <label>PROSES S/D HARI INI:</label>
                    <input type="text" class="form-control" name="proses" value="<?php echo $p->proses ?>">
                </div>
            </div>
            <div class="card text-center card-header card text-white bg-secondary">PROSES SIDANG ( TMT INKRACHT )</div>
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label>PIDANA UMUM:</label>
                    <input type="text" class="form-control" name="pidum_ps" value="<?php echo $p->pidum_ps ?>">
                </div>
                <div class="form-group col-md-4">
                    <label>ETIK / PROFESI:</label>
                    <input type="text" class="form-control" name="etikprofesi_ps" value="<?php echo $p->etikprofesi_ps ?>">
                </div>
                <div class="form-group col-md-4">
                    <label>DISIPLIN:</label>
                    <input type="text" class="form-control" name="disiplin_ps" value="<?php echo $p->disiplin_ps ?>">
                </div>
            </div>
            <div class="card text-center card-header card text-white bg-secondary">LAMA PUTUSAN</div>
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label>PIDANA UMUM:</label>
                    <input type="text" class="form-control" name="pidum_lp" value="<?php echo $p->pidum_lp ?>">
                </div>
                <div class="form-group col-md-4">
                    <label>ETIK / PROFESI:</label>
                    <input type="text" class="form-control" name="etikprofesi_lp" value="<?php echo $p->etikprofesi_lp ?>">
                </div>
                <div class="form-group col-md-4">
                    <label>DISIPLIN:</label>
                    <input type="text" class="form-control" name="disiplin_lp" value="<?php echo $p->disiplin_lp ?>">
                </div>
            </div>
            <div class="card text-center card-header card text-white bg-secondary">TEMPAT MENJALIN HUKUMAN</div>
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label>PIDANA UMUM:</label>
                    <input type="text" class="form-control" name="pidum_tmh" value="<?php echo $p->pidum_tmh ?>">
                </div>
                <div class="form-group col-md-4">
                    <label>ETIK / PROFESI:</label>
                    <input type="text" class="form-control" name="etikprofesi_tmh" value="<?php echo $p->etikprofesi_tmh ?>">
                </div>
                <div class="form-group col-md-4">
                    <label>DISIPLIN:</label>
                    <input type="text" class="form-control" name="disiplin_tmh" value="<?php echo $p->disiplin_tmh ?>">
                </div>
            </div>
            <div class="card text-center card-header card text-white bg-secondary">PEMBAYARAN PENGHASILAN</div>
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label>PENGHENTIAN SEMENTARA GAJI ( TMT ):</label>
                    <input type="text" class="form-control" name="penghentian_smntr" value="<?php echo $p->penghentian_smntr ?>">
                </div>
                <div class="form-group col-md-4">
                    <label>PEMBAYARAN GAJI 75% ( TMT ):</label>
                    <input type="text" class="form-control" name="byr_gj_tjhlima" value="<?php echo $p->byr_gj_tjhlima ?>">
                </div>
                <div class="form-group col-md-4">
                    <label>PENGHENTIAN TUNKUN ( TMT ):</label>
                    <input type="text" class="form-control" name="penghentian_tunkun" value="<?php echo $p->penghentian_tunkun ?>">
                </div>
            </div>
            <div class="form-group">
            	<div class="form-group col-md-13">
                    <label>DESKRIPSI:</label>
                    <input type="text" class="form-control" name="keterangan" value="<?php echo $p->keterangan ?>">
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
</body>
</html>