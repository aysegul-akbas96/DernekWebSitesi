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
                        <h4 class="page-title">Menü Yönetimi</h4>
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

                                <table class="table">
                                    <thead>
                                        <tr>
                                          <th scope="col">S.No</th>
                                          <th scope="col">MenüAdı</th>
                                          <th scope="col">MenüDurum</th>
                                           <th scope="col">MenüResim</th>
                                          <th scope="col">İşlemler</th>

                                         
                                       
                                      </tr>
                                  </thead>
                                  <tbody>
                                      <?php
                                     $sno=0;
                                  foreach($menu as $rs)
                                 { $sno++;   
                                     ?>

                                <tr>
                                  <td><?=$sno?></td>
                                 
                                  <td><?=$rs->menu_adi?></td>
                                  <td><?=$rs->menu_durum?></td>
                                  <td>  <img class="rounded-circle" height="100px" width="100px" src="<?=base_url()?>uploads/<?=$rs->resim?>"></td>
                                  <td>

                                     <a href="<?=base_url()?>admin/menu/duzenle/<?=$rs->id?>"><i class="btn btn-info menu-icon  ti-new-window">
                                    </i></a>
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
                       
    





            


               
