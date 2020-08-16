<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	 function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->database();
		
		
	}
	 
	public function index()
	{
		$query=$this->db->query("SELECT * FROM ayarlar");
		$data["ve"]=$query->result();
			
		
		$this->load->view('admin/login',$data);
		
	}



		public function login_ol()
	{


		$admin_adi= $this->input->post("admin_adi");
		$admin_sifre= $this->input->post("admin_sifre");
		
		//Zararlı kodlardan temizleme
		 $admin_adi = $this->security->xss_clean($admin_adi);
		 $admin_sifre = $this->security->xss_clean($admin_sifre);
		$this->load->model('Database_Model');
		
		$result= $this->Database_Model->login("admin",$admin_adi,$admin_sifre);
		
			if($result)
			{
				//KUllanıcı varsa bilgileri diziye aktarılıyor
				$sess_array=array(
				'id'=>$result[0]->id,
				'admin_adi'=>$result[0]->admin_adi,
				'admin_sifre'=>$result[0]->admin_sifre,
			
			
				
				
				);
			$this->session->set_userdata('admin_session',$sess_array);
			
			redirect(base_url().'admin');
			
			}
			else{
				$this->session->set_flashdata("mesaj","Geçersiz Kullanıcı ya da Şifre");
				redirect(base_url().'admin/login');
			}
	}
	
	
		public function login_out()
	{
		 $this->session->unset_userdata('admin_session');
         $this->session->sess_destroy();
         redirect(base_url().'admin/login');
	}


}