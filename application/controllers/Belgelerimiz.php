<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Belgelerimiz extends CI_Controller {

	 public function __construct()
        {
                   parent::__construct();
                // Your own constructor code
               $this->load->helper('url');
               $this->load->model('Database_Model');
        }
 
	
	public function index()
	{
		$query=$this->db->query("SELECT * FROM ayarlar");
		$data["veri"]=$query->result();

		

		$query=$this->db->query("SELECT * FROM menu where menu_durum='Aktif'");
		$data["menu"]=$query->result();

		$query=$this->db->query("SELECT * FROM menu where id=5");
		$data["menu_ad"]=$query->result();

		$query=$this->db->query("SELECT *FROM belgelerimiz");
		$data["verim"]=$query->result();

		$data["sayfa"]="Belgelerimiz| ";

$query=$this->db->query("SELECT * FROM anasayfa_ayarlari");
		$data["ana"]=$query->result();

    $data["menuac"]="belgelerimiz";
	
	


	

	




		$this->load->view('_header',$data);
	
		$this->load->view('belgelerimiz',$data);

		$this->load->view('_footer');
	}





}
