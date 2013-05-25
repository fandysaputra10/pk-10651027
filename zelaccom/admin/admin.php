	<div class="box-header well">
			<h2><i class="icon-info-sign"></i>Daftar Admin</h2>
			<div class="box-icon">
				<a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
				<a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
			</div>
	</div>
	<div class="box-content">
		<h4 align="center"><a href="?menu=admin_ins"><img src="images/insert.png" >TAMBAH ADMIN</a></h4>
			 <table width="100%" border="1" align="center" cellpadding="4" cellspacing="2">
			 <tbody>
			<div align="center">
				<tr>
				  <th width="254" bgcolor="#EDC718" align="center" scope="col">Username</th>
				  <th width="254" bgcolor="#EDC718" align="center" scope="col">Password</th>
				  <th width="100" bgcolor="#EDC718" align="center" scope="col" colspan="2">ACTION</th>
				</tr>
				
			<?php
				$query=mysql_query("SELECT * FROM admin order BY username ASC");
				while($data=mysql_fetch_array($query)){
					
				echo"<tr align=\"center\">
				  <td width=97 bgcolor=#CACACA>$data[username]</td>
				  <td width=97 bgcolor=#CACACA>$data[password]</td>
				  <td width=50 bgcolor=#CACACA><a href='?menu=admin_upd&id=$data[id]&aksi=update'><img src=\"images/update.png\" ></a></td>
				  <td width=50 bgcolor=#CACACA><a href='?menu=admin&delete=$data[id]'><img src=\"images/delete.png\" ></a></td>
					</td>
				</tr>";
				}
				if($_GET['delete']){
					$id=$_GET['delete'];
					$data = mysql_query("select * from admin where id = '$id'");
					$row = mysql_fetch_array($data);
					$alert="<br>Admin Berhasil Di Delete <img src=images/loader2.gif>";
					$query=mysql_query("delete from admin where id='$id'");
					if($query==1){
						echo "$alert";
						echo "<meta http-equiv='refresh' content='2 URL=index.php?menu=admin'>";
					}
					
				}
			?>
			</tbody>
			</table>
			</div>
	</div>