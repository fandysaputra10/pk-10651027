	<div class="box-header well">
			<h2><i class="icon-info-sign"></i>Category Product</h2>
			<div class="box-icon">
				<a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
				<a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
			</div>
	</div>
	<div class="box-content">
		<h4 align="center"><a href="?menu=category_ins"><img src="images/insert.png" >INSERT CATEGORY PRODUCT</a></h4>
			<table width="50%" border="1" align="center" cellpadding="4" cellspacing="2">
				<tbody>
				<div align="center">
								<tr>
									<th bgcolor="#EDC718" align="center" scope="col">Nama Category</th>
									<th bgcolor="#EDC718" align="center" scope="col" colspan="2">ACTION</th>
								</tr>

							<?php
								include "../connect.php";
								include "../class.php";
								$p      = new Paging6;
								$batas  = 10;
								$posisi = $p->cariPosisi($batas);
								if ($_GET['id_category']){
								$query=mysql_query("SELECT * FROM category WHERE id_category='$_GET[id_category]' ORDER BY nama_category ASC LIMIT $posisi, $batas");
								while($data=mysql_fetch_array($query)){
									
									echo"<tr align=\"center\">
									  <td>$data[nama_category]</td>
									  <td><a href='?menu=category&delete=$data[id_category]'><img src=\"images/delete.png\" ></a></td>
									</tr>";
								}
								}else {
								$query=mysql_query("SELECT * FROM category ORDER BY nama_category ASC LIMIT $posisi, $batas");
								while($data=mysql_fetch_array($query)){
									
									echo"<tr align=\"center\">
									  <td>$data[nama_category]</td>
									  <td><a href='?menu=category&delete=$data[id_category]'><img src=\"images/delete.png\" ></a></td>
									</tr>";
								}
								}
								if($_GET['delete']){
									$id=$_GET['delete'];
									$data = mysql_query("SELECT * FROM category WHERE id_category '$id' ");
									
									$row = mysql_fetch_array($data);
									
									$alert="Delete Category Successful <img src=images/loader2.gif>";
									
									$query=mysql_query("DELETE FROM category WHERE id_category='$id' ");
								if($query==1){
										echo"$alert";
										echo "<meta http-equiv='refresh' content='2 URL=?menu=category'>";
									}else{
										echo"<script>alert('Data belum terhapus'); </script>";
									}
								}
								?>   	
				</tbody>
			</table>
						<?php
							$jmldata = mysql_num_rows(mysql_query("SELECT * FROM category ORDER BY id_category"));
							$jmlhalaman  = $p->jumlahHalaman($jmldata, $batas);
							$linkHalaman = $p->navHalaman($_GET[hal], $jmlhalaman);
							echo "<hr /><p align=\"center\">$linkHalaman</p>";
					?> 
			</div>
			<div class="cleaner"></div>
	</div>