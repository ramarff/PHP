<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
<div class="container">
  <a class="navbar-brand" href="#">Rama</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="<?= BASEURL; ?>/home/index">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?= BASEURL; ?>/about/index">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?= BASEURL; ?>/mahasiswa">Mahasiswa</a>
      </li>
    </ul>
  </div>
</div>
</nav>



<div class="container mt-5">
	<div class="card" style="width: 18rem;">
	  <div class="card-body">
	    <h5 class="card-title"><?= $data["mahasiswa"]["nama"]; ?></h5>
	    <h6 class="card-subtitle mb-2 text-muted"><?= $data["mahasiswa"]["nim"]; ?></h6>
	    <p class="card-text"><?= $data["mahasiswa"]["email"]; ?></p>
	    <p class="card-text"><?= $data["mahasiswa"]["jurusan"]; ?></p>
	    <a href="<?= BASEURL; ?>/mahasiswa" class="card-link">Kembali</a>
	  </div>
	</div>
</div>