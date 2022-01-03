<?php 	
        include('db_connect.php');
        $database = new database();
        $id = $_GET['id'];
        if(! is_null($id))
        {
	        $data_produk = $database->get_by_idproduk($id);
        }
        else
        {
	        header('location:tampiladmproduk.php');
        }   
?>
<!doctype html>
<html lang="en" class="h-100">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.5">
    <title>Update Produk</title>
 
    <link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/sticky-footer/">
 
    <!-- Bootstrap core CSS -->
    <link href="css/assets/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Tamma+2:wght@400;500;600;700;800&family=Roboto+Slab:wght@200;400;600;900&display=swap" rel="stylesheet"/>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
 
    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }
 
      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="sticky-footer.css" rel="stylesheet">
  </head>
  <body class="d-flex flex-column h-100">
  
    <!-- Begin page content -->
<main role="main" class="flex-shrink-0">
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
                </div>
            </nav>
        </div>
        <!--------------------------------------------------- Navigation Bar selesai ---------------------------------------------------------->
  <div class="container">
      <br>
    <h1 class="mt-5">Update produk</h1>
    <p class="lead">Silahkan Update Produk</p>
    <hr/>
    <form method="post" action="updateproduk.php?action=update">
    <!-- id -->
    <div class="form-group row">
      <label for="id" class="col-sm-2 col-form-label">ID</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="id" name="id" placeholder="Id Produk" value="<?php echo $data_produk['id']; ?>"/>
      </div>
    </div>
    <!-- nama -->
    <div class="form-group row">
      <label for="nama" class="col-sm-2 col-form-label">Nama Produk</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Produk" value="<?php echo $data_produk['nama']; ?>"/>
      </div>
    </div>
    <!-- nama -->
    <div class="form-group row">
      <label for="gen" class="col-sm-2 col-form-label">Generasi Prosesor</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="gen" name="gen" placeholder="Generasi produk" value="<?php echo $data_produk['gen']; ?>"/>
      </div>
    </div>
    <!-- litografi -->
    <div class="form-group row">
      <label for="litografi" class="col-sm-2 col-form-label">litografi</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="litografi" name="litografi" placeholder="Litografi Prosesor" value="<?php echo $data_produk['litografi']; ?>"/>
      </div>
    </div>
    <!-- jumlah core -->
    <div class="form-group row">
      <label for="corenum" class="col-sm-2 col-form-label">Jumlah Core</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="corenum" name="corenum" placeholder="Jumlah Core Prosesor" value="<?php echo $data_produk['corenum']; ?>"/>
      </div>
    </div>
    <!-- jumlah untaian -->
    <div class="form-group row">
      <label for="threadnum" class="col-sm-2 col-form-label">Jumlah Untaian</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="threadnum" name="threadnum" placeholder="Jumlah Thread / Untaian" value="<?php echo $data_produk['threadnum']; ?>"/>
      </div>
    </div>
    <!-- base frekuensi -->
    <div class="form-group row">
      <label for="basefrek" class="col-sm-2 col-form-label">Base Frekuensi</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="basefrek" name="basefrek" placeholder="Frekuensi Dasar Prosesor" value="<?php echo $data_produk['basefrek']; ?>"/>
      </div>
    </div>
    <!-- frekuensi max -->
    <div class="form-group row">
      <label for="maxfrek" class="col-sm-2 col-form-label">Frekuensi Max</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="maxfrek" name="maxfrek" placeholder="Frekuensi Max Prosesor" value="<?php echo $data_produk['maxfrek']; ?>"/>
      </div>
    </div>
    <!-- cache -->
    <div class="form-group row">
      <label for="cache" class="col-sm-2 col-form-label">Cache</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="cache" name="cache" placeholder="Cache Prosesor" value="<?php echo $data_produk['cache']; ?>"/>
      </div>
    </div>
    <!-- tdp -->
    <div class="form-group row">
      <label for="tdp" class="col-sm-2 col-form-label">TDP</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="tdp" name="tdp" placeholder="TDP Prosesor" value="<?php echo $data_produk['tdp']; ?>"/>
      </div>
    </div>
    <!-- ukuran memori -->
    <div class="form-group row">
      <label for="maxmem" class="col-sm-2 col-form-label">Ukuran Memori Max</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="maxmem" name="maxmem" placeholder="Ukurang Max Memori" value="<?php echo $data_produk['maxmem']; ?>"/>
      </div>
    </div>
    <!-- tipe memori -->
    <div class="form-group row">
      <label for="memtype" class="col-sm-2 col-form-label">Jenis Memori</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="memtype" name="memtype" placeholder="Tipe Memori" value="<?php echo $data_produk['memtype']; ?>"/>
      </div>
    </div>
    <!-- grafis -->
    <div class="form-group row">
      <label for="graph" class="col-sm-2 col-form-label">Grafis Prosesor</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="graph" name="graph" placeholder="Grafis Bawaan Prosesor" value="<?php echo $data_produk['graph']; ?>"/>
      </div>
    </div>
    <!-- soket -->
    <div class="form-group row">
      <label for="soket" class="col-sm-2 col-form-label">Soket</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="soket" name="soket" placeholder="Soket Prosesor" value="<?php echo $data_produk['soket']; ?>"/>
      </div>
    </div>
    <!-- harga -->
    <div class="form-group row">
      <label for="harga" class="col-sm-2 col-form-label">Harga Rp.</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="harga" name="harga" placeholder="Harga Produk" value="<?php echo $data_produk['harga']; ?>"/>
      </div>
    </div>
    <!-- harga -->
    <div class="form-group row">
      <label for="foto" class="col-sm-2 col-form-label">Foto Produk</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="foto" name="foto" placeholder="Foto" value="<?php echo $data_produk['foto']; ?>"/>
      </div>
    </div>
    <!-- submit -->
    <div class="form-group row">
    <div class="col-sm-10">
      <button type="submit" class="btn btn-primary" name="update" value="update">ADD</button>
    </div>
  </div>
</form>
  </div>
</main>
 
<footer class="footer mt-auto py-3">
  <div class="container">
    <span class="text-muted"> ?</span>
  </div>
</footer>
</body>
</html>