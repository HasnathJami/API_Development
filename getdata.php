<?php

$conn= mysqli_connect("localhost","root","");
mysqli_select_db($conn,"android_db");


$qry="SELECT * FROM tbl_staff";

$raw=mysqli_query($conn,$qry);

while($res=mysqli_fetch_array($raw))
{
    $data[]=$res;
}

print(json_encode($data));


?>