<?php require("include/baglan.php"); include("include/fonksiyon.php"); include_once("inc.lang.php");
$tekil_veri_cek = $db->query("SELECT * FROM haberler WHERE haber_durum = 1 AND haber_seo = '{$_GET["url"]}' AND dil_id = '{$lang}' ")->fetch(PDO::FETCH_ASSOC); ?>
<!DOCTYPE html>
<html lang="<?php echo $lang?>">
<head>
	<title><?php echo $tekil_veri_cek["haber_baslik"]; ?> - <?php echo $ayarlar["strTitle"]; ?></title>
 <?php include 'css.php'; ?>
</head>
<body>
 <?php include 'ust.php'; ?>
 <section style="background-image: url(<?php echo $ayarlar["strURL"]; ?>/images/bg/3.jpg);" class="page-title-section">
		<div class="container">
			<div class="row">
				<div class="col-xl-12">
					<div class="breadcrumb-area">
						<h2 class="page-title"><?php echo $tekil_veri_cek["haber_baslik"]; ?></h2>
						<ul class="breadcrumbs-link">
							<li><a href="<?php echo $ayarlar["strURL"]; ?>/index"><?php echo LANG("Anasayfa",$lang); ?></a></li>
							<li><a href="<?php echo $ayarlar["strURL"]; ?>/haberler"><?php echo LANG("Haberler",$lang); ?></a></li>
							<li class="active"><?php echo $tekil_veri_cek["haber_baslik"]; ?></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="blog-single-news pdt-110 pdb-90">
		<div class="container">
			<div class="row">
				<div class="col-xl-8 col-lg-7">
					<div class="single-news-details news-wrapper mrb-20">
						<div class="single-news-content">
							<div class="news-thumb">
								<img src="<?php echo $ayarlar["strURL"]; ?>/uploads/haberler/<?php echo $tekil_veri_cek["haber_resim"]; ?>" class="img-full" alt="<?php echo $tekil_veri_cek["haber_baslik"]; ?>">
							</div>
							<div class="news-description mrb-35">
								<h4 class="the-title"><a href="#"><?php echo $tekil_veri_cek["haber_baslik"]; ?></a></h4>
								<div class="news-bottom-part">
									<div class="post-author">
										<div class="author-img">
											<a href="#">
												<img src="<?php echo $ayarlar["strURL"]; ?>/images/testimonials/testimonial-img1.jpg" class="rounded-circle" alt="<?php echo $ayarlar["strTitle"]; ?>">
											</a>
										</div>
										<span><a href="#">3F-PU</a></span>
									</div>
									<div class="post-link">
										<span class="entry-date"><i class="far fa-calendar-alt mrr-10 text-primary-color"></i><?php echo date("d/m/Y", strtotime($tekil_veri_cek["haber_tarih"])); ?></span>
									</div>
								</div>
							</div>
							<div class="entry-content">
								<?php echo $tekil_veri_cek["haber_aciklama"]; ?>
 							</div>
							<div class="single-news-tag-social-area clearfix">
								<div class="single-news-share text-start text-xl-end">
									<h5 class="mrb-15"><?php echo LANG("Paylaş",$lang); ?>:</h5>
									<ul class="social-icons">
										<li><a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo $ayarlar["strURL"]; ?>/haber/<?php echo $tekil_veri_cek["haber_seo"]; ?>"><i class="fab fa-facebook-f"></i></a></li>
										<li><a href="https://twitter.com/intent/tweet?url=<?php echo $ayarlar["strURL"]; ?>/haber/<?php echo $tekil_veri_cek["haber_seo"]; ?>&text=<?php echo $tekil_veri_cek["haber_baslik"]; ?>"><i class="fab fa-twitter"></i></a></li>
										<li><a href="https://pinterest.com/pin/create/button/?url=<?php echo $ayarlar["strURL"]; ?>/haber/<?php echo $tekil_veri_cek["haber_seo"]; ?>&media=&description=<?php echo $tekil_veri_cek["haber_baslik"]; ?>"><i class="fab fa-pinterest-p"></i></a></li>
										<li><a href="https://www.linkedin.com/shareArticle?mini=true&url=<?php echo $ayarlar["strURL"]; ?>/haber/<?php echo $tekil_veri_cek["haber_seo"]; ?>"><i class="fab fa-linkedin-in"></i></a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-4 col-lg-5 sidebar-right">
					<aside class="news-sidebar-widget">
						<div class="widget sidebar-widget widget-popular-posts">
							<h4 class="mrb-30 single-blog-widget-title"><?php echo LANG("Medya Ağımız",$lang); ?></h4>
							<?php
									$veri_cek = $db->query("SELECT * FROM haberler WHERE haber_durum = 1 AND dil_id = '{$lang}' ORDER BY haber_ust_id ASC LIMIT 3");
									if ($veri_cek->rowCount()){
									foreach($veri_cek as $veri_listele){
							?>
							<div class="single-post d-flex align-items-center mrb-20">
								<div class="post-image mrr-20">
									<a href="<?php echo $ayarlar["strURL"]; ?>/haber/<?php echo $veri_listele["haber_seo"]; ?>"> <img style="width: 80px;" src="<?php echo $ayarlar["strURL"]; ?>/uploads/haberler/<?php echo $veri_listele["haber_resim"]; ?>" alt="<?php echo 	$veri_listele["haber_baslik"]; ?>"></a>
								</div>
								<div class="post-content">
									<span class="post-date"><i class="far fa-clock mrr-5"></i><?php echo date("d/m/Y", strtotime($veri_listele["haber_tarih"])); ?></span>
									<h5><a href="<?php echo $ayarlar["strURL"]; ?>/haber/<?php echo $veri_listele["haber_seo"]; ?>"><?php echo 	$veri_listele["haber_baslik"]; ?></a></h5>
								</div>
							</div>
							<?php
										}
									}else{
										"Listelenecek veri bulunamadı.";
									}
							?>
						</div>
						<div class="widget sidebar-widget widget-categories">
							<h4 class="mrb-20 single-blog-widget-title"><?php echo LANG("Hizmetlerimiz",$lang); ?></h4>
							<ul class="list">
								<?php
							 		 $veri_cek = $db->query("SELECT * FROM hizmetler WHERE haber_durum = 1 AND dil_id = '{$lang}' ORDER BY haber_ust_id ASC LIMIT 7");
							 		 if ($veri_cek->rowCount()){
							 		 foreach($veri_cek as $veri_listele){
							 ?><li><i class="fas fa-caret-right vertical-align-middle text-primary-color mrr-10"></i><a href="<?php echo $ayarlar["strURL"]; ?>/hizmet/<?php echo $veri_listele["haber_seo"]; ?>"><?php echo 	$veri_listele["haber_baslik"]; ?></a></li>
									<?php
												}
											}else{
												"Listelenecek veri bulunamadı.";
											}
									?>
							</ul>
						</div>
					 </aside>
				</div>
			</div>
		</div>
	</section>
	 <?php include 'alt.php'; ?>
</body>
</html>
