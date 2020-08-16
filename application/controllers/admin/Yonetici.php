
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Yonetici extends CI_Controller {

	 public function __construct()
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
		$query=$this->db->query("SELECT * FROM ayarlar");
		$data["ve"]=$query->result();
		$data["sayfa"]="Yönetim Kurulu | ";
		$data["menu"]="Admin Paneli ";

		$query=$this->db->query("SELECT * FROM yonetim_kurulu");
		$data["veriler"]=$query->result();

		   
	
		$this->load->view('admin/yonetici_listele',$data);
		
	}
		public function duzenle($id)
	{
		$query=$this->db->query("SELECT * FROM ayarlar");
		$data["ve"]=$query->result();
		$data["sayfa"]="Yönetim Kurulu | ";
		$data["menu"]="Admin Paneli ";

		$query=$this->db->query("SELECT * FROM yonetim_kurulu WHERE id=$id");
				$data["veri"]=$query->result();
				$this->load->view('admin/yonetici_duzenle',$data);
}
	public function guncelle($id)
	{
		$query=$this->db->query("SELECT * FROM ayarlar");
		$data["ve"]=$query->result();
		$data["sayfa"]="Yönetim Kurulu  | ";
		$data["menu"]="Admin Paneli ";

   $query=$this->db->query("SELECT * FROM yonetim_kurulu WHERE id=$id");
		  $data["veri"]=$query->result();

		 


		

        $data["id"]=$id;
		$config['upload_path']          = './uploads/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['max_size']             = 2000;
        $config['max_width']            = 2048;
        $config['max_height']           = 2000;
        $this->load->library('upload', $config); // upload kütüphanesini çağır
		
		if ( !$this->upload->do_upload('resim'))//bu resim formdaki name="resim" den geliyor
             {
                	$error=$this->upload->display_errors();
              	$this->session->set_flashdata("mesaj","Yüklemede hata oluştu:".$error);
              	$this->load->view('admin\yonetici_duzenle',$data);
                    
            }
        else
            {
            	
			    $upload_data=$this->upload->data();
              	$data=array(
                        'resim'=>$upload_data["file_name"],
                
              	);

              	 
               $this->load->model('Database_Model');
			   $this->Database_Model->update_data("yonetim_kurulu",$data,$id);
            }						
		
			  

              	 $data=array(

                        'adi_soyadi'=>$this->input->post('adi_soyadi'),
                        'meslek'=>$this->input->post('meslek'),
                               
                       
                 );

               $this->load->model('Database_Model');
			   $this->Database_Model->update_data("yonetim_kurulu",$data,$id);


			   
            
			   $this->session->set_flashdata("mesaj","Güncelleme Başarıyla Gerçekleştirildi"); 
			   redirect(base_url()."admin/yonetici");

	}


	
	 public function ekle(){
	 	$query=$this->db->query("SELECT * FROM yonetim_kurulu");
		$data["ve"]=$query->result();
		$data["sayfa"]="Yönetim Kurulu | ";
		$data["menu"]="Admin Paneli ";
	   	 $query=$this->db->query("SELECT * FROM yonetim_kurulu");
				$data["veriler"]=$query->result();
				$this->load->view('admin/yonetici_ekle',$data);



	   }
	   public function ekle_kaydet()
	{
		 
$query=$this->db->query("SELECT * FROM yonetim_kurulu");
		$data["ve"]=$query->result();
		$data["sayfa"]="Yönetim Kurulu | ";
		$data["menu"]="Admin Paneli ";
              $query=$this->db->query("SELECT * FROM yonetim_kurulu");
				$data["veriler"]=$query->result();


  $config['upload_path']          = './uploads/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['max_size']             = 2000;
        $config['max_width']            = 2048;
        $config['max_height']           = 2000;

		
		$this->load->library('upload', $config); // upload kütüphanesini çağır
		
		if ( !$this->upload->do_upload('resim'))//bu resim formdaki name="resim" den geliyor
             {
                	$error=$this->upload->display_errors();
              	$this->session->set_flashdata("mesaj","Yüklemede hata oluştu:".$error);
              	$this->load->view('admin\yonetici_ekle',$data);
                    
            }
        else
            {
            	
			    $upload_data=$this->upload->data();
			    
              
             
			
            						
                      $data=array(

                      
                       'adi_soyadi'=>$this->input->post('adi_soyadi'),
                      
                       'meslek'=>$this->input->post('meslek'),  

                       'resim'=>$upload_data["file_name"],                    
                 );
                       	$this->db->insert("yonetim_kurulu",$data);
			   $this->session->set_flashdata("mesaj","Yeni Kişi Eklendi !"); 
			   redirect(base_url()."admin/yonetici");
			}
		}

	public function sil($id)
	{
		 $this->db->query("DELETE FROM yonetim_kurulu WHERE id=$id");
               
                 $this->session->set_flashdata("mesaj","Silme İşlemi Başarıyla Gerçekleştirildi"); 
			    redirect(base_url()."admin/yonetici");
	}

}