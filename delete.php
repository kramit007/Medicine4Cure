<?php
$server = "localhost";
$user = "teamb64v_amit";
$password = "medica@007";
$db = "teamb64v_medicadb";
$con = mysqli_connect($server,$user,$password,$db);
$id =$_GET['ids'];
$deletequery = "delete from appointment where id=$id";
$query = mysqli_query($con, $deletequery);
if ($query)
{
?>
<script>
alert('Patient data deleted sucessfully..!');
location.replace("dashboard.php");
</script>
<?php
}
else
{
?>
<script>
alert('Failed to delete data ..server error..!!');
</script>
<?php
}
?>