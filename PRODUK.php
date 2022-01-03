<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Tamma+2:wght@400;500;600;700;800&family=Roboto+Slab:wght@200;400;600;900&display=swap" rel="stylesheet"/>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/sticky-footer/">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="csspagi/bootstrap.min.css">
    <title>Product</title>
  </head>
  <body >
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
                    <a href="admin/adminpage.php" class="form-inline my-2 my-lg-0 btn btn-secondary">Admin</a> <br>
                </div>
            </nav>
        </div>

        <!--------------------------------------------------- Navigation Bar selesai ---------------------------------------------------------->

    <div class="mx-auto" style="width: 1500px;">
    <div class="jumbotron" style="background-image: url(img/order.jpg); background-size: cover;">
                    <h1 style="color:white; margin-left:50px; font-size: 120px;" class="display-4 pt-5">Our Product</h1>
                    <hr style="color:white; margin-left:50px;" align="left" width="400" color="white" size="12px">
                    <h5 style="color:white; margin-left:50px; font-size: 35px;">We have the list here below!</h5>
                </div>
	    <table class="table table-striped table-bordered">
            <thead class="thead-dark">
                <tr>
                    <th style='width:150px;text-align: center; font-size: 20px;'>Foto</th>
                    <th style='width:70px;text-align: center; font-size: 20px;' >Nama Produk</th>
                    <th style='width:60px;text-align: center; font-size: 20px;'>Generasi</th>
                    <th style='width:50px;text-align: center; font-size: 20px;'>Litografi</th>
                    <th style='width:40px;text-align: center; font-size: 20px;'>Jumlah Core</th>
                    <th style='width:50px;text-align: center; font-size: 20px;'>Jumlah Thread</th>
                    <th style='width:50px;text-align: center; font-size: 20px;'>Frekuensi Base</th>
                    <th style='width:50px;text-align: center; font-size: 20px;'>Frekuensi Maksimum</th>
                    <th style='width:50px;text-align: center; font-size: 20px;'>Cache</th>
                    <th style='width:50px;text-align: center; font-size: 20px;'>Tdp</th>
                    <th style='width:50px;text-align: center; font-size: 20px;'>Memori Maksimum</th>
                    <th style='width:50px;text-align: center; font-size: 20px;'>Tipe Memori</th>
                    <th style='width:50px;text-align: center; font-size: 20px;'>Intregated Graphic</th>
                    <th style='width:50px;text-align: center; font-size: 20px;'>Soket</th>
                    <th style='width:50px;text-align: center; font-size: 20px;'>Harga</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include('Config/db.php');

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
                            <td style='width:100px;text-align: center; font-size: 15px;' >Intel® Core™ ".$row['nama']."</td>
                            <td style='width:100px;text-align: center; font-size: 15px;' >".$row['gen']."</td>
                            <td style='width:50px;text-align: center; font-size: 15px;' >".$row['litografi']."</td>
                            <td style='width:40px;text-align: center; font-size: 15px;' >".$row['corenum']."</td>
                            <td style='width:50px;text-align: center; font-size: 15px;' >".$row['threadnum']."</td>
                            <td style='width:60px;text-align: center; font-size: 15px;' >".$row['basefrek']."</td>
                            <td style='width:70px;text-align: center; font-size: 15px;' >".$row['maxfrek']."</td>
                            <td style='width:70px;text-align: center; font-size: 15px;' >".$row['cache']."</td>
                            <td style='width:70px;text-align: center; font-size: 15px;' >".$row['tdp']."</td>
                            <td style='width:80px;text-align: center; font-size: 15px;' >".$row['maxmem']."</td>
                            <td style='width:80px;text-align: center; font-size: 15px;' >".$row['memtype']."</td>
                            <td style='width:90px;text-align: center; font-size: 15px;' >".$row['graph']."</td>
                            <td style='width:90px;text-align: center; font-size: 15px;' >".$row['soket']."</td>
                            <td style='width:70px;text-align: center; font-size: 15px;' >Rp".$row['harga']."</td>
                            </tr>";
                        }
                    mysqli_close($con);
                    ?>
                </tbody>
        </table>

                <div style='padding: 10px 20px 0px; border-top: dotted 1px #CCC;'>
                        <strong style='font-size: 15px;'>Page <?php echo $page_no." of ".$total_no_of_pages; ?></strong>
                        </div>

                        <ul class="pagination pagination-lg">
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
                </div>

   
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
  </body>
</html>