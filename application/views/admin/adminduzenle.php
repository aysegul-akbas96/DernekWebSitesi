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
                        <h4 class="page-title">Admin Yönetimi</h4>
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
                                <form class="form-horizontal" method="post" action="<?=base_url()?>admin/kullanici/guncelle/<?=$veri[0]->id?>" autocomplete="off" role="form">
                            

                                <div class="row form-group">
                                        <div class="col col-md-3"><label for="email-input" class=" form-control-label">Admin</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="email-input" name="admin_adi" value="<?=$veri[0]->admin_adi?>" placeholder="" class="form-control"></div>
                                    </div>



                                    <div class="form-group row">
                                        <div class="col col-md-3">
                                    <label class="for="email-input" class=" form-control-label">Admin Şifre</label></div>
                                    <div class="col-sm-9">
                                       <input type="text" id="email-input" name="admin_sifre" value="<?=$veri[0]->admin_sifre?>" placeholder="" class="form-control">
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

