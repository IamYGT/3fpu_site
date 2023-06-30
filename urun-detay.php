<?php require("include/baglan.php");
include("include/fonksiyon.php");
include_once("inc.lang.php"); 
$tekil_veri_cek = $db->query("SELECT * FROM projeler WHERE proje_durum = 1 AND proje_seo = '{$_GET["url"]}' AND dil_id = '{$lang}' ")->fetch(PDO::FETCH_ASSOC);
$categoryInfo = $db->query("SELECT * FROM kategoriler WHERE kategori_ust_id = {$tekil_veri_cek['kategori_id']} AND dil_id = '{$lang}'")->fetch(PDO::FETCH_ASSOC);  ?>

 
<!DOCTYPE html>
<html lang="<?php echo $lang ?>">

<head>
	<title><?php echo $tekil_veri_cek["proje_baslik"]; ?> - <?php echo $ayarlar["strTitle"]; ?></title>
	<?php include 'css.php'; ?>
</head> 
<body>
	<?php include 'ust.php'; ?> 
	 	<section class="page-title-section">
		<div class="container">
			<div class="row">
				<div class="col-xl-12">
					<div class="breadcrumb-area">
						<h2 class="page-title"><?php echo $tekil_veri_cek["proje_baslik"]; ?></h2>
						<ul class="breadcrumbs-link">
							<li><a href="<?php echo $ayarlar["strURL"]; ?>/index"><?php echo LANG("Anasayfa",$lang); ?></a></li>
							<li><a href="<?php echo $ayarlar["strURL"]; ?>/urunler"><?php echo LANG("Ürünler",$lang); ?></a></li>
							<li class="active"><?php echo $tekil_veri_cek["proje_baslik"]; ?></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</section>
 	<section class="contact-section   pdb-110" data-background="<?php echo $ayarlar["strURL"]; ?>/images/bg/abs-bg7.png" data-overlay-light="2">
		 <div class="container mt-5 mb-5">
           <div class="card">
             <div class="row g-0">
               <div class="col-md-6 border-end">
                 <div class="d-flex flex-column justify-content-center">
                   <div class="main_image"> <img src="<?php echo $ayarlar["strURL"]; ?>/uploads/projects/<?php echo $tekil_veri_cek["proje_resim"]; ?>" id="main_product_image" width="350"> </div>
                   <div class="thumbnail_images">
                     <ul id="thumbnail">
                       <li><img onclick="changeImage(this)" src="<?php echo $ayarlar["strURL"]; ?>/uploads/projects/<?php echo $tekil_veri_cek["proje_resim"]; ?>" width="70"></li>
                       <?php
                         $imagesList = $db->query("SELECT * FROM files WHERE ustid = {$tekil_veri_cek["proje_ust_id"]} AND itable = 2");
                         if ($imagesList->rowCount()){
                         foreach($imagesList as $image){
                                         ?>
                        <li><img onclick="changeImage(this)" src="<?php echo $ayarlar["strURL"]; ?>/uploads/files/<?php echo $image["name"]; ?>" width="70"></li>
                        <?php
                                    }
                                }
                        ?>
                     </ul>
                   </div>
                 </div>
               </div>
               <div class="col-md-6">
                 <div class="p-3 right-side">
                   <div style="margin-bottom: 10px;" class="d-flex justify-content-between align-items-center mb-10">
                     <h2><?php echo $tekil_veri_cek["proje_baslik"]; ?></h2> <span class="heart"><i class='fal fa-arrow-alt-right'></i></span>
                   </div>
                   <div style="margin-bottom: 10px;"   class="ratings d-flex flex-row align-items-center mb-20">
                     <div class="d-flex flex-row"> <i style="color:#25397a;" class="fas fa-star"></i><i  style="color:#25397a;"  class="fas fa-star"></i><i  style="color:#25397a;"  class="fas fa-star"></i><i  style="color:#25397a;"  class="fas fa-star"></i><i  style="color:#25397a;"  class="fas fa-star"></i> </div>
                   </div>

                   <div  class="mt-2 pr-3 content mt-30">
                     <p><?php echo $tekil_veri_cek["proje_description"]; ?></p>
                   </div>
                    <div class="buttons d-flex flex-row mt-5 gap-3">
                      <a href="<?php echo $ayarlar["strURL"]; ?>/iletisim" class="animate-btn-style3 btn-sm"><?php echo LANG("İletişim",$lang); ?></a> </div>

                 </div>
               </div>
               <div style="    margin-top: 63px;" class="col-md-12">
          <ul class="nav nav-tabs mb-3 mt-50"  id="ex1" role="tablist">
           <li class="nav-item" role="presentation">
             <a
               class="nav-link active"
               id="ex1-tab-1"
               data-mdb-toggle="tab"
               href="#ex1-tabs-1"
               role="tab"
               aria-controls="ex1-tabs-1"
               aria-selected="true"
               ><?php echo LANG("Açıklama",$lang); ?></a
             >
           </li>
          </ul>
          <div class="tab-content" id="ex1-content">
           <div
             class="tab-pane fade show active"
             id="ex1-tabs-1"
             role="tabpanel"
             aria-labelledby="ex1-tab-1" >
             <?php echo $tekil_veri_cek["proje_aciklama"]; ?>
           </div>
             </div>
                </div>
             </div>
           </div>
         </div>
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
	  <script type="text/javascript">
  function changeImage(element) {

            var main_prodcut_image = document.getElementById('main_product_image');
            main_prodcut_image.src = element.src;


      }
  </script>
  
  <style> 
  .card{
  border: none;
  overflow: hidden
}
.thumbnail_images ul{
  list-style: none;
  justify-content: center;
  display: flex;
  align-items: center;
  margin-top:10px
}
.thumbnail_images ul li{
  margin: 5px;
  padding: 10px;
  border: 2px solid #eee;
  cursor: pointer;
  transition: all 0.5s
}
.thumbnail_images ul li:hover{
  border: 2px solid #000
}
.main_image{
  display: flex;
  justify-content: center;
  align-items: center;
  border-bottom: 1px solid #eee;
  height: 400px;
  width: 100%;
  overflow: hidden
}
.heart{
  height: 29px;
  width: 29px;
  background-color: #eaeaea;
  border-radius: 50%;
  display: flex;
  justify-content: center;
  align-items: center
}
.content p{
    font-size: 15px;
    margin-top: 22px;
}
.ratings span{
  font-size: 14px;
  margin-left: 12px
}
.colors{
  margin-top: 5px
}
.colors ul{
  list-style: none;
  display: flex;
  padding-left: 0px
}
.colors ul li{
  height: 20px;
  width: 20px;
  display: flex;
  border-radius: 50%;
  margin-right: 10px;
  cursor: pointer
}
.colors ul li:nth-child(1){
  background-color: #6c704d
}
.colors ul li:nth-child(2){
  background-color: #96918b
}
.colors ul li:nth-child(3){
  background-color: #68778e
}
.colors ul li:nth-child(4){
  background-color: #263f55
}
.colors ul li:nth-child(5){
  background-color: black
}
.right-side{
  position: relative
}
.search-option{
  position: absolute;
  background-color: #000;
  overflow: hidden;
  align-items: center;
  color: #fff;
  width: 200px;
  height: 200px;
  border-radius: 49% 51% 50% 50% / 68% 69% 31% 32%;
  left: 30%;
  bottom: -250px;
  transition: all 0.5s;
  cursor: pointer
}
.search-option .first-search{
  position: absolute;
  top: 20px;
  left: 90px;
  font-size: 20px;
  opacity: 1000
}
.search-option .inputs{
  opacity: 0;
  transition: all 0.5s ease;
  transition-delay: 0.5s;
  position: relative
}
.search-option .inputs input{
  position: absolute;
  top: 200px;
  left: 30px;
  padding-left: 20px;
  background-color: transparent;
  width: 300px;
  border: none;
  color: #fff;
  border-bottom: 1px solid #eee;
  transition: all 0.5s;
  z-index: 10
}
.search-option .inputs input:focus{
  box-shadow: none;
  outline: none;
  z-index: 10
}
.search-option:hover{
  border-radius: 0px;
  width: 100%;
  left: 0px
}
.search-option:hover .inputs{
  opacity: 1
}
.search-option:hover .first-search{
  left: 27px;
  top: 25px;
  font-size: 15px
}
.search-option:hover .inputs input{
  top: 20px
}
.search-option .share{
  position: absolute;
  right: 20px;
  top: 22px
}
.buttons .btn{
  height: 50px;
  width: 150px;
  border-radius: 0px !important
}</style>
</body>

</html>