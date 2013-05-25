	<div class="box-header well">
			<h2><i class="icon-info-sign"></i>Product</h2>
			<div class="box-icon">
				<a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
				<a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
			</div>
	</div>

	<div class="box-content">
		<h4 align="center"><a href="?menu=d_product_ins"><img src="images/insert.png" >INSERT PRODUCT</a></h4>
			<table width="100%" border="1" align="center" cellpadding="4" cellspacing="2">
				<tbody>
				<div align="center">
								<tr>
									<th width="254" bgcolor="#EDC718" align="center" scope="col">Nama Produk</th>
									<th width="254" bgcolor="#EDC718" align="center" scope="col">ID Category</th>
									<th width="254" bgcolor="#EDC718" align="center" scope="col">Harga</th>
									<th width="254" bgcolor="#EDC718" align="center" scope="col">Stok</th>
									<th width="254" bgcolor="#EDC718" align="center" scope="col">Gambar</th>
									<th width="254" bgcolor="#EDC718" align="center" scope="col">Detail</th>
									<th width="254" bgcolor="#EDC718" align="center" scope="col" colspan="2">ACTION</th>
								</tr>

							<?php
								include "../connect.php";
								include "../class.php";
								$p      = new Paging6;
								$batas  = 9;
								$posisi = $p->cariPosisi($batas);
								
								$query=mysql_query("SELECT * FROM product ORDER BY id_product DESC LIMIT $posisi, $batas");
								while($data=mysql_fetch_array($query)){
									
									echo"<tr align=\"center\">
									  <td><a href=?menu=product_detail&nama_product=$data[nama_product]>$data[nama_product]</a></td>
									  <td><a href=?menu=category&id_category=$data[id_category]>$data[id_category]</td>
									  <td>Rp.$data[price]</td>
									  <td>$data[stok]</td>
									  <td>$data[gambar]</td>
									  <td>$data[detail]</td>
									  <td><a href='?menu=d_product_upd&id_product=$data[id_product]'><img src=\"images/update.png\" ></a></td>
									  <td><a href='?menu=d_product&delete=$data[id_product]'><img src=\"images/delete.png\" ></a></td>
									</tr>";
								}

								if($_GET['delete']){
									$id=$_GET['delete'];
									$data = mysql_query("SELECT * FROM product WHERE id_product '$id' ");
									
									$row = mysql_fetch_array($data);
									@unlink('../images/product/'.$row['gambar']);
									
									$alert="Delete New Product Successful <img src=images/loader2.gif>";
									
									$query=mysql_query("DELETE FROM product WHERE id_product='$id' ");
								if($query==1){
										echo"$alert";
										echo "<meta http-equiv='refresh' content='2 URL=?menu=d_product'>";
									}else{
										echo"<script>alert('Data belum terhapus'); </script>";
									}
								}
								?>   	
				</tbody>
			</table>
						<?php
							$jmldata = mysql_num_rows(mysql_query("SELECT * FROM product ORDER BY id_product"));
							$jmlhalaman  = $p->jumlahHalaman($jmldata, $batas);
							$linkHalaman = $p->navHalaman($_GET[hal], $jmlhalaman);
							echo "<hr /><p align=\"center\">$linkHalaman</p>";
					?> 
			</div>
			<div class="cleaner"></div>
	</div>