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
			<h2><i class="icon-info-sign"></i>Update Admin</h2>
			<div class="box-icon">
				<a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
				<a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
			</div>
	</div>
	<div class="box-content">
		<?php 
		$id=$_GET['id'];

		if($_POST['update'])
		{
			$id=$_POST['id'];
			$user=$_POST['username'];
			$pass=$_POST['password'];
			
			mysql_query("UPDATE admin SET username='$user', password='$pass' where id='$id'");
			echo "<script>alert('Admin Berhasil Disimpan');</script>";
			echo "<meta http-equiv='refresh' content='0 URL=?menu=admin'>";
		}
		?>

		<?php
		
		$id=$_GET['id'];
		$sql=mysql_query("SELECT * FROM admin WHERE id='$id' ");
		$rowsql=mysql_fetch_array($sql);
		?>
		<form method="post" action="#" enctype="multipart/form-data">
		<input type="hidden" name="id" value="<?php echo "$rowsql[id]";?>"/>
		<table width="100%" border="1" align="center" cellpadding="4" cellspacing="2">
			<tbody>
				<tr>
					<th bgcolor="#EDC718" scope="col">Username</th>
					<th bgcolor="#EDC718" scope="col">Password</th>
					<th bgcolor="#EDC718" scope="col">Action</th>
				</tr>
			<?php
				$query=mysql_query("SELECT * FROM admin order by username ASC");
				while($data=mysql_fetch_array($query)){
					
				echo"<tr align=\"center\">
				  <td width=97 bgcolor=#CACACA>$data[username]</td>
				  <td width=97 bgcolor=#CACACA>$data[password]</td>
				  <td width=97 bgcolor=#CACACA><center><a href='?menu=admin_upd&update=update&id=$data[id]'><img src=\"images/update.png\" ></a></center>
				</tr>";
				}
			?>
			</tbody>
		</table>
		</form>
	</div>