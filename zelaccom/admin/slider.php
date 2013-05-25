<!– TinyMCE –>
			<script type="text/javascript" src="source/tiny_mce/tiny_mce.js"></script>
			<script type="text/javascript">
			tinyMCE.init({
			mode : "textareas",
			theme : "advanced"});
			</script>
<!– /TinyMCE –>
<?php
	error_reporting(0);
	session_start();
	require_once "../connect.php";
	include "../class.php";
?>

<div class="box-header well">
			<h2><i class="icon-info-sign"></i>Slider | <a href="?menu=slider">Back to Slider</a></h2>
		<div class="box-icon">
			<a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
			<a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
		</div>
</div>
	<div class="box-content">
			<?php 
			if($_GET['insert']=='insert') {
			?>
					<?php
						if ($_POST['save']){

							$nama=$data['nama'];
							$gambar=$data['gambar'];
							$isi=$data['isi'];
							
							$lokasi_file=$_FILES['gambar']['tmp_name'];
							$nama_file=$_FILES['gambar']['name'];
							$ukuran_file=$_FILES['gambar']['size'];
							$direktori="../images/slider/$nama_file";
							
							mysql_query("INSERT INTO slider (nama, gambar, isi) VALUES ('$_POST[nama]', '$nama_file', '$_POST[isi]' )");
								if (move_uploaded_file($lokasi_file,"$direktori")){
									echo "";
								} else {
									echo "Gambar Gagal Di Upload";
								}
								$loading="Insert Slider Successful <img src=images/loader2.gif>";
								echo "<meta http-equiv='refresh' content='2 URL=?menu=slider'>";	
							}
					?>
			<form method="post" action="#" enctype="multipart/form-data">
							<table width="100%" height="100" border="0" align="center" cellpadding="4" cellspacing="2">
								<tbody>
								<div align="center">
								<tr>
									<td width="254" bgcolor="#ebecee" align="center" scope="col">Nama Slider</td>
									<td height="10" align="center" valign="top" bgcolor="#ebecee"><input type="text" name="nama" size="25" /></td>
								</tr>
								<tr>
									<td width="254" bgcolor="#ebecee" align="center" scope="col">Gambar</td>
									<td height="10" align="center" valign="top" bgcolor="#ebecee"><input type="file" name="gambar" size="25" /></td>
								</tr>
								<tr>
									<td width="254" bgcolor="#ebecee" align="center" scope="col">Isi</th>
									<td height="10" align="center" valign="top" bgcolor="#ebecee"><textarea name="isi" size="25" /></textarea></td>
										</tr>
								<tr>
									<td height="24" align="center" valign="top">&nbsp;</td>
									<td><input type="submit" class="but" name="save" value="Tambah" /></td>
									<?php echo "$loading";?>
								</tr>
							</table>
			</form>
								</div>

					<?php
				}else if($_GET['edit']){
					$id = $_GET['edit'];
					
					$query=mysql_query("SELECT * FROM slider WHERE id='$id' ");
					$data = mysql_fetch_array($query);
					
					?>
					<form method="post" enctype="multipart/form-data">
						<input type="hidden" name="id" value="<?php echo "$data[id]";?>" />
							<table width="100%" height="100" border="0" align="center" cellpadding="4" cellspacing="2">
								<tbody>
						<div align="center">
										<tr>
											<td width="254" bgcolor="#ebecee" align="center" scope="col">Nama Slider</td>
											<td height="10" align="center" valign="top" bgcolor="#ebecee">
											<input type="text" name="nama" size="25" value="<?php echo "$data[nama]";?>"/></td>
										</tr>
										<tr>
											<td width="254" bgcolor="#ebecee" align="center" scope="col">Gambar</td>
											<td height="10" align="center" valign="top" bgcolor="#ebecee">
											<input type="file" name="gambar" size="25" value="<?php echo "$data[gambar]";?>" /></td>
										</tr>
										<tr>
											<td width="254" bgcolor="#ebecee" align="center" scope="col">Isi</td>
											<td height="10" align="center" valign="top" bgcolor="#ebecee">
											<textarea name="isi" size="50" value="<?php echo "$data[isi]";?>"/></textarea></td>
										</tr>
										<tr>
										<td height="24" align="center" valign="top">&nbsp;</td>
										<td>
										<input type="hidden" class="but" name="id" value="<?php echo "$data[id]";?>" />
										<input type="submit" class="but" name="update" value="Update" ></td>
										</tr>
								</tbody>
							</table>
					</form>
						</div>
						<?php
						if($_POST['update']){
					$id=$_POST['id'];
					$nama=$data['nama'];
					$gambar=$data['gambar'];
					$isi=$data['isi'];
					
					$lokasi_file=$_FILES['gambar']['tmp_name'];
					$nama_file=$_FILES['gambar']['name'];
					$ukuran_file=$_FILES['gambar']['size'];
					$direktori="../images/slider/$nama_file";
					
					$alert="Slider Update Successful <img src=images/loader2.gif>";
					
					mysql_query("UPDATE slider set nama='$_POST[nama]', gambar='$nama_file', isi='$_POST[isi]' where id='$id' ");
					echo "$alert";
					echo "<meta http-equiv='refresh' content='2 URL=?menu=slider'>";
					
					}
					?>
						
					<?php
				}else{
					?>
							<div>
								<h4 align="center"><a href="?menu=slider&insert=insert"><img src="images/insert.png" >INSERT POST</a></h4>
							</div>
					<form method="post" enctype="multipart/form-data">
					<table width="100%" border="1" align="center" cellpadding="4" cellspacing="2">
						<tr>
							<td width="254" bgcolor="#EDC718" align="center">Nama Slider</td>
							<td width="254" bgcolor="#EDC718" align="center">Gambar</td>
							<td width="254" bgcolor="#EDC718" align="center">Isi</td>
							<td width="254" bgcolor="#EDC718" align="center" colspan="2">Action</td></tr>
					<?php
						$sql=mysql_query("SELECT * FROM slider ORDER BY id DESC");
						while($data=mysql_fetch_array($sql)){
						
							$id = $data['id'];
							$nama = $data['nama'];
							$gambar = $data['gambar'];
							$isi = $data['isi'];
						
						?><tr align="center">
								<td><?php echo "$nama";?></td>
								<td><?php echo "$gambar";?></td>
								<td><?php echo "$isi";?></td>
								<td><a href="?menu=slider&edit=<?php echo "$id";?>"><img src="images/update.png" ></a></td>
								<td><a href="?menu=slider&delete=<?php echo "$id";?>" onclick="return confirm('Anda yakin?');"><img src="images/delete.png" ></a></td>
							</tr>
						<?php
					}
				?>	
					</table>
				</form>
					<?php
						if($_GET['delete']){
							$id=$_GET['delete'];
							$data = mysql_query("SELECT * FROM slider WHERE id = '$id' ");
							
							$row = mysql_fetch_array($data);
							@unlink('../images/slider/'.$row['gambar']);
							
							$alert="Delete Slider Successful <img src=images/loader2.gif>";
							
							$query=mysql_query("DELETE FROM slider WHERE id='$id' ");
							
						if($query==1){
								echo"$alert";
								echo "<meta http-equiv='refresh' content='2 URL=?menu=slider'>";
							}else{
								echo"<script>alert('Data belum terhapus'); </script>";
							}
						}
				} ?>
	</div>