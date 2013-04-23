<?php
switch($_GET['menu']){
    default : include "home.php"; break;
    case admin : include "admin.php";break;
	case admin_ins : include "admin_ins.php";break;
	case admin_ins_cek : include "admin_ins_cek.php";break;
	case admin_upd: include "admin_upd.php";break;
	case admin_del : include "admin_del.php";break;
	case siswa :include "siswa.php";break;
    case lihat_siswa : include "lihat_siswa.php";break;
	case input_siswa : include "input_siswa.php";break;
}
?>