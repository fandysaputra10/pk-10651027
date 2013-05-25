<!– TinyMCE –>
			<script type="text/javascript" src="source/tiny_mce/tiny_mce.js"></script>
			<script type="text/javascript">
			tinyMCE.init({
			mode : "textareas",
			theme : "advanced"});
			</script>
<!– /TinyMCE –>
<div class="box-header well">
			<h2><i class="icon-info-sign"></i>Update Product | <a href="?menu=d_product">Back to Product</a></h2>
			<div class="box-icon">
				<a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
				<a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
			</div>
	</div>
	<div class="box-content">
		<div align="center">
			<?php 
			include "../class.php";
				$id=$_GET['id_product'];
				if($_POST['update'])
				{
					$nama=$_POST['nama_product'];
					$harga=$_POST['price'];
					$stok=$_POST['stok'];
					$gambar=$_POST['gambar'];
					$detail=$_POST['detail'];
					
					$lokasi_file=$_FILES['gambar']['tmp_name'];
					$nama_file=$_FILES['gambar']['name'];
					$ukuran_file=$_FILES['gambar']['size'];
					$direktori="../images/product/$nama_file";
					
					$alert="Product Update Successful <img src=images/loader2.gif>";
					
					mysql_query("UPDATE product SET nama_product='$nama', price='$harga', stok='$stok', gambar='$nama_file', detail='$detail' where id_product='$id' ");
					echo "$alert";
					echo "<meta http-equiv='refresh' content='2 URL=?menu=d_product'>";
				}
			?>
			<?php
				$id=$_GET['id_product'];
				$sql=mysql_query("SELECT * FROM product WHERE id_product='$id' ");
				$rowsql=mysql_fetch_array($sql);
			?>
			<form method="post" action="#" enctype="multipart/form-data">
				<input type="hidden" name="id_product" value="<?php echo "$rowsql[id_product]";?>"/>
					<table width="100%"  align="center" cellpadding="0" cellspacing="0">
						<tr>
								<th width="18%" scope="col">&nbsp;</th>
								<th width="5%" scope="col">&nbsp;</th>
								<th width="77%" scope="col">&nbsp;</th>
						</tr>
						<tr>
							<td height="47" align="center" valign="top"><b>Nama Produk</b></td>
							<td align="center" valign="top">:</td>
							<td valign="top"><input type="text" name="nama_product" size="25" value="<?php echo "$rowsql[nama_product]";?>"/></td>
						</tr>
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
							<td height="47" align="center" valign="top"><b>Detail</b></td>
							<td align="center" valign="top">:</td>
							<td><textarea name="detail" size="25" cols="25" rows="10" value="<?php echo "$rowsql[detail]";?>" ></textarea></td>
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