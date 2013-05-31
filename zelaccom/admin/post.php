	<div class="box-header well">
			<h2><i class="icon-info-sign"></i>Posting New Product</h2>
			<div class="box-icon">
				<a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
				<a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
			</div>
	</div>
	<div class="box-content">
	<h4 align="center"><a href="?menu=post_ins"><img src="images/insert.png" >INSERT POST</a></h4>
			<table width="100%" border="1" align="center" cellpadding="4" cellspacing="2">
				<tbody>
					<div align="center">
						<tr>
						  <th width="150" bgcolor="#EDC718" align="center" scope="col">Nama Produk</th>
						  <th width="350" bgcolor="#EDC718" align="center" scope="col">Detail</th>
						  <th width="100" bgcolor="#EDC718" align="center" scope="col">Harga</th>
						  <th width="50" bgcolor="#EDC718" align="center" scope="col">Stok</th>
						  <th width="150" bgcolor="#EDC718" align="center" scope="col">Gambar</th>
						  <th width="100" bgcolor="#EDC718" align="center" scope="col" colspan="2">ACTION</th>
						</tr>

					<?php
						include "../connect.php";
						include "../class.php";
						$p      = new Paging6;
						$batas  = 3;
						$posisi = $p->cariPosisi($batas);
						
						$query=mysql_query("SELECT * FROM new_product ORDER BY id DESC LIMIT $posisi, $batas");
						while($data=mysql_fetch_array($query)){
							
							echo"<tr align=\"center\">
							  <td><a href=?menu=post_detail&nama_page=$data[nama_page]>$data[nama_page]</a></td>
							  <td>$data[isi]</td>
							  <td>Rp.$data[price]</td>
							  <td>$data[stok]</td>
							  <td>$data[gambar]</td>
							  <td><a href='?menu=post_upd&id=$data[id]'><img src=\"images/update.png\" ></a></td>
							  <td><a href='?menu=post&delete=$data[id]'><img src=\"images/delete.png\" ></a></td>
							</tr>";
						}

						if($_GET['delete']){
							$id=$_GET['delete'];
							$data = mysql_query("SELECT * FROM new_product WHERE id = '$id' ");
							
							$row = mysql_fetch_array($data);
							@unlink('../images/new_product/'.$row['gambar']);
							
							$alert="Delete New Product Successful <img src=images/loader2.gif>";
							
							$query=mysql_query("DELETE FROM new_product WHERE id='$id' ");
						if($query==1){
								echo"$alert";
								echo "<meta http-equiv='refresh' content='1 URL=?menu=post'>";
							}else{
								echo"<script>alert('Data belum terhapus'); </script>";
							}
						}
						?>				
				</tbody>
			</table>
			<?php
						$jmldata = mysql_num_rows(mysql_query("select * from new_product order by id"));
						$jmlhalaman  = $p->jumlahHalaman($jmldata, $batas);
						$linkHalaman = $p->navHalaman($_GET[hal], $jmlhalaman);
						echo "<hr /><p align=\"center\">$linkHalaman</p>";
						?>      			
		</div>
	</div>