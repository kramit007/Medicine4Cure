

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Medicine4Cure-Appointment_form</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/logo.png" rel="icon">


  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">

  <link href="assets/css/style.css" rel="stylesheet">

</head>
<style>
    ::-webkit-scrollbar
  {
    width: 10px;
  }
  ::-webkit-scrollbar-thumb
  {
    background: linear-gradient(#ffffff, red);
    border-radius: 10px;
  }
  
  @media screen and (max-width: 590px) {
  .pd {
    margin-bottom:35px;
  }
}
</style>

<body>
    <div id="topbar" class="d-none d-lg-flex align-items-center fixed-top">
    <div class="container d-flex align-items-center justify-content-between">
      <div class="d-flex align-items-center">
        <i class="icofont-clock-time"></i> Monday - Saturday, 8AM to 10PM
      </div>
      <div class="d-flex align-items-center">
        <i class="icofont-phone"></i> Call us now +916390314000
      </div>
    </div>
  </div>
  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <a href="index.html" class="logo mr-auto"><img src="assets/img/logo.png" alt=""></a>
      <nav class="nav-menu d-none d-lg-block">
         <ul>
          <li ><a href="index.html">Home</a></li>
          <li><a href="services.html">Services</a></li>
          <li><a href="gallery.html">Gallery</a></li>
          <li><a href="update.html">Update/Blog</a></li>
          <li><a href="about.html">About</a></li>
          <li><a href="contact.php">Contact</a></li>

        </ul>
      </nav>

    </div>
  </header><!-- End Header -->

  
 <section id="appointment" class="appointment section-bg" style="margin-top: 70px;">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Make an Appointment</h2>
        </div>

        <form action="#" method="POST" role="form" data-aos="fade-up" data-aos-delay="100">
          <div class="form-row">



            <div class="col-md-6 form-group pd">
              <input required="" type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
              
            </div>
            <div class="col-md-6 form-group">
              <input required="" type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email">
              
            </div>

            </div>


     <br>

            <div class="form-row">



            <div class="col-md-4 form-group pd">
              <input required="" type="tel" class="form-control" name="phone" id="phone" placeholder="Your Phone" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
             
            </div>
          
            <div class="col-md-4 form-group pd">
             <input required="" type="text" name="age" class="form-control" id="age" placeholder="Your Age">
            </div>

            <div class="col-md-4 form-group">
              <select name="sex" id="sex" class="form-control">
                <option value="">-----Select gender-----</option>
                <option value="Male">Male</option>
                <option value="Female">female</option>
                <option value="Other">Other</option>
              </select>
            </div>


          </div>
<br>

          <div class="form-row">

              <div class="col-md-6 form-group pd">
              <select name="status" id="status" class="form-control">
                <option value="">------Marital Status------</option>
                <option value="Single">Single</option>
                <option value="Married">Married</option>
                <option value="Divorced">Divorced</option>
              </select>
            </div>

             <div class="col-md-6 form-group">
             <input required="" type="text" name="cc" class="form-control" id="cc" placeholder="Cheif Complaint">
            </div>

          </div>
<br>
          <div class="form-group">
            <textarea required="" class="form-control" name="address" rows="5" placeholder="Address"></textarea>

          </div>
          <div class="text-center"><input type="submit" value="Make an appointment" name="submit" class="btn btn-danger  mt-4 px-5 send" >
                  </div>
        </form>

      </div>
    </section>

      <!-- ======= Footer ======= -->
  
<footer id="footer"  class="text-center" >
    <div class="footer-top" style="background-size: cover; background-image:linear-gradient(rgba(0,0,0,0.6),rgba(0,0,0,0.6)),url('assets/img/footer.jpg'); color: white;">
      <div class="container" >
        <div class="row">

          <div class="col-lg-3 col-md-6" >
            <div class="footer-info">
              <h3 style="color: white">Medicine4Cure</h3>
              <p>
                Ranchi <br>
                jharkhand India<br><br>
                <strong>Phone:</strong> +91-6390314000<br>
                <strong>Email:</strong> info@example.com<br>
              </p>
              <div class="social-links mt-3">
                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="#" class="google-plus"><i class="bx bxl-youtube"></i></a>
                <a href="#" class="linkedin"><i class="bx bxl-whatsapp"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 footer-links" style="text-align: left;">
            <h4 style="color: white;">Useful Links</h4>
            <ul>
              <li ><i class="bx bx-chevron-right"></i> <a  style="color: white;"href="index.html">Home</a></li>
              <li ><i class="bx bx-chevron-right"></i> <a  style="color: white;"href="services.html">Services</a></li>
              <li style="margin-bottom: -25px;" ><i class="bx bx-chevron-right"></i> <a  style="color: white;"href="gallery.html">Gallery<a></li>
              <li ><i class="bx bx-chevron-right"></i> <a  style="color: white;"href="update.html">Updates/Blog</a></li>
              <li ><i class="bx bx-chevron-right"></i> <a  style="color: white;"href="contact.php">Contact</a></li>
              <li ><i class="bx bx-chevron-right"></i> <a  style="color: white;"href="about.html">About</a></li>

            </ul>
          </div>

         
          <div class="col-lg-3 col-md-6 footer-newsletter">
            <h4 style="color: white;">Our Services</h4>
            <ul style="text-align: left;list-style: none;">
              <li style="margin-bottom: 15px;"><i class="bx bx-chevron-right"></i> <a  style="text-decoration: none;color: white;" href="hospital.html">Hospital's</a></li>
              <li  style="margin-bottom: 15px;"><i class="bx bx-chevron-right"></i> <a  style="text-decoration: none;color: white;" href="doctor.html">Doctor's</a></a></li>
              <li  style="margin-bottom: 15px;"><i class="bx bx-chevron-right"></i> <a  style="text-decoration: none;color: white;" href="hospital.html">Clinic</a></li>
              <li><i class="bx bx-chevron-right"></i> <a style="text-decoration: none;color: white;" href="#">Consultations</a></li>
            </ul>
          </div>
           <div class="col-lg-3 col-md-6 footer-links">
              <h4 style="color: white;">About Us</h4>
              <p>We provide best services in Ranchi Jharkhand</p>
          </div>


        </div>
      </div>
    </div>
<div style="color: white; font-weight: bold;background-color: #f21111;">
    <div class="container" >
      <div class="copyright">
        &copy; Copyright <strong><span>Medicine4Cure</span></strong>. All Rights Reserved
      </div>
      <div class="credits" style="margin-bottom: -40px;">
        Designed by <a href="https://teambrahm.com/" style="color: white;">Brahm Technology Pvt. Ltd.</a>
        <br><br>

      </div>
    </div>
  </div>
  </footer><!-- End Footer -->


</body>

  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="assets/vendor/counterup/counterup.min.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

  <script src="assets/js/main.js"></script>
  </html>

  <?php

$server = "localhost";
$user = "teamb64v_amit";
$pass = "medica@007";
$db_name = "teamb64v_medicadb";
// $db_port="3306";
$conn = new mysqli($db_host,$user,$pass,$db_name);
if($conn->connect_error){
  die("Failed");
}



// ==checking for empty filds==
if (isset($_REQUEST['submit'])) {
$name = $_REQUEST['name'];
$email = $_REQUEST['email'];
$phone = $_REQUEST['phone'];
$age = $_REQUEST['age'];
$sex = $_REQUEST['sex'];
$status = $_REQUEST['status'];
$cc = $_REQUEST['cc'];
$address = $_REQUEST['address'];

$sql = "INSERT INTO appointment (name, email, phone, age, sex, status, cc, address) VALUES ('$name','$email', '$phone', '$age', '$sex', '$status', '$cc', '$address')";
if($conn->query($sql) == TRUE){


      $mailTo = "naughtynishant01@gmail.com";
      $subject = "ThankYou for Booking the Appointment";
      $subject2 = "You have new Appointment";     
      $header ='from:Medicine4Cure<info@teambrahm.com>'."\r\n";
      $header.='Content-type:text/html;charset=UTF-8'."\r\n";
        
     //$txt = " You have receved message from ".$name. ".\n\n\n".$message;
     $txt='
     <html>
     <head>
     <title>msg</title>
     <head>
     <body>
      <h2 style="text-align:center">DETAILS ARE<h2>
     <table>
     <tr>
     <td><p>Name</p></td>
     <td>'.$name.'</td>
     </tr>
      <tr>
     <td>Mobile</td>
     <td>'.$phone.'</td>
     </tr>
      <tr>
     <td><p>Email</p></td>
     <td>'.$email.'</td>
     </tr>


      <tr>
     <td><p>Age</p></td>
     <td>'.$age.'</td>
     </tr>

      <tr>
     <td><p>Sex</p></td>
     <td>'.$sex.'</td>
     </tr>

      <tr>
     <td><p>Status</p></td>
     <td>'.$status.'</td>
     </tr>
     

      <tr>
     <td><p>Cheif Complaint</p></td>
     <td>'.$cc.'</td>
     </tr>

      <tr>
     <td><p>Address</p></td>
     <td>'.$address.'</td>
     </tr>

     </table>
     </body>
     </html>';

     $txt2 = "Thank You for booking your appointment with us. We will contact you soon";
     mail($mailTo,$subject2,$txt,$header);
     mail($email,$subject,$txt2,$header);
     
      ?><script>swal("Appointment Booked!", "Check your Email", "success");</script><?php
  } else {

      ?><script>swal("Appointment not booked!", "Try Again", "error");</script><?php
  }


}   


?>
