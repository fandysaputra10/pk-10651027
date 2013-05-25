<?php
switch($_GET['menu']){
	default : include "home.php"; break;
	case home : include "home.php";break;
	case productdetail : include "productdetail.php"; break;
	case shoppingcart : include "shoppingcart.php";break;
	case product : include "product.php";break;
	case contact : include "contact.php";break;
	case about : include "about.php"; break;
	case registrasi : include "registrasi.php";break;
}
?>
