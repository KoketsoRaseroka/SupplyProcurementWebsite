<?php

session_start();
$con=mysqli_connect("localhost","root","","kdaisyprojectsandtrad");
define('SERVER_PATH',$_SERVER['DOCUMENT_ROOT'].'EcommerceKDaisyTAndP2/EcommerceKDaisyTAndP2/');
define('SITE_PATH','http://127.0.0.1/EcommerceKDaisyTAndP2/EcommerceKDaisyTAndP2/');

define('PRODUCT_IMAGE_SERVER_PATH',SERVER_PATH.'Admin/images/product/');
define('PRODUCT_IMAGE_SITE_PATH',SITE_PATH.'Admin/images/product/');

?>

