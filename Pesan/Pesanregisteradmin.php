<?php 
session_start();
if(! isset($_SESSION['is_login']))
{
  header('location:login.php');
}
?>
<?php 
 
echo "<script> 
            alert('Data berhasil ditambahkan!');
            document.location.href = '../admin/adminpage.php';
        </script>
    ";
 
?>