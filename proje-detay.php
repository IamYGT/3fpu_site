<?php require("include/baglan.php"); include("include/fonksiyon.php"); include_once("inc.lang.php");
$tekil_veri_cek = $db->query("SELECT * FROM projeler WHERE proje_durum = 1 AND proje_seo = '{$_GET["url"]}' AND dil_id = '{$lang}' ")->fetch(PDO::FETCH_ASSOC); ?>
<!DOCTYPE html>
<html lang="<?php echo $lang?>">
<head>
	<title><?php echo $tekil_veri_cek["proje_baslik"]; ?> - <?php echo $ayarlar["strTitle"]; ?></title>
 <?php include 'css.php'; ?>
</head>
<body>
 <?php include 'ust.php'; ?>
 <section style="background-image: url(<?php echo $ayarlar["strURL"]; ?>/images/bg/3.jpg);" class="page-title-section">
		<div class="container">
			<div class="row">
				<div class="col-xl-12">
					<div class="breadcrumb-area">
						<h2 class="page-title"><?php echo $tekil_veri_cek["proje_baslik"]; ?></h2>
						<ul class="breadcrumbs-link">
							<li><a href="<?php echo $ayarlar["strURL"]; ?>/index"><?php echo LANG("Anasayfa",$lang); ?></a></li>
							<li><a href="<?php echo $ayarlar["strURL"]; ?>/projeler"><?php echo LANG("Projeler",$lang); ?></a></li>
							<li class="active"><?php echo $tekil_veri_cek["proje_baslik"]; ?></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="project-details-page pdt-110 pdb-80">
		<div class="container">
			<div class="row">
				<div class="col-xl-12">
					<div class="project-thumb">
						<img class="img-full mrb-45 mrb-sm-0" src="<?php echo $ayarlar["strURL"]; ?>/uploads/projects/<?php echo $tekil_veri_cek["proje_resim"]; ?>" alt="<?php echo $tekil_veri_cek["proje_baslik"]; ?>">
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-xl-10 mrt--110 mrt-sm-30">
					<div class="project-sidebar-widget">
						<div class="project-sidebar">
							<ul class="list project-info-list">
								<li><span class="title"><i class="far fa-clock"></i> Project Date:</span> May 17, 2023</li>
								<li><span class="title"><i class="far fa-user"></i> Client:</span> <a href="#">Fapster</a></li>
								<li><span class="title"><i class="far fa-hdd"></i> Categories:</span> <a href="#">Interior, Architecture</a></li>
								<li><span class="title"><i class="far fa-money-bill-alt"></i> Budgets:</span> <a href="#">$30,000</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="row align-items-center mrb-40">
				<div class="col-xl-12 col-lg-12 col-md-12">
					<div class="project-detail-text mrb-md-25">
						<h3 class="project-details-title mrb-20"><?php echo $tekil_veri_cek["proje_baslik"]; ?></h3>
						<div class="project-details-content">
							<p class="mrb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus, natus numquam unde qui pariatur porro necessitatibus harum libero commodi rem veritatis in nisi vero odit tenetur esse quidem inventore ex. Sunt nam mollitia, accusantium dolor isbus the necessitatibus praesentium excepturi earum sint inventore aperiam periam dolores voluptates recusandae</p>
						</div>
					</div>
				</div>
			</div>
			<div class="row mrt-40">
				<div class="col-xl-12">
 					<div class="row">
						<div class="col-xl-3 col-lg-4 col-md-6">
							<div class="project-item-style1 mrb-30">
								<div class="project-item-thumb">
									<img class="img-full" src="images/projects/project_01.jpg" alt="">
									<div class="project-item-link-icon">
										<a href="page-single-project-item.html"><i class="base-icon-next"></i></a>
									</div>
									<div class="project-item-details">
										<h6 class="project-item-category">Interior</h6>
										<h4 class="project-item-title"><a href="page-single-project-item">Interior work</a></h4>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xl-3 col-lg-4 col-md-6">
							<div class="project-item-style1 mrb-30">
								<div class="project-item-thumb">
									<img class="img-full" src="images/projects/project_02.jpg" alt="">
									<div class="project-item-link-icon">
										<a href="page-single-project-item.html"><i class="base-icon-next"></i></a>
									</div>
									<div class="project-item-details">
										<h6 class="project-item-category">Modern</h6>
										<h4 class="project-item-title"><a href="page-single-project-item">Architecture</a></h4>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xl-3 col-lg-4 col-md-6">
							<div class="project-item-style1 mrb-30">
								<div class="project-item-thumb">
									<img class="img-full" src="images/projects/project_03.jpg" alt="">
									<div class="project-item-link-icon">
										<a href="page-single-project-item.html"><i class="base-icon-next"></i></a>
									</div>
									<div class="project-item-details">
										<h6 class="project-item-category">Decor</h6>
										<h4 class="project-item-title"><a href="page-single-project-item">Decoration Art</a></h4>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xl-3 col-lg-4 col-md-6">
							<div class="project-item-style1 mrb-30">
								<div class="project-item-thumb">
									<img class="img-full" src="images/projects/project_04.jpg" alt="">
									<div class="project-item-link-icon">
										<a href="page-single-project-item.html"><i class="base-icon-next"></i></a>
									</div>
									<div class="project-item-details">
										<h6 class="project-item-category">Decor</h6>
										<h4 class="project-item-title"><a href="page-single-project-item">Decoration Art</a></h4>
									</div>
								</div>
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
