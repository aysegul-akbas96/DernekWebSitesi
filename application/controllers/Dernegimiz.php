<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dernegimiz extends CI_Controller {

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

		$query=$this->db->query("SELECT * FROM menu where id=2");
		$data["menu_ad"]=$query->result();

		$query=$this->db->query("SELECT *FROM dernek");
		$data["verim"]=$query->result();

		$query=$this->db->query("SELECT baslik FROM dernek");
		$data["dernek"]=$query->result();
		$data["sayfa"]="Dernegimiz| ";

$query=$this->db->query("SELECT * FROM anasayfa_ayarlari");
		$data["ana"]=$query->result();

    $data["menuac"]="dernegimiz";
	
	$query=$this->db->query("SELECT resim FROM dernek");
		$data["resim"]=$query->result();

	




		$this->load->view('_header',$data);
	
		$this->load->view('dernegimiz',$data);
		$this->load->view('_footer');
	}
public function dernek_detay($id)
	{
	 $query=$this->db->query("SELECT * FROM ayarlar");
		$data["veri"]=$query->result();

		

		$query=$this->db->query("SELECT * FROM menu where menu_durum='Aktif'");
		$data["menu"]=$query->result();

		$query=$this->db->query("SELECT * FROM menu where id=2");
		$data["menu_ad"]=$query->result();

		$query=$this->db->query("SELECT * FROM dernek where id=$id");
		$data["verim"]=$query->result();
		$data["sayfa"]="Dernegimiz | ";

		$query=$this->db->query("SELECT * FROM anasayfa_ayarlari");
		$data["ana"]=$query->result();



$query=$this->db->query("SELECT baslik FROM dernek");
		$data["dernek"]=$query->result();
		



		

       $data["menuac"]="dernegimiz";

		$this->load->view('_header',$data);
	  
		$this->load->view('dernek_detay',$data);
		$this->load->view('_footer');

		}
public function yonetim()
	{
		 $query=$this->db->query("SELECT * FROM ayarlar");
		$data["veri"]=$query->result();

		
		$query=$this->db->query("SELECT * FROM menu where menu_durum='Aktif'");
		$data["menu"]=$query->result();

		$query=$this->db->query("SELECT * FROM menu where id=2");
		$data["menu_ad"]=$query->result();

		$data["sayfa"]="Dernegimiz | ";

		$query=$this->db->query("SELECT * FROM anasayfa_ayarlari");
		$data["ana"]=$query->result();



$query=$this->db->query("SELECT baslik FROM dernek");
		$data["dernek"]=$query->result();
		



		

       $data["menuac"]="dernegimiz";

			$query=$this->db->query("SELECT *from yonetim_kurulu");
		$data["yonetim"]=$query->result();

$this->load->view('_header',$data);
		$this->load->view('yonetim',$data);
		$this->load->view('_footer');
}






	





}
