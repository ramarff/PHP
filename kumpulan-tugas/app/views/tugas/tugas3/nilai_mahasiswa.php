<?php 
require_once "library/tugas3.php";
 ?>
 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Tugas 3 - Nilai Mahasiswa</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Info</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
		<div class="row">
			<div class="col-md-12 text-center">
				<h1>Daftar Nilai Mahasiswa</h1>
			</div>
		</div>
        <div class="row">
          <div class="col-12">
            <a href="<?= BASEURL ?>/tugas/tugas2/form-nilai" class="btn btn-primary mb-2" name="kirim"><- Kembali</a>
			<table class="table">
			 <thead class="thead-dark">
			    <tr>
			      <th>Nama</th>
			      <th>Mata Kuliah</th>
			      <th>Nilai UTS</th>
			      <th>Nilai UAS</th>
			      <th>Nilai Tugas</th>
			      <th>Grade</th>
			      <th>Predikat</th>
			      <th>Status</th>
			    </tr>
			  </thead>
			  <tbody>
			    <tr>
			      <td><?= $nama_mahasiswa; ?></td>
			      <td><?= $mata_kuliah; ?></td>
			      <td><?= $nilai_uts; ?></td>
			      <td><?= $nilai_uas; ?></td>
			      <td><?= $nilai_tugas; ?></td>
			      <td><?= $grade; ?></td>
			      <td><?= $predikat; ?></td>
			      <td><?= $status; ?></td>
			    </tr>
			  </tbody>
			</table>
          </div>
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->