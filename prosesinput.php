
<?php

//koneksi ke database
include "config/koneksi.php";


//ambil data dari form
$nama = $_POST['nama'];
$kelas = $_POST['kelas'];
$nis = $_POST['nis'];
$tanggal = $_POST['tanggal'];
$status = $_POST['status'];


$input = "INSERT INTO siswa(nis,nama,kelas,tanggal,status) VALUES ('$nis','$nama','$kelas','$tanggal','$status')";
$hasil = mysqli_query($konek, $input);

if($hasil){
	header("location:siswa.php");
}else{
	echo "GAGAL";
}
