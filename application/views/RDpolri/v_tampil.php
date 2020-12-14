<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="card mt-4">
        <div class="card-header">
        <h3>Rumah Dinas Polri</h3>
        </div>
        <div class="card-body">
            <a href="<?php echo base_url()?>/RD_polri/tambah" class="btn btn-primary" role="button">Tambah Data</a>
            <a href="<?php echo base_url('RD_polri/excel'); ?>" class='btn btn-success'>Export Data</a>
            <div class="table-responsive text-nowrap">
                <table class="table table-bordered text-center mt-4">
                  <thead>
                    <tr>
                      <th scope="col" rowspan="3" class="align-middle">NO</th>
                      <th scope="col" rowspan="3" class="align-middle">SATKER</th>
                      <th scope="col" colspan="6" class="align-middle">PANGKAT</th>
                      <th scope="col" rowspan="2" colspan="2" class="align-middle">JUMLAH</th>
                      <th scope="col" rowspan="3" class="align-middle">KETERANGAN</th>
                    </tr>
                    <tr>
                        <th scope="col" colspan="2">PAMEN</th>
                        <th scope="col" colspan="2">PAMA</th>
                        <th scope="col" colspan="2">BINTARA</th>
                    </tr>
                    <tr>
                        <th scope="col">KUAT</th>
                        <th scope="col">POT</th>
                        <th scope="col">KUAT</th>
                        <th scope="col">POT</th>
                        <th scope="col">KUAT</th>
                        <th scope="col">POT</th>
                        <th scope="col">KUAT</th>
                        <th scope="col">POT</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php 
                        $no = 1;
                        foreach($rdpolri as $r){ 
                    ?>
                    <tr>
                      <th scope="row"><?= $no++ ?></th>
                      <td><?= $r->satker ?></td>
                      <td><?= $r->pamen_kuat ?></td>
                      <td><?= $r->pamen_pot ?></td>
                      <td><?= $r->pama_kuat ?></td>
                      <td><?= $r->pama_pot ?></td>
                      <td><?= $r->bintara_kuat ?></td>
                      <td><?= $r->bintara_pot ?></td>
                      <td><?= $r->jml_kuat ?></td>
                      <td><?= $r->jml_pot ?></td>
                      <td><?= $r->ket ?></td>
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