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
			<h2><i class="icon-info-sign"></i>Update Admin</h2>
			<div class="box-icon">
				<a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
				<a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
			</div>
	</div>
	<div class="box-content">
		<div align="center">
		<?php 
		$id=$_GET['id'];

		if($_POST['update'])
		{
			$id=$_POST['id'];
			$user=$_POST['username'];
			$pass=$_POST['password'];
			
			mysql_query("UPDATE admin set username='$user', password='$pass' where id='$id'");
			echo "<script>alert('admin save succesful');</script>";
			echo "<meta http-equiv='refresh' content='0 URL=?menu=admin'>";
		}
		?>
		<?php
		
		$id=$_GET['id'];
		$sql=mysql_query("SELECT * FROM admin WHERE id='$id' ");
		$rowsql=mysql_fetch_array($sql);
		?>
		<form method="post" action="#" enctype="multipart/form-data">
		<input type="hidden" name="id" value="<?php echo "$rowsql[id]";?>"/>
		<table width="50%"  align="center" cellpadding="0" cellspacing="0">
		<tr>
				<th width="18%" scope="col">&nbsp;</th>
				<th width="5%" scope="col">&nbsp;</th>
				<th width="77%" scope="col">&nbsp;</th>
		  </tr>
			  <tr>
				<td height="41" align="center" valign="top"><b>Username</b></td>
				<td align="center" valign="top">:</td>
				<td valign="top"><input type="text" name="username" size="25" value="<?php echo "$rowsql[username]";?>"/></td>
			</tr>
			  <tr>
				<td height="47" align="center" valign="top"><b>Password</b></td>
				<td align="center" valign="top">:</td>
				<td valign="top"><input type="text" name="password" size="25" value="<?php echo "$rowsql[password]";?>" /></td>
			</tr>
			  <tr>
				<td height="24" align="center" valign="top">&nbsp;</td>
				<td align="center" valign="top">&nbsp;</td>
				<td valign="top"><input type="submit" class="but" name="update" value="Update" />
			  </tr>
		</table>
		</form>
		</div>
	</div>