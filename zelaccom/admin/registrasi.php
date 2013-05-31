	<div class="box-header well">
			<h2><i class="icon-info-sign"></i>Form Login Registrasi</h2>
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
						  <th width="254" bgcolor="#EDC718" align="center" scope="col">Username</th>
						  <th width="254" bgcolor="#EDC718" align="center" scope="col">Password</th>
						  <th width="254" bgcolor="#EDC718" align="center" scope="col">Email</th>
						  <th width="254" bgcolor="#EDC718" align="center" scope="col">Tanggal</th>
						  <th width="254" bgcolor="#EDC718" align="center" scope="col" colspan="2">Hapus</th>
						</tr>

					<?php
						include "../connect.php";
						include "../class.php";
						$p      = new Paging6;
						$batas  = 10;
						$posisi = $p->cariPosisi($batas);
						
						$query=mysql_query("SELECT * FROM registrasi ORDER BY id DESC LIMIT $posisi, $batas");
						$jumlah=mysql_num_rows($query);
						while($data=mysql_fetch_array($query)){
							
							echo"<tr align=\"center\">
							  <td>$data[username]</td>
							  <td>$data[password]</td>
							  <td>$data[email]</td>
							  <td>$data[tanggal]</td>
							  <td><a href='?menu=registrasi&delete=$data[id]'><img src=\"images/delete.png\" ></a></td>
							</tr>";
						}

						if($_GET['delete']){
							$id=$_GET['delete'];
							$data = mysql_query("SELECT * FROM registrasi WHERE id = '$id' ");
							
							$row = mysql_fetch_array($data);
							
							$alert="Delete User Registrasi Successful <img src=images/loader2.gif>";
							
							$query=mysql_query("DELETE FROM registrasi WHERE id='$id' ");
						if($query==1){
								echo"$alert";
								echo "<meta http-equiv='refresh' content='1 URL=?menu=registrasi'>";
							}else{
								echo"<script>alert('Data belum terhapus'); </script>";
							}
						}
						?>	
						<h3><center><strong>Jumlah Member : <?php echo $jumlah; ?></strong></center></h3>
				</tbody>
			</table>
			<?php
						$jmldata = mysql_num_rows(mysql_query("select * from registrasi order by id"));
						$jmlhalaman  = $p->jumlahHalaman($jmldata, $batas);
						$linkHalaman = $p->navHalaman($_GET[hal], $jmlhalaman);
						echo "<hr /><p align=\"center\">$linkHalaman</p>";
						?>      			
		</div>
	</div>