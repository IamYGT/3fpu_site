<footer class="footer bg-cover" data-background="<?php echo $ayarlar["strURL"]; ?>/images/bg/5.jpg" data-overlay-dark="98">
	<div class="footer-main-area">
		<div class="footer-section-obj1">
			<img src="<?php echo $ayarlar["strURL"]; ?>/images/objects/footer-obj1.png" alt="<?php echo $ayarlar["strTitle"]; ?>">
		</div>
		<div class="footer-section-obj2">
			<img src="<?php echo $ayarlar["strURL"]; ?>/images/objects/footer-obj2.png" alt="<?php echo $ayarlar["strTitle"]; ?>">
		</div>
		<div class="container">
			<div class="row pdb-65">
				<div class="col-xl-4 col-lg-6">
					<div class="widget footer-widget mrr-60 mrr-md-0">
						<div class="footer-logo">
							<img src="<?php echo $ayarlar["strURL"]; ?>/images/logo.png" alt="<?php echo $ayarlar["strTitle"]; ?> Logo">
						</div>
						<?php echo  $ayarlar["deneyim_".$lang];  ?>
						<ul class="social-list">
							<li><a href="<?php echo $ayarlar["strFacebook"]; ?>"><i class="fab fa-facebook-f"></i></a></li>
							<li><a href="https://wa.me/<?php echo  $ayarlar["strWhatsappPhone_".$lang];  ?>"><i class="fab fa-whatsapp"></i></a></li>
							<li><a href="<?php echo $ayarlar["strInstagram"]; ?>"><i class="fab fa-instagram"></i></a></li>
							<li><a href="<?php echo $ayarlar["strYoutube"]; ?>"><i class="fab fa-linkedin"></i></a></li>
						</ul>
					</div>
				</div>
				<div class="col-xl-2 col-lg-6">
					<div class="widget footer-widget">
						<h5 class="widget-title text-white mrb-30"><?php echo LANG("Hızlı Menü",$lang); ?></h5>
						<ul class="footer-widget-list">
						<li><a href="<?php echo $ayarlar["strURL"]; ?>/index"><?php echo LANG("Anasayfa",$lang); ?></a></li>
						<li><a href="<?php echo $ayarlar["strURL"]; ?>/hakkimizda"><?php echo LANG("Hakkımızda",$lang); ?></a></li>
					 	<li><a href="<?php echo $ayarlar["strURL"]; ?>/projeler"><?php echo LANG("Projeler",$lang); ?></a></li>
 					 	<li><a href="<?php echo $ayarlar["strURL"]; ?>/haberler"><?php echo LANG("Medya Ağımız",$lang); ?></a></li>
 					 	<li><a href="<?php echo $ayarlar["strURL"]; ?>/iletisim"><?php echo LANG("İletişim",$lang); ?></a></li>
						</ul>
					</div>
				</div>
				<div class="col-xl-3 col-lg-6">
					<div class="widget footer-widget">
						<h5 class="widget-title text-white mrb-30"><?php echo LANG("Ürünler",$lang); ?></h5>
						<ul class="footer-widget-list">
							<?php
									$veri_cek = $db->query("SELECT * FROM projeler WHERE proje_durum = 1 AND dil_id = '{$lang}' ORDER BY proje_ust_id ASC LIMIT 6");
									if ($veri_cek->rowCount()){
									foreach($veri_cek as $veri_listele){
					?>
							<li><a href="<?php echo $ayarlar["strURL"]; ?>/urun/<?php echo $veri_listele["proje_seo"]; ?>"><?php echo 	$veri_listele["proje_baslik"]; ?></a></li>
							<?php
												}
											}else{
												"Listelenecek veri bulunamadı.";
											}
							?>						</ul>
					</div>
				</div>
				<div class="col-xl-3 col-lg-6">
					<div class="widget footer-widget mrr-30 mrr-md-0">
						<h5 class="widget-title text-white mrb-30"><?php echo LANG("İletişim",$lang); ?></h5>
						<address class="mrb-0">
							<p><?php echo $ayarlar["strAddress"]; ?></p>
							<div class="mrb-10"><a href="tel:<?php echo $ayarlar["strPhone"]; ?>"><i class="fas fa-phone-alt mrr-10"></i><?php echo $ayarlar["strPhone"]; ?></a></div>
							<div class="mrb-10"><a href="mailto:<?php echo $ayarlar["strMail"]; ?>"><i class="fas fa-envelope mrr-10"></i><?php echo $ayarlar["strMail"]; ?></a></div>
							<div class="mrb-0"><a href="#"><i class="fas fa-globe mrr-10"></i><?php echo $ayarlar["strURL"]; ?></a></div>
						</address>
					</div>
				</div>

			</div>
			<div class="row pdt-30 pdb-30 footer-copyright-area">
				<div class="col-xl-12">
					<div class="text-center">
						<span>Copyright by <?php echo $ayarlar["strTitle"]; ?> © <?php echo date("Y"); ?>. Her Hakkı Saklıdır.<br> Design: <a href="https://www.memsidea.com" rel="dofollow">Memsidea Group</a></span>
					</div>
				</div>
			</div>
		</div>
	</div>
</footer>
<div class="mobile-nav-wrapper">
	<div class="mobile-nav-overlay mobile-nav-toggler"></div>
	<div class="mobile-nav-content">
		<a href="#" class="mobile-nav-close mobile-nav-toggler">
			<span></span>
			<span></span>
		</a>
		<div class="logo-box">
			<a href="<?php echo $ayarlar["strURL"]; ?>/index" aria-label="logo image">
				<img src="<?php echo $ayarlar["strURL"]; ?>/images/logo.png" width="165" height="72" alt="logo">
			</a>
		</div>
		<div class="mobile-nav-container"></div>
		<ul class="list-items mobile-sidebar-contact">
					<li style="    margin-bottom: 20px;"> 
						<p style="      text-align: center;  margin-bottom: 2px;     font-size: 18px;" class="call-text"><?php echo LANG("E-Katalog", $lang); ?></p>
						<h5 style="    text-align: center;" class="phone-no"><a href="<?php echo $ayarlar["iStatusCars"]; ?>"><?php echo LANG("İndirmek İçin Tıklayın.", $lang); ?></a></h5>
					 </li>

			<li><span class="fa fa-map-marker-alt mrr-10 text-primary-color"></span><?php echo $ayarlar["strAddress"]; ?></li>
			<li><span class="fas fa-envelope mrr-10 text-primary-color"></span><a href="mailto:<?php echo $ayarlar["strMail"]; ?>"><?php echo $ayarlar["strMail"]; ?></a></li>
			<li><span class="fas fa-phone-alt mrr-10 text-primary-color"></span><a href="tel:<?php echo $ayarlar["strPhone"]; ?>"><?php echo $ayarlar["strPhone"]; ?></a></li>
		</ul>
		<ul class="social-list list-primary-color">
			<li><a href="<?php echo $ayarlar["strFacebook"]; ?>"><i class="fab fa-facebook"></i></a></li>
			<li><a href="<?php echo $ayarlar["strTwitter"]; ?>"><i class="fab fa-twitter"></i></a></li>
			<li><a href="<?php echo $ayarlar["strInstagram"]; ?>"><i class="fab fa-instagram"></i></a></li>
			<li><a href="<?php echo $ayarlar["strYoutube"]; ?>"><i class="fab fa-youtube"></i></a></li>
		</ul>
	</div>
</div>
<div class="anim-scroll-to-top">
	<svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
		<path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
	</svg>
</div>
<script src="<?php echo $ayarlar["strURL"]; ?>/js/jquery-3.6.0.min.js"></script>
<script src="<?php echo $ayarlar["strURL"]; ?>/js/jquery.nice-select.min.js"></script>
<script src="<?php echo $ayarlar["strURL"]; ?>/js/bootstrap.min.js"></script>
<script src="<?php echo $ayarlar["strURL"]; ?>/js/jquery.appear.min.js"></script>
<script src="<?php echo $ayarlar["strURL"]; ?>/js/wow.min.js"></script>
<script src="<?php echo $ayarlar["strURL"]; ?>/js/owl.carousel.min.js"></script>
<script src="<?php echo $ayarlar["strURL"]; ?>/js/jquery.event.move.js"></script>
<script src="<?php echo $ayarlar["strURL"]; ?>/js/jquery.twentytwenty.js"></script>
<script src="<?php echo $ayarlar["strURL"]; ?>/js/tilt.jquery.min.js"></script>
<script src="<?php echo $ayarlar["strURL"]; ?>/js/magnific-popup.min.js"></script>
<script src="<?php echo $ayarlar["strURL"]; ?>/js/backtotop.js"></script>
<script src="<?php echo $ayarlar["strURL"]; ?>/js/trigger.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>
<script>$(document).ready(function() {
	$(".gallery").magnificPopup({
		delegate: "a",
		type: "image",
		tLoading: "Loading image #%curr%...",
		mainClass: "mfp-img-mobile",
		gallery: {
			enabled: true,
			navigateByImgClick: true,
			preload: [0, 1] // Will preload 0 - before current, and 1 after the current image
		},
		image: {
			tError: '<a href="%url%">The image #%curr%</a> could not be loaded.'
		}
	});
});
</script>
