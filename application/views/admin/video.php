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
                                <strong class="card-title">Video Yönetimi</strong>
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
                                         <a href="<?=base_url()?>admin/video/ekle?>" class="btn btn-success btn-success"><i class=" ti-new-window"></i>Yeni video ekle</a> 
                                    </div>
                                </div>
                                         <table class="table table-hover">
                                            <thead>
                                                <tr>
                                                    <th>S.No</th>
                                                     <th>Video Adı</th>
                                                     <th>Video</th>
                                                    <th>İşlemler</th>
                                                </tr>
                                            </thead>
                                            <tbody>


                                                 <?php
  $sno=0;
          foreach($video as $rs)
      { $sno++;   
    ?>
                                                <tr>
                                                   <td><?=$sno?></td>
                                 
                                  <td><?=$rs->video_adi?></td>
                                 

                                     <td><iframe width="300" height="175" src="<?=$rs->video_link?>">
                                   </iframe>
                                   
                                    
                                  
                                      </td>

    <td>

<a href="<?=base_url()?>admin/video/duzenle/<?=$rs->id?>"><i class="btn btn-info menu-icon  ti-new-window">
                                    </i></a>
                                    <a href="<?=base_url()?>admin/video/sil/<?=$rs->id?>" class="btn btn-danger btn-danger"   onclick="return confirm('Silinsin mi?');" role="button"><i class="ti-trash"></i></a>

  </td>
                                </tr>

 <?php
      }
      ?>






                                         


                                             
                                            </tbody>
                                        </table>
                                    </div>
                                    <!-- /.table-responsive -->
                                </div>
                                <!-- /.panel-body -->
                            </div>
                            <!-- /.panel -->
                        </div>
                        <!-- /.col-lg-6 -->
                    </div>
                    <!-- /.row -->
            
                  
                    <!-- /.row -->
                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- /#page-wrapper -->













    


<?php
$this->load->view('admin/_footer');
?>

