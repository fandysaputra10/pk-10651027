<?php
    error_reporting(0);
	session_start();
	if(!ISSET($_SESSION['username'])&&!ISSET($_SESSION['password'])) {
    echo "<div><p>I am Sorry, Access Denied...</p></div>";
    echo "<meta http-equiv='refresh' content='2 URL=../index.php'>";
    exit;
}
?>

<?php include "header.php"; ?>
		
<body>
		<div class="row-fluid">
				<div class="box span12">
                 
					<div class="box-content">
						<?php include "menu.php"; ?>
					</div>
				</div>
		</div>
<?php include "footer.php"; ?>
</body>