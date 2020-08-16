<head> 
  <title><?=$sayfa?><?=$menu?></title>
</head>
 <?php
$this->load->view('admin/_header');
$this->load->view('admin/_sidebar');
?> 


  <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
             <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-12 d-flex no-block align-items-center">
                        <h4 class="page-title">Etkinlik Yönetimi</h4>
                        <div class="ml-auto text-right">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                   
                                </ol>
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
                              <form class="form-horizontal" method="post" enctype="multipart/form-data" action="<?=base_url()?>admin/etkinlik/guncelle/<?=$veri[0]->id?>" autocomplete="off" role="form">

                                <div class="row form-group">
                                        <div class="col col-md-3"><label for="email-input" class=" form-control-label">Başlık</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="email-input" name="etkinlik_adi" value="<?=$veri[0]->etkinlik_adi?>" placeholder="" class="form-control"></div>
                                    </div>

                                      <div class="form-group row">
                                        <div class="col col-md-3">
                                    <label class="for="email-input" class=" form-control-label">Açıklama</label></div>
                                    <div class="col-sm-9">
                                            <textarea name="etkinlik_aciklama" class="ckeditor" id=""><?=$veri[0]->etkinlik_aciklama?></textarea>
                                     
                                    </div>
                                </div>


 <div class="form-group row">
                                        <div class="col col-md-3">

                                        <label for="email-input" class=" form-control-label">
                                    
                                Haber Tarih</label></div>
                                    <div class="col-12 col-md-9"><input type="datetime" id="email-input" name="etkinlik_tarih" value="<?=$veri[0]->etkinlik_tarih?>" placeholder="" class="form-control"></div>
                                </div>

                                 

                                  

                                 <div class="form-group row">
                                        <label for="email1" class="col-sm-3 text-right control-label col-form-label">Resim Seçiniz</label>
                                        <div class="col-sm-9">
                                            <input type="file" name="resim" value="<?=$veri[0]->resim?>" class="form-control" id="email1"  placeholder="Yükleme için gözat">
                                         
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
    
</div>
</div>


<?php
$this->load->view('admin/_footer');
?>

