<!– TinyMCE –>
			<script type="text/javascript" src="source/tiny_mce/tiny_mce.js"></script>
			<script type="text/javascript">
			tinyMCE.init({
			mode : "textareas",
			theme : "advanced"});
			</script>
<!– /TinyMCE –>
	<div class="box-header well">
			<h2><i class="icon-info-sign"></i>Update Post New Product | <a href="?menu=post">Back to Post</a></h2>
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
					$nama=$_POST['nama_page'];
					$detail=$_POST['isi'];
					$harga=$_POST['price'];
					$stok = $_POST['stok'];
					$gambar=$_POST['gambar'];
					
					$lokasi_file=$_FILES['gambar']['tmp_name'];
					$nama_file=$_FILES['gambar']['name'];
					$ukuran_file=$_FILES['gambar']['size'];
					$direktori="../images/new_product/$nama_file";
					
					$alert="Post Update Successful <img src=images/loader2.gif>";
					
					mysql_query("UPDATE new_product SET nama_page='$nama', isi='$detail', price='$harga', stok='$stok' , gambar='$nama_file' where id='$id' ");
					echo "$alert";
					echo "<meta http-equiv='refresh' content='2 URL=?menu=post'>";
				}
			?>
			<?php
				$id=$_GET['id'];
				$sql=mysql_query("SELECT * FROM new_product WHERE id='$id' ");
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
							<td height="47" align="center" valign="top"><b>Nama Produk</b></td>
							<td align="center" valign="top">:</td>
							<td valign="top"><input type="text" name="nama_page" size="25" value="<?php echo "$rowsql[nama_page]";?>"/></td>
						</tr>
						<tr>
							<td height="47" align="center" valign="top"><b>Detail</b></td>
							<td align="center" valign="top">:</td>
							<td valign="top"><textarea name="isi" cols="25" rows="10" value="<?php echo "$rowsql[isi]";?>"></textarea></td>
						</tr>
						<td height="24" align="center" valign="top">&nbsp;</td>
						<tr>
							<td height="47" align="center" valign="top"><b>Harga</b></td>
							<td align="center" valign="top">:</td>
							<td valign="top"><input type="text" name="price" size="25" value="<?php echo "$rowsql[price]";?>" /></td>
						</tr>
						<tr>
							<td height="47" align="center" valign="top"><b>Stok</b></td>
							<td align="center" valign="top">:</td>
							<td valign="top"><input type="text" name="stok" size="25" value="<?php echo "$rowsql[stok]";?>" /></td>
						</tr>
						<tr>
							<td height="47" align="center" valign="top"><b>Gambar</b></td>
							<td align="center" valign="top">:</td>
							<td valign="top">
								<label for="textfield4"></label>
								<label for="fileField"></label>
								<input type="file" name="gambar" id="gambar" size="25" value="<?php echo "$rowsql[gambar]";?>" />
							</td>
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