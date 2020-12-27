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
            <a href="<?php echo base_url()?>/mutdat/tambah" class="btn btn-primary" role="button">Tambah Data</a>
            <div class="table-responsive text-nowrap">
                <table class="table table-bordered text-center mt-4">
                  <thead>
                    <tr>
                      <th scope="col" rowspan="2" class="align-middle">NO</th>
                      <th scope="col" rowspan="2" class="align-middle">SATKER</th>
                      <th scope="col" rowspan="2" class="align-middle">BULAN</th>
                      <th scope="col" rowspan="2" class="align-middle">FILE</th>
                      <th scope="col" rowspan="2" class="align-middle">ACTION</th>
                    </tr>
                  </thead>
                  <tbody>
                  	<?php 
                        $no = 1;
                        foreach($mutdat as $m){ 
                    ?>
               		<tr>
                    	<th scope="row"><?php echo $no++ ?></th>
               			<td><?php echo $m->satker ?></td>
               			<td><?php echo $m->bulan ?></td>
               			<td><?php echo $m->file ?></td>
               			<td>
                        <a href="<?= base_url('mutdat/edit/'.$m->id) ?>" class="btn btn-primary"><i class="glyphicon glyphicon-pencil"></i> Edit</a>
                        <a href="<?= base_url('mutdat/hapus/'.$m->id) ?>" class="btn btn-danger"><i class="glyphicon glyphicon-remove"></i> Remove</a>
                        <a href="<?php echo base_url(); ?>mutdat/download/<?php echo $m->id; ?>" class="btn btn-success">Download</a>
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