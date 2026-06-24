<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Joy</title>
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
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
    font-weight:700;
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

/* SECTION TITLE */
.team-title,
.gallery-title,
.about-content h2{
    color:#ff3399;
    font-weight:700;
    position:relative;
    margin-bottom:30px;
}

.team-title::after,
.gallery-title::after,
.about-content h2::after{
    content:'';
    width:80px;
    height:4px;
    background:#ff3399;
    display:block;
    margin:10px auto;
    border-radius:10px;
}

/* ABOUT SECTION */
.about-section{
    padding:100px 0;
}

.about-image img{
    width:100%;
    height:605px;
    border-radius:25px;
    object-fit:cover;
    transition:0.5s;
    box-shadow:0 15px 40px rgba(0,0,0,0.15);
}

.about-image img:hover{
    transform:scale(1.03);
}

.about-content{
    padding:30px;
}

.about-content p{
    line-height:32px;
    text-align:justify;
    color:#555;
    font-size:17px;
}

/* TEAM CARDS */
.team-section{
    padding:80px 0;
}

.team-card{
    background:white;
    border-radius:25px;
    overflow:hidden;
    text-align:center;
    transition:0.5s;
    box-shadow:0 10px 30px rgba(0,0,0,0.08);
}

.team-card:hover{
    transform:translateY(-12px);
    box-shadow:0 20px 40px rgba(255,51,153,0.25);
}

.team-card img{
    width:100%;
    height:320px;
    object-fit:cover;
}

.team-card h4{
    color:#ff3399;
    font-weight:600;
    margin-top:20px;
}

.team-card p{
    color:#666;
    padding-bottom:20px;
}

/* GALLERY */
.gallery-section{
    padding:80px 0;
}

.gallery img{
    width:100%;
    height:280px;
    object-fit:cover;
    border-radius:20px;
    transition:0.5s;
    box-shadow:0 10px 25px rgba(0,0,0,0.08);
}

.gallery img:hover{
    transform:scale(1.08);
    box-shadow:0 15px 35px rgba(255,51,153,0.25);
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

/* RESPONSIVE */
@media(max-width:768px){

    .hero{
        height:400px;
    }

    .hero h1{
        font-size:40px;
    }

    .about-image img{
        height:350px;
    }

    .about-content{
        margin-top:20px;
    }
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
        <h1> About Royal Touch</h1>

</div>

<!------About section---->

<div class="container about-section">
    <div class="row align-items-center">
        <div class="col-lg-6 about-image">
            <img src="Images/about1.png" alt="royal touch">
        </div>
        <div class="col-lg-6 about-content">
            <h2>Who We Are</h2>
            <p>Royal Touch Nail Care is dedicated to enhancing your beauty with professional nail care services. We offer stylish nail art, manicures, pedicures, and nail extensions in a clean and comfortable environment. Our goal is to provide every client with a luxurious and relaxing experience.</p>
            <p>At Royal Touch Nail Care, we combine creativity, quality, and care to deliver beautiful nails that reflect your unique style. Our experienced team is committed to providing exceptional service and ensuring customer satisfaction with every visit.</p>
            <p>Welcome to Royal Touch Nail Care, where beauty meets elegance. We specialize in nail care and nail art services designed to make you feel confident and glamorous. Your satisfaction and comfort are our top priorities.</p>
        </div>
        </div>
        </div>
    <!-- Team Section -->
<div class="container team-section">
    <h2 class="team-title">Meet Our Experts</h2>

    <div class="row g-4">

        <div class="col-lg-4 col-md-6">
            <div class="team-card">
                <img src="Images/team1.JFIF" alt="team">
                <h4>Nail Artist</h4>
                <p>Expert in Acrylic Nails</p>
            </div>
        </div>

        <div class="col-lg-4 col-md-6">
            <div class="team-card">
                <img src="Images/team2.jfif" alt="team">
                <h4>Beauty Specialist</h4>
                <p>Specialist in Nail Care</p>
            </div>
        </div>

        <div class="col-lg-4 col-md-6">
            <div class="team-card">
                <img src="Images/team3.jfif" alt="team">
                <h4>Professional Specialist</h4>
                <p>Expert in Gel Nails</p>
            </div>
        </div>

    </div>
</div>
<!-------Gallery Section--->
<div class="container gallery-section">
    <h2 class="gallery-title">
        Our Nail Designs
    </h2>
    <div class="row gallery">
        <div class="col-lg-4">
            <img src="Images/gallery1.JFIF" alt="">
        </div>
        <div class="col-lg-4">
            <img src="Images/gallery2.JFIF" alt="">
        </div>
        <div class="col-lg-4">
            <img src="Images/gallery3.JFIF" alt="">
        </div>
        <div class="col-lg-4">
            <img src="Images/gallery4.JFIF" alt="">
        </div>
        <div class="col-lg-4">
            <img src="Images/gallery5.JFIF" alt="">
        </div>
        <div class="col-lg-4">
            <img src="Images/gallery6.JFIF" alt="">
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
    <p >
       © 2026 Royal Touch | All Rights Reserved
    </p>
</footer>

    
        



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    
</body>
</html>