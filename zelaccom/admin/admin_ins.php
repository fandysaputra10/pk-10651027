<?php
include "../connect.php";

$user = $_POST['username'];
$pass = md5($_POST['password']);

if($_POST['submit']){
if (empty($user)) {
              $gagal="<h3><font color='red'><blink>Username dan Password harus di isi ! </blink></font></h3>";
              }
			  else {
			  $sql = "insert into admin(username, password) values ('$user', '$pass')";
			   $query= mysql_query($sql);

			   if ($query);{
				$alert="<br>Admin Berhasil Ditambah <img src=images/loader2.gif>";
				echo "<meta http-equiv='refresh' content='2; URL=?menu=admin'>";
					}
					}
			}
 ?>

	<div class="box-header well">
			<h2><i class="icon-info-sign"></i>Tambah Admin | <a href="?menu=admin">Back to Admin</a></h2>
			<div class="box-icon">
				<a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
				<a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
			</div>
	</div>
	<div class="box-content">
		<div align="center">
			<form name="form1" method="post" action="#">
				<table width="50%" align="center" cellpadding="4" cellspacing="2">
					<tr>
						<th width="18%" scope="col" colspan="3"><?php echo "$gagal"; ?></th>
					</tr>
					<tr>
						<td height="41" align="center" valign="top">Username </td>
						<td align="center" valign="top">:</td>
						<td valign="top"><input type="text" name="username" size="25" /></td>
					</tr>
					<tr>
						<td height="47" align="center" valign="top">Password</td>
						<td align="center" valign="top">:</td>
						<td align="top"><input type="password" name="password" size="25" /></td>
					</tr>
					<tr>
						<td height="24" align="center" valign="top">&nbsp;</td>
						<td align="center" valign="top">&nbsp;</td>
						<td><input type="submit" class="but" name="submit" value="Tambah" /></td>
					</tr>
					<?php echo "$alert";?>
					<tr>
						<td colspan="2">&nbsp;</td>
					</tr>
				</table>
			</form>
		</div>
	</div>