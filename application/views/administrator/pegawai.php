<div class="content-wraper">

  <section calass="content">
        
        <?php echo anchor('administrator/pegawai/input','<button class="btn btn-primary mb-5px" data-toggle="modal" data-target="#exampleModal"><i class="fas fa-plus-square"></i> Tambah Data Pegawai</button><br><br>') ?>
        
            <table class="table table-bordered table-striped table-hover">
                <thead class="thead-dark">
                   
                    <tr>
                      <th>NO</th>
                      <th>Nama</th>
                      <th>Alamat</th>
                      <th>Pendidikan</th>
                      <th colspan="2">AKSI</th>
                    </tr>
                    
                </thead> 

                <?php 
                $no = 1;
                foreach ($pegawai as $peg) : ?>

                    <tr>
                      <td width="20px"><?php echo $no++ ?></td>
                      <td><?php echo $peg->nama ?></td>
                      <td><?php echo $peg->alamat ?></td>
                      <td><?php echo $peg->pendidikan ?></td>
                      <td width="20px"><?php echo anchor('administrator/pegawai/update/'.$peg->id,'<div class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></div>') ?></td>
                      <td width="20px"><?php echo anchor('administrator/pegawai/delete/'.$peg->id,'<div class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></div>') ?></td>
                    </tr>
               
                <?php endforeach; ?>
            </table>
  </section>	
  
</div>