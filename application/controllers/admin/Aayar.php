<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Aayar extends CI_Controller {

	  function __construct()
        {
                parent::__construct();
                // Your own constructor code
               $this->load->helper('url');
               $this->load->model('Database_Model');
		//$this->load->database();
		//$this->load->library('session');


               if(! $this->session->userdata('admin_session')){
			redirect(base_url().'admin/login');
		}




	}
	
	public function index()
	{
		

		$query=$this->db->query("SELECT * FROM anasayfa_ayarlari");
		$data["veri"]=$query->result();

		$data["sayfa"]="Anasayfa Ayarlar Yönetimi | ";
		$data["menu"]="Admin Paneli ";

		   
	
		$this->load->view('admin/anasayfa_ayar',$data);
		
	}







	public function duzenle($id)
	{
			$data["sayfa"]="Blog Yönetimi | ";
		    $data["menu"]="Admin Paneli ";
		
			$query=$this->db->query("SELECT * FROM anasayfa_ayarlari WHERE id=$id");
			$data["veri"]=$query->result();


			$this->load->view('admin/anasayfa_ayar',$data);
	}

	
	public function guncelle($id)
	{
		
          $query=$this->db->query("SELECT * FROM anasayfa_ayarlari WHERE id=$id");
		  $data["veri"]=$query->result();

		  $data["sayfa"]="Anasayfa Ayar Yönetimi | ";
		  $data["menu"]="Admin Paneli ";


		

        $data["id"]=$id;
		$config['upload_path']          = './uploads/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['max_size']             = 2000;
        $config['max_width']            = 2024;
        $config['max_height']           = 2000;
        $this->load->library('upload', $config); // upload kütüphanesini çağır
		
		if ( !$this->upload->do_upload('resim'))//bu resim formdaki name="resim" den geliyor
             {
                	$error=$this->upload->display_errors();
              	$this->session->set_flashdata("mesaj","Yüklemede hata oluştu:".$error);
              	$this->load->view('admin\anasayfa_ayar',$data);
                    
            }
        else
            {
            	
			    $upload_data=$this->upload->data();
              	$data=array(
                        'resim'=>$upload_data["file_name"],
                
              	);

              	 
               $this->load->model('Database_Model');
			   $this->Database_Model->update_data("anasayfa_ayarlari",$data,$id);
            }						
		
			  

              	 $data=array(

                        'title'=>$this->input->post('title'),
                        'title1'=>$this->input->post('title1'),
                        'title_aciklama'=>$this->input->post('title_aciklama'),
                        'tanitim_video'=>$this->input->post('tanitim_video'),
                               
                       
                 );

               $this->load->model('Database_Model');
			   $this->Database_Model->update_data("anasayfa_ayarlari",$data,$id);


			   
            
			   $this->session->set_flashdata("mesaj","Güncelleme Başarıyla Gerçekleştirildi"); 
			   redirect(base_url()."admin/aayar");




	}





}
