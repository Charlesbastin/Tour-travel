<?php
$n=$_POST['name'];
$c=$_POST['password'];
$con=mysqli_connect("localhost","root","","treval_db");
$sql="INSERT INTO user_datils(user_name,user_passord) values('$n','$c')";
$r=mysqli_query($con,$sql);
if($r)
{
    echo "USER DATILES SUSSESSFULLY";
}
else
{
    echo "not add";
}
?>