<?php
global $con;
require('connection.inc.php');
require('functions.inc.php');
$name=get_safe_value($con,$_POST['name']);
$email=get_safe_value($con,$_POST['email']);
$mobile=get_safe_value($con,$_POST['mobile']);
$itemsquoting=get_safe_value($con,$_POST['itemsquoting']);
$date=date('Y-m-d h:i:s');
mysqli_query($con,"insert into quotation(name,email,mobile,itemsquoting,date) values('$name','$email','$mobile','$itemsquoting','$date')");
echo "Request Submitted";
?>