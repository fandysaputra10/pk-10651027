   	<div id="content" class="float_r">
	<h1>Tentang Kami Dan Cara Pembelian</h1>
   <?php
	include "connect.php";
		$sql = mysql_query ("SELECT * FROM about");
		while ($data=mysql_fetch_array($sql)) {
	?>
            <div class="content_half float_l">
			<h5>Tentang Sejarah berdirinya <b>Zelaccom</b></h5>
                <div id="contact_form">
				<?php echo $data['isi'];?>
					</form>
                </div>
            </div>
			
            <div class="content_half float_r">
			<h5>Apabila anda kesulitan dalam membeli produk kami, Berikut <strong>Aturan</strong> pembelian toko <b>Zelaccom</b></h5>
                <div id="contact_form">
				<?php echo $data['carabeli'];?>
					</form>
                </div>
            </div>
		<?php } ?>
        <div class="cleaner"></div>
	</div>