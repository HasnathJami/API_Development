<?php

$conn= mysqli_connect("localhost","root","");
mysqli_select_db($conn,"android_db");


$qry="SELECT * FROM tbl_staff";

//query fetch
$raw=mysqli_query($conn,$qry);

//store all data in the array by while loop
while($res=mysqli_fetch_array($raw))
{
    $data[]=$res;
}

print(json_encode($data));


?>