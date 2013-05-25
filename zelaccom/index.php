<?php
error_reporting(0);
include "connect.php";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Zelaccom | Accesoris Computer</title>
<meta name="keywords" content="station shop, theme, free template, templatemo, CSS, HTML" />
<meta name="description" content="Station Shop Theme, free CSS template provided by templatemo.com" />
<link href="css/templatemo_style.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="css/ddsmoothmenu.css" />
	<script type="text/javascript" src="js/jquery.scrollTo-min.js"></script> 
	<script type="text/javascript" src="js/jquery.localscroll-min.js"></script> 
	<script type="text/javascript" src="js/init.js"></script>
	
 <link rel="stylesheet" href="css/slimbox2.css" type="text/css" media="screen" /> 
	<script type="text/JavaScript" src="js/slimbox2.js"></script> 	

<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/ddsmoothmenu.js">



/***********************************************
* Smooth Navigational Menu- (c) Dynamic Drive DHTML code library (www.dynamicdrive.com)
* This notice MUST stay intact for legal use
* Visit Dynamic Drive at http://www.dynamicdrive.com/ for full source code
***********************************************/

</script>

<script language="javascript" type="text/javascript">
function clearText(field)
{
    if (field.defaultValue == field.value) field.value = '';
    else if (field.value == '') field.value = field.defaultValue;
}
</script>

<script type="text/javascript">

ddsmoothmenu.init({
	mainmenuid: "top_nav", //menu DIV id
	orientation: 'h', //Horizontal or vertical menu: Set to "h" or "v"
	classname: 'ddsmoothmenu', //class added to menu's outer DIV
	//customtheme: ["#1c5a80", "#18374a"],
	contentsource: "markup" //"markup" or ["container_id", "path_to_menu_file"]
})

</script>

<link rel="stylesheet" type="text/css" media="all" href="css/jquery.dualSlider.0.2.css" />
<script src="js/jquery-1.3.2.min.js" type="text/javascript"></script>
<script src="js/jquery.easing.1.3.js" type="text/javascript"></script>
<script src="js/jquery.timers-1.2.js" type="text/javascript"></script>
<script src="js/jquery.dualSlider.0.3.min.js" type="text/javascript"></script>


<script type="text/javascript">
    
    $(document).ready(function() {
        
        $(".carousel").dualSlider({
            auto:true,
            autoDelay: 6000,
            easingCarousel: "swing",
            easingDetails: "easeOutBack",
            durationCarousel: 1000,
            durationDetails: 600
        });
        
    });
    
</script>

</head>

<body>

<div id="templatemo_wrapper">
    	<div id="site_title">
        	<h1><a href="#" title="Zelaccom Accesoris Computer">Zelaccom</a></h1>
        </div>
	<div id="templatemo_header">
        
   
        <div class="cleaner"></div>
    </div> <!-- END of templatemo_header -->
    
    <div id="templatemo_menu">
    	<div id="top_nav" class="ddsmoothmenu">
		<?php
		if($_GET['menu']=='contact'){
		echo "<ul>
						<li><a href=?menu=home><span></span>Home</a></li>
							<li><a href=#>Products</a>
								<ul>
									<li><a href=#/page/1>Peripheral</a>
										<ul>
											<li><a href=?menu=product&category=1>Mouse</a></li>
											<li><a href=?menu=product&category=2>Keyboard</a></li>
											<li><a href=?menu=product&category=3>Hard Disk</a></li>
											<li><a href=?menu=product&category=4>Printer</a></li>
											<li><a href=?menu=product&category=6>Scanner</a></li>
											<li><a href=?menu=product&category=7>Power Bank</a></li>
											<li><a href=?menu=product&category=8>Charger</a></li>
											<li><a href=?menu=product&category=9>Adaptor</a></li>
											<li><a href=?menu=product&category=10>Converter</a></li>
											<li><a href=?menu=product&category=11>Stabilizer</a></li>
										</ul>
									</li>
									<li><a href=#/page/2>Networking</a>
										<ul>
											<li><a href=?menu=product&category=12>Modem</a></li>
											<li><a href=?menu=product&category=13>Router</a></li>
											<li><a href=?menu=product&category=14>Switch Hub</a></li>
											<li><a href=?menu=product&category=15>Access Point</a></li>
											<li><a href=?menu=product&category=17>Connector</a></li>
											<li><a href=?menu=product&category=19>Mikrotik</a></li>
										</ul>
									</li>
									<li><a href=#/page/3>Multimedia</a>
										<ul>
											<li><a href=?menu=product&category=20>Speaker</a></li>
											<li><a href=?menu=product&category=21>Earphone</a></li>
											<li><a href=?menu=product&category=22>Headphone</a></li>
											<li><a href=?menu=product&category=23>Microphone</a></li>
										</ul>
									</li>
								</ul>
							</li>
							<li><a href=#>Accesoris Lainnya</a>
								<ul>
									<li><a href=#/page/1>Flashdisk</a>
										<ul>
											<li><a href=?menu=product&category=30>Kingston</a></li>
											<li><a href=?menu=product&category=31>Trancend</a></li>
											<li><a href=?menu=product&category=32>Hewlett Packard</a></li>
											<li><a href=?menu=product&category=40>Sandisk</a></li>
											<li><a href=?menu=product&category=41>Advan</a></li>
											<li><a href=?menu=product&category=42>Toshiba</a></li>
										</ul>
									</li>
									<li><a href=#/page/2>Memory Cards</a>
										<ul>
											<li><a href=?menu=product&category=33>Sandisk</a></li>
											<li><a href=?menu=product&category=43>V-Gen</a></li>
											<li><a href=?menu=product&category=44>Trancend</a></li>
											<li><a href=?menu=product&category=45>Kingston</a></li>
										</ul>
									</li>
									<li><a href=#/page/3>Cable</a>
										<ul>
											<li><a href=?menu=product&category=34>USB</a></li>
											<li><a href=?menu=product&category=35>HDMI</a></li>
											<li><a href=?menu=product&category=36>Audio</a></li>
											<li><a href=?menu=product&category=16>Cable Network</a></li>
											<li><a href=?menu=product&category=18>Cable Tester</a></li>
										</ul>
									</li>
									<li><a href=?menu=product&category=37>Battery</a></li>
									<li><a href=?menu=product&category=38>Cooling Pad</a></li>
									<li><a href=?menu=product&category=46>Game Pad</a></li>
									<li><a href=?menu=product&category=39>Webcam</a></li>
								</ul>
							</li>
							<li><a href=?menu=contact class=selected><span></span>Contact</a></li>
							<li><a href=?menu=about><span></span>About Us</a></li>
							<li><a href=?menu=registrasi><span></span>Login</a></li>
					</ul>";
		}else if ($_GET['menu']=='about'){
		echo "<ul>
						<li><a href=?menu=home><span></span>Home</a></li>
							<li><a href=#>Products</a>
								<ul>
									<li><a href=#/page/1>Peripheral</a>
										<ul>
											<li><a href=?menu=product&category=1>Mouse</a></li>
											<li><a href=?menu=product&category=2>Keyboard</a></li>
											<li><a href=?menu=product&category=3>Hard Disk</a></li>
											<li><a href=?menu=product&category=4>Printer</a></li>
											<li><a href=?menu=product&category=6>Scanner</a></li>
											<li><a href=?menu=product&category=7>Power Bank</a></li>
											<li><a href=?menu=product&category=8>Charger</a></li>
											<li><a href=?menu=product&category=9>Adaptor</a></li>
											<li><a href=?menu=product&category=10>Converter</a></li>
											<li><a href=?menu=product&category=11>Stabilizer</a></li>
										</ul>
									</li>
									<li><a href=#/page/2>Networking</a>
										<ul>
											<li><a href=?menu=product&category=12>Modem</a></li>
											<li><a href=?menu=product&category=13>Router</a></li>
											<li><a href=?menu=product&category=14>Switch Hub</a></li>
											<li><a href=?menu=product&category=15>Access Point</a></li>
											<li><a href=?menu=product&category=17>Connector</a></li>
											<li><a href=?menu=product&category=19>Mikrotik</a></li>
										</ul>
									</li>
									<li><a href=#/page/3>Multimedia</a>
										<ul>
											<li><a href=?menu=product&category=20>Speaker</a></li>
											<li><a href=?menu=product&category=21>Earphone</a></li>
											<li><a href=?menu=product&category=22>Headphone</a></li>
											<li><a href=?menu=product&category=23>Microphone</a></li>
										</ul>
									</li>
								</ul>
							</li>
							<li><a href=#>Accesoris Lainnya</a>
								<ul>
									<li><a href=#/page/1>Flashdisk</a>
										<ul>
											<li><a href=?menu=product&category=30>Kingston</a></li>
											<li><a href=?menu=product&category=31>Trancend</a></li>
											<li><a href=?menu=product&category=32>Hewlett Packard</a></li>
											<li><a href=?menu=product&category=40>Sandisk</a></li>
											<li><a href=?menu=product&category=41>Advan</a></li>
											<li><a href=?menu=product&category=42>Toshiba</a></li>
										</ul>
									</li>
									<li><a href=#/page/2>Memory Cards</a>
										<ul>
											<li><a href=?menu=product&category=33>Sandisk</a></li>
											<li><a href=?menu=product&category=43>V-Gen</a></li>
											<li><a href=?menu=product&category=44>Trancend</a></li>
											<li><a href=?menu=product&category=45>Kingston</a></li>
										</ul>
									</li>
									<li><a href=#/page/3>Cable</a>
										<ul>
											<li><a href=?menu=product&category=34>USB</a></li>
											<li><a href=?menu=product&category=35>HDMI</a></li>
											<li><a href=?menu=product&category=36>Audio</a></li>
											<li><a href=?menu=product&category=16>Cable Network</a></li>
											<li><a href=?menu=product&category=18>Cable Tester</a></li>
										</ul>
									</li>
									<li><a href=?menu=product&category=37>Battery</a></li>
									<li><a href=?menu=product&category=38>Cooling Pad</a></li>
									<li><a href=?menu=product&category=46>Game Pad</a></li>
									<li><a href=?menu=product&category=39>Webcam</a></li>
								</ul>
							</li>
							<li><a href=?menu=contact><span></span>Contact</a></li>
							<li><a href=?menu=about class=selected><span></span>About Us</a></li>
							<li><a href=?menu=registrasi><span></span>Login</a></li>
					</ul>";
		}else if ($_GET['menu']=='registrasi'){
		echo "<ul>
						<li><a href=?menu=home><span></span>Home</a></li>
							<li><a href=#>Products</a>
								<ul>
									<li><a href=#/page/1>Peripheral</a>
										<ul>
											<li><a href=?menu=product&category=1>Mouse</a></li>
											<li><a href=?menu=product&category=2>Keyboard</a></li>
											<li><a href=?menu=product&category=3>Hard Disk</a></li>
											<li><a href=?menu=product&category=4>Printer</a></li>
											<li><a href=?menu=product&category=6>Scanner</a></li>
											<li><a href=?menu=product&category=7>Power Bank</a></li>
											<li><a href=?menu=product&category=8>Charger</a></li>
											<li><a href=?menu=product&category=9>Adaptor</a></li>
											<li><a href=?menu=product&category=10>Converter</a></li>
											<li><a href=?menu=product&category=11>Stabilizer</a></li>
										</ul>
									</li>
									<li><a href=#/page/2>Networking</a>
										<ul>
											<li><a href=?menu=product&category=12>Modem</a></li>
											<li><a href=?menu=product&category=13>Router</a></li>
											<li><a href=?menu=product&category=14>Switch Hub</a></li>
											<li><a href=?menu=product&category=16>Kabel Network</a></li>
											<li><a href=?menu=product&category=17>Connector</a></li>
											<li><a href=?menu=product&category=19>Mikrotik</a></li>
										</ul>
									</li>
									<li><a href=#/page/3>Multimedia</a>
										<ul>
											<li><a href=?menu=product&category=20>Speaker</a></li>
											<li><a href=?menu=product&category=21>Earphone</a></li>
											<li><a href=?menu=product&category=22>Headphone</a></li>
											<li><a href=?menu=product&category=23>Microphone</a></li>
										</ul>
									</li>
								</ul>
							</li>
							<li><a href=#>Accesoris Lainnya</a>
								<ul>
									<li><a href=#/page/1>Flashdisk</a>
										<ul>
											<li><a href=?menu=product&category=30>Kingston</a></li>
											<li><a href=?menu=product&category=31>Trancend</a></li>
											<li><a href=?menu=product&category=32>Hewlett Packard</a></li>
											<li><a href=?menu=product&category=40>Sandisk</a></li>
											<li><a href=?menu=product&category=41>Advan</a></li>
											<li><a href=?menu=product&category=42>Toshiba</a></li>
										</ul>
									</li>
									<li><a href=#/page/2>Memory Cards</a>
										<ul>
											<li><a href=?menu=product&category=33>Sandisk</a></li>
											<li><a href=?menu=product&category=43>V-Gen</a></li>
											<li><a href=?menu=product&category=44>Trancend</a></li>
											<li><a href=?menu=product&category=45>Kingston</a></li>
										</ul>
									</li>
									<li><a href=#/page/3>Cable</a>
										<ul>
											<li><a href=?menu=product&category=34>USB</a></li>
											<li><a href=?menu=product&category=35>HDMI</a></li>
											<li><a href=?menu=product&category=36>Audio</a></li>
											<li><a href=?menu=product&category=16>Cable Network</a></li>
											<li><a href=?menu=product&category=18>Cable Tester</a></li>
										</ul>
									</li>
									<li><a href=?menu=product&category=37>Battery</a></li>
									<li><a href=?menu=product&category=38>Cooling Pad</a></li>
									<li><a href=?menu=product&category=46>Game Pad</a></li>
									<li><a href=?menu=product&category=39>Webcam</a></li>
								</ul>
							</li>
							<li><a href=?menu=contact><span></span>Contact</a></li>
							<li><a href=?menu=about><span></span>About Us</a></li>
							<li><a href=?menu=registrasi class=selected><span></span>Login</a></li>
					</ul>";
		}else{
		echo "<ul>
						<li><a href=?menu=home class=selected><span></span>Home</a></li>
							<li><a href=#>Products</a>
								<ul>
									<li><a href=#/page/1>Peripheral</a>
										<ul>
											<li><a href=?menu=product&category=1>Mouse</a></li>
											<li><a href=?menu=product&category=2>Keyboard</a></li>
											<li><a href=?menu=product&category=3>Hard Disk</a></li>
											<li><a href=?menu=product&category=4>Printer</a></li>
											<li><a href=?menu=product&category=6>Scanner</a></li>
											<li><a href=?menu=product&category=7>Power Bank</a></li>
											<li><a href=?menu=product&category=8>Charger</a></li>
											<li><a href=?menu=product&category=9>Adaptor</a></li>
											<li><a href=?menu=product&category=10>Converter</a></li>
											<li><a href=?menu=product&category=11>Stabilizer</a></li>
										</ul>
									</li>
									<li><a href=#/page/2>Networking</a>
										<ul>
											<li><a href=?menu=product&category=12>Modem</a></li>
											<li><a href=?menu=product&category=13>Router</a></li>
											<li><a href=?menu=product&category=14>Switch Hub</a></li>
											<li><a href=?menu=product&category=15>Access Point</a></li>
											<li><a href=?menu=product&category=17>Connector</a></li>
											<li><a href=?menu=product&category=19>Mikrotik</a></li>
										</ul>
									</li>
									<li><a href=#/page/3>Multimedia</a>
										<ul>
											<li><a href=?menu=product&category=20>Speaker</a></li>
											<li><a href=?menu=product&category=21>Earphone</a></li>
											<li><a href=?menu=product&category=22>Headphone</a></li>
											<li><a href=?menu=product&category=23>Microphone</a></li>
										</ul>
									</li>
								</ul>
							</li>
							<li><a href=#>Accesoris Lainnya</a>
								<ul>
									<li><a href=#/page/1>Flashdisk</a>
										<ul>
											<li><a href=?menu=product&category=30>Kingston</a></li>
											<li><a href=?menu=product&category=31>Trancend</a></li>
											<li><a href=?menu=product&category=32>Hewlett Packard</a></li>
											<li><a href=?menu=product&category=40>Sandisk</a></li>
											<li><a href=?menu=product&category=41>Advan</a></li>
											<li><a href=?menu=product&category=42>Toshiba</a></li>
										</ul>
									</li>
									<li><a href=#/page/2>Memory Cards</a>
										<ul>
											<li><a href=?menu=product&category=33>Sandisk</a></li>
											<li><a href=?menu=product&category=43>V-Gen</a></li>
											<li><a href=?menu=product&category=44>Trancend</a></li>
											<li><a href=?menu=product&category=45>Kingston</a></li>
										</ul>
									</li>
									<li><a href=#/page/3>Cable</a>
										<ul>
											<li><a href=?menu=product&category=34>USB</a></li>
											<li><a href=?menu=product&category=35>HDMI</a></li>
											<li><a href=?menu=product&category=36>Audio</a></li>
											<li><a href=?menu=product&category=16>Cable Network</a></li>
											<li><a href=?menu=product&category=18>Cable Tester</a></li>
										</ul>
									</li>
									<li><a href=?menu=product&category=37>Battery</a></li>
									<li><a href=?menu=product&category=38>Cooling Pad</a></li>
									<li><a href=?menu=product&category=46>Game Pad</a></li>
									<li><a href=?menu=product&category=39>Webcam</a></li>
								</ul>
							</li>
							<li><a href=?menu=contact><span></span>Contact</a></li>
							<li><a href=?menu=about><span></span>About Us</a></li>
							<li><a href=?menu=registrasi><span></span>Login</a></li>
					</ul>";
		}
		?>
            <br style="clear: left" />
        </div> <!-- end of ddsmoothmenu -->
        <div id="menu_second_bar">
        	<div id="top_shopping_cart">
            	Shopping Cart: <strong>3 Products</strong> ( <a href="#">Show Cart</a> )
            </div>
        	<div id="templatemo_search">
                <form action="#" method="get">
                  <input type="text" value="Search" name="keyword" id="keyword" title="keyword" onfocus="clearText(this)" onblur="clearText(this)" class="txt_field" />
                  <input type="submit" name="Search" value=" Search " alt="Search" id="searchbutton" title="Search" class="sub_btn"  />
                </form>
            </div>
            <div class="cleaner"></div>
    	</div>
    </div> <!-- END of templatemo_menu -->

	
    <div id="templatemo_middle" class="carousel">
    	<div class="panel">
		
				<div class="details_wrapper">
					<div class="details">
					
					<?php
					$sql=mysql_query("SELECT * FROM slider ORDER BY id DESC");
					while ($rowsql=mysql_fetch_array($sql)) {
					?>
						<div class="detail">
							<h2><?php echo $rowsql['nama'];?></h2>
                            <p><?php echo $rowsql['isi'];?></p>
							<a href="#" title="Read more" class="more"></a>
						</div><!-- /detail -->
					<?php
					}
					?>
					
						
						
					</div><!-- /details -->
				</div><!-- /details_wrapper -->
				
				<div class="paging">
					<div id="numbers"></div>
					<a href="javascript:void(0);" class="previous" title="Previous" >Previous</a>
					<a href="javascript:void(0);" class="next" title="Next">Next</a>
				</div><!-- /paging -->
				
				<a href="javascript:void(0);" class="play" title="Turn on autoplay">Play</a>
				<a href="javascript:void(0);" class="pause" title="Turn off autoplay">Pause</a>
				
			</div><!-- /panel -->

				
			<div class="backgrounds">
			<?php
					$sql=mysql_query("SELECT * FROM slider ORDER BY id DESC");
					while ($rowsql=mysql_fetch_array($sql)) {
			?>	
				
				<div class="item item_1">
					<img src="images/slider/<?php echo $rowsql['gambar'];?>" alt="Slider 01" />
				</div><!-- /item -->
			<?php }?>
			</div><!-- /backgrounds -->
			
		<div class="cleaner"></div>
    </div> <!-- END of templatemo_middle -->
    
    <div id="templatemo_main">
   		<div id="sidebar" class="float_l">
        	<div class="sidebar_box"><span class="bottom"></span>
            	<h3>Categories</h3>   
                <div class="category"> 
                	<ul class="sidebar_list">
                    	<li class="first"><a href="#">Peripheral</a></li>
                        <li><a href="#">Networking</a></li>
                        <li><a href="#">Multimedia</a></li>
                        <li><a href="#">Flash Disk</a></li>
                        <li><a href="#">Memory Cards</a></li>
                        <li class="last"><a href="#">Cable</a></li>
                    </ul>
                </div>
            </div>
            <div class="sidebar_boxpartners"><span class="bottom"></span>
            	<h3>Partners </h3>   
                <div class="content"> 
                	<div class="bs_box">
                    	<a href="http://www.canon.co.id/"><img src="css/images/partnerscanon.png" alt="Image 01" width="200" height="52" /></a>
                        <div class="cleaner"></div>
                    </div>
                    <div class="bs_box">
                    	<a href="http://www.kingston.com/"><img src="css/images/partnerskingston.png" width="200" height="52" alt="Image 02" /></a>
                        <div class="cleaner"></div>
                    </div>
                    <div class="bs_box">
                    	<a href="http://www.toshiba.com/"><img src="css/images/partnerstoshiba.png" width="200" height="52" alt="Image 03" /></a>
                        <div class="cleaner"></div>
                    </div>
                    <div class="bs_box">
                    	<a href="http://www.acer.co.id/"><img src="css/images/partnersacer.png" width="200" height="52" alt="Image 04" /></a>
                        <div class="cleaner"></div>
                    </div>
					<div class="bs_box">
                    	<a href="http://www.simbadda.co.id/"><img src="css/images/partnerssimbadda.png" width="200" height="52" alt="Image 04" /></a>
                        <div class="cleaner"></div>
                    </div>
					<div class="bs_box">
                    	<a href="http://www.logitech.com/"><img src="css/images/partnerslogitech.png" width="200" height="52" alt="Image 04" /></a>
                        <div class="cleaner"></div>
                    </div>
					<div class="bs_box">
                    	<a href="http://www.geniusnet.com/"><img src="css/images/partnersgenius.png" width="200" height="52" alt="Image 04" /></a>
                        <div class="cleaner"></div>
                    </div>
					<div class="bs_box">
                    	<a href="http://www.epson.co.id/"><img src="css/images/partnersepson.png" width="200" height="60" alt="Image 04" /></a>
                        <div class="cleaner"></div>
                    </div>
					<div class="bs_box">
                    	<a href="http://www8.hp.com/"><img src="css/images/partnershp.png" width="200" height="75" alt="Image 04" /></a>
                        <div class="cleaner"></div>
                    </div>
					<div class="bs_box">
                    	<a href="http://www.sandisk.com/"><img src="css/images/partnerssandisk.png" width="200" height="52" alt="Image 04" /></a>
                        <div class="cleaner"></div>
						<br>
                    </div>
                </div>
            </div>
        </div>
		<?php include "menu.php";?>		
        <div class="cleaner"></div>
    </div> <!-- END of templatemo_main -->
    
    <div id="templatemo_footer">
    	<p>
			<a href="index.php">Home</a> | <a href="?menu=contact">About</a> | <a href="?menu=about">About Us</a> | <a href="?menu=registrasi">Login</a>
		</p>
    	Copyright © 2013 <a href="#">Prokhus UIN Sunan Kalijaga Yogyakarta</a> | Designed by <a href="#" target="_parent">Fandy Saputra</a>
    </div> <!-- END of templatemo_footer -->
    
</div> <!-- END of templatemo_wrapper -->

</body>
</html>