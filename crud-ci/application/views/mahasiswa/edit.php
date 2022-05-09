<div class="container">
	
	<div class="row mt-3">
		<div class="col-md-6">
			
			<form action="" method="post">
				<div class="card">
				  <div class="card-header">
				    Form Edit Data Mahasiswa
				  </div>
				  <div class="card-body">
				  	<input type="hidden" name="id" value="<?= $mahasiswa["id"]; ?>">
				   	<div class="form-group">
					    <label for="nama">Nama </label>
					    <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan Nama" value="<?= $mahasiswa["nama"]  ?>">
					    <small id="emailHelp" class="form-text text-danger"><?= form_error("nama"); ?></small>
					</div>	
					<div class="form-group">
					    <label for="nim">NIM</label>
					    <input type="text" class="form-control" id="nim" name="nim" placeholder="Masukkan NIM"  value="<?= $mahasiswa["nim"]  ?>">
					    <small id="emailHelp" class="form-text text-danger"><?= form_error("nim"); ?></small>
					</div>
					<div class="form-group">
					    <label for="email">Email</label>
					    <input type="email" class="form-control" id="email" name="email" placeholder="example@co.id"  value="<?= $mahasiswa["email"]  ?>">
					    <small id="emailHelp" class="form-text text-danger"><?= form_error("email"); ?></small>
					</div>
					<div class="form-group">
						<label for="jurusan">Jurusan</label>
					    <select class="form-control" id="jurusan" name="jurusan"  value="<?= $mahasiswa["jurusan"];  ?>">
					      <?php foreach($jurusan as $j) : ?>	
					      	<?php if($j == $mahasiswa["jurusan"] )	 : ?>
					      		<option value="<?= $j; ?>" selected><?= $j; ?></option>
					      	<?php else : ?>
					      		<option value="<?= $j; ?>"><?= $j; ?></option>
					      	<?php endif; ?>

					  	  <?php endforeach; ?>
					    </select>
					</div>
					<button type="submit" class="btn btn-primary float-right">Edit Data</button>
					<button type="submit" class="btn btn-danger float-right mr-2" name="cancel">Batal</button>
				  </div>
				</div>
			</form>

		</div>
	</div>

</div>