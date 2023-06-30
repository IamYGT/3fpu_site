<?php require("include/baglan.php");
include("include/fonksiyon.php");
include_once("inc.lang.php");
$tekil_veri_cek = $db->query("SELECT * FROM kategoriler WHERE kategori_durum = 1 AND kategori_seo = '{$_GET["url"]}' AND dil_id = '{$lang}' ")->fetch(PDO::FETCH_ASSOC); ?> 
<!DOCTYPE html>
<html lang="<?php echo $lang ?>">

<head>
	<title><?php echo $tekil_veri_cek["kategori_baslik"]; ?> - <?php echo $ayarlar["strTitle"]; ?></title>
	<?php include 'css.php'; ?>
</head> 
<body>
	<?php include 'ust.php'; ?> 
	<section class="bg-secondary-color bg-no-repeat bg-cover bg-pos-cb pdt-200" data-background="images/bg/abs-bg3.png" data-overlay-dark="4">
		<div class="section-title mrb-0 mrb-md-15 wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
			<div class="container">
				<div class="row align-items-end">
					<div class="col-xl-12 col-lg-12 col-md-12">
						<div class="title-box-center">
							<h5 style="color: white" class="side-line-left mrb-10">3F PU</h5>
							<h2 class="text-white mrb-md-40 mrb-sm-30"><?php echo $tekil_veri_cek["kategori_baslik"]; ?></h2>
						</div>
					</div>
						<div class="col-xl-12 col-lg-12 col-md-12">
						<div class="title-box-center">
						<span style="color: #fff"> Kategoriler: </span>   
							<?php
									$veri_cek = $db->query("SELECT * FROM kategoriler WHERE altkategori_id = 0 AND dil_id = '{$lang}' ORDER BY kategori_ust_id ASC LIMIT 999");
									if ($veri_cek->rowCount()){
									foreach($veri_cek as $veri_listele){
					?>
							 
							
  							 <a href="<?php echo $ayarlar["strURL"]; ?>/kategori/<?php echo $veri_listele["kategori_seo"]; ?>"> <span class="badge mustafa"><?php echo 	$veri_listele["kategori_baslik"]; ?></span>   </a>
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
		</div>
<section class="service-inner-page-section-style1 pdt-110 pdb-80">
		<div class="section-content">
			<div class="container">
				<div class="row">
					
					<?php
                    $veri_cek = $db->query("SELECT * FROM projeler WHERE proje_durum = 1 AND dil_id = '{$lang}' AND kategori_id = {$tekil_veri_cek["kategori_ust_id"]} ORDER BY proje_ust_id DESC LIMIT 99");
                    if ($veri_cek->rowCount()){
                    foreach($veri_cek as $veri_listele){
               $categoryInfo = $db->query("SELECT * FROM kategoriler WHERE kategori_durum='1' AND kategori_ust_id = '{$veri_listele['kategori_id']}' AND dil_id='{$lang}'")->fetch(PDO::FETCH_ASSOC);
                ?>
 
						 
					<div class="col-md-6 col-lg-6 col-xl-4">
						<div class="service-style2">
							<div class="service-item-thumb">
								<img class="img-full" src="<?php echo $ayarlar["strURL"]; ?>/uploads/projects/<?php echo $veri_listele["proje_resim"]; ?>" alt="<?php echo 	$veri_listele["proje_baslik"]; ?>"> 
								<div class="service-item-content">
									<h6 class="service-categories"><?php echo $categoryInfo["kategori_baslik"]; ?></h6>
									<h4 class="service-title"><a href="<?php echo $ayarlar["strURL"]; ?>/urun/<?php echo $veri_listele["proje_seo"]; ?>"><?php echo 	$veri_listele["proje_baslik"]; ?></a></h4>
									<div class="service-item-inner-icon">
								 <img src="<?php echo $ayarlar["strURL"]; ?>/images/kucuk.png" alt="3F PU"> 
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
	</section> 
	<style> 
	.mustafa {
		background: white;
    color: #1f2b54;
    padding: 6px 16px 6px 16px;
    font-weight: 600;
    margin-top: 52px;
    font-size: 14px;
}

</style>
	<?php include 'alt.php'; ?>
</body>

</html>