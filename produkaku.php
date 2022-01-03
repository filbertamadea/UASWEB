<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <link href="https://fonts.googleapis.com/css2?family=Baloo+Tamma+2:wght@400;500;600;700;800&family=Roboto+Slab:wght@200;400;600;900&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>ABOUT</title>
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
                    <a href="adminpage.php" class="form-inline my-2 my-lg-0 btn btn-secondary">Admin</a> <br>
                </div>
            </nav>
        </div>
        <!--------------------------------------------------- Navigation Bar selesai ---------------------------------------------------------->

        <!----------------------------------------------------- Jumbotron Dimulai ------------------------------------------------------------->
        <div class="jumbotron" style="background-image: url(img/product.jpg); background-size: cover;">
            <h1 class="display-4 pt-5">LET US INTRODUCE</h1>
            <h2>OURSELVES</h2>
            <hr align="left" width="400" color="white" size="12px">
            <h5>Let us tells you about ourselves,</h5>
            <h5>who we are, and how far we've come.</h5>
        </div>
        <!----------------------------------------------------- Jumbotron Selesai ------------------------------------------------------------->
    </section>
    <table class="table table-striped table-bordered">
<thead>
<tr>
<th style='width:150px;text-align: center;'>Foto</th>
<th style='width:70px;text-align: center;'>Nama Produk</th>
<th style='width:60px;text-align: center;'>Generasi</th>
<th style='width:50px;text-align: center;'>Litografi</th>
<th style='width:40px;text-align: center;'>Jumlah Core</th>
<th style='width:50px;text-align: center;'>Jumlah Thread</th>
<th style='width:50px;text-align: center;'>Frekuensi Base</th>
<th style='width:50px;text-align: center;'>Frekuensi Maksimum</th>
<th style='width:50px;text-align: center;'>Cache</th>
<th style='width:50px;text-align: center;'>Tdp</th>
<th style='width:50px;text-align: center;'>Memori Maksimum</th>
<th style='width:50px;text-align: center;'>Tipe Memori</th>
<th style='width:50px;text-align: center;'>Intregated Graphic</th>
<th style='width:50px;text-align: center;'>Soket</th>
<th style='width:50px;text-align: center;'>Harga</th>
</tr>
</thead>
<tbody>
<?php
include('db.php');

if (isset($_GET['page_no']) && $_GET['page_no']!="") {
	$page_no = $_GET['page_no'];
	} else {
		$page_no = 1;
        }

	$total_records_per_page = 2;
    $offset = ($page_no-1) * $total_records_per_page;
	$previous_page = $page_no - 1;
	$next_page = $page_no + 1;
	$adjacents = "2"; 

	$result_count = mysqli_query($con,"SELECT COUNT(*) As total_records FROM `produk`");
	$total_records = mysqli_fetch_array($result_count);
	$total_records = $total_records['total_records'];
    $total_no_of_pages = ceil($total_records / $total_records_per_page);
	$second_last = $total_no_of_pages - 1; // total page minus 1

    $result = mysqli_query($con,"SELECT * FROM `produk` LIMIT $offset, $total_records_per_page");
    while($row = mysqli_fetch_array($result)){
		echo "<tr>
			  <td style='width:150px; height:150px;' ><img style='width:150px; height:150px;' src='FOTOF/" . $row['foto'] . "'></td>
			  <td style='width:70px;text-align: center;' >Intel® Core™ ".$row['nama']."</td>
	 		  <td style='width:60px;text-align: center;' >".$row['gen']."</td>
		   	  <td style='width:50px;text-align: center;' >".$row['litografi']."</td>
			  <td style='width:40px;text-align: center;' >".$row['corenum']."</td>
			  <td style='width:150px;text-align: center;' >".$row['threadnum']."</td>
			  <td style='width:150px;text-align: center;' >".$row['basefrek']."</td>
			  <td style='width:150px;text-align: center;' >".$row['maxfrek']."</td>
			  <td style='width:150px;text-align: center;' >".$row['cache']."</td>
			  <td style='width:150px;text-align: center;' >".$row['tdp']."</td>
			  <td style='width:150px;text-align: center;' >".$row['maxmem']."</td>
			  <td style='width:150px;text-align: center;' >".$row['memtype']."</td>
			  <td style='width:150px;text-align: center;' >".$row['graph']."</td>
			  <td style='width:150px;text-align: center;' >".$row['soket']."</td>
			  <td style='width:70px;text-align: center;' >Rp".$row['harga']."</td>
		   	  </tr>";
        }
	mysqli_close($con);
    ?>
</tbody>
</table>
<nav aria-label="Page navigation example">
<div style='padding: 10px 20px 0px; border-top: dotted 1px #CCC;'>
<strong>Page <?php echo $page_no." of ".$total_no_of_pages; ?></strong>
</div>

<ul class="pagination">
	<?php // if($page_no > 1){ echo "<li><a href='?page_no=1'>First Page</a></li>"; } ?>
    
	<li <?php if($page_no <= 1){ echo "class='disabled'"; } ?>>
	<a <?php if($page_no > 1){ echo "href='?page_no=$previous_page'"; } ?>>Previous</a>
	</li>
       
    <?php 
	if ($total_no_of_pages <= 10){  	 
		for ($counter = 1; $counter <= $total_no_of_pages; $counter++){
			if ($counter == $page_no) {
		   echo "<li class='active'><a>$counter</a></li>";	
				}else{
           echo "<li><a href='?page_no=$counter'>$counter</a></li>";
				}
        }
	}
	elseif($total_no_of_pages > 10){
		
	if($page_no <= 4) {			
	 for ($counter = 1; $counter < 8; $counter++){		 
			if ($counter == $page_no) {
		   echo "<li class='active'><a>$counter</a></li>";	
				}else{
           echo "<li><a href='?page_no=$counter'>$counter</a></li>";
				}
        }
		echo "<li><a>...</a></li>";
		echo "<li><a href='?page_no=$second_last'>$second_last</a></li>";
		echo "<li><a href='?page_no=$total_no_of_pages'>$total_no_of_pages</a></li>";
		}

	 elseif($page_no > 4 && $page_no < $total_no_of_pages - 4) {		 
		echo "<li><a href='?page_no=1'>1</a></li>";
		echo "<li><a href='?page_no=2'>2</a></li>";
        echo "<li><a>...</a></li>";
        for ($counter = $page_no - $adjacents; $counter <= $page_no + $adjacents; $counter++) {			
           if ($counter == $page_no) {
		   echo "<li class='active'><a>$counter</a></li>";	
				}else{
           echo "<li><a href='?page_no=$counter'>$counter</a></li>";
				}                  
       }
       echo "<li><a>...</a></li>";
	   echo "<li><a href='?page_no=$second_last'>$second_last</a></li>";
	   echo "<li><a href='?page_no=$total_no_of_pages'>$total_no_of_pages</a></li>";      
            }
		
		else {
        echo "<li><a href='?page_no=1'>1</a></li>";
		echo "<li><a href='?page_no=2'>2</a></li>";
        echo "<li><a>...</a></li>";

        for ($counter = $total_no_of_pages - 6; $counter <= $total_no_of_pages; $counter++) {
          if ($counter == $page_no) {
		   echo "<li class='active'><a>$counter</a></li>";	
				}else{
           echo "<li><a href='?page_no=$counter'>$counter</a></li>";
				}                   
                }
            }
	}
?>
    
	<li <?php if($page_no >= $total_no_of_pages){ echo "class='disabled'"; } ?>>
	<a <?php if($page_no < $total_no_of_pages) { echo "href='?page_no=$next_page'"; } ?>>Next</a>
	</li>
    <?php if($page_no < $total_no_of_pages){
		echo "<li><a href='?page_no=$total_no_of_pages'>Last &rsaquo;&rsaquo;</a></li>";
		} ?>
</ul>
</nav>
</div>
    <!------------------------------------------------------- Section Footer Dimulai -------------------------------------------------------------->
    <div id="footer">
        <!----------------------------------------------------- Footer dimulai ------------------------------------------------------------->
        <div class="social-links">
            <a href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a>
            <a href="https://www.instagram.com/"><i class="fa fa-instagram"></i></a>
            <a href="https://twitter.com/?lang=en-id"><i class="fa fa-twitter"></i></a>
            <a href="https://www.youtube.com/index"><i class="fa fa-youtube-play"></i></a>
        </div>
        <div class="nameContainer ">
            <div class="nameRow ">
                <p>Josef Cristian Adi P. - 32190036</p>
                <p>Rivaldy Valentino - 32190053</p>
            </div>
            <div class="nameRow ">
                <p>Fibert Amadea - 32190066</p>
                <p>Afiyah Salsabila A. - 32190057</p>
            </div>
        </div>
        <div class="nameRow1 ">
            <p>Martinus Suryadi - 32190090</p>
        </div>
        <!----------------------------------------------------- Footer selesai ------------------------------------------------------------->
    </div>
    <!------------------------------------------------------- Section Footer Selesai -------------------------------------------------------------->


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
</body>

</html>