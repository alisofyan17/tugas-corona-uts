<div class="container-fluit">

	<form methode="post" action="<?php echo base_url('administrator/pegawai/input_aksi') ?>">
		<div class="form-group">
			<label>NIP</label>
			<input type="text" name="nip" placeholder="Masukan NIP" class="form-control">
			<?php if ( validation_errors() ) : ?>
			<div class="alert alert-light" role="alert">
			 <?php echo validation_errors() ?>
			</div>
			<?php endif; ?>

		<div class="form-group">
			<label>NAMA</label>
			<input type="text" name="nama" placeholder="Masukan Nama" class="form-control">
			<?php if ( validation_errors() ) : ?>
			<div class="alert alert-light" role="alert">
			 <?php echo validation_errors() ?>
			</div>
			<?php endif; ?>
		</div>

		<div class="form-group">
			<label>ALAMAT</label>
			<input type="text" name="alamat" placeholder="Masukan Alamat" class="form-control">
			<?php if ( validation_errors() ) : ?>
			<div class="alert alert-light" role="alert">
			 <?php echo validation_errors() ?>
			</div>
			<?php endif; ?>
		</div>

		<div class="form-group">
			<label>PENDIDIKAN</label>
			<input type="text" name="pendidikan" placeholder="Masukan Pendidkan Terakhir" class="form-control">
			<?php if ( validation_errors() ) : ?>
			<div class="alert alert-light" role="alert">
			 <?php echo validation_errors() ?>
			</div>
			<?php endif; ?>
		</div>
		
		<button type="submit" name="simpan" class="btn btn-primary"> Simpan</button>
	</form>
	




</div>