<?php
$con=mysqli_connect("localhost", "root");
if($con){
    echo "Connection successful";
}
mysqli_select_db($con, "youtubeuserdata");
$user=$_POST["user"];
$email=$_POST["email"];
$mobile=$_POST["mobile"];
$comment=$_POST["comment"];

$query="INSERT INTO userinfo(user,email,mobile,comment)
values('$user', '$email', '$mobile', '$comment')";
echo "$query";
mysqli_query($con,$query);
header('location:subscribe.html');
?>