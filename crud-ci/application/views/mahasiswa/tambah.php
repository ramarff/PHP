<div class="container">
	
	<div class="row mt-3">
		<div class="col-md-6">
			
			<form action="" method="post">
				<div class="card">
				  <div class="card-header">
				    Form Tambah Data Mahasiswa
				  </div>
				  <div class="card-body">
				   	<div class="form-group">
					    <label for="nama">Nama </label>
					    <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan Nama">
					    <small id="emailHelp" class="form-text text-danger"><?= form_error("nama"); ?></small>
					</div>	
					<div class="form-group">
					    <label for="nim">NIM</label>
					    <input type="text" class="form-control" id="nim" name="nim" placeholder="Masukkan NIM">
					    <small id="emailHelp" class="form-text text-danger"><?= form_error("nim"); ?></small>
					</div>
					<div class="form-group">
					    <label for="email">Email</label>
					    <input type="email" class="form-control" id="email" name="email" placeholder="example@co.id">
					    <small id="emailHelp" class="form-text text-danger"><?= form_error("email"); ?></small>
					</div>
					<div class="form-group">
						<label for="jurusan">Jurusan</label>
					    <select class="form-control" id="jurusan" name="jurusan">
					      <option value="Teknik Infomatika">Teknik Informatika</option>
					      <option value="Sistem Informasi">Sistem Informasi</option>
					      <option value="Bisnis Digital">Bisnis Digital</option>
					      <option value="Teknik Industri">Teknik Industri</option>
					      <option value="Teknik Elektro">Teknik Elektro</option>
					    </select>
					</div>
					<button type="submit" class="btn btn-primary float-right">Tambah Data</button>
					<button type="submit" class="btn btn-danger float-right mr-2" name="cancel">Batal</button>
				  </div>
				</div>
			</form>

		</div>
	</div>

</div>