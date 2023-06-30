<?php require("include/baglan.php"); include("include/fonksiyon.php"); include_once("inc.lang.php"); ?>
<!DOCTYPE html>
<html lang="<?php echo $lang?>">
<head>
	<title><?php echo LANG("İletişim",$lang); ?> - <?php echo $ayarlar["strTitle"]; ?></title>
 <?php include 'css.php'; ?>
</head>
<body>
 <?php include 'ust.php'; ?>
	<section class="page-title-section">
		<div class="container">
			<div class="row">
				<div class="col-xl-12">
					<div class="breadcrumb-area">
						<h2 class="page-title"><?php echo LANG("İletişim",$lang); ?></h2>
						<ul class="breadcrumbs-link">
							<li><a href="<?php echo $ayarlar["strURL"]; ?>/index"><?php echo LANG("Anasayfa",$lang); ?></a></li>
							<li class="active"><?php echo LANG("İletişim",$lang); ?></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</section>
 	<section class="contact-section pdt-110 pdb-110" data-background="<?php echo $ayarlar["strURL"]; ?>/images/bg/abs-bg7.png" data-overlay-light="2">
		<div class="container">
			<div class="row mrb-80">
				<div class="col-md-12 col-lg-12 col-xl-4">
					<h5 class="side-line-left  mrt-0 mrb-5"><?php echo LANG("İletişim",$lang); ?></h5>
					<h2 class="faq-title mrb-30"><?php echo LANG("Bir sorunuz mu var?",$lang); ?></h2>
					<ul class="social-list list-lg list-primary-color list-flat mrb-lg-60 clearfix">
						<li><a href="<?php echo $ayarlar["strFacebook"]; ?>"><i class="fab fa-facebook"></i></a></li>
						<li><a href="<?php echo $ayarlar["strTwitter"]; ?>"><i class="fab fa-twitter"></i></a></li>
						<li><a href="<?php echo $ayarlar["strInstagram"]; ?>"><i class="fab fa-instagram"></i></a></li>
						<li><a href="<?php echo $ayarlar["strYoutube"]; ?>"><i class="fab fa-youtube"></i></a></li>
					</ul>
				</div>
				<div class="col-md-12 col-lg-12 col-xl-8">
					<div class="row">
						<div class="col-lg-12 col-xl-12">
							<div class="contact-block d-flex mrb-30">
								<div class="contact-icon">
									<i class="base-icon-map"></i>
								</div>
								<div class="contact-details mrl-30">
									<h5 class="icon-box-title mrb-10"><?php echo LANG("Adres",$lang); ?></h5>
									<p class="mrb-0"><?php echo $ayarlar["strAddress"]; ?></p>
								</div>
							</div>
						</div>

						<div class="col-lg-6 col-xl-6">
							<div class="contact-block d-flex mrb-30">
								<div class="contact-icon">
									<i class="base-icon-094-email-2"></i>
								</div>
								<div class="contact-details mrl-30">
									<h5 class="icon-box-title mrb-10"><?php echo LANG("Eposta",$lang); ?></h5>
									<p class="mrb-0"><a style="color:#555;" href="mailto:<?php echo $ayarlar["strMail"]; ?>"> <?php echo $ayarlar["strMail"]; ?> </a></p>
								</div>
							</div>
						</div>
						<div class="col-lg-6 col-xl-6">
							<div class="contact-block d-flex mrb-30">
								<div class="contact-icon">
									<i class="base-icon-phone-2"></i>
								</div>
								<div class="contact-details mrl-30">
									<h5 class="icon-box-title mrb-10"><?php echo LANG("Telefon",$lang); ?></h5>
									<p class="mrb-0"><a style="color:#555;" href="tel:<?php echo $ayarlar["strPhone"]; ?>"> <?php echo $ayarlar["strPhone"]; ?> </a></p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-xl-6">
					<div class="contact-form">
						<form action="#">
							<div class="row">
								<div class="col-lg-6">
									<div class="form-group mrb-25">
										<input type="text" placeholder="<?php echo LANG("İsminiz",$lang); ?>" class="form-control">
									</div>
								</div>
								<div class="col-lg-6">
									<div class="form-group mrb-25">
										<input type="text" placeholder="<?php echo LANG("Telefon",$lang); ?>" class="form-control">
									</div>
								</div>
								<div class="col-lg-12">
									<div class="form-group mrb-25">
										<input type="email" placeholder="<?php echo LANG("Eposta",$lang); ?>" class="form-control">
									</div>
								</div>
								<div class="col-lg-12">
									<div class="form-group mrb-25">
										<textarea rows="5" placeholder="<?php echo LANG("Mesajınız",$lang); ?>" class="form-control"></textarea>
									</div>
								</div>
								<div class="col-lg-8">
									<div class="form-group">
										<button type="submit" class="animate-btn-style3 btn-md mrb-lg-60"><?php echo LANG("Gönder",$lang); ?></button>
									</div>
								</div>
							</div>
						</form>
					</div>
				</div>
				<div class="col-xl-6">
					<!-- Google Map Start -->
					<div class="mapouter fixed-height">
						<div class="gmap_canvas">
							<iframe id="gmap_canvas" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12732.702012162572!2d37.3342805!3d37.0771267!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xc5c14eb895f9fdb3!2s3F%20YAPI%20TASARIM%20Ve%20%C4%B0%C3%A7%20M%C4%B0MARLIK%20MURAT%20%C3%96ZASLAN!5e0!3m2!1str!2str!4v1675250843866!5m2!1str!2str"></iframe>

						</div>
					</div>
					<!-- Google Map End -->
				</div>
			</div>
		</div>
	</section>
	<?php include 'alt.php'; ?>
</body>

</html>
