<?php
include "../connect.php";
$user = $_POST['username'];
$pass = md5($_POST['password']);
if (empty($user)) {
              echo"<script>alert('Username Harus Di isi !!!')</script>";			 
			  echo "<meta http-equiv='refresh' content='0; URL=?menu=admin_ins'>";
              }
			  else {
			  $sql = "insert into admin(username, password) values ('$user', '$pass')";
			   $query= mysql_query($sql);

			   if ($query);{
				echo"<script>alert('Admin Berhasil Di Tambah'); </script>";
				echo "<meta http-equiv='refresh' content='0; URL=?menu=admin'>";
					}
					}
 ?>