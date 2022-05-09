<?php 
$nilai1=["id" => 1, "nim" => "01101","uts" => 80, "uas" => 84,"tugas" => 78];
$nilai2=["id" => 2, "nim" => "01121","uts" => 70, "uas" => 50,"tugas" => 68];
$nilai3=["id" => 3, "nim" => "01130","uts" => 60, "uas" => 86,"tugas" => 70];
$nilai4=["id" => 4, "nim" => "01134","uts" => 90, "uas" => 91,"tugas" => 82];

$kumpulan_nilai=[$nilai1, $nilai2, $nilai3, $nilai4];

 ?>
 	



<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Tugas 1</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Tugas 1</li>
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
          <div class="col-12">
            	<h1 class="text-center">Daftar Nilai Mahasiswa</h1>
 	<table class="table table-bordered text-center">
		  <thead class="thead-dark">
		    <tr>
		      <th scope="col">No</th>
		      <th scope="col">NIM</th>
		      <th scope="col">UAS</th>
		      <th scope="col">UTS</th>
		      <th scope="col">Tugas</th>
		      <th scope="col">Nilai Akhir</th>
		    </tr>
		  </thead>
		  <tbody>
		    <?php $nomor=1; foreach($kumpulan_nilai as $nilai) :?>
		    	<tr>
		    		<?php $nilai_akhir=($nilai["uts"]+$nilai["uas"]+$nilai["tugas"]/3); ?>
		    		<td><?= $nomor; ?></td>
		    		<td><?= $nilai["nim"]; ?></td>
		    		<td><?= $nilai["uas"] ?></td>
		    		<td><?= $nilai["uts"] ?></td>
		    		<td><?= $nilai["tugas"] ?></td>
		    		<td><?= number_format($nilai_akhir, 2,",",".") ?></td>
		    	</tr>
		    <?php $nomor++ ?>
		    <?php endforeach; ?>
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