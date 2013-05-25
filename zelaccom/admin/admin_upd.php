	<div class="box-header well">
			<h2><i class="icon-info-sign"></i>Update Admin | <a href="?menu=admin">Back to Admin</a></h2>
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
					$pass=md5($_POST['password']);
					
					$alert="Admin Save Successful <img src=images/loader2.gif>";
					
					mysql_query("UPDATE admin SET username='$user', password='$pass' where id='$id'");
					echo "$alert";
					echo "<meta http-equiv='refresh' content='2 URL=?menu=admin'>";
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