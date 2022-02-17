<?php

$conn= mysqli_connect("localhost","root","");
mysqli_select_db($conn,"apidp");

$id=$_POST['id'];
$name=$_POST['name'];
$email=$_POST['email'];

$qry="INSERT INTO `tbl_user` (`id`, `name`, `email`) VALUES (100, '$name', '$email')";

$res=mysqli_query($conn,$qry);

if($res==true)
$response="inserted";
else
$response="failed";

echo json_encode($response);


?>