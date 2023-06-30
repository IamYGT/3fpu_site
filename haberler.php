<?php require("include/baglan.php"); include("include/fonksiyon.php"); include_once("inc.lang.php"); ?>
<!DOCTYPE html>
<html lang="<?php echo $lang?>">
<head>
	<title><?php echo LANG("Medya",$lang); ?> - <?php echo $ayarlar["strTitle"]; ?></title>
 <?php include 'css.php'; ?>
</head>
<body>
 <?php include 'ust.php'; ?>
	<section style="background-image: url(<?php echo $ayarlar["strURL"]; ?>/images/bg/4.jpg);" class="page-title-section">
		<div class="container">
			<div class="row">
				<div class="col-xl-12">
					<div class="breadcrumb-area">
						<h2 class="page-title"><?php echo LANG("Medya",$lang); ?></h2>
						<ul class="breadcrumbs-link">
							<li><a href="<?php echo $ayarlar["strURL"]; ?>/index"><?php echo LANG("Anasayfa",$lang); ?></a></li>
							<li class="active"><?php echo LANG("Medya",$lang); ?></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="bg-pos-ct pdt-105">
		<div class="section-content mrb-80">
			<div class="container">
				<div class="row">
					<?php
							$veri_cek = $db->query("SELECT * FROM haberler WHERE haber_durum = 1 AND dil_id = '{$lang}' ORDER BY haber_ust_id ASC LIMIT 999");
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
												<img src="<?php echo $ayarlar["strURL"]; ?>/images/testimonials/testimonial-img1.jpg" class="rounded-circle" alt="#">
											</a>
										</div>
										<span><a href="<?php echo $ayarlar["strURL"]; ?>/haber/<?php echo $veri_listele["haber_seo"]; ?>">3F-PU</a></span>
									</div>
									<div class="post-link">
										<span class="entry-date"><i class="far fa-calendar-alt mrr-10 text-primary-color"></i><?php echo date("d/m/Y", strtotime($veri_listele["haber_tarih"])); ?></span>
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
	<?php include 'alt.php'; ?>
</body>

</html>
