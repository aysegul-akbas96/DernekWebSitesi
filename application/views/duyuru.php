
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



<section class="ftco-section bg-light">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-12 text-center heading-section heading-section-light ftco-animate">
            
          </div>
        </div>
        <div class="row d-flex sermon-wrap">
            
          <div class="col-md-6 d-flex align-items-stretch ftco-animate">
            <div class="img" style="background-image: url(<?=base_url()?>uploads/<?=$duy[0]->resim?>); width: 500px; height: 450px;" ></div>
          </div>
          <div class="col-md-6 py-4 text ftco-animate">
            <h2 class="mb-4"><?=$duy[0]->duyuru_adi?></h2>
            <div class="meta">
              <p>
                
                <span><?=$duy[0]->duyuru_tarih?></span>
              </p>
            </div>
            <p><?=$duy[0]->duyuru_aciklama?></p>
           
          </div>
       
        </div>
      </div>
    </section>