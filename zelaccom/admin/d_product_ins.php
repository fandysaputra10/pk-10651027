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
		$id_cat = $_POST['id_category']; 
		$nama=$_POST['nama_product'];
		$harga=$_POST['price'];
		$stok=$_POST['stok'];
		$gambar=$_POST['gambar'];
		$detail=$_POST['detail'];
		
		$lokasi_file=$_FILES['gambar']['tmp_name'];
		$nama_file=$_FILES['gambar']['name'];
		$ukuran_file=$_FILES['gambar']['size'];
		$direktori="../images/product/$nama_file";
		
		mysql_query("INSERT INTO product (id_category, nama_product, price , stok, gambar, detail)
								VALUES ('$id_cat','$nama', $harga , '$stok', '$nama_file', '$detail' )");
		
		if (move_uploaded_file($lokasi_file,"$direktori")){
			echo "";
		} else {
			echo "Gambar Gagal Di Upload";
		}
		$alert="Insert Product Successful <img src=images/loader2.gif>";
		echo "<meta http-equiv='refresh' content='2 URL=?menu=d_product'>";
	}
?>
	<div class="box-header well">
			<h2><i class="icon-info-sign"></i> Insert Product | <a href="?menu=d_product">Back to Product</a></h2>
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
								<td height="47" align="center" valign="top" bgcolor="#ebecee"><input type="text" name="nama_product" size="25" /></td>
							</tr>
							<tr>
								<td height="47" align="center" valign="top" bgcolor="#ebecee">ID Category</td>
								<td height="47" align="center" valign="top" bgcolor="#ebecee">
									<select name="id_category">
										<option value=""> Pilih Category</option>
													<option value="1"> Mouse </option>
													<option value="2"> Keyboard </option>
													<option value="3"> Harddisk</option>
													<option value="4"> Printer </option>
													<option value="6"> Scanner</option>
													<option value="7"> Power Bank</option>
													<option value="8"> Charger</option>
													<option value="9">Adaptor</option>
													<option value="10">Converter</option>
													<option value="11">Stabilizer</option>
													<option value="12">Modem</option>
													<option value="13">Router</option>
													<option value="14">Switch Hub</option>
													<option value="15">Access Point</option>
													<option value="17">Connector</option>
													<option value="19">Mikrotik</option>
													<option value="20">Speaker</option>
													<option value="21">Earphone</option>
													<option value="22">Headphone</option>
													<option value="23">Microphone</option>
													<option value="30">Flashdisk Kingstone</option>
													<option value="31">Flashdisk Trancend</option>
													<option value="32">Flashdisk HP</option>
													<option value="40">Flashdisk Sandisk</option>
													<option value="41">Flashdisk Advan</option>
													<option value="42">Flashdisk Toshiba</option>
													<option value="33">Memory Card Sandisk</option>
													<option value="43">Memory Card VGEN</option>
													<option value="44">Memory Card Trancend</option>
													<option value="45">Memory Card Kingston</option>
													<option value="34">Cable USB</option>
													<option value="35">Cable HDMI</option>
													<option value="36">Cable Audio</option>
													<option value="16">Cable Network</option>
													<option value="18">Cable Tester</option>
													<option value="37">Battery</option>
													<option value="38">Cooling Pad</option>
													<option value="39">Webcam</option>
													<option value="46">Game Pad</option>
									</select>
								</td>
							</tr>
							<tr>
								<td height="47" align="center" valign="top" bgcolor="#ebecee">Harga</th>
								<td height="47" align="center" valign="top" bgcolor="#ebecee"><input type="text" name="price" size="25" /></td>
							</tr>
							<tr>
								<td height="47" align="center" valign="top" bgcolor="#ebecee">Stok</td>
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
								<td height="47" align="center" valign="top" bgcolor="#ebecee"><textarea name="detail" cols="25" rows="10"></textarea></td>
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