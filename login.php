<?php
$servername="localhost";
$username="root";
$password="";
$conn=mysqli_connect($servername,$username,$password);
if(!$conn){
    die("Sorry we failed to connect".mysqli_connect_error());
}
else{
    $heightofperson=$_POST['$username'];
    $weightofperson=$_POST['$password'];
    $sql= "Select * from Calories where Height='$heightofperson' AND Weight='$weightofperson' ";
    $result = mysqli_query($conn,$sql);
    echo "Connectioin was succesuull";
    echo $result;
   }
?>