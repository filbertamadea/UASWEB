<?php 
session_start();
if(! isset($_SESSION['is_login']))
{
  header('location:login.php');
}
?>
<?php 
include_once('../Config/db_connect.php');
$database = new database();
if(isset($_POST['tambahproduk']))
{
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $gen = $_POST['gen'];
    $litografi = $_POST['litografi'];
    $corenum = $_POST['corenum'];
    $threadnum = $_POST['threadnum'];
    $basefrek = $_POST['basefrek'];
    $maxfrek = $_POST['maxfrek'];
    $cache = $_POST['cache'];
    $tdp = $_POST['tdp'];
    $maxmem = $_POST['maxmem'];
    $memtype = $_POST['memtype'];
    $graph = $_POST['graph'];
    $soket = $_POST['soket'];
    $harga = $_POST['harga'];
    $foto = $_POST['foto'];
    if($database->tambahproduk($id,$nama,$gen,$litografi,$corenum,$threadnum,$basefrek,$maxfrek,$cache,$tdp,$maxmem,$memtype,$graph,$soket,$harga,$foto))
    {
      header('location:../Pesan/Pesantambahproduk.php');
    }
}
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Tambah Produk Baru</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <link rel="stylesheet" href="../productcss.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Tamma+2:wght@400;500;600;700;800&family=Roboto+Slab:wght@200;400;600;900&display=swap" rel="stylesheet"/>
</head>
<body>
    <button onclick="topFunction()" id="myBtn" title="Go to top">Back To Top</button> 
    <div class="wrapper">
    <nav id="sidebar">
            <div class="sidebar-header">
                <img style="width: 90%;" src="../img/Logo.png" alt="">
            </div>

            <ul class="list-unstyled components">
                <p>Halaman Admin</p>
                <li class="active">
                    <a href="#admin" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Menu Admin</a>
                    <ul class="collapse list-unstyled" id="admin">
                        <li>
                            <a href="adminpage.php" class="form-inline my-2 my-lg-0 btn btn-secondary"><?php echo $_SESSION['nama']; ?></a>
                            <a href="registeradmin.php" class="form-inline my-2 my-lg-0 btn btn-secondary">Register Admin Baru</a>
                            <a href="updateadmin.php" class="form-inline my-2 my-lg-0 btn btn-secondary">Update Admin</a>
                        </li>
                    
                    </ul>
                </li>
                <li class="active">
                    <a href="#produk" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Menu Produk</a>
                    <ul class="collapse list-unstyled" id="produk">
                        <li>
                            <a href="tambahproductadmin.php" class="form-inline my-2 my-lg-0 btn btn-secondary">Tambah Produk Baru</a>
                            <a href="tampiladminproduk.php" class="form-inline my-2 my-lg-0 btn btn-secondary">Update Produk</a>
                        </li>
                    </ul>
                </li>
                <li>
                <hr>
                    <a href="../Config/logout.php" onClick="return confirm('Apakah Anda Ingin Keluar?')" class="form-inline my-2 my-lg-0 btn btn-secondary">Logout</a>
                </li>        
        </nav>
       
        <!-- Page Content Holder -->
        <div id="content">

            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">

                    <button type="button" id="sidebarCollapse" class="navbar-btn">
                        <span></span>
                        <span></span>
                        <span></span>
                    </button>
                    <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fas fa-align-justify"></i>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="nav navbar-nav ml-auto">
                        <li class="nav-item active">
                                <a style='color:white;' class="nav-link" href="../index.php">HOME <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item active">
                                <a style='color:white;' class="nav-link" href="../about.php">ABOUT</a>
                            </li>
                            <li class="nav-item active">
                                <a style='color:white;' class="nav-link" href="../PRODUK.php">PRODUCTS</a>
                            </li>
                            <li class="nav-item active">
                                <a style='color:white;' class="nav-link" href="../order.php">ORDER</a>
                            </li>
                            <li class="nav-item active">
                                <a style='color:white;' class="nav-link" href="../contact.php">CONTACT</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <div class="container">
     
    <h1 class="mt-5">Tambah produk</h1>
    <p class="lead">Silahkan tambahkan produk baru</p>
    <hr/>
    <form method="post" action="">
    <!-- id -->
    <div class="form-group row">
      <label for="id" class="col-sm-2 col-form-label">ID</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="id" name="id" placeholder="Id Produk">
      </div>
    </div>
    <!-- nama -->
    <div class="form-group row">
      <label for="nama" class="col-sm-2 col-form-label">Nama Produk</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Produk">
      </div>
    </div>
    <!-- nama -->
    <div class="form-group row">
      <label for="gen" class="col-sm-2 col-form-label">Generasi Prosesor</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="gen" name="gen" placeholder="Generasi produk">
      </div>
    </div>
    <!-- litografi -->
    <div class="form-group row">
      <label for="litografi" class="col-sm-2 col-form-label">litografi</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="litografi" name="litografi" placeholder="Litografi Prosesor">
      </div>
    </div>
    <!-- jumlah core -->
    <div class="form-group row">
      <label for="corenum" class="col-sm-2 col-form-label">Jumlah Core</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="corenum" name="corenum" placeholder="Jumlah Core Prosesor">
      </div>
    </div>
    <!-- jumlah untaian -->
    <div class="form-group row">
      <label for="threadnum" class="col-sm-2 col-form-label">Jumlah Untaian</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="threadnum" name="threadnum" placeholder="Jumlah Thread / Untaian">
      </div>
    </div>
    <!-- base frekuensi -->
    <div class="form-group row">
      <label for="basefrek" class="col-sm-2 col-form-label">Base Frekuensi</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="basefrek" name="basefrek" placeholder="Frekuensi Dasar Prosesor">
      </div>
    </div>
    <!-- frekuensi max -->
    <div class="form-group row">
      <label for="maxfrek" class="col-sm-2 col-form-label">Frekuensi Max</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="maxfrek" name="maxfrek" placeholder="Frekuensi Max Prosesor">
      </div>
    </div>
    <!-- cache -->
    <div class="form-group row">
      <label for="cache" class="col-sm-2 col-form-label">Cache</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="cache" name="cache" placeholder="Cache Prosesor">
      </div>
    </div>
    <!-- tdp -->
    <div class="form-group row">
      <label for="tdp" class="col-sm-2 col-form-label">TDP</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="tdp" name="tdp" placeholder="TDP Prosesor">
      </div>
    </div>
    <!-- ukuran memori -->
    <div class="form-group row">
      <label for="maxmem" class="col-sm-2 col-form-label">Ukuran Memori Max</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="maxmem" name="maxmem" placeholder="Ukurang Max Memori">
      </div>
    </div>
    <!-- tipe memori -->
    <div class="form-group row">
      <label for="memtype" class="col-sm-2 col-form-label">Jenis Memori</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="memtype" name="memtype" placeholder="Tipe Memori">
      </div>
    </div>
    <!-- grafis -->
    <div class="form-group row">
      <label for="graph" class="col-sm-2 col-form-label">Grafis Prosesor</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="graph" name="graph" placeholder="Grafis Bawaan Prosesor">
      </div>
    </div>
    <!-- soket -->
    <div class="form-group row">
      <label for="soket" class="col-sm-2 col-form-label">Soket</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="soket" name="soket" placeholder="Soket Prosesor">
      </div>
    </div>
    <!-- harga -->
    <div class="form-group row">
      <label for="harga" class="col-sm-2 col-form-label">Harga Rp.</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="harga" name="harga" placeholder="Harga Produk">
      </div>
    </div>
    <!-- harga -->
    <div class="form-group row">
      <label for="foto" class="col-sm-2 col-form-label">Foto Produk</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="foto" name="foto" placeholder="Foto">
      </div>
    </div>
    <!-- submit -->
    <div class="form-group row">
    <div class="col-sm-10">
      <button type="submit" class="btn btn-primary" name="tambahproduk">ADD</button>
    </div>
  </div>
</form>
  </div>
  <footer class="bg-light text-center text-lg-start">
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
        © 2021 Techna
    </div>
    </footer>
    </div>
    </div>

   

    <!-- jQuery CDN - Slim version (=without AJAX) -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
    <script>
        var mybutton = document.getElementById("myBtn");
        
        window.onscroll = function() {scrollFunction()};
        
        function scrollFunction() {
          if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
            mybutton.style.display = "block";
          } else {
            mybutton.style.display = "none";
          }
        }
        function topFunction() {
          document.body.scrollTop = 0;
          document.documentElement.scrollTop = 0;
        }
    </script>    
    <script type="text/javascript">
        $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
                $(this).toggleClass('active');
            });
        });
    </script>
</body>

</html>