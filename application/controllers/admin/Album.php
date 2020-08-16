<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Album extends CI_Controller {

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
		

		$query=$this->db->query("SELECT * FROM album");
		$data["album"]=$query->result();

		$data["sayfa"]="Albüm Yönetimi | ";
		$data["menu"]="Admin Paneli ";

		   
	
		$this->load->view('admin/album',$data);
		
	}




	 public function ekle()
	{     
		$data["sayfa"]="Albüm Yönetimi | ";
		$data["menu"]="Admin Paneli ";

	
		$this->load->view('admin/album_ekle',$data);
		
	}

public function ekle_kaydet()
	{
		$data["sayfa"]="Albüm Yönetimi | ";
		$data["menu"]="Admin Paneli ";


	      $data=array(

                      
                       'album_adi'=>$this->input->post('album_adi'),
                      
                                           
                 );
                       	$this->db->insert("album",$data);
			   $this->session->set_flashdata("mesaj","Kayıt Başarıyla Gerçekleştirildi"); 
			   redirect(base_url()."admin/album");

	}
	







	public function duzenle($id)
	{
		$data["sayfa"]="Albüm Yönetimi | ";
		$data["menu"]="Admin Paneli ";
		
			$query=$this->db->query("SELECT * FROM album WHERE id=$id");
			$data["album"]=$query->result();


			$this->load->view('admin/album_duzenle',$data);
	}





		public function guncelle($id)
	{
		$data["sayfa"]="Albüm Yönetimi | ";
		$data["menu"]="Admin Paneli ";


             $data=array(

                        'album_adi'=>$this->input->post('album_adi'),
                                
                 );
				
			    $this->load->model('Database_Model');
			   $this->Database_Model->update_data("album",$data,$id);
               
               
			   $this->session->set_flashdata("mesaj","Güncelleme Başarıyla Gerçekleştirildi"); 
			   redirect(base_url()."admin/album");

	}





	public function sil($id)
	{
		 $query=$this->db->query("SELECT id FROM resim WHERE album_id=$id");
		 $data["veri"]=$query->result(); 
		
		if($data["veri"]!=null){
			     $this->db->query("DELETE album,resim FROM album INNER JOIN resim ON album.id=resim.album_id WHERE album.id=$id");
		}
		else{
       
            $this->db->query("DELETE FROM album WHERE id=$id");
		}
			   
               
                 $this->session->set_flashdata("mesaj","Silme İşlemi Başarıyla Gerçekleştirildi"); 
			    redirect(base_url()."admin/album");
	}





}
