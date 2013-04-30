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
				echo"<script>alert('admin add succesful'); </script>";
				echo "<meta http-equiv='refresh' content='0; URL=?menu=admin'>";
					}
					}
			}
 ?>
	<strong>MENU ADMIN</strong>
	<div class="sortable row-fluid">
				<a data-rel="tooltip" title="Kembali ke Menu Utama" class="well span3 top-block" href="?menu=admin">
					<img src="images/icon-home.png" >
					<div>MENU</div>
					<div>Home</div>
					<span class="notification">1</span>
				</a>

				<a data-rel="tooltip" title="Insert Data" class="well span3 top-block" href="?menu=admin_ins">
					<img src="images/insert.png" >
					<div>MENU</div>
					<div>Insert</div>
					<span class="notification green">2</span>
				</a>

				<a data-rel="tooltip" title="Update Data" class="well span3 top-block" href="?menu=admin_upd">
					<img src="images/update.png" >
					<div>MENU</div>
					<div>Update</div>
					<span class="notification yellow">3</span>
				</a>
						
				<a data-rel="tooltip" title="Delete Data" class="well span3 top-block" href="?menu=admin_del">
					<img src="images/delete.png" >
					<div>MENU</div>
					<div>Delete</div>
					<span class="notification red">4</span>
				</a>	
	</div>
	<div class="box-header well">
			<h2><i class="icon-info-sign"></i>Tambah Admin</h2>
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
					<tr>
						<td colspan="2">&nbsp;</td>
					</tr>
				</table>
			</form>
		</div>
	</div>