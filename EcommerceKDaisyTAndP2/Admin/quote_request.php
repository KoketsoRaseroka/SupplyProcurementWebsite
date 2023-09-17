<?php
require('connection.i.php');
require('functions.i.php');
$name=get_svalue($con,$_POST['name']);
$email=get_svalue($con,$_POST['email']);
$mobile=get_svalue($con,$_POST['mobile']);
$itemsquoting=get_svalue($con,$_POST['message']);
$added_on=date('Y-m-d h:i:s');
mysqli_query($con,"insert into contact_us(name,email,mobile,itemsquoting,added_on) values('$name','$email','$mobile','$itemsquoting','$added_on')");
echo "Thank you";
?>