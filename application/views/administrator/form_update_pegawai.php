<div class="content-wraper">
	<div class="row mt-3 ">
		<div class="col-md-6">
			<div class="card">
			  <div class="card-header">
			    Form Tambah Data Pegawai
			  </div>
				  <div class="card-body">
					
					<?php foreach($pegawai as $peg) : ?>	
						<form  methode="post" action="<?php echo base_url('administrator/pegawai/update_aksi') ?>" >
						 								  
							<div class="form-group">
						 		<label for="nama">Nama</label>
						 		<input type="hidden" name="id" value="<?php echo $peg->nama ?>">
								<input type="text" class="form-control" id="nama" name="nama" value="<?php echo $peg->nama ?>">
							</div>

							<div class="form-group">
								 <label for="alamat">Alamat</label>
								 <input type="text" class="form-control" id="alamat" name="alamat" value="<?php echo $peg->alamat ?>">
							</div>

							<div class="form-group">
								 <label for="pendidikan">Pendidikan</label>
							 <input type="text" class="form-control" id="pendidikan" name="pendidikan" value="<?php echo $peg->pendidikan ?>">
							</div>

							<button type="reset" name="reset" class="btn btn-primary btn-sm">Batal</button>
							<button type="submit" name="simpan" class="btn btn-danger btn-sm">Simpan</button>
						</form>
					<?php endforeach; ?>
				</div>
			</div>
							
		</div>
	</div>
</div>