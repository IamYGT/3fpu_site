<?php require("include/baglan.php");
include("include/fonksiyon.php");
include_once("inc.lang.php"); 
$tekil_veri_cek = $db->query("SELECT * FROM hizmetler WHERE haber_durum = 1 AND haber_seo = '{$_GET["url"]}' AND dil_id = '{$lang}' ")->fetch(PDO::FETCH_ASSOC); ?>

<!DOCTYPE html>
<html lang="<?php echo $lang ?>">

<head>
    <title><?php echo $tekil_veri_cek["haber_baslik"]; ?> - <?php echo $ayarlar["strTitle"]; ?></title>
    <?php include 'css.php'; ?>
</head>

<body>
    <?php include 'ust.php'; ?>
    <section class="page-title-section">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="breadcrumb-area">
                        <h2 class="page-title">	<?php echo $tekil_veri_cek["haber_baslik"]; ?></h2>
                        <ul class="breadcrumbs-link">
                            <li><a href="<?php echo $ayarlar["strURL"]; ?>/index"><?php echo LANG("Anasayfa", $lang); ?></a></li>
                            <li><a href="<?php echo $ayarlar["strURL"]; ?>/hizmetler"><?php echo LANG("Hizmetlerimiz", $lang); ?></a></li>
                            <li class="active"><?php echo $tekil_veri_cek["haber_baslik"]; ?></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
	<section class="service-details-page pdt-110 pdb-110 pdb-lg-75">
		<div class="container">
			<div class="row">
				<div class="col-xl-8 col-lg-7">
					<div class="service-detail-text">
						<div class="blog-standared-img slider-blog mrb-40">
							<img class="img-full" src="<?php echo $ayarlar["strURL"]; ?>/uploads/services/<?php echo $tekil_veri_cek["haber_resim"]; ?>" alt="<?php echo $tekil_veri_cek["haber_baslik"]; ?>">
						</div>
						<h3 class="mrb-15"><?php echo $tekil_veri_cek["haber_baslik"]; ?></h3>
						<?php echo $tekil_veri_cek["haber_aciklama"]; ?></div>
				</div>
				<div class="col-xl-4 col-lg-5 sidebar-right">
					<div class="service-nav-menu mrb-30">
						<div class="service-link-list">
							<ul>
								<?php
				$veri_cek = $db->query("SELECT * FROM hizmetler WHERE haber_durum = 1 AND dil_id = '{$lang}' ORDER BY haber_ust_id ASC LIMIT 999");
 				if ($veri_cek->rowCount()){
				foreach($veri_cek as $veri_listele){
?> 	<li  ><a href="<?php echo $ayarlar["strURL"]; ?>/hizmet/<?php echo $veri_listele["haber_seo"]; ?>"><i class="fa fa-chevron-right"></i><?php echo 	$veri_listele["haber_baslik"]; ?></a></li>
<?php
					}
				}else{
					"Listelenecek veri bulunamadı.";
				}
?>
							</ul>
						</div>
					</div>
					<div class="sidebar-widget-need-help">
						<div class="need-help-icon">
							<span class="webexflaticon base-icon-phone-call"></span>
						</div>
						<h4 class="need-help-title"><?php echo LANG("Bizimle iletişime geçin.",$lang); ?></h4>
						<div class="need-help-contact">
							<p class="mrb-5"> <?php echo LANG("Telefon",$lang); ?></p>
							<a href="tel:<?php echo $ayarlar["strPhone"]; ?>"><?php echo $ayarlar["strPhone"]; ?></a>
						</div>
					</div>
					 
				</div>
			</div>
		</div>
	</section>
	<?php include("alt.php") ?>
</body>

</html>