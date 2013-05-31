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
		$nama=$_POST['nama_page'];
		$isi=$_POST['isi'];
		$harga=$_POST['price'];
		$stok = $_POST['stok'];
		$gambar=$_POST['gambar'];
		
		$lokasi_file=$_FILES['gambar']['tmp_name'];
		$nama_file=$_FILES['gambar']['name'];
		$ukuran_file=$_FILES['gambar']['size'];
		$direktori="../images/new_product/$nama_file";
		
		mysql_query("INSERT INTO new_product (nama_page, isi, price , stok, gambar) VALUES ('$nama', '$isi', $harga, $stok, '$nama_file')");
		
		if (move_uploaded_file($lokasi_file,"$direktori")){
			echo "";
		} else {
			echo "Gambar Gagal Di Upload";
		}
		$alert="Posting New Product Successful <img src=images/loader2.gif>";
		echo "<meta http-equiv='refresh' content='2 URL=?menu=post'>";
	}
?>
	<div class="box-header well">
			<h2><i class="icon-info-sign"></i> Insert Post New Product | <a href="?menu=post">Back to Post</a></h2>
			<div class="box-icon">
				<a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
				<a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
			</div>
	</div>
	<div class="box-content">
		<form method="post" action="#" enctype="multipart/form-data">
			<input type="hidden" name="id" />
				<table width="70%" height="566" border="0" align="center" cellpadding="4" cellspacing="2">
					<tbody>
						<div align="center">
							<tr>
								<td height="47" align="center" valign="top" bgcolor="#ebecee">Nama Produk</td>
								<td height="47" align="center" valign="top" bgcolor="#ebecee"><input type="text" name="nama_page" size="25" /></td>
							</tr>
							<tr>
								<td height="47" align="center" valign="top" bgcolor="#ebecee">Harga</th>
								<td height="47" align="center" valign="top" bgcolor="#ebecee"><input type="text" name="price" size="25" /></td>
							</tr>
							<tr>
								<td height="47" align="center" valign="top" bgcolor="#ebecee">Stok</th>
								<td height="47" align="center" valign="top" bgcolor="#ebecee"><input type="text" name="stok" size="25" /></td>
							</tr>
							<tr>
								<td height="47" align="center" valign="top" bgcolor="#ebecee">Gambar</td>
								<td height="47" align="center" valign="top" bgcolor="#ebecee">
									<label for="textfield4"></label>
									<label for="fileField"></label>
									<input type="file" name="gambar" size="25" />
								</td>
							</tr>
							<tr>
								<td height="47" align="center" valign="top" bgcolor="#ebecee">Detail</td>
								<td height="47" align="center" valign="top" bgcolor="#ebecee"><textarea name="isi" cols="25" rows="10"></textarea></td>
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