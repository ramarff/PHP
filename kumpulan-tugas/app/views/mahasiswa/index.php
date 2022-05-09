<div class="container mt-5">
  <div class="row">
    <div class="col-lg-6">
      <?php Flasher::flash(); ?>
    </div>
  </div>
  <div class="row mb-3">
    <div class="col-lg-6">
      <button type="button" class="btn btn-primary tombolTambahData" data-toggle="modal" data-target="#formModal">
        Tambah Mahasiswa
      </button>
    </div>
  </div>

  <div class="row">
    <div class="col-lg-6">
         <form action="<?= BASEURL; ?>/mahasiswa/cari" method="POST">
             <div class="input-group mb-3">
              <input type="text" class="form-control" placeholder="Cari mahasiswa..." autocomplete="off" type="submit" name="keyword" id="keyword">
              <div class="input-group-append">
                <button class="btn btn-primary" name="Cari" id="Cari">Cari</button>
              </div>
            </div>
         </form>  
    </div>
  </div>

	<div class="row">
		<div class="col-lg-6">
			<h3>Daftar Mahasiswa</h3>
			<?php foreach($data["mahasiswa"] as $mhs): ?>
				<ul class="list-group">
					<li class="list-group-item align-items-center">
            <?= $mhs["nama"]; ?> 
            <a onclick="return confirm('Yakin ingin dihapus?')" href="<?= BASEURL; ?>/mahasiswa/hapus/<?= $mhs["id"]; ?>" class="badge badge-danger float-right">Hapus</a>
            <a href="<?= BASEURL; ?>/mahasiswa/detail/<?= $mhs["id"]; ?>" class="badge bg-success text-white float-right mr-2 tampilModalUbah"  data-toggle="modal" data-target="#formModal" data-id="<?= $mhs["id"]; ?>">Edit</a>
            <a href="<?= BASEURL; ?>/mahasiswa/detail/<?= $mhs["id"]; ?>" class="badge bg-primary text-white float-right mr-2">Detail</a> 
        </li>
				</ul>
			<?php endforeach; ?>
		</div>
	</div>
</div>


<!-- Modal -->
<div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="formModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="formModalLabel">Tambah Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="<?= BASEURL; ?>/mahasiswa/tambah" method="POST">
      <div class="modal-body">
                <input type="hidden" name="id" id="id">                
                <div class="form-group">
                  <label for="nama">Nama</label>
                  <input type="text" class="form-control" id="nama" name="nama" aria-describedby="nama" placeholder="Masukkan Nama">
                </div>
                <div class="form-group">
                  <label for="nim">NIM</label>
                  <input type="text" class="form-control" id="nim" name="nim" aria-describedby="nama" placeholder="Masukkan NIM">
                </div>
                <div class="form-group">
                  <label for="email">Email</label>
                  <input type="text" class="form-control" id="email" name="email" aria-describedby="nama" placeholder="email@example.com">
                </div>
                <div class="form-group">
                <label for="jurusan">Jurusan</label>
                <select class="form-control" id="jurusan" name="jurusan">
                  <option>Pilih Jurusan</option>
                  <option value="Teknik Informatika">Teknik Informatika</option>
                  <option value="Sistem Informasi">Sistem Informasi</option>
                  <option value="Bisnis Digital">Bisnis Digital</option>
                  <option value="Teknik Industri">Teknik Industri</option>
                  <option value="Teknik Elektro">Teknik Elektro</option>
                </select>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
            <button type="submit" class="btn btn-primary">Simpan</button>
          </div>
      </div>
      </form>
  </div>
</div>