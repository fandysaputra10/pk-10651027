<?php
switch($_GET['menu']){
	default : include "home.php"; break;
	case home : include "home.php";break;
	case productdetail : include "productdetail.php"; break;
	case product : include "product.php";break;
	case detail_prod : include "detail_prod.php"; break;
	case shoppingcart : include "shoppingcart.php";break;
	case checkout : include "checkout.php";break;
	case guestbook : include "guestbook.php";break;
	case about : include "about.php"; break;
	case etransaksi : include "e-transaksi.php"; break;
	case registrasi : include "registrasi.php";break;
}
?>
