<head> 
  <title><?=$sayfa?><?=$me?></title>
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
                                <form method="post" enctype="multipart/form-data" action="<?=base_url()?>admin/menu/guncelle/<?=$menu[0]->id?>" autocomplete="off"> 
                                <strong class="card-title">Menü Yönetimi</strong>
                                    </div>
                                  </div>
                              </div>
                          </div>

                                
               <div class="row form-group">
                                        <div class="col col-md-3"><label for="email-input" class=" form-control-label">Menü Adı</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="email-input" name="menu_adi" value="<?=$menu[0]->menu_adi?>" placeholder="" class="form-control"></div>
                                    </div>
                                   
                                    
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="select" class=" form-control-label">Menu Durum</label></div>
                                        <div class="col-12 col-md-9">
                                            <select name="menu_durum"  id="select" class="form-control">
                                              <option value="<?=$menu[0]->menu_durum?>"><?=$menu[0]->menu_durum?></option>
                                                <option value="Pasif">Pasif</option>
                                                <option value="Aktif">Aktif</option>
                                             
                                            </select>
                                        </div>
                                    </div>

                                       <div class="form-group row">
                                        <label for="email1" class="col-sm-3 text-right control-label col-form-label">Banner Resmi</label>
                                        <div class="col-sm-9">
                                            <input type="file" name="resim" value="<?=$menu[0]->resim?>" class="form-control" id="email1" placeholder="Yükleme için gözat"><?=$menu[0]->resim?>
                                         
                                      </div>
                              
                                                </div>

                                    <div class="border-top">
                                <div class="card-body">
                                    <button type="submit" style="margin-left: 650px;" class="btn btn-success">Kaydet</button>
                                </div>
                            </div>
                                </div>
                                <?php
$this->load->view('admin/_footer');
?>


                            </div>

                               

                                  
               
   




                
