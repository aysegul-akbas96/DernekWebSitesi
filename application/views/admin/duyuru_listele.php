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
                                <strong class="card-title">Duyuru Yönetimi</strong>
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


<div class="row mb-3">
                                    <div class="col-lg-9">
                                        
                                    </div>
                                    <div class="col-lg-3 ">
                                         <a href="<?=base_url()?>admin/duyuru/ekle?>" class="btn btn-success btn-success"><i class=" ti-new-window"></i>Yeni duyuru ekle</a> 
                                    </div>
                                </div>

                                <table class="table">
                                    <thead>
                                        <tr>
                                          <th scope="col">S.No</th>
                                          <th scope="col">Başlık</th>
                                           <th scope="col">Tarih</th>
                                          <th scope="col">Açıklama</th>
                                         
                                        
                                          <th scope="col">Resim</th>
                                           <th scope="col">İşlemler</th>


                                         
                                       
                                      </tr>
                                  </thead>
                                  <tbody>
                                      <?php
                                     $sno=0;
                                  foreach($veriler as $rs)
                                 { $sno++;   
                                     ?>

                                <tr>
                                  <td><?=$sno?></td>
                                 
                                  <td><?=$rs->duyuru_adi?></td>
                                  <td><?=$rs->duyuru_tarih?></td>
                                 
                                  <td></td>
                          
                                  <td>
                                     
                                      <img class="rounded-circle" height="200px" width="200px" src="<?=base_url()?>uploads/<?=$rs->resim?>"></a>
                                               
                                  </td>
      
                                  <td>
                                   <a href="<?=base_url()?>admin/duyuru/duzenle/<?=$rs->id?>"><i class="btn btn-info menu-icon  ti-new-window">
                                    </i></a>
                                    <a href="<?=base_url()?>admin/duyuru/sil/<?=$rs->id?>" class="btn btn-danger btn-danger"   onclick="return confirm('Silinsin mi?');" role="button"><i class="ti-trash"></i></a>
                                  </td>
                         
                                   </tr>
                               <?php } ?>
                                </tbody>
                            </table>
                        </div>
                          <?php
$this->load->view('admin/_footer');
?>
                
                    </div>
                  
            


               
