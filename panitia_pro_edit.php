<?php session_start(); 
if(!isset($_SESSION['valid'])) {
	header('Location: login.php');
}

include_once("connection.php");
$nim = $_POST['nim'];
$nama = $_POST['nama'];
$semester = $_POST['semester'];
$kelas = $_POST['kelas'];
$no_hp = $_POST['no_hp'];
$jabatan = $_POST['jabatan'];
	
$result = mysqli_query($mysqli, "UPDATE tab_panitia SET nama='$nama',
semester='$semester',
kelas='$kelas',
no_hp='$no_hp',
jabatan='$jabatan' WHERE nim='$nim' ");   
echo "<script language=javascript>
			alert('Perbaikan Berhasil');
			window.location='panitia.php';
			</script>";
