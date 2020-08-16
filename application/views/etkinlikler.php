  
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
        <div class="row d-flex">
          <?php foreach ($verim as $rs) {
              # code...
             ?>
          <div class="col-lg-4 d-flex ftco-animate">
            
            <div class="blog-entry justify-content-end">
              <a href="<?=base_url()?>etkinlikler/etkinlik_detay/<?=$rs->id?>" class="block-20" style="background-image: url('<?=base_url()?>uploads/<?=$rs->resim?>'); width: 350 px; height: 250px;" >
              </a>
              <div class="text d-flex float-right d-block">
                <div class="topper text-center pt-4 px-3">
                  <span><?=$rs->etkinlik_tarih?></span>
                 
                </div>
                <div class="desc p-4">
                  <h3 class="heading mt-2"><a href="<?=base_url()?>etkinlikler/etkinlik_detay/<?=$rs->id?>"><?=$rs->etkinlik_adi?></a></h3>
                  <p> <?php
                        $yazi =$rs->etkinlik_aciklama;

                        $uzunluk = strlen($yazi); 
                        $sinir = 100; 

                        if ($uzunluk > $sinir) { 

                            $icerik = substr($yazi,0,$sinir); 



?>





                      

                        <p> <?=$icerik?>.. </p>

                   
            <?php
            }else{


   

            ?>    



            <p> <?=$rs->etkinlik_aciklama?> </p>     

 <?php
            }

                
       
            ?> 



</p>
                </div>
              </div>
            </div>
       
          </div>
             <?php } ?>
         
          
       
        </div>
       
      </div>
    </section>
