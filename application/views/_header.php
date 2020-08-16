<!DOCTYPE html>
<html lang="en">
  <head>
    
   
 
 <title><?=$sayfa?><?=$veri[0]->title?></title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Crimson+Text:400,400i" rel="stylesheet">

    <link rel="stylesheet" href="<?=base_url()?>assets/css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="<?=base_url()?>assets/css/animate.css">
    
    <link rel="stylesheet" href="<?=base_url()?>assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?=base_url()?>assets/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="<?=base_url()?>assets/css/magnific-popup.css">

    <link rel="stylesheet" href="<?=base_url()?>assets/css/aos.css">

    <link rel="stylesheet" href="<?=base_url()?>assets/css/ionicons.min.css">

    <link rel="stylesheet" href="<?=base_url()?>assets/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="<?=base_url()?>assets/css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="<?=base_url()?>assets/css/flaticon.css">
    <link rel="stylesheet" href="<?=base_url()?>assets/css/icomoon.css">
    <link rel="stylesheet" href="<?=base_url()?>assets/css/style.css">
  </head>
  <body>
    
	  <nav class="navbar navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container d-flex align-items-stretch">
	    		<div class="col-3 d-flex align-items-center">
			      <a class="navbar-brand" href="<?=base_url()?>home"><?=$ana[0]->title?><span><?=$ana[0]->title1?></span></a>
			    </div>
					<div class="col-9 d-flex align-items-center text-right">
		      	<ul class="ftco-social mt-2 mr-3">
		          <li class="ftco-animate"><a href="<?=$veri[0]->twitter?>"><span class="icon-twitter"></span></a></li>
		          <li class="ftco-animate"><a href="<?=$veri[0]->face?>"><span class="icon-facebook"></span></a></li>
		          <li class="ftco-animate"><a href="<?=$veri[0]->instagram?>"><span class="icon-instagram"></span></a></li>
		        </ul>

			      <button class="navbar-toggler d-flex align-items-center" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
			        <span class="pt-1 mr-1">Menu</span> <span class="oi oi-menu"></span>
			      </button>
		      </div>


	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto" >
	        	 <?php
                            $dernegimiz=null;
                            $haberduyuru=null;
                            $etkinlikler=null;
                            $belgelerimiz=null;
                            $galeri=null;
                             $iletisim=null;
                         
                        

                             if($menuac=="dernegimiz")
                                $dernegimiz="active";

                                if($menuac=="haberduyuru")
                                $haberduyuru="active";

                                if($menuac=="etkinlikler")
                                $etkinlikler="active";

                                if($menuac=="belgelerimiz")
                                $belgelerimiz="active";

                                  if($menuac=="galeri")
                                $galeri="active";
                             


                                 if($menuac=="iletisim")
                                $iletisim="active";
                             
                             
                         
                         

                            ?>
                             <li class="nav-item">
              <a class="" href="<?=base_url()?>home">Anasayfa</a></li>
                              <?php
                        foreach ($menu as $rs) {







                        ?>
	          <li class="nav-item active">


	         
                  <?php
                      

                        if($rs->id==2){
                        ?>


	          <li class="nav-item">
	          <a class="<?=$dernegimiz?>" href="<?=base_url()?>dernegimiz"><?=$rs->menu_adi?>
               </a></li>

                <?php
                      }

                        if($rs->id==3){
                        ?>



	          <li class="nav-item">
	          	<a class="<?=$haberduyuru?>" href="<?=base_url()?>haber"><?=$rs->menu_adi?></a></li>
	          	     <?php
                      }

                        if($rs->id==4){
                        ?>



	          <li class="nav-item">
	          	<a class="<?=$etkinlikler?>" href="<?=base_url()?>etkinlikler"><?=$rs->menu_adi?></a></li>
	          	   <?php
                      }

                        if($rs->id==5){
                        ?>
	          <li class="nav-item">
	          		<a class="<?=$belgelerimiz?>" href="<?=base_url()?>belgelerimiz"><?=$rs->menu_adi?></a></li>
	          		 <?php
                      }

                        if($rs->id==6){
                        ?>
	          <li class="nav-item">
	      <a class="<?=$galeri?>" href="<?=base_url()?>galeri"><?=$rs->menu_adi?></a></li> <?php
                      }

                        if($rs->id==7){
                        ?>
	          <li class="nav-item">
	          	 <a class="<?=$iletisim?>" href="<?=base_url()?>home/iletisim"><?=$rs->menu_adi?></a></li>
	          	  <?php
}}
?>
	        </ul>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->

   