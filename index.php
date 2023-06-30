<?php require("include/baglan.php");
include("include/fonksiyon.php");
include_once("inc.lang.php"); ?>
<!DOCTYPE html>
<html lang="<?php echo $lang ?>">

<head>
	<title><?php echo LANG("Anasayfa", $lang); ?> - <?php echo $ayarlar["strTitle"]; ?></title>
	<?php include 'css.php'; ?>
</head> 
<body>
	<?php include 'ust.php'; ?>
	<section class="home_banner_01">
		<div class="home-carousel owl-theme owl-carousel">
			<?php
			$veri_cek = $db->query("SELECT * FROM slayt WHERE slayt_durum = 1 AND dil_id = '{$lang}' ORDER BY slayt_ust_id ASC LIMIT 99");
			if ($veri_cek->rowCount()) {
				foreach ($veri_cek as $veri_listele) {
			?>
					<div class="slide-item">
						<div class="image-layer" data-background="<?php echo $ayarlar["strURL"]; ?>/uploads/sliders/<?php echo $veri_listele["slayt_resim"]; ?>"></div>
						<div class="auto-container">
							<div class="row clearfix">
								<div class="col-xl-8 col-lg-12 col-md-12 content-column">
									<div class="content-box">
										<h1 class="home-carousel-title"><?php echo 	$veri_listele["slayt_baslik"]; ?></h1>
										<p class="home-carousel-text"><?php echo 	$veri_listele["slayt_aciklama"]; ?></p>
										<div class="btn-box">
											<a href="<?php echo 	$veri_listele["slayt_butonlink"]; ?>" class="animate-btn-style3"><?php echo 	$veri_listele["slayt_buton"]; ?></a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
			<?php
				}
			} else {
				"Listelenecek veri bulunamadı.";
			}
			?>
		</div>
	</section>
	<section class="feature-style1-section">
		<div class="custom-md-container">
			<div class="feature-box-area-style1 bg-no-repeat bg-cover bg-pos-cc mrt-sm-110" data-background="images/bg/feature-obj1.png">
				<div class="row">

					<div class="col-xl-3 col-lg-4 col-md-6">
						<div class="feature-box-style1">
							<div class="inner-box">
								<div class="feature-box-icon">
									<img style="height: 60px;" src="images/ikon/1.png" alt="Özel Tasarımlar">
								</div>
								<h6 class="title"><?php echo LANG("Özel Tasarımlar",$lang); ?></h6>
							</div>
						</div>
					</div>
					<div class="col-xl-3 col-lg-4 col-md-6">
						<div class="feature-box-style1">
							<div class="inner-box">
								<div class="feature-box-icon">
									<img style="height: 60px;"  src="images/ikon/3.png" alt="Özel Tasarımlar">
								</div>
								<h6 class="title"><?php echo LANG("Danışmanlık",$lang); ?></h6>
							</div>
						</div>
					</div>
					<div class="col-xl-3 col-lg-4 col-md-6">
						<div class="feature-box-style1">
							<div class="inner-box">
								<div class="feature-box-icon">
									<img style="height: 60px;" src="images/ikon/2.png" alt="Özel Tasarımlar">
								</div>
								<h6 class="title"><?php echo LANG("Global Ürünler",$lang); ?></h6>
							</div>
						</div>
					</div>
					<div class="col-xl-3 col-lg-4 col-md-6">
						<div class="feature-box-style1">
							<div class="inner-box">
								<div class="feature-box-icon">
									<img style="height: 60px;"  src="images/ikon/4.png" alt="Özel Tasarımlar">
								</div>
								<h6 class="title"><?php echo LANG("Doğa Dostu Çözümler",$lang); ?></h6>
							</div>
						</div>
					</div>

				</div>
			</div>
		</div>
	</section>
	<section class="why-choose-us-style1-section bg-silver-light pdt-110 pdb-110 bg-no-repeat bg-cover bg-pos-cb" data-background="images/bg/abs-bg1.png" data-overlay-light="3">
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-lg-8 col-xl-6 wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
					<div class="about-image-box-style3 dot-circle mrb-lg-60">
						<img class="about-image1 img-full js-tilt d-none d-md-block d-lg-block d-xl-block" src="images/about/about-sm2.jpg" alt="">
						<img class="about-image2 img-full" src="images/about/about-lg2.jpg" alt="">
 					</div>
				</div>
				<div class="col-md-12 col-lg-10 col-xl-6 wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
					<h5 class="side-line-left text-primary-color mrb-10">3F PU</h5>
					<h2 class="mrb-35 mrb-lg-40"><?php echo LANG("bizi daha yakından tanıyın",$lang); ?></h2>
					<p class="mrb-40"> <?php echo  $ayarlar["egitim_".$lang];  ?></p>
					 
				</div>
			</div>
		</div>
	</section>


	<section class="bg-secondary-color bg-no-repeat bg-cover bg-pos-cb pdt-105" data-background="images/bg/abs-bg3.png" data-overlay-dark="4">
		<div class="section-title mrb-60 mrb-md-15 wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
			<div class="container">
				<div class="row align-items-end">
					<div class="col-xl-8 col-lg-7 col-md-12">
						<div class="title-box-center">
							<h5 style="color: white" class="side-line-left mrb-10">3F PU</h5>
							<h2 class="text-white mrb-md-40 mrb-sm-30"><?php echo LANG("Projeler",$lang); ?></h2>
						</div>
					</div>
					 
				</div>
			</div>
		</div>
		<div class="section-content">
			<div class="container">
				<div class="row">
					<div class="col-xl-12">
						<div class="project-item-style1-wrapper mrr--300">
							<div class="owl-carousel projects_5col gallery"> 

			 	<?php
								$list = $db->query("SELECT * FROM files WHERE ustid =  '16'  AND itable = 1");
								foreach ($list as $row) {
								?> 
							<div class="project-item-style1 thumb">
									<div class="project-item-thumb">
										<img class="img-full" src="<?php echo $ayarlar[" strURL"]; ?>/uploads/files/<?php echo $row["name"] ?>" alt="">
										<div class="project-item-link-icon">
											<a href="<?php echo $ayarlar[" strURL"]; ?>/uploads/files/<?php echo $row["name"] ?>"><i class="fas fa-search-plus"></i></a>
										</div> 
									</div>
								</div>
								 <?php
								}
								             ?> 
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="funfact-section pdt-50 pdb-25 pdt-sm-80 pdb-sm-65">
		<div class="funfact-section-obj1">
			<img src="images/objects/funfact-obj1.png" alt="">
		</div>
		<div class="funfact-section-obj2">
			<img src="images/objects/funfact-obj2.png" alt="">
		</div>
		<div class="funfact-section-obj3">
			<img src="images/objects/funfact-obj3.png" alt="">
		</div>
		<div class="section-content">
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0ms" data-wow-duration="800ms">
						<div class="funfact">
							<div class="funfact-icon">
								<span class="webexflaticon base-icon-162-briefcase-2"></span>
							</div>
							<h2 class="count-box">
								<span data-stop="<?php echo $ayarlar["dosyasayisi"]; ?>" data-speed="2500" class="count-text">00</span>
							</h2>
							<h5 class="title"><?php echo LANG("Farklı Tasarım",$lang); ?></h5>
						</div>
					</div>
					<div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0ms" data-wow-duration="800ms">
						<div class="funfact">
							<div class="funfact-icon">
								<span class="webexflaticon base-icon-101-like-1"></span>
							</div>
							<h2 class="count-box">
								<span data-stop="<?php echo $ayarlar["mutlumusteri"]; ?>" data-speed="2500" class="count-text">00</span>
							</h2>
							<h5 class="title"><?php echo LANG("Ürün Sayısı",$lang); ?></h5>
						</div>
					</div>
					<div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0ms" data-wow-duration="800ms">
						<div class="funfact">
							<div class="funfact-icon">
								<span class="webexflaticon webextheme-icon-architect-4"></span>
							</div>
							<h2 class="count-box">
								<span data-stop="<?php echo $ayarlar["strMailHost"]; ?>" data-speed="2500" class="count-text">00</span>
							</h2>
							<h5 class="title"><?php echo LANG("Müşteri Sayısı",$lang); ?></h5>
						</div>
					</div>
					<div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0ms" data-wow-duration="800ms">
						<div class="funfact">
							<div class="funfact-icon">
								<span class="webexflaticon base-icon-037-creativity"></span>
							</div>
							<h2 class="count-box">
								<span data-stop="<?php echo $ayarlar["tecrube"]; ?>" data-speed="2500" class="count-text">00</span>
							</h2>
							<h5 class="title"><?php echo LANG("Yıllık Tecrübe",$lang); ?></h5>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

<!-- 
	<section class="service-section-style2 bg-no-repeat bg-cover bg-pos-cb pdt-105 pdb-105" data-background="images/bg/abs-bg8.png">
		<div class="section-title text-center wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-xl-8">
						<div class="title-box-center">
							<h5 class="sub-title-line-bottom text-primary-color mrb-10">3F PU</h5>
							<h2 class="title"> <?php echo LANG("Ürünler",$lang); ?></h2>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="section-content">
			<div class="container-fluid">
				<div class="row"> 
    <?php
				$veri_cek = $db->query("SELECT * FROM projeler WHERE proje_durum = 1 AND dil_id = '{$lang}' ORDER BY proje_ust_id ASC LIMIT 10");
 				if ($veri_cek->rowCount()){
				foreach($veri_cek as $veri_listele){
?> <div class="col-xl-3 col-lg-6 col-md-6">
						<div class="service-style2">
							<div class="service-item-thumb">
								<img class="img-full" src="<?php echo $ayarlar["strURL"]; ?>/uploads/projects/<?php echo $veri_listele["proje_resim"]; ?>" alt="<?php echo 	$veri_listele["proje_baslik"]; ?>"> 
								<div class="service-item-content">
									<h6 class="service-categories">Interior</h6>
									<h4 class="service-title"><a href="<?php echo $ayarlar["strURL"]; ?>/urun/<?php echo $veri_listele["proje_seo"]; ?>"><?php echo 	$veri_listele["proje_baslik"]; ?></a></h4>
									<div class="service-item-inner-icon">
										<i class="webextheme-icon-measure"></i>
									</div>
								</div>
							</div>
						</div>
					</div>
				<?php
					}
				}else{
					"Listelenecek veri bulunamadı.";
				}
?>
				</div>
			</div>
		</div>
	</section>
  -->
  
	<section class="testimonial-section bg-silver pdt-105 pdb-110 pdb-lg-70 bg-no-repeat bg-cover bg-pos-ct" data-background="images/bg/abs-bg5.png">
		<div class="testimonial-section-obj1">
			<img src="images/objects/testimonial-obj1.png" alt="">
		</div>
		<div class="section-title mrb-55 wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
			<div class="container">
				<div class="row align-items-end">
					<div class="col-xl-4 col-lg-4 col-md-12"></div>
					<div class="col-xl-8 col-lg-8 col-md-12">
						<div class="title-box-center">
							<h5 class="side-line-left text-primary-color mrb-10"><?php echo LANG("Müşteri Yorumları",$lang); ?></h5>
							<h2 class="mrb-35"><?php echo LANG("Müşteri Yorumları",$lang); ?></h2>
 						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="section-content">
			<div class="container">
				<div class="row">
					<div class="owl-carousel testmonial_2col testimonial-style1 mrb-lg-40">
						  

    <?php
				$veri_cek = $db->query("SELECT * FROM nedenildi WHERE haber_durum = 1 AND dil_id = '{$lang}' ORDER BY haber_ust_id ASC LIMIT 99");
 				if ($veri_cek->rowCount()){
				foreach($veri_cek as $veri_listele){
?> 
						<div class="testimonial-item">
							<div class="testimonial-thumb">
								<img style=" width: 115px;" src="<?php echo $ayarlar["strURL"]; ?>/uploads/nedenildi/<?php echo $veri_listele["haber_resim"]; ?>" alt="">
							</div>
							<div class="testimonial-content">
								<p class="comments"><?php echo 	$veri_listele["haber_aciklama"]; ?></p>
								<h4 class="client-name"><?php echo 	$veri_listele["haber_baslik"]; ?></h4>
 							</div>
						</div>
<?php
					}
				}else{
					"Listelenecek veri bulunamadı.";
				}
?>

					</div>
				</div>
			</div>
		</div>
	</section>
	 
	<section class="bg-no-repeat bg-cover bg-pos-ct pdt-105" data-background="images/bg/abs-bg8.png">
		<div class="section-title mrb-55 wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-xl-6 col-lg-8 col-md-12">
						<div class="title-box-center">
							<h5 class="side-line-left text-primary-color mrb-10">3F PU</h5>
							<h2 class="mrb-25"><?php echo LANG("Medya",$lang); ?></h2>
 						</div>
					</div>
					<div class="col-xl-6 col-lg-4 col-md-12 text-lg-end">
						<a href="<?php echo $ayarlar["strURL"]; ?>/haberler" class="animate-btn-style2"><?php echo LANG("Tüm Medyalar",$lang); ?></a>
					</div>
				</div>
			</div>
		</div>
		<div class="section-content mrb-80">
			<div class="container">
				<div class="row">
					 

    <?php
				$veri_cek = $db->query("SELECT * FROM haberler WHERE haber_durum = 1 AND dil_id = '{$lang}' ORDER BY haber_ust_id ASC LIMIT 3");
 				if ($veri_cek->rowCount()){
				foreach($veri_cek as $veri_listele){
?> 
<div class="col-md-6 col-lg-6 col-xl-4">
						<div class="news-wrapper mrb-30">
							<div class="news-thumb">
								<img src="<?php echo $ayarlar["strURL"]; ?>/uploads/haberler/<?php echo $veri_listele["haber_resim"]; ?>" class="img-full" alt="<?php echo 	$veri_listele["haber_baslik"]; ?>"> 
							</div>
							<div class="news-description">
								<h4 class="the-title"><a href="<?php echo $ayarlar["strURL"]; ?>/haber/<?php echo $veri_listele["haber_seo"]; ?>"><?php echo 	$veri_listele["haber_baslik"]; ?></a></h4>
								<p class="the-content"><?php echo $veri_listele["haber_kisaaciklama"]; ?></p>
								<div class="news-bottom-part">
									<div class="post-author">
										<div class="author-img">
											<a href="<?php echo $ayarlar["strURL"]; ?>/haber/<?php echo $veri_listele["haber_seo"]; ?>">
												<img src="<?php echo $ayarlar["strURL"]; ?>/images/testimonials/testimonial-img1.jpg" class="rounded-circle" alt="<?php echo 	$veri_listele["haber_baslik"]; ?>">
											</a>
										</div>
										<span><a href="<?php echo $ayarlar["strURL"]; ?>/haber/<?php echo $veri_listele["haber_seo"]; ?>">3F PU</a></span>
									</div>
									<div class="post-link">
										<span class="entry-date"><i class="far fa-calendar-alt mrr-10 text-primary-color"></i><?php echo turkcetarih_formati('j F Y',$veri_listele["haber_tarih"]);   ?></span>
									</div>
								</div>
							</div>
						</div>
					</div>
				 <?php
					}
				}else{
					"Listelenecek veri bulunamadı.";
				}
?>
				</div>
			</div>
		</div>
 		<div class="call-to-action">
			<div class="container">
				<div class="call-to-action-inner">
					<div class="call-to-action-left">
						<div class="call-to-action-icon">
							<span class="webexflaticon base-icon-chat1"></span>
						</div>
						<div class="call-to-action-content">
							<p class="call-to-action-sub-title"><?php echo LANG("Hemen iletişime geçin",$lang); ?></p>
							<h3 class="call-to-action-title"><?php echo LANG("Sormak istediğiniz bir soru mu var?",$lang); ?></h3>
						</div>
					</div>
					<div class="call-to-action-btn-box mrt-md-30">
						<a href="<?php echo $ayarlar["strURL"]; ?>/iletisim" class="animate-btn-style4"><?php echo LANG("İletişim",$lang); ?></a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<?php include 'alt.php'; ?>
</body>

</html>