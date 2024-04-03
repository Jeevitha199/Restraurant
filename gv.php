<?php

$name=$_POST['name'];
$date=$_POST['date'];
$time=$_POST['time'];
$numberofpersons=$_POST['numberofpersons'];
$phno=$_POST['phno'];
$email=$_POST['email'];

$con=mysqli_connect ("localhost","root","","gv");

$sql="INSERT INTO jeevi(name, date, time, numberofpersons, phno, email) values('$name', '$date', '$time', '$numberofpersons', '$phno', '$email')";
$r = mysqli_query($con,$sql);

if($r)
{
  echo "Thanks for your booking";
}

else 
{
  echo "Message Failed";
}

?> 
