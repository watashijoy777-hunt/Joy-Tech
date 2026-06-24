<?php

include 'connect.php';
if(isset($_POST['book'])) 
{
    $fullname=$_POST['fullname'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];    
    $service=$_POST['services'];    
    $date=$_POST['app_date'];    
    $time=$_POST['app_time'];    
    $message=$_POST['message']; 
    
    $query= "INSERT INTO appointment(fullname,email,phone,service,appointment_date,appointment_time,message)
     VALUES('$fullname','$email','$phone','$service','$date','$time','$message')";

    $data = mysqli_query($con,$query);

    if($data)
        {
            echo "<script>alert('Appointment Booked Successfully');</script>";
        }
        else
            {
                echo "<script>alert(' Failed to Booh Appointment ');</script>";
        }
            }

?>
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

/* Form-Section

.appointment-box
{
    background: white;
    padding:30px;
    border-radius:15px;
    box-shadow: 0px 0px 10px gray;
    margin-top:50px;
    margin-bottom: 50px;
}
.heading
{
    text-align:center;
    color:#ff3399;
    margin-bottom: 25px;
}
.btn-custom
{
    background: #ff3399;
    color:white;
    width:100%;
}
.btn-custom:hover
{
    background: #e60073;
    color:white;

}



*/

/* Form Labels */
.appointment-box label
{
    font-weight:600;
    color:#333;
    margin-bottom:8px;
    display:block;
}


/* Input Fields */
.appointment-box .form-control,
.appointment-box .form-select
{
    height:50px;
    border:2px solid #ffd1e6;
    border-radius:10px;
    padding:12px 15px;
    font-size:15px;
    transition:0.3s;
    background:#fff8fb;
}


/* Textarea */
.appointment-box textarea.form-control
{
    height:120px;
    resize:none;
}


/* Input Focus Effect */
.appointment-box .form-control:focus,
.appointment-box .form-select:focus
{
    border-color:#ff3399;
    box-shadow:0 0 10px rgba(255,51,153,0.3);
    background:white;
    outline:none;
}


/* Placeholder Style */
.appointment-box input::placeholder,
.appointment-box textarea::placeholder
{
    color:#aaa;
}


/* Select Dropdown */
.appointment-box .form-select
{
    cursor:pointer;
}


/* Spacing Between Fields */
.appointment-box .mb-3
{
    margin-bottom:20px !important;
}


/* Heading Animation */
.heading
{
    text-align:center;
    color:#ff3399;
    margin-bottom:25px;
    font-size:32px;
    font-weight:700;
}


/* Button */
.btn-custom
{
    background:#ff3399;
    color:white;
    width:100%;
    padding:14px;
    border-radius:30px;
    font-size:18px;
    font-weight:600;
    border:none;
    transition:0.4s;
}


.btn-custom:hover
{
    background:#e60073;
    color:white;
    transform:translateY(-3px);
    box-shadow:0 8px 20px rgba(255,51,153,0.4);
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
                    integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
                    crossorigin="anonymous"></script>

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
    
    <!----Appointment Form------>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="appointment-box">
                    <h2>
                        Book Your Appointment
                    </h2>
                    <form method="POST">
                        <div class="mb-3">
                            <label>Full Name</label>
                            <input type="text" name="fullname" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label>Email</label>
                            <input type="email" name="email" class="form-control" required> 
                        </div>
                        <div class="mb-3">
                            <label>Phone Number</label>
                            <input type="tel" name="phone" class="form-control" required> 
                        </div>
                        <div class="mb-3">
                            <label>Select Services</label>
                            <select name="services" class="form-select" required>
                                <option value="">Choose Services</option>
                                <option> Acrylic Nail Extensions</option>
                                <option> Gel Nail Extensions</option>
                                <option> French Tipss</option>
                                <option>Nail Art</option>
                                <option> Menicure</option>
                                <option> Pedicure</option>
                            </select>
                        </div>
                         <div class="mb-3">
                            <label>Appointment Date</label>
                            <input type="date" name="app_date" class="form-control" required> 
                        </div>
                         <div class="mb-3">
                            <label>Appointment Time</label>
                            <input type="time" name="app_time" class="form-control" required> 
                        </div>
                         <div class="mb-3">
                            <label>Message</label>
                            <textarea  name="message"  rows="4" class="form-control" required> </textarea>
                        </div>
                        <button type="submit" name="book" class="btn btn-custom">
                            Book Appointment
                           </button>
                        </form>
                        
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


</body>
</html>