<?php
error_reporting(0);
$no_visible_elements=true;
 ?>

<?php
	if($_POST['login']){
	
    session_start();
    require_once "../connect.php";
    
    $username = $_POST['username'];
    $password = md5($_POST['password']);
    
	if(ISSET($username)&&ISSET($password)){
		//Mengambil data dari database
        $sql = mysql_query("SELECT * FROM admin WHERE username='$username' AND password='$password' ");
        
		//Mengecek ada tidak file yang dicari
        $query = mysql_num_rows($sql);
        
    if($query==1){
	
		//Daftarkan variabel session
		session_register("username");
		session_register("password");
        
	//jumping ke index
	include "verifikasi/loading_berhasil.html";
	echo "<meta http-equiv='refresh' content='5 URL=index.php'>";
	}
	else{
		include "verifikasi/loading_gagal.html";
		echo "<meta http-equiv='refresh' content='5 URL=index.php'>";
	
	}
    }
}
?>
<html lang="en" class="no-js">
    <head>
    <title>Login Administrator</title>
    <link rel="shortcut icon" href="../favicon.ico"/>
    <link rel="stylesheet" type="text/css" href="css/demo.css" />
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <link rel="stylesheet" type="text/css" href="css/animate-custom.css" />
    </head>
        <body>
            <div class="container">
                <div class="codrops-top">
                    <div class="clr"></div>
                </div>
                <header>
                <h1>Login Administrator</h1>
                </header>
                <section>				
                <div id="container_demo" >
                    <a class="hiddenanchor" id="toregister"></a>
                    <div id="wrapper">
                   
                        <div id="login" class="animate form">
                            <form  action="#" method="post" autocomplete="on"> 
                                <h1>Log in</h1> 
                                <p>
                                    <label for="username" class="uname" data-icon="u" > Masukkan Username </label>
                                    <input id="username" name="username" required="required" type="text" placeholder="eg. default : admin "/>
                                </p>
                                <p> 
                                    <label for="password" class="youpasswd" data-icon="p"> Masukkan Password </label>
                                    <input id="password" name="password" required="required" type="password" placeholder="eg. admin" /> 
                                </p>
                                <p class="keeplogin"> 
									<input type="checkbox" name="loginkeeping" id="loginkeeping" value="loginkeeping" /> 
									<label for="loginkeeping">Keep me logged in</label>
								</p>
                                <p class="login button"> 
                                    <input type="submit" value="Login" name="login" /> 
								</p>
                            </form>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </body>
</html>