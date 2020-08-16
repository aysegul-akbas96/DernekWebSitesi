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











<section class="ftco-section ftco-degree-bg">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 ftco-animate">
            <?php 
              foreach ($verim as $rs) {
                 # code...
                ?>
            <div class="event-wrap d-md-flex ftco-animate">
              
              <div class="img"style="background-image: url(<?=base_url()?>uploads/<?=$rs->resim?>);"></div>
              <div class="text pl-md-5">
                <h2 class="mb-3"><a href="<?=base_url()?>haber/haber_detay/<?=$rs->id?>"><?=$rs->haber_adi?></a></h2>
                <div class="meta">
                  <p>
                    <span><i class="icon-calendar mr-2"></i> <?=$rs->haber_tarih?></span>
                    
                    <span><i class=""></i> 
                      <?php
                        $yazi =$rs->haber_aciklama;

                        $uzunluk = strlen($yazi); 
                        $sinir = 200; 

                        if ($uzunluk > $sinir) { 

                            $icerik = substr($yazi,0,$sinir); 



?>





                      

                        <p> <?=$icerik?>.. </p>

                   
            <?php
            }else{


   

            ?>    



            <p> <?=$rs->haber_aciklama?> </p>     

 <?php
            }

                
       
            ?> 





                    </span>
                  </p>
                </div>
                <p><a href="<?=base_url()?>haber/haber_detay/<?=$rs->id?>" class="btn btn-primary">Devamı</a></p>
              </div>
           
            </div>
             <?php } ?>
            
        </div> <!-- .col-md-8 -->


          <div class="col-lg-4 sidebar ftco-animate">
            
            <div class="sidebar-box ftco-animate">
              <div class="categories">
               
                <h3>Duyurular</h3>
                 <?php 
                foreach ($duy as $dd) {
                  # code...
               

                 ?>
                <li><a href="<?=base_url()?>haber/duyuru/<?=$dd->id?>"><?=$dd->duyuru_adi?><span class="ion-ios-arrow-forward"></span></a></li>
              <?php } ?>
               
              </div>
            </div>

            <div class="sidebar-box ftco-animate">
              <h3>Güncel Haberler</h3>
              
              <?php 
              foreach ($verim as $rs) {
                # code...
              

               ?>

              <div class="block-21 mb-4 d-flex">
                <a class="blog-img mr-4" style="background-image: url(<?=base_url()?>uploads/<?=$rs->resim?>);"></a>
                <div class="text">
                  <h3 class="heading"><a href="<?=base_url()?>haber/haber_detay/<?=$rs->id?>"><?=$rs->haber_adi?></a></h3>
                  <div class="meta">
                    <div><span class="icon-calendar"></span> <?=$rs->haber_tarih?></div>
                    
                  </div>
                </div>
              </div>
            <?php } ?>
              
             
            </div>

           

            
          </div>

        </div>
      </div>
    </section> <!-- .section -->