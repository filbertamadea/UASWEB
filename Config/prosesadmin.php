<?php 
include('db_connect.php');
$koneksi = new database();

$action = $_GET['action'];
if($action == "add")
{
	$koneksi->tambah_data($_POST['id'],$_POST['username'],$_POST['password'],$_POST['nama']);
	header('location:tampil.php');
}
elseif($action=="update")
{
	$koneksi->update_data($_POST['id'],$_POST['username'],password_hash($_POST['password'],PASSWORD_DEFAULT),$_POST['nama'],$_POST['email'],$_POST['Jabatan'],$_POST['jk'],$_POST['tgllahir'],$_POST['notelp'],$_POST['ig'],$_POST['foto']);
	header('location:../Pesan/Pesanupdate.php');
}
elseif($action=="delete")
{
	$id = $_GET['id'];
	$koneksi->delete_data($id);
	header('location:../admin/updateadmin.php');
}
?>
?>
