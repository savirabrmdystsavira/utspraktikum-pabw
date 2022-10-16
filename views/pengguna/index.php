<center>




<div class="container">
	<div class="row mt-3">
				<div class="col-md-3"></div>
		<div class="col-md-12">
			
<div class="container">
        <div class="row">
        <div class="table-responsive">      
<center><h3>Daftar Pengguna </h3></center>

<div class="table-responsive">
	<form action="" method="post"class="form-inline my-2 my-lg-2 float-right">
		<div class="input-group ">
  <input type="text"class="float-right"placeholder="  Telusuri..." name="keyword">
  <div class="input-group-append">
    <button class="btn btn-primary" type="submit">Cari</button>
  </div>
</div>
	</form>
</div>


<ul>
<?php foreach ( $pengguna as $user) :	 ?>
  <li class="list-group-item" >
  	<!-- <p style="float: left"> -->
  	<span><?= $user['nama'];?>		
  	</span>

  	<a href="<?= base_url(); ?>pengguna/hapus/<?= $user ['id']; ?>" class="badge badge-danger float-right" 
  	onclick="return confirm('yakin?');">hapus</a>
  	<a href="<?= base_url(); ?>pengguna/ubah/<?= $user ['id']; ?>" class="badge badge-success float-right">ubah</a>
  	<a href="<?= base_url(); ?>pengguna/detail/<?= $user ['id']; ?>" class="badge badge-primary float-right">detail</a>

  </li>

<?php endforeach; ?>
</ul>

<div class="float-right">
	<div class="col-md-1"></div>
<center><a href="<?= base_url();?>pengguna/tambah" class="btn btn-primary ">Tambah Data</a></center>
</div>
</div>
</div>
</div>
</div>
<div class="container">
	<?php if($this->session->flashdata()):?>
<div class="row mt-3">
	<div class="col-md-3"></div>
	<div class="col-md-6">
		<div class="alert alert-success alert-dismissible fade show" role="alert">
			Data pengguna
			<strong> Berhasil </strong><?=
			$this->session->flashdata('flash');?>
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			</button>
		</div>
	</div>
<?php endif;?>
</div>
