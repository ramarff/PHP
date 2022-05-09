<?php 
require_once "library.php";
$proses=$_POST["kirim"];
$nama_mahasiswa=$_POST["nama"];
$mata_kuliah=$_POST["matkul"];
$nilai_uts=$_POST["nilai_uts"];
$nilai_uas=$_POST["nilai_uas"];
$nilai_tugas=$_POST["nilai_tugas"];

$total_nilai=($nilai_uts+$nilai_uas+$nilai_tugas)/3;

$grade=grade($total_nilai);
$predikat=predikat($grade);
$status=status($total_nilai);

?>