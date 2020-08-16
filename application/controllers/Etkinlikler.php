<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Etkinlikler extends CI_Controller {

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

		$query=$this->db->query("SELECT * FROM menu where id=4");
		$data["menu_ad"]=$query->result();

		$query=$this->db->query("SELECT *FROM etkinlik");
		$data["verim"]=$query->result();

		$query=$this->db->query("SELECT haber_adi,haber_tarih,resim FROM haber order by id asc limit 5");
		$data["haber"]=$query->result();
		$data["sayfa"]="Etkinlikler| ";

$query=$this->db->query("SELECT * FROM anasayfa_ayarlari");
		$data["ana"]=$query->result();

    $data["menuac"]="etkinlikler";
	
	


	

	




		$this->load->view('_header',$data);
	
		$this->load->view('etkinlikler',$data);

		$this->load->view('_footer');
	}

public function etkinlik_detay($id)
	{
		$query=$this->db->query("SELECT * FROM ayarlar");
		$data["veri"]=$query->result();

		

		$query=$this->db->query("SELECT * FROM menu where menu_durum='Aktif'");
		$data["menu"]=$query->result();

		$query=$this->db->query("SELECT * FROM menu where id=4");
		$data["menu_ad"]=$query->result();

		$query=$this->db->query("SELECT * FROM etkinlik where id=$id");
		$data["verim"]=$query->result();
		$data["sayfa"]="Etkinlikler | ";

		$query=$this->db->query("SELECT * FROM anasayfa_ayarlari");
		$data["ana"]=$query->result();





		

       $data["menuac"]="etkinlikler";

		$this->load->view('_header',$data);
	  
		$this->load->view('etkinlikler_detay',$data);
		$this->load->view('_footer');
}
	




}
