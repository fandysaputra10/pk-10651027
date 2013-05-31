<?php
switch($_GET['menu']){
    default : include "home.php"; break;
    case admin : include "admin.php";break;
	case admin_ins : include "admin_ins.php";break;
	case admin_upd: include "admin_upd.php";break;
	case post :include "post.php";break;
	case post_ins :include "post_ins.php";break;
	case post_upd :include "post_upd.php";break;
	case slider : include "slider.php"; break;
	case post_detail :include "post_detail.php";break;
	case d_product : include "d_product.php"; break;
	case d_product_ins : include "d_product_ins.php"; break;
	case d_product_upd : include "d_product_upd.php"; break;
	case category : include "category.php"; break;
	case category_ins : include "category_ins.php"; break;
	case d_guestbook : include "d_guestbook.php";break;
	case d_about : include "d_about.php"; break;
	case d_about_upd : include "d_about_upd.php"; break;
	case registrasi : include "registrasi.php"; break;
}
?>