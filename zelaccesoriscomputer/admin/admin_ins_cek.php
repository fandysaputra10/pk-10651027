<?php
include "../connect.php";
$user = $_POST['username'];
$pass = md5($_POST['password']);
if (empty($user)) {
              echo("<p align=center> <strong>Username dan Password </strong> Harus Diisi !!! </font><p>");
			  echo "<meta http-equiv='refresh' content='0; URL=?menu=admin_ins'>";
              }
			  else {
			  $sql = "insert into admin(username, password) values ('$user', '$pass')";
			   $query= mysql_query($sql);

			   if ($query);{
				echo"<script>alert('admin add succesful'); </script>";
				echo "<meta http-equiv='refresh' content='0; URL=?menu=admin'>";
					}
					}
 ?>