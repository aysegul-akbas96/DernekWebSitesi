<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mesajlar extends CI_Controller {
function __construct()
	{
		parent::__construct();
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
		$data["sayfa"]="Mesaj Yönetimi | ";
		$data["menu"]="Admin Paneli ";

		$query=$this->db->query("SELECT * FROM mesajlar order by tarih desc");
		$data["veriler"]=$query->result();
		//$data["veriler"]=$this->Database_Model->get_urunler();
		$this->load->view('admin/mesajlar',$data);


		
		
		//echo "Admin ana sayfa";
	}
	
		public function ekle()
	{
		$data["sayfa"]="Mesaj Yönetimi | ";
		$data["menu"]="Admin Paneli ";
		


		$this->load->view('admin/mesaj_ekle',$data);

	}
	
		
		public function ekle_kaydet()
	{
		 $data=array(

		 				'isim'=>$this->input->post('isim'),
		 				
                        'email'=>$this->input->post('email'),
					'konu'=>$this->input->post('konu'),
						'mesaj'=>$this->input->post('mesaj'),
						'durum'=>$this->input->post('durum'),
						
                       
                 );

               $this->db->insert('mesajlar',$data);
			   $this->session->set_flashdata("mesaj","Mesaj Kaydı Başarıyla Gerçekleştirildi"); 
			   redirect(base_url()."admin/mesajlar");

			   $data["sayfa"]="Mesaj Yönetimi | ";
		$data["menu"]="Admin Paneli ";

	}
	
		public function detay($id)
	{
				$data["sayfa"]="Mesaj Yönetimi | ";
		        $data["menu"]="Admin Paneli ";


				$this->db->query("UPDATE Mesajlar SET durum='Okundu' WHERE Id=$id");
				$query=$this->db->query("SELECT * FROM Mesajlar WHERE Id=$id");
				$data["veri"]=$query->result();
				$this->load->view('admin/mesaj_detay',$data);



	}
	
		
	public function sil($id)
	{
			    $this->db->query("DELETE FROM mesajlar WHERE Id=$id");
               
                 $this->session->set_flashdata("mesaj","Silme İşlemi Başarıyla Gerçekleştirildi"); 
			    redirect(base_url()."admin/mesajlar");
	}
	


     
	
	
}