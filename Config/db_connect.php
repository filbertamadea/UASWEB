<?php 
class database{
	var $host = "localhost";
	var $username = "root";
	var $password = "";
	var $database = "database_user";
	var $koneksi;
 
	function __construct(){
		$this->koneksi = mysqli_connect($this->host, $this->username, $this->password,$this->database);
	}
 
 
	function register($id,$username,$password,$nama,$email,$Jabatan,$jk,$tgllahir,$notelp,$ig,$foto)
	{	
		$insert = mysqli_query($this->koneksi,"insert into tb_user values ('$id','$username','$password','$nama','$email','$Jabatan','$jk','$tgllahir','$notelp','$ig','$foto')");
		return $insert;
	}
 
	function login($username,$password,$remember)
	{
		$query = mysqli_query($this->koneksi,"select * from tb_user where username='$username'");
		$data_user = $query->fetch_array();
		if(password_verify($password,$data_user['password']))
		{
			
			if($remember)
			{
				setcookie('username', $username, time() + (60 * 60 * 24 * 5), '/');
				setcookie('nama', $data_user['nama'], time() + (60 * 60 * 24 * 5), '/');
				setcookie('Jabatan', $data_user['Jabatan'], time() + (60 * 60 * 24 * 5), '/');
				setcookie('jk', $data_user['jk'], time() + (60 * 60 * 24 * 5), '/');
				setcookie('foto', $data_user['foto'], time() + (60 * 60 * 24 * 5), '/');
				setcookie('email', $data_user['email'], time() + (60 * 60 * 24 * 5), '/');
				setcookie('tgllahir', $data_user['tgllahir'], time() + (60 * 60 * 24 * 5), '/');
				setcookie('notelp', $data_user['notelp'], time() + (60 * 60 * 24 * 5), '/');
				setcookie('ig', $data_user['ig'], time() + (60 * 60 * 24 * 5), '/');
			}
			$_SESSION['username'] = $username;
			$_SESSION['nama'] = $data_user['nama'];
			$_SESSION['Jabatan'] = $data_user['Jabatan'];
			$_SESSION['jk'] = $data_user['jk'];
			$_SESSION['foto'] = $data_user['foto'];
			$_SESSION['tgllahir'] = $data_user['tgllahir'];
			$_SESSION['email'] = $data_user['email'];
			$_SESSION['notelp'] = $data_user['notelp'];
			$_SESSION['ig'] = $data_user['ig'];
			$_SESSION['is_login'] = TRUE;
			return TRUE;
			echo "<script> 
            alert('Selamat datang!');
            document.location.href = '../admin/login.php';
        		</script>
    		";
		}
		else
		{
			echo "<script> 
            alert('Username Atau Password Salah');
            document.location.href = '../admin/login.php';
        		</script>
    		";
		}
	}
 
	function relogin($username)
	{
		$query = mysqli_query($this->koneksi,"select * from tb_user where username='$username'");
		$data_user = $query->fetch_array();
		$_SESSION['username'] = $username;
		$_SESSION['nama'] = $data_user['nama'];
		$_SESSION['is_login'] = TRUE;
	}

	function tampil_data()
	{
		$data = mysqli_query($this->koneksi,"select * from tb_user");
		while($row = mysqli_fetch_array($data)){
			$hasil[] = $row;
		}
		return $hasil;
	}
	function get_by_id($id)
	{
		$query = mysqli_query($this->koneksi,"select * from tb_user where id='$id'");
		return $query->fetch_array();
	}
	function update_data($id,$username,$password,$nama,$email,$Jabatan,$jk,$tgllahir,$notelp,$ig,$foto)
	{
		$query = mysqli_query($this->koneksi,"update tb_user set id='$id',username='$username',password='$password',nama='$nama',email='$email',Jabatan='$Jabatan',jk='$jk',tgllahir='$tgllahir',notelp='$notelp',ig='$ig',foto='$foto' where id='$id'");
	}
	function tambah_data($id,$username,$password,$nama)
	{
		mysqli_query($this->koneksi,"insert into tb_user values ('','$id','$username','$password','$nama')");
	}
	function delete_data($id)
	{
		$query = mysqli_query($this->koneksi,"delete from tb_user where id='$id'");
	}
	function tambahproduk($id,$nama,$gen,$litografi,$corenum,$threadnum,$basefrek,$maxfrek,$cache,$tdp,$maxmem,$memtype,$graph,$soket,$harga,$foto)
	{	
		$insert = mysqli_query($this->koneksi,"insert into produk values ('$id','$nama','$gen','$litografi','$corenum','$threadnum','$basefrek','$maxfrek','$cache','$tdp','$maxmem','$memtype','$graph','$soket','$harga','$foto')");
		return $insert;
	}
	function tampil_produk()
	{
		$data = mysqli_query($this->koneksi,"select * from produk");
		while($row = mysqli_fetch_array($data)){
			$hasil[] = $row;
		}
		return $hasil;
	}
	function get_by_idproduk($id)
	{
		$query = mysqli_query($this->koneksi,"select * from produk where id='$id'");
		return $query->fetch_array();
	}
	function update_produk($id,$nama,$gen,$litografi,$corenum,$threadnum,$basefrek,$maxfrek,$cache,$tdp,$maxmem,$memtype,$graph,$soket,$harga,$foto)
	{
		$query = mysqli_query($this->koneksi,"update produk set id='$id',nama='$nama',gen='$gen',litografi='$litografi',corenum='$corenum',threadnum='$threadnum',basefrek='$basefrek',maxfrek='$maxfrek',cache='$cache',tdp='$tdp',maxmem='$maxmem',memtype='$memtype',graph='$graph',soket='$soket',harga='$harga',foto='$foto' where id='$id'");
	}
	function delete_produk($id)
	{
		$query = mysqli_query($this->koneksi,"delete from produk where id='$id'");
	}
} 
?>