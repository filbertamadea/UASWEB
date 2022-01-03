<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Tamma+2:wght@400;500;600;700;800&family=Roboto+Slab:wght@200;400;600;900&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        ul li {
            float:left;
            margin-left:20px;
            margin-right:10px;
        }
        ul li.break {
            clear: right;
        }
    </style>

    <title>CONTACT</title>
</head>

<body>
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

    <!----------------------------------------------------- Jumbotron Dimulai ------------------------------------------------------------->
    <div class="jumbotron" style="background-image: url(img/contact.jpg); background-size: cover;">
        <h1 class="display-4 pt-5">REACHOUT</h1>
        <hr align="left" width="400" color="white" size="12px">
        <h5>We would love to hear from you!</h5>
    </div>
    <!----------------------------------------------------- Jumbotron Selesai ------------------------------------------------------------->

    <!------------------------------------------------------- Section Contact Dimulai -------------------------------------------------------------->
  
        <!----------------------------------------------------- contact dimulai ------------------------------------------------------------->
        <div class="contact-section">
            <div class="contact-form">
                <h2>CONTACT US</h2>
                <form class="contact">
                    <input type="text" id="name" class="text-box" placeholder="Your Name" required>
                    <input type="email" id="email" class="text-box" placeholder="Your Email" required>
                    <input type="text" id="subject" class="text-box" placeholder="Your Subject" required>
                    <textarea id="message" rows="5" placeholder="Your Message" required></textarea>
                    <button type="button" id="submit" class="send-btn btn btn-primary">Submit</button>
                    <button type="submit" class="clr-btn btn btn-primary">Clear Form</button>
                </form>
            </div>
        </div>
        <!----------------------------------------------------- contact selesai ------------------------------------------------------------->
   
    <!------------------------------------------------------- Section Contact Selesai -------------------------------------------------------------->

        <h1 style="text-align: center;">LOCATION</h1>
        <div class="container-fluid">
            <div class="row" style="text-align: center;">
                <div class="col-md-6">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.952541899997!2d106.82167355108378!3d-6.137078761855588!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f5f8cafe5231%3A0x9c53d9645074bdfe!2sMangga%20Dua%20Mall!5e0!3m2!1sid!2sid!4v1617004430429!5m2!1sid!2sid"
                        width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
                <div class="col-md-6">
                    <p style="font-size: 35px; margin-top: 4%;">Jl. Mangga Dua Raya No.1, RW.12, Mangga Dua Sel., Kecamatan Sawah Besar, Kota Jakarta Pusat, Daerah Khusus Ibukota Jakarta 10730</p>
                    <p style="font-size: 35px;">Lantai 2 Nomor 73</p>
                    <p style="font-size: 35px;">No. telp (021) 123 7867</p>
                </div>
            </div>
        </div>
        <div>
        <h1 class="mt-5" style="text-align:center;">Daftar Admin</h1>
        </div>
    
    <div class="container-fluid d-flex justify-content-center">
        <br><br>
    <ul style="list-style-type:none;">
    <?php
        include "Config/db.php";
        $query = mysqli_query($con,"SELECT * FROM tb_user ORDER BY id ASC");
    ?>
    <?php if(mysqli_num_rows($query)>0){ ?>
        <?php
            while($data = mysqli_fetch_array($query)){
        ?>
        <li>
            <div class="card" style="width: 230px; margin-right: 5px; margin-top: 5px;">
                <img class="card-img-top" src="img/<?php echo $data['foto']; ?>" alt="<?php echo $data['id']; ?>" width='168' height='286'>
                    <div class="card-body">
                        <h6 class="card-title"><?php echo $data['nama']; ?></h6>
                        <p class="card-text"><?php echo $data['Jabatan']; ?></p>
                        <ul style="list-style-type:none; margin-right: 28%;" class="d-flex justify-content-center">
                            <li>
                            <a href="https://www.instagram.com/<?php echo $data['ig']; ?>/"><img border="0" alt="<?php echo $data['id']; ?>" src="img/instagram.png" width="20" height="20"></a>
                            </li>
                            <li>
                            <a href="https://mail.google.com/mail/?view=cm&fs=1&tf=1&to=<?php echo $data['email']; ?>"><img border="0" alt="<?php echo $data['id']; ?>" src="img/mail.png" width="20" height="20"></a>
                            </li>
                            <li>
                            <a href="tel:<?php echo $data['notelp']; ?>"><img border="0" alt="<?php echo $data['id']; ?>" src="img/phone.png" width="20" height="20"></a>
                            </li>
                        </ul>
                        
                    </div>
            </div>
        </li>
        <?php  }  }?>
    </ul>
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
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script>
        document.getElementById('submit').addEventListener('click', function() {
            var name = $("#name").val();
            var email = $("#email").val();
            var subject = $("#subject").val();
            var message = $("#message").val();

            if (name == '' || email == '' || subject == '' || message == '') {
                Swal.fire(
                    'There something wrong',
                    'You have to fill in all the sections',
                    'warning'
                )
            } else {
                Swal.fire(
                    'Your Message has been sent',
                    'Thank you for contacting us, you will hear from us soon',
                    'success'
                )
            }
        })
    </script>

</body>

</html>