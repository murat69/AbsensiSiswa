<?php
session_start();

include "config/koneksi.php";

$userid=$_POST['username'];
$psw = $_POST['psw'];
$op = $_GET['op'];



if ($op=="in") {

$tampil = "SELECT * FROM tabeluser WHERE username ='$userid' AND password = '$psw'";

$cek= mysqli_query($konek,$tampil);

if (mysqli_num_rows($cek)==1) {
	//jika berhasil isi data di cek

	$c = mysqli_fetch_array($cek);
	$_SESSION['username'] = $c['username'];
	$_SESSION['level'] = $c['level'];

	if ($c['level']=="piket") {
		header("location:piket.php");
	}else if($c['level']=="km"){

		header("location:siswa.php");

	}
}else{
	header("location:faillogin.php");
}


}else if($op=="out"){

	unset($_SESSION['username']);
	unset($_SESSION['level']);
	header("location:index.php");


}





 ?>