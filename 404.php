<?php require("include/baglan.php");
include("include/fonksiyon.php");
include_once("inc.lang.php"); ?>
<!DOCTYPE html>
<html lang="<?php echo $lang ?>">

<head>
    <title><?php echo LANG("404", $lang); ?> - <?php echo $ayarlar["strTitle"]; ?></title>
    <?php include 'css.php'; ?>
</head>

<body>
    <?php include 'ust.php'; ?>
 	<div class="error-area vh d-flex" data-background="images/bg/404.jpg" data-overlay-light="95">
		<div class="container">
			<div class="row">
				<div class="col-xl-12">
					<div class="error-inner text-center">
						<h1 class="error-title">4<span class="text-primary-color">0</span>4</h1>
						<h2 class="error-text"><?php echo LANG("Aradığınız sayfa bulunamadı.", $lang); ?></h2>
						<p><?php echo LANG("Bu sayfa bakım nedeniyle geçici olarak kullanılamamaktadır. Çok yakında geri döneceğiz sabrınız için teşekkürler.", $lang); ?></p>
						<a class="cs-btn-one btn-md btn-primary-color" href="<?php echo $ayarlar["strURL"]; ?>/index"><?php echo LANG("Anasayfa", $lang); ?></a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php include("alt.php") ?>

</body>
</html>