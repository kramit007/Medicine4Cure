<?php
session_start();
if(!isset($_SESSION['adminname']))
{
    header('location:admin4cure.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="description" content="Free Web tutorials">
  <meta name="keywords" content="HTML, CSS, JavaScript">
  <meta name="author" content="John Doe">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Medicine4Cure-Dashboard</title>

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
<link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
         <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="assets/css/style.css" rel="stylesheet">

</head>
<style>
  #lll
  {
    color: #f21111;
    font-size: 20px;
    border: 1px solid #f21111;
    padding:6px;
    border-radius: 10px;
  }
  #lll:hover
  {
    color: white;
    background-color: #f21111;
  }
</style>

<body>
      <div id="topbar" class="d-none d-lg-flex align-items-center fixed-top">
    <div class="container d-flex align-items-center justify-content-between">
      <div class="d-flex align-items-center">
        <i class="icofont-medicine"></i> Medicine4cure
      </div>
      <div class="d-flex align-items-center">
        <i class="icofont-user"></i> Welcome to Admin pannel
      </div>
    </div>
  </div>
 <section id="appointment" class="appointment section-bg" style="margin-top: 0px;">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>patient details&nbsp&nbsp <a class="btn-btn-danger" id="lll" href="logout.php">LOGOUT</a></h2>
        </div>
         <!---data fetching from table-->
        <div class="table-responsive">
      <table class="table " style="margin-top: 40px;">
  <thead style="background-color: #f21111; color: white;">
    <tr>
      <th scope="col">Sn.No</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Mobile</th>
      <th scope="col">Age</th>
      <th scope="col">sex</th>
      <th scope="col">cc</th>
      <th scope="col">Address</th>
      <th scope="col">Delete</th>
    </tr>
  </thead>
  <tbody>


<?php
$server = "localhost";
$user = "teamb64v_amit";
$password = "medica@007";
$db = "teamb64v_medicadb";
$con = mysqli_connect($server,$user,$password,$db);

$selectquery = "select * from appointment";

$query = mysqli_query($con,$selectquery);

while($result = mysqli_fetch_assoc($query))
{
?>
    <tr>
      <td><?php echo $result['id'] ?></td>
      <td><?php echo $result['name'] ?></td>
      <td><?php echo $result['email'] ?></td>
      <td><?php echo $result['phone'] ?></td>
      <td><?php echo $result['age'] ?></td>
      <td><?php echo $result['sex'] ?></td>
      <td><?php echo $result['cc'] ?></td>
      <td><?php echo $result['address'] ?></td>
<!-- 
      <td><a href="update.php?id=<?php echo $result['id'] ?>"><i class="fa fa-refresh fa-spin fa-2x fa-fw"></i> -->
<span class="sr-only">Loading...</span></a></td>
      <td><a href="delete.php?ids=<?php echo $result['id'] ?>"><i class="fa fa-trash-o" style="font-size:26px;color: red;"></i></a></td>
    </tr>

<?php
}


?>
  </tbody>
</table>
</div>

          <!--end fetching-->
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
