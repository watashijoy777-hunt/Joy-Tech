<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Joy</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
        <style>
      /* Google Font */
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');

*{
    margin:0;
    padding:0;
    box-sizing:border-box;
}

body{
    font-family:'Poppins',sans-serif;
    background:linear-gradient(135deg,#fff5f8,#ffe6f0);
    overflow-x:hidden;
}

/* NAVBAR */
.navbar{
    background:rgba(255,51,153,0.95);
    backdrop-filter:blur(10px);
    box-shadow:0 5px 20px rgba(0,0,0,0.1);
    padding:10px 0;
}

.navbar-brand{
    color:white !important;
    font-size:28px;
    font-weight:700;
}

.navbar-brand img{
    width:75px;
    height:75px;
    border-radius:50%;
    border:3px solid white;
    object-fit:cover;
}

.nav-link{
    color:white !important;
    font-weight:500;
    margin-left:15px;
    transition:0.4s;
}

.nav-link:hover{
    color:#000 !important;
    transform:translateY(-2px);
}

/* HERO SECTION */
.hero{
    background:
    linear-gradient(rgba(0,0,0,0.45),rgba(0,0,0,0.45)),
    url("Images/banner.jpg");
    background-size:cover;
    background-position:center;
    height:600px;
    display:flex;
    justify-content:center;
    align-items:center;
    text-align:center;
}

.hero h1{
    font-size:70px;
    color:white;
    font-weight:bold;
    text-shadow:0 5px 15px rgba(0,0,0,0.4);
    animation:fadeIn 1.5s ease;
}

@keyframes fadeIn{
    from{
        opacity:0;
        transform:translateY(40px);
    }
    to{
        opacity:1;
        transform:translateY(0);
    }
}

/* GALLERY SECTION */
.gallery-section{
    padding:80px 0;
}

.gallery-title{
    text-align:center;
    font-size:42px;
    font-weight:700;
    margin-bottom:50px;
    background:linear-gradient(45deg,#ff3399,#ff66b3);
    -webkit-background-clip:text;
    -webkit-text-fill-color:transparent;
}

.gallery-box{
    overflow:hidden;
    border-radius:20px;
    background:#fff;
    box-shadow:0 10px 25px rgba(0,0,0,0.12);
    transition:all 0.4s ease;
}

.gallery-box:hover{
    transform:translateY(-10px);
    box-shadow:0 15px 35px rgba(255,51,153,0.3);
}

.gallery-box img{
    width:100%;
    height:300px;
    object-fit:cover;
    transition:0.5s;
}

.gallery-box:hover img{
    transform:scale(1.1);
}

.gallery-content{
    padding:20px;
    text-align:center;
}

.gallery-content h4{
    color:#ff3399;
    font-weight:600;
    margin-bottom:10px;
}

.gallery-content p{
    color:#666;
    font-size:15px;
    margin-bottom:0;
}

/* FOOTER */
footer{
    background:linear-gradient(135deg,#ff3399,#ff66b3);
    color:white;
    text-align:center;
    padding:40px 20px;
    margin-top:70px;
}

footer h5{
    font-size:30px;
    font-weight:700;
}

footer p{
    margin:10px 0;
    font-size:16px;
}

footer i{
    margin-right:8px;
}



</style>
</head>




<body>

    <!-----Navbar------>
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a href="#" class="navbar-brand">
                <img src="Images/logo2.png" alt="logo">
                Royal Touch
            </a>
            <button class="navbar-toggler bg-light" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a href="Home.php" class="nav-link">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="About_Us.php" class="nav-link">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a href="Gallery.php" class="nav-link">Gallery</a>
                    </li>
                    <li class="nav-item">
                        <a href="Appointment.php" class="nav-link"> Appointment</a>
                    </li>
                    <li class="nav-item">
                        <a href="Contact_us.php" class="nav-link">Contact Us</a>
                    </li>
                    <li class="nav-item">
                        <a href="Login.php" class="nav-link">Login</a>

                    </li>
                </ul>

            </div>
        </div>
    </nav>

    <!-------Hero Section----->
    <div class="hero">
        <h1> Our Gallery</h1>

    </div>

   <!-------Gallery Section--->
<div class="container gallery-section">
    <h2 class="gallery-title">Beautiful Nail Designs</h2>

    <div class="row g-4">

        <!-- Card 1 -->
        <div class="col-lg-4 col-md-6">
            <div class="gallery-box">
                <img src="Images/img1.jfif" alt="Nail Art">
                <div class="gallery-content">
                    <h4>Luxury Nail Art</h4>
                    <p>Premium glossy nail extensions with elegant designs.</p>
                </div>
            </div>
        </div>

        <!-- Card 2 -->
        <div class="col-lg-4 col-md-6">
            <div class="gallery-box">
                <img src="Images/img2.jfif" alt="French Tips">
                <div class="gallery-content">
                    <h4>French Tips</h4>
                    <p>Stylish and classy French tip nail design.</p>
                </div>
            </div>
        </div>

        <!-- Card 3 -->
        <div class="col-lg-4 col-md-6">
            <div class="gallery-box">
                <img src="Images/img3.jfif" alt="Gel Extensions">
                <div class="gallery-content">
                    <h4>Gel Extensions</h4>
                    <p>Trendy gel nail extensions for modern fashion lovers.</p>
                </div>
            </div>
        </div>

        <!-- Card 4 -->
        <div class="col-lg-4 col-md-6">
            <div class="gallery-box">
                <img src="Images/img4.jfif" alt="Bridal Nails">
                <div class="gallery-content">
                    <h4>Bridal Nails</h4>
                    <p>Elegant bridal nail art for special occasions.</p>
                </div>
            </div>
        </div>

        <!-- Card 5 -->
        <div class="col-lg-4 col-md-6">
            <div class="gallery-box">
                <img src="Images/img5.jfif" alt="Pink Nails">
                <div class="gallery-content">
                    <h4>Beautiful Pink</h4>
                    <p>Beautiful pink nail extensions with creative art.</p>
                </div>
            </div>
        </div>

        <!-- Card 6 -->
        <div class="col-lg-4 col-md-6">
            <div class="gallery-box">
                <img src="Images/img6.jfif" alt="Modern Design">
                <div class="gallery-content">
                    <h4>Modern Design</h4>
                    <p>Trendy nail designs inspired by modern beauty.</p>
                </div>
            </div>
        </div>

    </div>
</div>
                <!----Footer---->
                <footer>
                    <h5>
                        Royal Touch
                    </h5>
                    <p>
                        Beautiful Nails , Beautiful You
                    </p>
                    <p>
                        <i class="bi bi-telephone-fill"></i>
                        +91 9997775551
                    </p>
                    <p>
                        <i class="bi bi-envelope-fill"></i>
                        royaltouch666@gmail.com
                    </p>
                    <p>
                        <i class="bi bi-instagram"></i>
                        @royal_touch
                    </p>
                    <p>
                        © 2026 Royal Touch | All Rights Reserved
                    </p>
                </footer>







                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
                    integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
                    crossorigin="anonymous"></script>


</body>

</html>