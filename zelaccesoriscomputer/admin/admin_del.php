	<strong>MENU ADMIN</strong>
	<div class="sortable row-fluid">
				<a data-rel="tooltip" title="Select Data" class="well span3 top-block" href="?menu=admin">
					<img src="images/icon-home.png" >
					<div>MENU</div>
					<div>Home</div>
					<span class="notification">1</span>
				</a>

				<a data-rel="tooltip" title="Insert Data" class="well span3 top-block" href="?menu=admin_ins">
					<img src="images/insert.png" >
					<div>MENU</div>
					<div>Insert</div>
					<span class="notification green">2</span>
				</a>

				<a data-rel="tooltip" title="Update Data" class="well span3 top-block" href="?menu=admin_upd">
					<img src="images/update.png" >
					<div>MENU</div>
					<div>Update</div>
					<span class="notification yellow">3</span>
				</a>
						
				<a data-rel="tooltip" title="Delete Data" class="well span3 top-block" href="?menu=admin_del">
					<img src="images/delete.png" >
					<div>MENU</div>
					<div>Delete</div>
					<span class="notification red">4</span>
				</a>	
	</div>
	<div class="box-header well">
			<h2><i class="icon-info-sign"></i>Delete Admin</h2>
			<div class="box-icon">
				<a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
				<a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
			</div>
	</div>
	<div class="box-content">
		<div align="center">
			<?php include "../connect.php";
			
				 if($_GET['remove']='hapus'){
					$id=$_GET['id']; mysql_query("delete from admin where id=$_GET[id]");
					
					}
				 $query= mysql_query('SELECT * FROM admin');
			?>
			   <table width="100%" border="1" align="center" cellpadding="4" cellspacing="2">
				<tbody>
							<tr>
							<th bgcolor="#EDC718" scope="col">Username</th>
							<th bgcolor="#EDC718" scope="col">Password</th>
							<th bgcolor="#EDC718" scope="col">Action</th>
							</tr>
				<?php
				while($data = mysql_fetch_array($query)){
				
				echo '<tr align=\"center\">';
				echo '<td width=97 bgcolor=#CACACA><div align=center>'.$data['username'].'</div></td>';
				echo '<td width=97 bgcolor=#CACACA><div align=center>'.$data['password'].'</div></td>';
				echo "<td width=97 bgcolor=#CACACA><center><a href='?menu=admin_del&remove=hapus&id=$data[id]'><img src=\"images/delete.png\" ></a></center></div></td>";
				echo '</tr>';
				}
				?>
				</tbody>
				</table>
		</div>
	</div>