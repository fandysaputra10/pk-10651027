	<div class="box-header well">
	<h2><i class="icon-info-sign"></i>Testimonial</h2>
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
						  <th width="254" bgcolor="#EDC718" align="center" scope="col">Nama</th>
						  <th width="254" bgcolor="#EDC718" align="center" scope="col">Email</th>
						  <th width="254" bgcolor="#EDC718" align="center" scope="col">Subject</th>
						  <th width="254" bgcolor="#EDC718" align="center" scope="col">Message</th>
						  <th width="254" bgcolor="#EDC718" align="center" scope="col">Tanggal</th>
						  <th width="254" bgcolor="#EDC718" align="center" scope="col" >Hapus</th>
						</tr>
					<?php
						include "../connect.php";
						include "../class.php";
						$p      = new Paging6;
						$batas  = 10;
						$posisi = $p->cariPosisi($batas);
						
						$query=mysql_query("SELECT * FROM testimoni ORDER BY id_testimoni DESC LIMIT $posisi, $batas");
						while($data=mysql_fetch_array($query)){
							
							echo"<tr align=\"center\">
							  <td>$data[nama]</td>
							  <td>$data[email]</td>
							  <td>$data[subject]</td>
							  <td>$data[message]</td>
							  <td>$data[tanggal]</td>
							  <td><a href='?menu=contact&delete=$data[id_testimoni]'><img src=\"images/delete.png\" title=\"Hapus ini\"></a></td>
							</tr>";
						}
						if($_GET['delete']){
							$id=$_GET['delete'];
							$data = mysql_query("SELECT * FROM testimoni WHERE id = '$id_testimoni' ");
							$row = mysql_fetch_array($data);
							
							$alert="Delete Testimoni Successful <img src=images/loader2.gif>";
							
							$query=mysql_query("DELETE FROM testimoni WHERE id_testimoni='$id' ");
						if($query==1){
								echo"$alert";
								echo "<meta http-equiv='refresh' content='2 URL=?menu=contact'>";
							}else{
								echo"<script>alert('Data belum terhapus'); </script>";
							}
						}
						?>				
				</tbody>
			</table>
			<?php
						$jmldata = mysql_num_rows(mysql_query("SELECT* FROM testimoni ORDER BY id DESC"));
						$jmlhalaman  = $p->jumlahHalaman($jmldata, $batas);
						$linkHalaman = $p->navHalaman($_GET[hal], $jmlhalaman);
						echo "<hr /><p align=\"center\">$linkHalaman</p>";
						?>      			
		</div>
	</div>