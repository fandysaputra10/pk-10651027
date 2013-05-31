<!– TinyMCE –>
			<script type="text/javascript" src="source/tiny_mce/tiny_mce.js"></script>
			<script type="text/javascript">
			tinyMCE.init({
			mode : "textareas",
			theme : "advanced"});
			</script>
<!– /TinyMCE –>
	<div class="box-header well">
			<h2><i class="icon-info-sign"></i>Update About Us | <a href="?menu=d_about">Back to About</a></h2>
			<div class="box-icon">
				<a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
				<a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
			</div>
	</div>
	<div class="box-content">
		<div align="center">
			<?php
			include "../class.php";
				$id=$_GET['id'];
				if($_POST['update'])
				{
					$isi=$_POST['isi'];
					$carabeli=$_POST['carabeli'];
					
					$alert="Update Successful <img src=images/loader2.gif>";
					
					mysql_query("UPDATE about SET isi='$isi', carabeli='$carabeli' where id='$id' ");
					echo "$alert";
					echo "<meta http-equiv='refresh' content='2 URL=?menu=d_about'>";
				}
			?>
			<?php
				$id=$_GET['id'];
				$sql=mysql_query("SELECT * FROM about WHERE id='$id' ");
				$rowsql=mysql_fetch_array($sql);
			?>
			<form method="post" action="#" enctype="multipart/form-data">
				<input type="hidden" name="id" value="<?php echo "$rowsql[id]";?>"/>
					<table width="100%"  align="center" cellpadding="0" cellspacing="0">
						<tr>
								<th width="18%" scope="col">&nbsp;</th>
								<th width="5%" scope="col">&nbsp;</th>
								<th width="77%" scope="col">&nbsp;</th>
						</tr>
						<tr>
							<td height="47" align="center" valign="top"><b>About</b></td>
							<td align="center" valign="top">:</td>
							<td valign="top"><textarea name="isi" cols="25" rows="10" value="<?php echo "$rowsql[isi]";?>"/></textarea></td>
						</tr>
						<tr>
							<td height="47" align="center" valign="top"><b>Cara Pembelian</b></td>
							<td align="center" valign="top">:</td>
							<td valign="top"><textarea name="carabeli" cols="25" rows="10" value="<?php echo "$rowsql[carabeli]";?>"></textarea></td>
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