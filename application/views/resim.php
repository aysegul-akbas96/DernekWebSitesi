

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


<section class="ftco-section ftco-gallery">
      <div class="container">
        <div class="row">
          <div class="col-lg-8">
            <div class="row no-gutters">
              <?php foreach ($albumcek as $rs) {
                # code...
               ?>
              <div class="col-md-6 ftco-animate">
               
                <a href="<?=base_url()?>uploads/<?=$rs->resim_adi?>" class="gallery image-popup img d-flex align-items-center" style="background-image: url(<?=base_url()?>uploads/<?=$rs->resim_adi?>);">
                 
                </a>
             
              </div>
         <?php } ?>
            </div>
          </div>
          
    
        
        </div>
      </div>
    </section>
