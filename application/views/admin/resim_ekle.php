<head> 
  <title><?=$sayfa?><?=$menu?></title>
</head>
 <?php
$this->load->view('admin/_header');
$this->load->view('admin/_sidebar');
?> 
<div class="content">
            <div class="animated fadeIn">
                <div class="row">
<div class="col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Resim Yönetimi</strong>
                            </div>
                              </div>
            </div>
          </div>
                            <div class="card-body">

<?php if($this->session->flashdata("mesaj"))
    { ?>
  <div class="alert alert-success" role="alert">
        <button type="button" class="close" data-dismiss="alert">×</button>
         <strong>İşlem:</strong> <?=$this->session->flashdata("mesaj")?>
  </div>
    
  <?php }?>


                               
                            </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                          <div><br>
                                          </div>
                                            <form method="post"  enctype="multipart/form-data" autocomplete="off" action="<?=base_url()?>admin/resim/ekle_kaydet" role="form">
                                               
                                         
                                              
                                   <div class="row form-group">
                                        <div class="col col-md-3"><label for="select" class=" form-control-label">Albüm Adı</label></div>
                                        <div class="col-12 col-md-9">
                                            <select name="album_id"  id="select" class="form-control">

                                                  <?php

                                            foreach ($album_getir as $rs) {
                                                # code...
                                           
                                            ?>

                                               <option value="<?=$rs->id?>"><?=$rs->album_adi?></option>
                                              
                                          
                                            
                                                <?php

                                            }
                                                ?>
                                              
                                             
                                            </select>
                                        </div>
                                    </div>


                                    <div class="form-group row">
                                        <label for="email1" class="col-sm-3 text-right control-label col-form-label">Resim Seçiniz</label>
                                        <div class="col-sm-9">
                                            <input type="file" name="resim"  class="form-control" id="email1" required="" placeholder="Yükleme için gözat">
                                         
                                      </div>
                                      
                              
                                                </div>






                                 

                                             



                                                
                                                
                                            


                                                <div class="border-top">
                                <div class="card-body">
                                  <br>
                                  <br>
                                    <button type="submit" style="margin-left: 850px;" class="btn btn-success">Kaydet</button>
                                </div>
                            </div>
                                              
                                            </form>
                                        </div>
                                        <!-- /.col-lg-6 (nested) -->
                                        <div class="col-lg-6">
                                            
                                      
                                          
                                           
                                        </div>
                                        <!-- /.col-lg-6 (nested) -->
                                    </div>
                                    <!-- /.row (nested) -->
                                </div>
                                <!-- /.panel-body -->
                            </div>
                            <!-- /.panel -->
                        </div>
                        <!-- /.col-lg-12 -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.container-fluid -->
            </div>









    


<?php
$this->load->view('admin/_footer');
?>

