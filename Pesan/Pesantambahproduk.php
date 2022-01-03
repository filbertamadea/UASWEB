<?php 
session_start();
if(! isset($_SESSION['is_login']))
{
  header('location:login.php');
}
?>
<?php 
 
echo "<script> 
            alert('Produk berhasil ditambahkan!');
            document.location.href = '../admin/tampiladminproduk.php';
        </script>
    ";
 
?>