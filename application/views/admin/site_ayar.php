<head> 
  <title><?=$sayfa?><?=$menu?></title>
</head>
 <?php
$this->load->view('admin/_header');
$this->load->view('admin/_sidebar');
?> 
<br>

  <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
             <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-12 d-flex no-block align-items-center">
                        <h4 class="page-title">Site Genel Ayarları</h4>
                        <div class="ml-auto text-right">
                            <nav aria-label="breadcrumb">
                                
                            </nav>
                        </div>
                    </div>
                </div>
            
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Sales Cards  -->
                <!-- ============================================================== -->
                
                <!-- ============================================================== -->
                <!-- Sales chart -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-md-flex align-items-center">
                                    <div>
                                        
                                      

                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <form class="form-horizontal" method="post" enctype="multipart/form-data" autocomplete="off" action="<?=base_url()?>admin/ayar/ayarlar_guncelle/<?=$veri[0]->id?>" role="form">
                         

                                    <div class="form-group row">
                                        <label for="email1" class="col-sm-3 text-right control-label col-form-label">Site Meta</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="meta" value="<?=$veri[0]->meta?>" class="form-control" id="email1" placeholder="">
                                        </div>
                                    </div>



                                <div class="form-group row">
                                        <label for="email1" class="col-sm-3 text-right control-label col-form-label">Site Açıklama</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="description" value="<?=$veri[0]->description?>"class="form-control" id="email1" placeholder="">
                                        </div>
                                </div>


 


                                  <hr> 

       
                             





                            

                               


                                <div class="form-group row">
                                        <label for="email1" class="col-sm-3 text-right control-label col-form-label">Dernek Sloganı</label>
                                        <div class="col-sm-9">
                                            <input type="text"  name="slogan" value="<?=$veri[0]->slogan?>"class="form-control" id="email1" placeholder="">
                                        </div>
                                </div>
                                   <div class="form-group row">
                                        <label for="email1" class="col-sm-3 text-right control-label col-form-label">Dernek Telefonu</label>
                                        <div class="col-sm-9">
                                            <input type="text"  name="telefon" value="<?=$veri[0]->telefon?>"class="form-control" id="email1" placeholder="">
                                        </div>
                                </div>
                                

                                   <div class="form-group row">
                                        <label for="email1" class="col-sm-3 text-right control-label col-form-label">Dernek Email</label>
                                        <div class="col-sm-9">
                                            <input type="text"  name="email" value="<?=$veri[0]->email?>"class="form-control" id="email1" placeholder="">
                                        </div>
                                </div>
                                   <div class="form-group row">
                                        <label for="email1" class="col-sm-3 text-right control-label col-form-label">Dernek Adres</label>
                                        <div class="col-sm-9">
                                            <input type="text"  name="adres" value="<?=$veri[0]->adres?>"class="form-control" id="email1" placeholder="">
                                        </div>
                                </div>
<hr>
                                <div class="form-group row">
                         <label class="col-sm-3 text-right control-label col-form-label">Google Maps</label>
                             <div class="col-sm-9">
                 <textarea name="maps" class="" cols="67" rows="6"><?=$veri[0]->maps?></textarea>
           </div>
                   </div>
<hr>

                                   <div class="form-group row">
                            
                                        <label for="email1" class="col-sm-3 text-right control-label col-form-label">Facebook Sayfa URL
                                           </label>
                                        <div class="col-sm-9">
                                            <input type="text"  name="face" value="<?=$veri[0]->face?>"class="form-control" id="email1" placeholder="">
                                        </div>



                                            
                                </div>
                             
                               <div class="form-group row">
                                        <label for="email1" class="col-sm-3 text-right control-label col-form-label">Twitter Sayfa URL
</label>
                                        <div class="col-sm-9">
                                            <input type="text"  name="twitter" value="<?=$veri[0]->twitter?>"class="form-control" id="email1" placeholder="">
                                        </div>
                                </div>

                                 <div class="form-group row">
                                        <label for="email1" class="col-sm-3 text-right control-label col-form-label">Web Sayfa Sayfa URL</label>
                                        <div class="col-sm-9">
                                            <input type="text"  name="website" value="<?=$veri[0]->website?>"class="form-control" id="email1" placeholder="">
                                        </div>
                                </div>

                                 <div class="form-group row">
                                        <label for="email1" class="col-sm-3 text-right control-label col-form-label">Google Sayfa URL</label>
                                        <div class="col-sm-9">
                                            <input type="text"  name="google" value="<?=$veri[0]->google?>"class="form-control" id="email1" placeholder="">
                                        </div>
                                </div>
                                 <div class="form-group row">
                                        <label for="email1" class="col-sm-3 text-right control-label col-form-label">Instagram Sayfa URL
</label>
                                        <div class="col-sm-9">
                                            <input type="text"  name="instagram" value="<?=$veri[0]->instagram?>" class="form-control" id="email1" placeholder="">
                                        </div>
                                </div>

                                

                                         <div class="form-group row">
                                        <label for="email1" class="col-sm-3 text-right control-label col-form-label">Site Tittle</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="title" value="<?=$veri[0]->title?>"class="form-control" id="email1" placeholder="">
                                        </div>
                                    </div>

                                   

                                  
                    


                              







                            
                            <div class="border-top">
                                <div class="card-body">
                                    <button type="submit" style="margin-left: 650px;" class="btn btn-success">Kaydet</button>
                                </div>
                            </div>

                        </form>


                            </div>
                        </div>
                    </div>
                </div>






                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>
                <!-- ============================================================== -->
                <!-- Sales chart -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Recent comment and chats -->
                <!-- ============================================================== -->
               </div>
              
                <!-- ============================================================== -->
                <!-- Recent comment and chats -->
                <!-- ============================================================== -->
    


<?php
$this->load->view('admin/_footer');
?>

