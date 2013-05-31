<style>
.but {
	height: 50px;
	width: 89px;
	background-image: url(images/submit.png);
	background-repeat:repeat-y;
	display: block;
	border-top-style: none;
	border-right-style: none;
	border-bottom-style: none;
	border-left-style: none;
	cursor: pointer;
	float: left;
    font-size: medium;
    font-weight: bold;
    border-radius: 10px 10px 10px 10px;
    
}
</style>

<SCRIPT LANGUAGE="JavaScript">

	function checkFields() {
	username = document.submitform.username.value;
	password = document.submitform.password.value;
	ulangipassword = document.submitform.ulangipassword.value;
	email = document.submitform.email.value;

	if ((username == "")) {
	alert("Username Tolong Dilengkapi");
	return false;
	}
	else if ((password == "")) {
	alert("Password Tolong Dilengkapi");
	return false;
	}
	else if ((ulangipassword == "")) {
	alert("Ulangi Password");
	return false;
	}
	else if ((email == "")) {
	alert("Untuk Meyakinkan Anda, Apakah Datanya lengkap dan benar, coba di cek ulang?");
	return false;
	}else{ 

		return true; }
	}
	
</SCRIPT>

<?php
include "connect.php";
	if($_POST['kirim']) {
	
		$username = $_POST['username'];
		$password = $_POST['password'];
		$ulangipassword = $_POST['ulangipassword'];
		$email = $_POST['email'];
		$tanggal = date("d F y h:s");
		
			if($password == $ulangipassword){
			
			$pengacak = "NDJS3289JSKS190JISJI";
			
			$password = md5($pengacak. md5($password). $pengacak);
			
			$sql = mysql_query("INSERT INTO registrasi VALUES ('', '$username', '$password', '$email', now())");
			
			if($sql) {

				$alert = "Pendaftaran berhasil, Silahkan Login -->";
				echo "<meta http-equiv='refresh' content='5 URL=index.php?menu=registrasi'>";
				}
			else{
				echo "<script>alert(Proses Gagal !);</script>";
				}
			} else $alert2 = "*Password yang dimasukkan tidak sama";
}
?>
	<div id="content" class="float_r">
		<h2>Log in </h2>
			<div class="content_half float_l">
				<form action="#" method="post" name="submitform" onSubmit="return checkFields()">
					<table height="150" cellpadding="5" cellspacing="2" width="299">
						<h4><strong>Belum memiliki Akun? Silahkan buat akun anda.</strong></h4>
						<center><h5><strong><blink><?php echo "$alert";?></blink></strong></h5></center>
						<font color="#FF0000"><blink><?php echo "$alert2";?></blink></font>
						<tr>
							  <td>Username</td>
							  <td><input type="text" name="username" size="30" placeholder="username" onFocus="document.submitform.username.value='';" /></td>
						</tr>
						<tr>
							  <td>Password</td>
							  <td><input name="password" type="password" size="30" placeholder="********" onFocus="document.submitform.password.value='';" /></td>
						</tr>
						<tr>
							  <td>Ulangi Password</td>
							  <td><input name="ulangipassword" type="password" size="30" placeholder="********" onFocus="document.submitform.ulangipassword.value='';" /></td>
						</tr>
						<tr>
							  <td>Email</td>
							  <td><input name="email" type="text" size="30" placeholder="ex. aa@aa.aa" onFocus="document.submitform.email.value='';" /></td>
						</tr>
						<tr>
							 <td></td>
							 <td colspan="1">
							 <input name="kirim" class="but" type="submit" value="Create" title="Create Your Account" />
						</tr>
					</table>
				</form>
			</div>
		 <div class="content_half float_r">
		 <form method = "post" action = "cek_registrasi.php">
			<table height="100" cellpadding="5" cellspacing="2" width="299">
				<h4><strong>Already Registered</strong></h4>
				<tr>
					  <td>Username</td>
					  <td><input name="username" type="text" size="30" placeholder="username" /></td>
				  </tr>
				  <tr>
					  <td>Password</td>
					  <td><input name="password" type="password" size="30" placeholder="password" /></td>
				  </tr>
				<tr>
					 <td></td>
					 <td colspan="2">
					 <input name="login" class="but" type="submit" value="Login" title="Login" />
				</tr>
				  <tr>
				  <td colspan="2"><div class="error"></div></td>
				  </tr>
		  </table>
		  <form>
		</div>
	  <div class="cleaner h20"></div>
	</div>