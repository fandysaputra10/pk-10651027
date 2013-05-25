			<!– TinyMCE –>
			<script type="text/javascript" src="admin/source/tiny_mce/tiny_mce.js"></script>
			<script type="text/javascript">
			tinyMCE.init({
			mode : "textareas",
			theme : "simple"});
			</script>
			<!– /TinyMCE –>

<SCRIPT LANGUAGE="JavaScript">

function checkFields() {
name = document.submitform.name.value;
email = document.submitform.email.value;
comment = document.submitform.comment.value;

if ((name == "")) {
alert("Nama Tolong Dilengkapi");
return false;
}
else if ((email == "")) {
alert("Email Tolong Dilengkapi");
return false;
}
else if ((comment == "")) {
alert("Untuk Meyakinkan Anda, Apakah Datanya lengkap dan benar, coba di cek ulang?");
return false;
}else{ 

	return true; }
}
</SCRIPT>
<style type="text/css">
<!--
.style1 {color: #FF0000}
-->
</style>

	<div id="content" class="float_r"> 	
		<?php
		include "connect.php";

		if($_POST['kirim']){
			$name = $_POST['nama'];
			$email = $_POST['email'];
			$subject = $_POST['subject'];
			$message = $_POST['message'];
			$tanggal = date("d F y h:s");
			
			mysql_query("INSERT INTO testimoni VALUES ('', '$name', '$email', '$subject', '$message', now())");
			
			echo "<script>alert('Terima Kasih Atas Partisipasinya');</script>";
			echo "<meta http-equiv='refresh' content='2 URL=?menu=contact'>";
		}
		?>
            <h1>Contact Information</h1>
            <div class="content_half float_l">
				<h4>Anda bisa menghubungi kami</h4>
                <p>Apabila ada kritik dan saran akan kami tampung. Mohon mengisi komentar anda di <strong>FORM</strong> ini.</p>
                <div id="contact_form">
                   <form method="post" name="contact" action="#">
                        <label for="nama">Name <span class="style1">*</span> : </label>
						<input type="text" id="nama" name="nama" class="required input_field" onFocus="document.submitform.name.value='';" />
                        <div class="cleaner h10"></div>
                        
						<label for="email">Email<span class="style1">*</span> : </label>
						<input type="text" id="email" name="email" class="validate-email required input_field" onFocus="document.submitform.email.value='';" />
                        <div class="cleaner h10"></div>
                        
						<label for="subject">Subject<span class="style1">*</span> : </label>
						<input type="text" name="subject" id="subject" class="input_field" />
						<div class="cleaner h10"></div>
        
                        <label>Message<span class="style1">*</span> : </label>
						<textarea name="message" rows="30" cols="10" class="required" onFocus="document.submitform.comment.value='';"></textarea>
                        <div class="cleaner h10"></div>
                        
                        <input type="submit" value="Send" id="submit" name="kirim" class="submit_btn float_l" />
						<input type="reset" value="Reset" id="reset" name="reset" class="submit_btn float_r" />
					</form>
                </div>
            </div>
        <div class="content_half float_r">
        	<h4>Alamat E-mail dan Nomor Telepon kami</h4>
				<strong>Phone:</strong> +62857-4333-5703<br />
            	<strong>Email:</strong> <a href="#">fandy.saputra10@gmail.com</a><br />
                
            <div class="cleaner h20"></div>
		</div>
        <div class="cleaner"></div>
	</div>