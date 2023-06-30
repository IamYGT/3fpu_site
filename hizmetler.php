<?php require("include/baglan.php");
include("include/fonksiyon.php");
include_once("inc.lang.php"); ?>
<!DOCTYPE html>
<html lang="<?php echo $lang ?>">

<head>
    <title><?php echo LANG("Hizmetlerimiz", $lang); ?> - <?php echo $ayarlar["strTitle"]; ?></title>
    <?php include 'css.php'; ?>
</head>

<body>
    <?php include 'ust.php'; ?>
    <section class="page-title-section">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="breadcrumb-area">
                        <h2 class="page-title"><?php echo LANG("Hizmetlerimiz", $lang); ?></h2>
                        <ul class="breadcrumbs-link">
                            <li><a href="<?php echo $ayarlar["strURL"]; ?>/index"><?php echo LANG("Anasayfa", $lang); ?></a></li>
                            <li class="active"><?php echo LANG("Hizmetlerimiz", $lang); ?></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="service-inner-page-section-style1 pdt-110 pdb-80">
        <div class="section-content">
            <div class="container">
                <div class="row">
                      <?php
				$veri_cek = $db->query("SELECT * FROM hizmetler WHERE haber_durum = 1 AND dil_id = '{$lang}' ORDER BY haber_ust_id ASC LIMIT 999");
 				if ($veri_cek->rowCount()){
				foreach($veri_cek as $veri_listele){
?> 
                <div class="col-md-6 col-lg-6 col-xl-4">
                        <div class="service-style2">
                            <div class="service-item-thumb">
                                <img class="img-full" src="<?php echo $ayarlar["strURL"]; ?>/uploads/services/<?php echo $veri_listele["haber_resim"]; ?>" alt="<?php echo 	$veri_listele["haber_baslik"]; ?>"> 
                                <div class="service-item-content">
                                    <h6 class="service-categories">3F PU</h6>
                                    <h4 class="service-title"><a href="<?php echo $ayarlar["strURL"]; ?>/hizmet/<?php echo $veri_listele["haber_seo"]; ?>"><?php echo 	$veri_listele["haber_baslik"]; ?></a></h4>
                                     
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
    
   <?php include("alt.php")?>
</body>

</html> 