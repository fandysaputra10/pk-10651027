<style>
.but {
	height: 50px;
	width: 89px;
	background-image: url(images/submit.png);
	background-repeat:repeat-y;
	display: block;
	border-top-style: none;
	border-right-style: none;
	border-bottom-style: none;
	border-left-style: none;
	cursor: pointer;
	float: left;
    font-size: medium;
    font-weight: bold;
    border-radius: 10px 10px 10px 10px;
    
}
</style>
	<div id="content" class="float_r">
	<h2>Log in </h2>
	<form action="signup_proses.php" name="form" method="post" onSubmit="return validasi()">
		<table height="150" cellpadding="5" cellspacing="2" width="299">
			  Create Your Account
			<tr>
				  <td>Username</td>
				  <td><input name="username" id="username" type="text" size="30"/></td>
			</tr>
			<tr>
				  <td>Password</td>
				  <td><input name="password" id="password" type="password" size="30"/></td>
			</tr>
			<tr>
				  <td>Email</td>
				  <td><input name="email" id="email" type="text" size="30"/></td>
			</tr>
			<tr>
				 <td></td>
				 <td colspan="1">
				 <input name="kirim" class="but" type="submit" value="Create" title="Create Your Account" onClick="return validasi()"  />
			</tr>
		</table>
		<table height="100" cellpadding="5" cellspacing="2" width="299">
			Already Registered
			<tr>
				  <td>Username</td>
				  <td><input name="username" id="username" type="text" size="30"/></td>
			  </tr>
			  <tr>
				  <td>Password</td>
				  <td><input name="password" id="password" type="password" size="30"/></td>
			  </tr>
			<tr>
				 <td></td>
				 <td colspan="2">
				 <input name="login" class="but" type="submit" value="Login" title="Login" onClick="return validasi()"  />
			</tr>
			  <tr>
			  <td colspan="2"><div class="error"></div></td>
			  </tr>
      </table>
      </form>	
	</div>