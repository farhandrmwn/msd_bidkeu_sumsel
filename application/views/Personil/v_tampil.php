<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="card mt-4">
        <div class="card-header">
        <h3>Personil Yang Bermasalah</h3>
        </div>
        <div class="card-body">
            <a href="<?php echo base_url()?>/personil/tambah" class="btn btn-primary" role="button">Tambah Data</a>
            <a href="<?php echo base_url('personil/excel'); ?>" class='btn btn-success'>Export Data</a>
            <div class="table-responsive text-nowrap">
                <table class="table table-bordered text-center mt-4">
                  <thead>
                    <tr>
                      <th scope="col" rowspan="2" class="align-middle">NO</th>
                      <th scope="col" rowspan="2" class="align-middle">NAMA</th>
                      <th scope="col" rowspan="2" class="align-middle">PANGKAT/NRP</th>
                      <th scope="col" rowspan="2" class="align-middle">JENIS KASUS</th>
                      <th scope="col" rowspan="2" class="align-middle">PROSES S/D HARI INI</th>
                      <th scope="col" colspan="3">PROSES SIDANG (TMT INKRACHT)</th>
                      <th scope="col" colspan="3">LAMA PUTUSAN</th>
                      <th scope="col" colspan="3">TEMPAT MENJALIN HUKUMAN</th>
                      <th scope="col" colspan="3">PEMBAYARAN PENGHASILAN</th>
                      <th scope="col" rowspan="2" class="align-middle">KETERANGAN</th>
                      <th scope="col" rowspan="2" class="align-middle">ACTION</th>
                    </tr>
                    <tr>
                        <th scope="col">PIDANA UMUM</th>
                        <th scope="col">ETIK / PROFESI</th>
                        <th scope="col">DISIPLIN</th>
                        <th scope="col">PIDANA UMUM</th>
                        <th scope="col">ETIK / PROFESI</th>
                        <th scope="col">DISIPLIN</th>
                        <th scope="col">PIDANA UMUM</th>
                        <th scope="col">ETIK / PROFESI</th>
                        <th scope="col">DISIPLIN</th>
                        <th scope="col">PENGHENTIAN SEMENTARA GAJI ( TMT )</th>
                        <th scope="col">PEMBAYARAN GAJI 75% ( TMT )</th>
                        <th scope="col">PENGHENTIAN TUNKUN ( TMT )</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php 
                        $no = 1;
                        foreach($personil as $p){ 
                    ?>
                    <tr>
                      <th scope="row"><?php echo $no++ ?></th>
                      <td><?php echo $p->nama ?></td>
                      <td><?php echo $p->pangkat." / ".$p->nrp ?></td>
                      <td><?php echo $p->jenis_kasus ?></td>
                      <td><?php echo $p->proses ?></td>
                      <td><?php echo $p->pidum_ps ?></td>
                      <td><?php echo $p->etikprofesi_ps ?></td>
                      <td><?php echo $p->disiplin_ps ?></td>
                      <td><?php echo $p->pidum_lp ?></td>
                      <td><?php echo $p->etikprofesi_lp ?></td>
                      <td><?php echo $p->disiplin_lp ?></td>
                      <td><?php echo $p->pidum_tmh ?></td>
                      <td><?php echo $p->etikprofesi_tmh ?></td>
                      <td><?php echo $p->disiplin_tmh ?></td>
                      <td><?php echo $p->penghentian_smntr ?></td>
                      <td><?php echo $p->byr_gj_tjhlima ?></td>
                      <td><?php echo $p->penghentian_tunkun ?></td>
                      <td><?php echo $p->keterangan ?></td>
                      <td>
                        <a href="<?= base_url('personil/edit/'.$p->id_pyb) ?>" class="btn btn-primary"><i class="glyphicon glyphicon-pencil"></i> Edit</a>
                        <a href="<?= base_url('personil/hapus/'.$p->id_pyb) ?>" class="btn btn-danger"><i class="glyphicon glyphicon-remove"></i> Remove</a>
                     </td>
                    </tr>
                    <?php } ?>
                  </tbody>
                </table>
            </div>
        </div>
        </div>
    </div>
</body>
</html>