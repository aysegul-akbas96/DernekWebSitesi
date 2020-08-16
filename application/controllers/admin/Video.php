<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Video extends CI_Controller {

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
		

		$query=$this->db->query("SELECT * FROM video");
		$data["video"]=$query->result();

		$data["sayfa"]="Video Yönetimi | ";
		$data["menu"]="Admin Paneli ";

   
	
		$this->load->view('admin/video',$data);
		
	}

		public function duzenle($id)
	{
		
		$query=$this->db->query("SELECT * FROM video WHERE id=$id");
		$data["video"]=$query->result();

		$data["sayfa"]="Video Yönetimi | ";
		$data["menu"]="Admin Paneli ";


		$this->load->view('admin/video_duzenle',$data);
	}


	public function guncelle($id)
	{
	

    	$query=$this->db->query("SELECT * FROM video WHERE id=$id");
		$data["video"]=$query->result();

		$data["sayfa"]="Video Yönetimi | ";
		$data["menu"]="Admin Paneli ";


				
		 $data=array(

                      
                       'video_adi'=>$this->input->post('video_adi'),
                      
                       'video_link'=>$this->input->post('video_link'),

                       
                   
						
                       
                       
                 );
				
			  
			   $this->update_data("video",$data,$id);

               
			   $this->session->set_flashdata("mesaj","Güncelleme Başarıyla Gerçekleştirildi"); 
			   redirect(base_url()."admin/video");

	}


	
	 public function ekle()
	 {
	 	$data["sayfa"]="Video Yönetimi | ";
		$data["menu"]="Admin Paneli ";


	 
			$this->load->view('admin/video_ekle',$data);


	 }


	   public function ekle_kaydet()
	{
		$data["sayfa"]="Video Yönetimi | ";
		$data["menu"]="Admin Paneli ";


				
                $data=array(

                      
                       'video_adi'=>$this->input->post('video_adi'),
                      
                       'video_link'=>$this->input->post('video_link'),                      
                 );


               $this->db->insert("video",$data);
			   $this->session->set_flashdata("mesaj","Kayıt Başarıyla Gerçekleştirildi"); 
			   redirect(base_url()."admin/video");
	}

	public function sil($id)
	{
		

			     $this->db->query("DELETE  FROM video where id=$id");
	
			   
               
                 $this->session->set_flashdata("mesaj","Silme İşlemi Başarıyla Gerçekleştirildi"); 
			    redirect(base_url()."admin/video");
	}



	public function update_data($table,$data,$id){
		$this->db->where('id',$id);
		$this->db->update($table,$data);
		return true;
		
	}

}