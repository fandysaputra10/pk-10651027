	<div class="box-header well">
			<h2><i class="icon-info-sign"></i>About Zelaccom</h2>
			<div class="box-icon">
				<a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
				<a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
			</div>
	</div>
	<div class="box-content">
			<table width="100%" border="1" align="center" cellpadding="4" cellspacing="2">
				<tbody>
				<div align="center">
								<tr>
									<td bgcolor="#EDC718" align="center" scope="col">About</textarea></td>
									<td bgcolor="#EDC718"align="center" scope="col">Cara Pembelian</textarea></td>
									<td bgcolor="#EDC718" align="center" scope="col" colspan="2">ACTION</td>
								</tr>

							<?php
								include "../connect.php";
								
								$query=mysql_query("SELECT * FROM about ORDER BY id ASC");
								while($data=mysql_fetch_array($query)){
									
									echo"<tr align=\"center\">
									  <td>$data[isi]</td>
									  <td>$data[carabeli]</td>
									  <td><a href='?menu=d_about_upd&id=$data[id]'><img src=\"images/update.png\" ></a></td>
									  <td><a href='?menu=d_about&delete=$data[id]'><img src=\"images/delete.png\" ></a></td>
									</tr>";
								}

								if($_GET['delete']){
									$id=$_GET['delete'];
									$data = mysql_query("SELECT * FROM about WHERE id '$id' ");
									
									$row = mysql_fetch_array($data);
									
									$alert="Delete About Successful <img src=images/loader2.gif>";
									
									$query=mysql_query("DELETE FROM about WHERE id='$id' ");
								if($query==1){
										echo"$alert";
										echo "<meta http-equiv='refresh' content='2 URL=?menu=d_about'>";
									}else{
										echo"<script>alert('Data belum terhapus'); </script>";
									}
								}
								?>   	
				</tbody>
			</table>
			</div>
			<div class="cleaner"></div>
	</div>