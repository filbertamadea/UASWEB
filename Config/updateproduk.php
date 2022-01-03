<?php 
include('db_connect.php');
$koneksi = new database();
$action = $_GET['action'];
if($action == "add")
{
	$koneksi->tambah_data($_POST['id'],$_POST['username'],$_POST['password'],$_POST['nama']);
	header('location:tampiladmproduk.php');
}
elseif($action=="update")
{
	$koneksi->update_produk($_POST['id'],$_POST['nama'],$_POST['gen'],$_POST['litografi'],$_POST['corenum'],$_POST['threadnum'],$_POST['basefrek'],$_POST['maxfrek'],$_POST['cache'],$_POST['tdp'],$_POST['maxmem'],$_POST['memtype'],$_POST['graph'],$_POST['soket'],$_POST['harga'],$_POST['foto']);
	header('location:../Pesan/Pesanupdateproduk.php');
}
elseif($action=="delete")
{
	$id = $_GET['id'];
	$koneksi->delete_produk($id);
	header('location:../admin/tampiladminproduk.php');
}
?>

