<?php session_start();
	if (session_is_registered('user_id')){
	$iduser=$_SESSION['user_id'];
?>

	<table width="63%" border="0" cellpadding="0" cellspacing="0" bordercolor="#99CC99" align="center">
		<tr>
			<td width="2%" align="right"><img src="images/kiri.jpg"></td>
			<td width="96%" bgcolor="#43d2fa" >
				<div align="center">
					<strong><font face="verdana" size="2" color="#FFFFFF">SHOPPING CART</font></strong>
				</div>
			</td>
			<td width="2%"><img src="images/kanan.jpg"></td>
		</tr>
		
		<tr>
			<td background="images/b-kiri.jpg">&nbsp;</td>
			<td valign="top"><br />
					<p>
						<font color='#0066FF' face='verdana' size='2'>
						<div align="center"><?php echo $_GET['status'] ?></div>
						</font>
					</p>
					<h1 align="center"><img src="images/shopping-cart.jpg"  border="0"/></h1>
					
					<a href="index.php?page=5" style="text-decoration:none">
						<font face="verdana" color="#666666" size="2">Tambah Barang</font><img src="images/beli.jpg" border="0" />
					</a>
					<br /><br />
				
				
				<?php
				include "connect.php";
				
				$query=mysql_db_query($db,"select * from shoping where iduser='$iduser' order by tgl",$koneksi);
				$pemesanan=mysql_db_query($db,"select * from pemesanan where iduser='$iduser' order by tgl",$koneksi);
				$cek=mysql_num_rows($query);
				
				
				if (!empty($cek)){
					?>
					<script language="javascript">
					<!--
					function konfirm(idshop,iduser,idpesan)
					{
						tanya=confirm("Apakah anda yakin akan menghapus barang ini ?")
						if (tanya !="0")
						{
							//alert(idshop);
							//alert(iduser);
							//alert(idpesan);
							
							top.location="delete.php?idshop="+idshop+"&iduser="+iduser+"&idpesan"+idpesan+"";
						}
					}
					//-->
					</script>
					
				<table cellspacing="2">
					<tr bgcolor="#999999">
						<th width="38"><font color="#FFFFFF" size="2" face="Verdana, Arial, Helvetica, sans-serif">NO</font></th>
						<th width="303"><font color="#FFFFFF" size="2" face="Verdana, Arial, Helvetica, sans-serif">NAMA BARANG</font></th>
						<th width="255"><font color="#FFFFFF" size="2" face="Verdana, Arial, Helvetica, sans-serif">HARGA</font></th>
						<th width="177"><font color="#FFFFFF" size="2" face="Verdana, Arial, Helvetica, sans-serif">AKSI</font></th>
					</tr>
					<?php
					while ($row=mysql_fetch_array($query)){
					$idshop=$row['idshop'];
					$idbrg=$row['idbrg'];
					$iduser=$row['iduser'];
					
					$trow=mysql_fetch_array($pemesanan);
					$idpesan=$trow['idpesan'];
					
						//translate id
						$transbrg=mysql_db_query($db,"select * from produk where idbrg='$idbrg'",$koneksi);
						while ($row=mysql_fetch_array($transbrg)){
							$namabrg=$row['namabrg'];
							$hargabrg=$row['hargabrg'];
							$total=$hargabrg+$total;
						}
						
					?>
					  <tr>
						<td><font size="2" face="Verdana, Arial, Helvetica, sans-serif"><?php echo $c=$c+1; ?></font></td>
						<td><font size="2" face="Verdana, Arial, Helvetica, sans-serif"><?php echo $namabrg;?></font></td>
						<td><font size="2" face="Verdana, Arial, Helvetica, sans-serif"><?php echo "Rp ".$hargabrg;?></font></td>
						<td align="center">
						<a  href="#" style="text-decoration:none" title="Klik hapus barang" onClick="konfirm(<?php echo $idshop; ?>,<?php echo $iduser; ?>,<?php echo $idpesan; ?>)">
						<img src="images/hapus.png" border="0"><font color="#666666" face="verdana" size="2">Hapus</font></a>
						</td>
					  </tr>
				<?php
					}
				?>
					<tr>
						 <td colspan="4"><hr  color="#CCCCCC"/>
							<p>
								<font face="Courier New, Courier, monospace"><b>TOTAL</b><?php echo " : Rp ".$total; ?>
								</font>
							</p>
							<p align="center">
								<input type="button" value="Lanjutkan Transaksi" onClick="location.replace('index.php?page=8');"/><br /><br />
							</p>
						</td>
					</tr>
				</table>
					<?php
				}else{
					echo "<p align=center><font face='verdana' size='2' color='green'>Maaf, Belum ada barang yang Anda pilih<br><br></font></p>";
						}
				?>
			</td>
			<td background="images/b-kanan.jpg">&nbsp;</td>
		</tr>
		<tr>
			<td align="right"><img src="images/kib.jpg"></td>
			<td bgcolor="#5686c6" >
				<div align="center">
					<strong><font face="verdana" size="3"></font></strong>
				</div>
			</td>
			<td><img src="images/kab.jpg"></td>
		</tr>
	</table>
<?php
	}else{
?>

<html> 
	<head> 
		<title>Shopping Cart</title>
	</head>
		<body>
			<div id="content" class="float_r">
				<h1>Shopping Cart</h1>
				<table width="41%" border="0" cellpadding="0" cellspacing="0" bordercolor="#99CC99" align="center">
					<tr> 
						<td width="3%" align="right"><img src="images/kiri.jpg"></td>
						<td width="94%" bgcolor="#43d2fa" >
							<div align="center">
								<strong><font face="verdana" size="2" color="#FFFFFF">PRODUK</font></strong>
							</div>
						</td>
						<td width="3%"><img src="images/kanan.jpg"></td>
					</tr>

					<tr>   
						<td background="images/b-kiri.jpg"></td>
						<td>  
							<table width="445" align="center"> 
								 <tr>
									 <td width="437">
										<br />
										<p align="center"><img src="images/shopping-cart.png"  border="0"/></p>
										<p align="center"><br />
											<font color="#009966" size="2" face="Verdana, Arial, Helvetica, sans-serif">Maaf, Anda belum memilih produk kami :) </font>
										</p>
										<p align="center">
											<a href="?menu=home" style="text-decoration:none" title="Lakukan transaksi"><img src="images/beli.jpg" border="0" /></a>
										</p>
										<p align="center">&nbsp;</p>
									</td>
								</tr> 
						  </table>
						</td>
						<td background="images/b-kanan.jpg"></td>
					</tr>
					<tr> 
						<td align="right"><img src="images/kib.jpg"></td>
						<td bgcolor="#43d2fa" >
							<div align="center">
								<strong><font face="verdana" size="2" color="#FFFFFF">Jumlah Barang : <b><?php echo $jumlah; ?></font></strong>
							</div>
						</td>
						<td><img src="images/kab.jpg"></td>
					</tr>
				</table>
		<?php
			}
		?>
			</div>
			<div class="cleaner"></div>
		</body>
</html>
