 <?php require("include/baglan.php");
include("include/fonksiyon.php");
include_once("inc.lang.php"); ?>
<!DOCTYPE html>
<html lang="<?php echo $lang ?>">

<head>
    <title><?php echo LANG("Hakkımızda", $lang); ?> - <?php echo $ayarlar["strTitle"]; ?></title>
    <?php include 'css.php'; ?>
</head>

<body>
    <?php include 'ust.php'; ?>
    <section class="page-title-section">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="breadcrumb-area">
                        <h2 class="page-title"><?php echo LANG("Hakkımızda", $lang); ?></h2>
                        <ul class="breadcrumbs-link">
                            <li><a href="<?php echo $ayarlar["strURL"]; ?>/index"><?php echo LANG("Anasayfa", $lang); ?></a></li>
                            <li class="active"><?php echo LANG("Hakkımızda", $lang); ?></li>
                        </ul>
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

	<section class="feature-style1-section" style="padding-bottom:50px; padding-top:50px;">
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
	
	<?php include("alt.php")?>
</body>

</html>
