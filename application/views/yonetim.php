 <section class="ftco-section testimony-section" style="background-image: url(<?=base_url()?>uploads/koy.jpg);">
      <div class="overlay"></div>
      <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 text-center heading-section heading-section-white ftco-animate">
            <h2 class="mb-2">Yönetim Kurulu</h2>
          </div>
        </div>
        <div class="row ftco-animate">
          <div class="col-md-12">
            <div class="carousel-testimony owl-carousel ftco-owl">
              
              
              
             <?php
              foreach ($yonetim as $rs) {
               # code...
              ?>
              <div class="item">
                <div class="testimony-wrap text-center py-4 pb-5">
                  <div class="user-img mb-4" style="background-image: url(<?=base_url()?>uploads/<?=$rs->resim?>)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text p-3">
                   
                    <p class="name"><?=$rs->adi_soyadi?></p>
                    <span class="position"><?=$rs->meslek?></span>
                  </div>
                </div>
              </div>
            <?php } ?>
            </div>
          </div>
        </div>
      </div>
    </section>