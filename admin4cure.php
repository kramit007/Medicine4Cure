<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Medicine4Cure-Admin-Login</title>
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
  #log
  {
    background-color: #f21111;
    color: white;
  }
</style>

<body>
 <section id="appointment" class="appointment section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <img src="assets/img/logo.png" style="height: 100px;width: 100px; margin-top: 0px;margin-bottom: 20px;">
          <h2>Admin login</h2>
        </div>

        <form action="#" method="POST" role="form" data-aos="fade-up" data-aos-delay="100">
          <div class="form-row">

            <div class="col-md-12 form-group">
              <input required="" type="text" name="user" class="form-control" id="user" placeholder="Admin Email  " >
              <br>
            </div>
            <div class="col-md-12 form-group">
              <input required="" type="password" class="form-control" name="password" id="password" placeholder="Admin password  " >
              
            </div>

            </div>

          </div>
          <div class="text-center"><input id="log" type="submit" value="login" name="submit" class="btn btn-danger  mt-4 px-5 send" >
                  </div>
        </form>

      </div>
    </section>
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
$password = "medica@007";
$db = "teamb64v_medicadb";
$con = mysqli_connect($server,$user,$password,$db);
if(isset($_POST['submit']))
{
$adminname = $_POST['user'];
$password = $_POST['password'];

$sql = "select * from admindata where adminname = '$adminname' and password = '$password'";
$query = mysqli_query($con, $sql);
$row = mysqli_num_rows($query);
if($row == 1)
{
    $certipass = mysqli_fetch_assoc($query);
     $_SESSION['adminname'] = $certipass['adminname'];
?> 
<script>

location.replace('dashboard.php');

</script>  

<?php
}
else
{
?> <script>
swal("Admin not confirmed!", "try again!", "error");
</script>
<?php
}
}
?>