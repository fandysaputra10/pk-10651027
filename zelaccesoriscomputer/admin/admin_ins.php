	<strong>MENU ADMIN</strong>
	<div class="sortable row-fluid">
				<a data-rel="tooltip" title="Kembali ke Menu Utama" class="well span3 top-block" href="?menu=admin">
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
			<h2><i class="icon-info-sign"></i>Tambah Admin</h2>
			<div class="box-icon">
				<a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
				<a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
			</div>
	</div>
	<div class="box-content">
		<div align="center">
			<form name="form1" method="post" action="?menu=admin_ins_cek">
				<table width="50%" align="center" cellpadding="4" cellspacing="2">
						<tr>
						  <td>Username </td>
						  <td><input type="text" name="username" /></td>
						</tr>
						<tr>
							<td>Password</td>
							<td><input type="password" name="password" /></td>
						</tr>
						<tr>
							<td></td>
							<td><input type="submit" class="but" name="submit" value="Tambah   " /></td>
						</tr>
						<tr>
							<td colspan="2">&nbsp;</td>
						</tr>
				</table>
			</form>
		</div>
	</div>