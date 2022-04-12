<?php
$con=mysqli_connect("localhost", "root");
if($con){
    echo "Connection successful";
}
mysqli_select_db($con, "youtubeuserdata");
$name=$_POST["name"];
$surname=$_POST["surname"];
$email=$_POST["email"];
$mobile=$_POST["mobile"];
$city=$_POST["city"];
$postalcode=$_POST["postalcode"];
$comment=$_POST["comment"];

$query="INSERT INTO subscriptions(name,surname,email,mobile,city,postalcode,comment)
values('$name', '$surname', '$email', '$mobile','$city','$postalcode','$comment')";
echo "$query";
mysqli_query($con,$query);
header('location:subscribe.html');
?>