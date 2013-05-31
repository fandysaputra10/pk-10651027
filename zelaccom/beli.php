<div id="content" class="float_r">
        	<h1>Product Kami</h1>
			<?php
			include "class.php";
			include "connect.php";
			$p      = new Paging6;
			$batas  = 9;
			$posisi = $p->cariPosisi($batas);
			$sql=mysql_query("SELECT * FROM product ORDER BY id_product DESC LIMIT $posisi, $batas");
			while ($row=mysql_fetch_array($sql)){
			?>
			<div id="product_fandy">
            <div class="product_box">
				<a href="#"><img src="images/product/<?php echo $row['gambar']; ?>" alt="Image 01" /></a>
                <h3><?php echo $row['nama_product']; ?></h3>
                <p class="product_price">Rp.<?php echo $row['price'];?></p>
				<p>Stok yang ada<strong> <?php echo $row['stok'];?></strong></p>
				<a href="?menu=shoppingcart" class="add_to_card"><img src="images/cart.png"></a>
                <a href="?menu=productdetail" class="detail">Detail</a>
			</div>
			</div>
			<?php } ?>  
			<div class="cleaner"></div>
            <?php
			$jmldata = mysql_num_rows(mysql_query("select * from product order by id"));
			$jmlhalaman  = $p->jumlahHalaman($jmldata, $batas);
			$linkHalaman = $p->navHalaman($_GET[hal], $jmlhalaman);
			echo "<hr /><p align=\"center\">$linkHalaman</p>";
			?>      	
	</div>