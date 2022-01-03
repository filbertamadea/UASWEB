<?php 
session_start();
if(! isset($_SESSION['is_login']))
{
  header('location:login.php');
}
?>
<?php 	
        include('db_connect.php');
        $database = new database();
        $id = $_GET['id'];
        if(! is_null($id))
        {
	        $data_admin = $database->get_by_id($id);
        }
        else
        {
	        header('location:tampil.php');
        }   
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Tamma+2:wght@400;500;600;700;800&family=Roboto+Slab:wght@200;400;600;900&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <Title>Data Admin</Title>
</head>
<body>
<section id="Jumbotron">
        <!--------------------------------------------------- Navigation Bar dimulai ---------------------------------------------------------->
        <div class="container">
            <nav class="navbar fixed-top navbar-expand-lg navbar-dark">
                <div class="container">
                    <a class="navbar-brand" href="#">
                        <img src="./img/Logo.png" width="170px" height="35">
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav mx-auto">
                            <li class="nav-item active">
                                <a class="nav-link" href="index.php">HOME <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item active">
                                <a class="nav-link" href="about.php">ABOUT</a>
                            </li>
                            <li class="nav-item active">
                                <a class="nav-link" href="PRODUK.php">PRODUCTS</a>
                            </li>
                            <li class="nav-item active">
                                <a class="nav-link" href="order.php">ORDER</a>
                            </li>
                            <li class="nav-item active">
                                <a class="nav-link" href="contact.php">CONTACT</a>
                            </li>
                        </ul>
                    </div>
                    <a href="logout.php" class="form-inline my-2 my-lg-0 btn btn-secondary">Logout</a> <br>
                    <a href="tampil.php" class="form-inline my-2 my-lg-0 btn btn-secondary"><?php echo $_SESSION['nama']; ?></a>
                </div>
            </nav>
        </div>
    </section>
    <form method="post" action="prosesadmin.php?action=update">
    <table>
        <tr>
		    <td>ID</td>
		    <td>:</td>
		    <td><input type="text" name="id" value="<?php echo $data_admin['id']; ?>"/></td>
	    </tr>
	    <tr>
		    <td>Username</td>
		    <td>:</td>
		    <td><input type="text" name="username" value="<?php echo $data_admin['username']; ?>"/></td>
	    </tr>
	    <tr>
		    <td>Password</td>
		    <td>:</td>
		    <td><input type="text" name="password" value="<?php echo $data_admin['password']; ?>"/></td>
	    </tr>
	    <tr>
		    <td>Nama</td>
		    <td>:</td>
		    <td><input type="text" name="nama" value="<?php echo $data_admin['nama']; ?>"/></td>
	    </tr>
	    <tr>
		    <td></td>
		    <td></td>
		    <td><input type="submit" name="tombol" value="update"/></td>
	    </tr>
    </table>
</form>

</html>
</body>
</html>