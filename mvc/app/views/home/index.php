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
        <a class="nav-link" href="<?= BASEURL; ?>/mahasiswa/index">Mahasiswa</a>
      </li>
    </ul>
  </div>
</div>
</nav>
<div class="container">
	<div class="jumbotron mt-5">
	  <h1 class="display-4">Selamat Datang di Website Saya!.</h1>
	  <p class="lead">Halo nama saya <?= $data["nama"]; ?></p>
	  <hr class="my-4">
	  <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
	  <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
	</div>
</div>