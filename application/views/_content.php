 <div class="hero-wrap js-fullheight" style="background-image: url('<?=base_url()?>uploads/<?=$ana[0]->resim?>');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center" data-scrollax-parent="true">
          <div class="col-md-10 text-center ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
          	<h1 class="mb-0"><?=$ana[0]->title_aciklama?></h1>
          	
        
           
          </div>
        </div>
      </div>
    </div>


     <section class="ftco-section bg-light">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-12 text-center heading-section heading-section-light ftco-animate">
            <h2 class="mb-2"><span class="px-4"><?=$dernek[0]->baslik?></span></h2>
            
          </div>
        </div>
        <div class="row d-flex sermon-wrap">
          <div class="col-md-6 d-flex align-items-stretch ftco-animate">
            <div class="img" style="background-image: url(<?=base_url()?>uploads/<?=$dernek[0]->resim?>); width: 500px; height: 650px;"></div>
          </div>
          <div class="col-md-6 py-4 text ftco-animate">
            
            <div class="meta">
              
            </div>
            <p><?=$dernek[0]->aciklama?></p>
            <p class="mt-4 btn-customize">
              <a href="<?=$ana[0]->tanitim_video?>" class="btn btn-primary px-4 py-3 mr-md-2 popup-vimeo"><span class="icon-play"></span> Tanıtım Videomuz</a> 
            </p>
          </div>
        </div>
      </div>
    </section>



  
  <section class="ftco-section">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-12 text-center heading-section ftco-animate">
            <h2 class="mb-2"><span class="px-4">Duyurular</span></h2>
       
          </div>
        </div>
        <div class="row">

            <?php foreach ($duyuru as $rs) {
                # code...
               ?>
           
          <div class="col-lg-6">
            
        
            <div class="d-flex services ftco-animate text-lg-left">
              <div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-promotion"></span></div>
            
              <div class="media-body pl-lg-5">
                <h3 class="heading mb-3"><?=$rs->duyuru_adi?></h3>
                <p> <a href="<?=base_url()?>haber/duyuru/<?=$rs->id?>">Detaylı Bilgi İçin Tıklayınız.</a> </p>
                
              </div>

            </div>
           
          </div>

  <?php } ?>
       
        </div>
      </div>
    </section>


    <section class="ftco-section ftco-no-pt ftco-no-pb">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 py-5">
            <div class="heading-section heading-section-no-line ftco-animate mb-5">
              <h2 class="mb-2">Güncel Haberler</h2>
         
            </div>
              <?php 
              foreach ($haber as $rs) {
                 # code...
                ?>
            <div class="event-wrap d-md-flex ftco-animate">
            
              <div class="img"style="background-image: url(<?=base_url()?>uploads/<?=$rs->resim?>);"></div>
              <div class="text pl-md-5">
                <h2 class="mb-3"><a href="<?=base_url()?>haber/haber_detay/<?=$rs->id?>"><?=$rs->haber_adi?></a></h2>
                <div class="meta">
                  <p>
                    <span><i class="icon-calendar mr-2"></i><?=$rs->haber_tarih?></span>
                    
                  </p>
                </div>
                <p><a href="<?=base_url()?>haber/haber_detay/<?=$rs->id?>" class="btn btn-primary">Devamı..</a></p>
              </div>
          
            </div>
              <?php } ?>
           

          </div>
          
        </div>
      </div>
    </section>


    <section class="ftco-section bg-light">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-12 text-center heading-section heading-section-light ftco-animate">
            <h2 class="mb-2"><span class="px-4">Etkinlikler</span></h2>
           
          </div>
        </div>
        <div class="row d-flex">
          <?php 
          foreach ($etkinlik as $rs) {
             # code...
           ?>
          <div class="col-lg-4 d-flex ftco-animate">
            <div class="blog-entry justify-content-end">
              <a href="<?=base_url()?>etkinlikler/etkinlik_detay/<?=$rs->id?>" class="block-20" style="background-image: url('<?=base_url()?>uploads/<?=$rs->resim?>');">
              </a>
              <div class="text d-flex float-right d-block">
                <div class="topper text-center pt-4 px-3">
                  <?=$rs->etkinlik_tarih?>
                </div>
                <div class="desc p-4">
                  <h3 class="heading mt-2"><a href="<?=base_url()?>etkinlikler/etkinlik_detay/<?=$rs->id?>"><?=$rs->etkinlik_adi?></a></h3>
                  <p><?php
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