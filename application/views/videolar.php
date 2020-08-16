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
    		<div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-12 text-center heading-section ftco-animate">
            <h2 class="mb-2"><span class="px-4">Video Galeri</span></h2>
            <span class="subheading"></span>
          </div>
        </div>
      
        <div class="row">
        	  <?php
        		foreach ($video as $rs) {
        		 	# code...
        		

        		 ?>
        	
        	<div class="col-md-4">
        		
        		<div class="sermon-wrap sermon-wrap-2 mb-4 ftco-animate">
        			
    					<iframe width="350" height="250" src=" <?=$rs->video_link?>" ></iframe>
    					<div class="text p-4 bg-light text-center">
    						<h2 class="mb-3"><?=$rs->video_adi?></h2>
		  					
							
    					</div>
    						
  					</div>
  					
  			
        	</div>

        	
        	  <?php } ?>
        	
        	
        </div>
      
        
    	</div>
    </section>
