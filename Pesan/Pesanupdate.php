<?php 
session_start();
if(! isset($_SESSION['is_login']))
{
  header('location:login.php');
}
?>
<?php 
 
echo "<script> 
            alert('Data berhasil diubah! Jangan Lupa Login Ulang untuk Melihat Perubahan');
            document.location.href = '../admin/updateadmin.php';
        </script>
    ";
 
?>