<section>
	<div id="preloader">
		<div id="ctn-preloader" class="ctn-preloader">
			<div class="animation-preloader">
				<div class="spinner"></div>
				<div class="txt-loading">
					<span data-text-preloader="3" class="letters-loading">3</span>
					<span data-text-preloader="F" class="letters-loading">F</span>
					<span data-text-preloader="" class="letters-loading"></span>
					<span data-text-preloader="P" class="letters-loading">P</span>
					<span data-text-preloader="U" class="letters-loading">U</span>
				</div>
			</div>
			<div class="loader-section section-left"></div>
			<div class="loader-section section-right"></div>
		</div>
	</div>
</section>
<header class="header-style-01">
	<nav class="main-menu sticky-header">
		<div class="main-menu-wrapper">
			<div class="main-menu-logo">
				<a href="<?php echo $ayarlar["strURL"]; ?>/index">
					<img src="<?php echo $ayarlar["strURL"]; ?>/images/logo.png" width="165" height="72" alt="logo">
				</a>
			</div>
			<ul class="main-nav-menu">
				<li><a href="<?php echo $ayarlar["strURL"]; ?>/index"><?php echo LANG("Anasayfa", $lang); ?></a></li>
				<li>
					<a href="<?php echo $ayarlar["strURL"]; ?>/hakkimizda"><?php echo LANG("Hakkımızda", $lang); ?></a>  
				</li>
				 
				<li><a href="<?php echo $ayarlar["strURL"]; ?>/projeler"><?php echo LANG("Projeler", $lang); ?></a></li>
					<li class="menu-has-sub has-sub-child"><a href="<?php echo $ayarlar["strURL"]; ?>/urunler"><?php echo LANG("Ürünler", $lang); ?></a>
									<ul>
											<?php
									$veri_cek = $db->query("SELECT * FROM kategoriler WHERE  altkategori_id = 0  AND dil_id = '{$lang}' ORDER BY kategori_ust_id ASC LIMIT 999");
									if ($veri_cek->rowCount()){
									foreach($veri_cek as $veri_listele){
					?>
							<li><a href="<?php echo $ayarlar["strURL"]; ?>/kategori/<?php echo $veri_listele["kategori_seo"]; ?>"><?php echo 	$veri_listele["kategori_baslik"]; ?></a></li>
							<?php
												}
											}else{
												"Listelenecek veri bulunamadı.";
											}
							?>	
									</ul>
								</li>
				<li><a href="<?php echo $ayarlar["strURL"]; ?>/haberler"><?php echo LANG("Medya", $lang); ?></a></li>
				<li><a href="<?php echo $ayarlar["strURL"]; ?>/iletisim"><?php echo LANG("İletişim", $lang); ?></a></li>
			</ul>
			<div class="main-menu-right">
				<a href="#" class="mobile-nav-toggler">
					<span></span>
					<span></span>
					<span></span>
				</a> 
					<a href="<?php echo $ayarlar["strURL"]; ?>/lang.php?l=tr&return=<?php echo $_SERVER["REDIRECT_URL"];?>" class="search-toggler"><i class="flag-icon flag-icon-tr icon-2x"></i></a>
					<a href="<?php echo $ayarlar["strURL"]; ?>/lang.php?l=en&return=<?php echo $_SERVER["REDIRECT_URL"];?>" class="search-toggler"><i class="flag-icon flag-icon-en icon-2x"></i></a>
					<a href="<?php echo $ayarlar["strURL"]; ?>/lang.php?l=sa&return=<?php echo $_SERVER["REDIRECT_URL"];?>" class="search-toggler"><i class="flag-icon flag-icon-sa icon-2x"></i></a>
					<a href="<?php echo $ayarlar["strURL"]; ?>/lang.php?l=ru&return=<?php echo $_SERVER["REDIRECT_URL"];?>" class="search-toggler">	<i class="flag-icon flag-icon-ru icon-2x"></i></a>
					<a style="    font-size: 18px;" href="<?php echo $ayarlar["iStatusCars"]; ?>" class="search-toggler2"> <i class="far fa-file-pdf"> </i> <?php echo LANG("Katalog", $lang); ?></a>
				

				
				<div class="header-contact-info">
					<div class="header-contact-info-icon">
						<i class="far fa-file-alt"></i>
					</div>
					<div class="header-contact-info-text">
						<p class="call-text"><?php echo LANG("E-Katalog", $lang); ?></p>
						<h5 class="phone-no"><a href="<?php echo $ayarlar["iStatusCars"]; ?>"><?php echo LANG("İndirmek İçin Tıklayın.", $lang); ?></a></h5>
					</div>
				</div>
			</div>
		</div>
	</nav>
</header>