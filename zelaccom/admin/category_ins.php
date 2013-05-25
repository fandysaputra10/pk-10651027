<!– TinyMCE –>
			<script type="text/javascript" src="source/tiny_mce/tiny_mce.js"></script>
			<script type="text/javascript">
			tinyMCE.init({
			mode : "textareas",
			theme : "advanced"});
			</script>
<!– /TinyMCE –>

<?php 
include "../connect.php";
	if($_POST['insert'])
	{
		$id=$_POST['id_category'];
		$nama=$_POST['nama_category'];
		
		mysql_query("INSERT INTO category (id_category, nama_category) VALUES ('$id', '$nama')");

		$alert="Category Successful <img src=images/loader2.gif>";
		echo "<meta http-equiv='refresh' content='2 URL=?menu=post'>";
	}
?>
	<div class="box-header well">
			<h2><i class="icon-info-sign"></i> Insert Category | <a href="?menu=category">Back to Category</a></h2>
			<div class="box-icon">
				<a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
				<a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
			</div>
	</div>
	<div class="box-content">
		<form method="post" action="#" enctype="multipart/form-data">
			<input type="hidden" name="id" />
				<table width="70%" height="100" border="0" align="center" cellpadding="4" cellspacing="2">
					<tbody>
						<div align="center">
							<tr>
								<td height="47" align="center" valign="top" bgcolor="#ebecee">ID Category</td>
								<td height="47" align="center" valign="top" bgcolor="#ebecee"><input type="text" name="id_category" size="25" /></td>
							</tr>
							<tr>
								<td height="47" align="center" valign="top" bgcolor="#ebecee">Nama Category</td>
								<td height="47" align="center" valign="top" bgcolor="#ebecee"><input type="text" name="nama_category" size="25" /></td>
							</tr>
							<tr>
								<td height="24" align="center" valign="top">&nbsp;</td>
								<td><input type="submit" class="but" name="insert" value="Tambah" /></td>
								<?php echo "$alert";?>
							</tr>
					</tbody>
				</table>
			</form>
						</div>
	</div>