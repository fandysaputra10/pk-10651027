<?php
include "session.php";
?>
	<div class="box-header well">
			<h2><i class="icon-info-sign"></i>Detail Post New Product</h2>
	</div>
	<div class="box-content">
			<table width="100%" border="1" align="center" cellpadding="4" cellspacing="2">
				<tbody>
					<div align="center">
						<tr>
						  <th width="254" bgcolor="#EDC718" align="center" scope="col">Nama Produk</th>
						  <th width="254" bgcolor="#EDC718" align="center" scope="col">Detail</th>
						  <th width="254" bgcolor="#EDC718" align="center" scope="col">Harga</th>
						  <th width="254" bgcolor="#EDC718" align="center" scope="col">Gambar</th>
						  <th width="254" bgcolor="#EDC718" align="center" scope="col" colspan="2">ACTION</th>
						</tr>

					<?php
						include "../connect.php";
						
						$query=mysql_query("SELECT * FROM new_product ORDER BY id DESC");
						while($data=mysql_fetch_array($query)){
							
							echo"<tr align=\"center\">
							  <td>$data[nama_page]</td>
							  <td><a href=?menu=post_detail&isi=$data[isi]>$data[isi]</a></td>
							  <td>$data[price]</td>
							  <td>$data[gambar]</td>
							  <td><a href='?menu=post_upd&id=$data[id]'><img src=\"images/update.png\" ></a></td>
							  <td><a href='?menu=post&delete=$data[id]'><img src=\"images/delete.png\" ></a></td>
							</tr>";
						}

						if($_GET['delete']){
							$id=$_GET['delete'];
							$data = mysql_query("SELECT * FROM new_product WHERE id = '$id' ");
							
							$row = mysql_fetch_array($data);
							@unlink('../images/product/'.$row['gambar']);
							$alert="Delet New Product Successful <img src=images/loader2.gif>";
							
							$query=mysql_query("DELETE FROM new_product WHERE id='$id' ");
						if($query==1){
								echo"$alert";
								echo "<meta http-equiv='refresh' content='2 URL=?menu=post'>";
							}else{
								echo"<script>alert('Data belum terhapus'); </script>";
							}
						}
						?>   	
				</tbody>
			</table>
		</div>
	</div>