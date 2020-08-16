<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Galeri extends CI_Controller {

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

		$query=$this->db->query("SELECT * FROM menu where id=6");
		$data["menu_ad"]=$query->result();

		$query=$this->db->query("SELECT *FROM resim order by resim_adi desc limit 5");
		$data["verim"]=$query->result();

$query=$this->db->query("SELECT *FROM album");
		$data["album"]=$query->result();

		 
		$query=$this->db->query("SELECT *FROM video");
		$data["video"]=$query->result();


$query=$this->db->query("SELECT * FROM resim inner join album on resim.album_id=album.id  group by album_adi" );
		$data["albumcek"]=$query->result();
	
		$data["sayfa"]="Galeri| ";

$query=$this->db->query("SELECT * FROM anasayfa_ayarlari");
		$data["ana"]=$query->result();

    $data["menuac"]="galeri";
	
	


	




		$this->load->view('_header',$data);
	
		$this->load->view('galeri',$data);

		$this->load->view('_footer');
	}

	public function resim($id)
	{
		$query=$this->db->query("SELECT * FROM ayarlar");
		$data["veri"]=$query->result();

		

		$query=$this->db->query("SELECT * FROM menu where menu_durum='Aktif'");
		$data["menu"]=$query->result();

		$query=$this->db->query("SELECT * FROM menu where id=6");
		$data["menu_ad"]=$query->result();

		$query=$this->db->query("SELECT *FROM resim");
		$data["verim"]=$query->result();

$query=$this->db->query("SELECT * FROM resim inner join album on resim.album_id=album.id where album.id=$id");
		$data["albumcek"]=$query->result();


		$query=$this->db->query("SELECT *FROM video");
		$data["video"]=$query->result();


	
		$data["sayfa"]="Galeri| ";

$query=$this->db->query("SELECT * FROM anasayfa_ayarlari");
		$data["ana"]=$query->result();

    $data["menuac"]="galeri";
	
	


	




		$this->load->view('_header',$data);
	
		$this->load->view('resim',$data);

		$this->load->view('_footer');
	}



public function videolar()
	{
		$query=$this->db->query("SELECT * FROM ayarlar");
		$data["veri"]=$query->result();

		

		$query=$this->db->query("SELECT * FROM menu where menu_durum='Aktif'");
		$data["menu"]=$query->result();

		$query=$this->db->query("SELECT * FROM menu where id=6");
		$data["menu_ad"]=$query->result();

		$query=$this->db->query("SELECT *FROM resim");
		$data["verim"]=$query->result();




		$query=$this->db->query("SELECT *FROM video");
		$data["video"]=$query->result();


	
		$data["sayfa"]="Galeri| ";

$query=$this->db->query("SELECT * FROM anasayfa_ayarlari");
		$data["ana"]=$query->result();

    $data["menuac"]="galeri";
	
	


	




		$this->load->view('_header',$data);
	
		$this->load->view('videolar',$data);

		$this->load->view('_footer');
	}





}
