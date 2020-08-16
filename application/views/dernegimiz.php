 <section class="hero-wrap hero-wrap-2" style="background-image: url('<?=base_url()?>uploads/<?=$menu_ad[0]->resim?>');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-center">
          <div class="col-md-9 ftco-animate pb-5 text-center">
            <h1 class="mb-2 bread"><?=$menu_ad[0]->menu_adi?></h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="<?=base_url()?>home">Anasayfa<i class="ion-ios-arrow-forward"></i></a></span> <span><?=$menu_ad[0]->menu_adi?> <i class="ion-ios-arrow-forward"></i></span></p>
          </div>
        </div>
      </div>
    </section>
		

		<section class="ftco-section">
			<div class="container">
				<div class="row">
          
					<div class="col-md-3">
            <?php foreach ($verim as $rs) {
            # code...
           ?>
						<ul class="ministry-list">
							<li class="active"><a href="<?=base_url()?>dernegimiz/dernek_detay/<?=$rs->id?>"><?=$rs->baslik?></a></li>
						
						</ul>
            <?php } ?>
            <ul class="ministry-list">
							<li class="active"><a href="<?=base_url()?>dernegimiz/yonetim">Yönetim Kurulu</a></li>
						
						</ul>
					</div>
					


					<div class="col-md-9">
						<?php 
foreach ($resim as $rr) {


 ?>
						<p><img src="<?=base_url()?>uploads/<?=$rr->resim?>" alt="" class="mySlides" style="width: 600px; height: 350px;"></p>
						<?php } ?>
						<script>
var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}    
  x[myIndex-1].style.display = "block";  
  setTimeout(carousel, 2000); // Change image every 2 seconds
}
</script>

					</div>
				
        
					
				</div>
			</div>
		</section>
    

   
    