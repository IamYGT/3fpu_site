<?php require("include/baglan.php");
include("include/fonksiyon.php");
include_once("inc.lang.php"); ?>
<!DOCTYPE html>
<html lang="<?php echo $lang ?>">

<head>
	<title><?php echo LANG("Projeler", $lang); ?> - <?php echo $ayarlar["strTitle"]; ?></title>
	<?php include 'css.php'; ?>
</head>

<body>
	<?php include 'ust.php'; ?>

	<section class="bg-secondary-color bg-no-repeat bg-cover bg-pos-cb pdt-200" data-background="images/bg/abs-bg3.png" data-overlay-dark="4">
		<div class="section-title mrb-60 mrb-md-15 wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
			<div class="container">
				<div class="row align-items-end">
					<div class="col-xl-8 col-lg-7 col-md-12">
						<div class="title-box-center">
							<h5 style="color: white" class="side-line-left mrb-10">3F PU</h5>
							<h2 class="text-white mrb-md-40 mrb-sm-30"><?php echo LANG("Projeler", $lang); ?></h2>
						</div>
					</div>

				</div>
			</div>
		</div>
		<div class="section-content">
			<div class="custom-md-container">
				<div class="row">
					<div class="col-xl-12">
						<div class="project-item-style1-wrapper">
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

	<?php include 'alt.php'; ?>
</body>

</html>