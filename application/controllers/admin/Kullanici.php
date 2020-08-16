
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kullanici extends CI_Controller {

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
		$data["sayfa"]="Admin Yönetimi | ";
		$data["menu"]="Admin Paneli ";

		$query=$this->db->query("SELECT * FROM admin");
		$data["veriler"]=$query->result();

		   
	
		$this->load->view('admin/adminlistele',$data);
		
	}
		public function duzenle($id)
	{
		$query=$this->db->query("SELECT * FROM ayarlar");
		$data["ve"]=$query->result();
		$data["sayfa"]="Admin Yönetimi | ";
		$data["menu"]="Admin Paneli ";

		$query=$this->db->query("SELECT * FROM admin WHERE id=$id");
				$data["veri"]=$query->result();
				$this->load->view('admin/adminduzenle',$data);
}
	public function guncelle($id)
	{
		$query=$this->db->query("SELECT * FROM ayarlar");
		$data["ve"]=$query->result();
		$data["sayfa"]="Admin Yönetimi | ";
		$data["menu"]="Admin Paneli ";

    $query=$this->db->query("SELECT * FROM admin WHERE id=$id");
				$data["verim"]=$query->result();
		 $data=array(

                      
                       'admin_adi'=>$this->input->post('admin_adi'),
                      
                       'admin_sifre'=>$this->input->post('admin_sifre'),

                       
                   
						
                       
                       
                 );
				
			   $this->update_data("admin",$data,$id);
               
			   $this->session->set_flashdata("mesaj","Güncelleme Başarıyla Gerçekleştirildi"); 
			   redirect(base_url()."admin/kullanici");

	}


	public function update_data($table,$data,$id){
		$this->db->where('id',$id);
		$this->db->update($table,$data);
		return true;
		
	}
	 public function ekle(){
	 	$query=$this->db->query("SELECT * FROM ayarlar");
		$data["ve"]=$query->result();
		$data["sayfa"]="Admin Yönetimi | ";
		$data["menu"]="Admin Paneli ";
	   	 $query=$this->db->query("SELECT * FROM admin");
				$data["veriekle"]=$query->result();
				$this->load->view('admin/adminekle',$data);



	   }
	   public function eklekaydet()
	{
		 
$query=$this->db->query("SELECT * FROM ayarlar");
		$data["ve"]=$query->result();
		$data["sayfa"]="Admin Yönetimi | ";
		$data["menu"]="Admin Paneli ";
              $query=$this->db->query("SELECT * FROM admin");
				$data["veri"]=$query->result();



              
             
			
            						
                      $data=array(

                      
                       'admin_adi'=>$this->input->post('admin_adi'),
                      
                       'admin_sifre'=>$this->input->post('admin_sifre'),                      
                 );
                       	$this->db->insert("admin",$data);
			   $this->session->set_flashdata("mesaj","Yeni Kullanıcı Eklendi !"); 
			   redirect(base_url()."admin/kullanici");
			}

	public function sil($id)
	{
		 $this->db->query("DELETE FROM admin WHERE id=$id");
               
                 $this->session->set_flashdata("mesaj","Silme İşlemi Başarıyla Gerçekleştirildi"); 
			    redirect(base_url()."admin/kullanici");
	}

}