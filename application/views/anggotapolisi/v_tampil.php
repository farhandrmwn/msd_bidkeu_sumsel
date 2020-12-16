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
            <a href="<?php echo base_url()?>Anggota_polisi/tambah" class="btn btn-primary" role="button">Tambah Data</a>
            <a href="<?php echo base_url('RD_polri/excel'); ?>" class='btn btn-success'>Export Data</a>
            <div class="table-responsive text-nowrap">
                <table class="table table-bordered text-center mt-4">
                  <thead>
                    <tr>
                      <th scope="col"  class="align-middle">NO</th>
                      <th scope="col"  class="align-middle">PANGKAT</th>
                      <th scope="col"  class="align-middle">SPIM</th>
                      <th scope="col"  class="align-middle">ITWASDA</th>
                      <th scope="col"  class="align-middle">OPS</th>
                      <th scope="col"  class="align-middle">RENA</th>
                      <th scope="col"  class="align-middle">SDM</th>
                      <th scope="col"  class="align-middle">SARPRAS</th>
                      <th scope="col"  class="align-middle">PROPAM</th>
                      <th scope="col"  class="align-middle">TI</th>
                      <th scope="col"  class="align-middle">DOKKES</th>
                      <th scope="col"  class="align-middle">KEU</th>
                      <th scope="col"  class="align-middle">KUM</th>
                      <th scope="col"  class="align-middle">HUMAS</th>
                      <th scope="col"  class="align-middle">LANTAS</th>
                      <th scope="col"  class="align-middle">KRIM UM</th>
                      <th scope="col"  class="align-middle">KRIMSUS</th>
                      <th scope="col"  class="align-middle">INTEL</th>
                      <th scope="col"  class="align-middle">BIMAS</th>
                      <th scope="col"  class="align-middle">SABHARA</th>
                      <th scope="col"  class="align-middle">OBVIT</th>
                      <th scope="col"  class="align-middle">POLAIR</th>
                      <th scope="col"  class="align-middle">NARKOBA</th>
                      <th scope="col"  class="align-middle">BRIMOB</th>
                      <th scope="col"  class="align-middle">SPN</th>
                      <th scope="col"  class="align-middle">LABFOR</th>
                      <th scope="col"  class="align-middle">YANMA</th>
                      <th scope="col"  class="align-middle">RUMKIT</th>
                      <th scope="col"  class="align-middle">RESTA</th>
                      <th scope="col"  class="align-middle">MUBA</th>
                      <th scope="col"  class="align-middle">B.ASIN</th>
                      <th scope="col"  class="align-middle">OKI</th>
                      <th scope="col"  class="align-middle">OI</th>
                      <th scope="col"  class="align-middle">M.ENIM</th>
                      <th scope="col"  class="align-middle">PRABU</th>
                      <th scope="col"  class="align-middle">LAHAT</th>
                      <th scope="col"  class="align-middle">P.ALAM</th>
                      <th scope="col"  class="align-middle">OKU</th>
                      <th scope="col"  class="align-middle">OKUT</th>
                      <th scope="col"  class="align-middle">OKUS</th>
                      <th scope="col"  class="align-middle">LINGGAU</th>
                      <th scope="col"  class="align-middle">MURA</th>
                      <th scope="col"  class="align-middle">4 LAWANG</th>
                      <th scope="col"  class="align-middle">PALI</th>
                      <th scope="col"  class="align-middle">MURATARA</th>
                      <th scope="col"  class="align-middle">JUMLAH</th>
                      <th scope="col"  class="align-middle">AKSI</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php 
                        $no = 1;
                        foreach($anggotapolisi as $r){ 
                    ?>
                    <tr>
                      <th scope="row"><?= $no++ ?></th>
                      <td><?= $r->pangkat ?></td>
                      <td><?= $r->spim ?></td>
                      <td><?= $r->itwasda ?></td>
                      <td><?= $r->ops ?></td>
                      <td><?= $r->rena ?></td>
                      <td><?= $r->sdm ?></td>
                      <td><?= $r->sarpras ?></td>
                      <td><?= $r->propam ?></td>
                      <td><?=  $r->ti ?></td>
                      <td><?= $r->dokkes ?></td>
                      <td><?= $r->keu ?></td>
                      <td><?= $r->kum ?></td>
                      <td><?= $r->humas ?></td>
                      <td><?= $r->lantas ?></td>
                      <td><?= $r->krim_um ?></td>
                      <td><?= $r->krimsus ?></td>
                      <td><?= $r->intel ?></td>
                      <td><?=  $r->bimas ?></td>
                      <td><?= $r->sabhara ?></td>
                      <td><?= $r->obvit ?></td>
                      <td><?= $r->polair ?></td>
                      <td><?= $r->narkoba ?></td>
                      <td><?= $r->brimob ?></td>
                      <td><?= $r->spn ?></td>
                      <td><?= $r->labfor ?></td>
                      <td><?= $r->yanma ?></td>
                      <td><?=  $r->rumkit ?></td>
                      <td><?= $r->resta ?></td>
                      <td><?= $r->muba ?></td>
                      <td><?= $r->b_asin ?></td>
                      <td><?= $r->oki ?></td>
                      <td><?= $r->oi ?></td>
                      <td><?= $r->m_enim ?></td>
                      <td><?= $r->prabu ?></td>
                      <td><?= $r->lahat ?></td>
                      <td><?= $r->p_alam ?></td>
                      <td><?= $r->oku ?></td>
                      <td><?= $r->okut ?></td>
                      <td><?= $r->okus ?></td>
                      <td><?= $r->linggau ?></td>
                      <td><?= $r->mura ?></td>
                      <td><?= $r->lawang ?></td>
                      <td><?= $r->pali ?></td>
                      <td><?= $r->muratara ?></td>
                      <td><?=  $r->jumlah ?></td>
                      <td>
                        <a href="<?= base_url('anggota_polisi/edit/'.$r->id) ?>" class="btn btn-primary"><i class="glyphicon glyphicon-pencil"></i> Edit</a>
                        <a href="<?= base_url('anggota_polisi/hapus/'.$r->id) ?>" class="btn btn-danger"><i class="glyphicon glyphicon-remove"></i> Remove</a>
                     </td>
                    </tr>
                    <?php } ?>
                  </tbody>
                  <tbody>
                          <th colspan="2">JUMLAH</th>
                          <td><?= $total_spim ?></td>
                          <td><?= $total_itwasda ?></td>
                          <td><?= $total_ops ?></td>
                          <td><?= $total_rena ?></td>
                          <td><?= $total_sdm ?></td>
                          <td><?= $total_sarpras ?></td>
                          <td><?= $total_propam ?></td>
                          <td><?= $total_ti ?></td>
                          <td><?= $total_dokkes ?></td>
                          <td><?= $total_keu ?></td>
                          <td><?= $total_kum ?></td>
                          <td><?= $total_humas ?></td>
                          <td><?= $total_lantas ?></td>
                          <td><?= $total_krimum ?></td>
                          <td><?= $total_krimsus ?></td>
                          <td><?= $total_intel ?></td>
                          <td><?= $total_bimas ?></td>
                          <td><?= $total_sabhara ?></td>
                          <td><?= $total_obvit ?></td>
                          <td><?= $total_polair ?></td>
                          <td><?= $total_narkoba ?></td>
                          <td><?= $total_brimob ?></td>
                          <td><?= $total_spn ?></td>
                          <td><?= $total_labfor ?></td>
                          <td><?= $total_yanma ?></td>
                          <td><?= $total_rumkit ?></td>
                          <td><?= $total_resta ?></td>
                          <td><?= $total_muba ?></td>
                          <td><?= $total_b_asin ?></td>
                          <td><?= $total_oki ?></td>
                          <td><?= $total_oi ?></td>
                          <td><?= $total_m_enim ?></td>
                          <td><?= $total_prabu ?></td>
                          <td><?= $total_lahat ?></td>
                          <td><?= $total_p_alam ?></td>
                          <td><?= $total_oku ?></td>
                          <td><?= $total_okut ?></td>
                          <td><?= $total_okus ?></td>
                          <td><?= $total_linggau ?></td>
                          <td><?= $total_mura ?></td>
                          <td><?= $total_lawang ?></td>
                          <td><?= $total_pali ?></td>
                          <td><?= $total_muratara ?></td>
                          <td><?= $total_jumlah ?></td>
                  </tbody>
                </table>
            </div>
        </div>
        </div>
    </div>
</body>
</html>