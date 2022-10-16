<div class="container">
	<div class="row mt-3">
				<div class="col-md-3"></div>
		<div class="col-md-6">
<div class="card">
	<div class="card-header">
		<center> Form Ubah Data Pengguna</center>
		<br>

			<form action="" method="post">
				<input type="hidden" name="id" value="<?= $pengguna['id'];?>">


			<div class="form-group">
				<label for="nama">Nama</label>
				<input type="text" class="form-control" id="nama" name="nama"value="<?= $pengguna['nama'];?>">
				<small class="form-text text-danger"><?= form_error('nama'); ?></small>
  			</div>


			<div class="form-group">
				<label for="nrp">Nomor Induk Siswa</label>
				<input type="text" class="form-control" id="nrp" name="nrp" value="<?= $pengguna['nrp'];?>">
				<small class="form-text text-danger"><?= form_error('nrp'); ?></small>
			</div>

			<div class="form-group">
				<label for="email">Email</label>
				<input type="text" class="form-control" id="email" name="email"value="<?= $pengguna['email'];?>">
				<small class="form-text text-danger"><?= form_error('email'); ?></small>
			</div>

			<div class="form-group">
				<label for="jk">Jenis Kelamin</label>
				<select class="form-control" id="jk" name="jk"value="<?= $pengguna['jk'];?>">
					

					<?php foreach($jk as $j ) : ?>
					<?php if ( $j == $pengguna['jk']) : ?>

					<option value="<?= $j; ?>"><?= $j; ?></option>

					<?php else : ?>
					<option value="<?= $j; ?>"selected><?= $j; ?></option>

				<?php endif; ?>

					<?php endforeach; ?>
				</select>
			</div>
			<a href="<?= base_url();?>pengguna" class="btn btn-primary">Kembali</a>
			<button type="submit" name="ubah" class="btn btn-primary float-right" >Ubah</button>
		</form>
	</div></div>
	</div>
</div>