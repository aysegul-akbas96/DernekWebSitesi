<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Haber extends CI_Controller {

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

		$query=$this->db->query("SELECT * FROM menu where id=3");
		$data["menu_ad"]=$query->result();

		$query=$this->db->query("SELECT *FROM haber");
		$data["verim"]=$query->result();

		$query=$this->db->query("SELECT haber_adi,haber_tarih,resim FROM haber order by id asc limit 5");
		$data["haber"]=$query->result();
		$data["sayfa"]="Haberler/Duyurular| ";

$query=$this->db->query("SELECT * FROM anasayfa_ayarlari");
		$data["ana"]=$query->result();

    $data["menuac"]="haberduyuru";
	
	$query=$this->db->query("SELECT resim FROM haber");
		$data["resim"]=$query->result();


	$query=$this->db->query("SELECT *from duyurular order by duyuru_tarih desc limit 5");
		$data["duy"]=$query->result();

	




		$this->load->view('_header',$data);
	
		$this->load->view('haber',$data);

		$this->load->view('_footer');
	}

public function haber_detay($id)
	{
		$query=$this->db->query("SELECT * FROM ayarlar");
		$data["veri"]=$query->result();

		

		$query=$this->db->query("SELECT * FROM menu where menu_durum='Aktif'");
		$data["menu"]=$query->result();

		$query=$this->db->query("SELECT * FROM menu where id=3");
		$data["menu_ad"]=$query->result();

		$query=$this->db->query("SELECT * FROM haber where id=$id");
		$data["verim"]=$query->result();
		$data["sayfa"]="Haber/Duyurular | ";

		$query=$this->db->query("SELECT * FROM anasayfa_ayarlari");
		$data["ana"]=$query->result();



$query=$this->db->query("SELECT *from duyurular order by duyuru_tarih desc limit 5");
		$data["duy"]=$query->result();

		

       $data["menuac"]="haberduyuru";

		$this->load->view('_header',$data);
	  
		$this->load->view('haber_detay',$data);
		$this->load->view('_footer');
}
	
public function duyuru($id)
	{
		$query=$this->db->query("SELECT * FROM ayarlar");
		$data["veri"]=$query->result();

		

		$query=$this->db->query("SELECT * FROM menu where menu_durum='Aktif'");
		$data["menu"]=$query->result();

		$query=$this->db->query("SELECT * FROM menu where id=3");
		$data["menu_ad"]=$query->result();

		$query=$this->db->query("SELECT *FROM haber");
		$data["verim"]=$query->result();

		$query=$this->db->query("SELECT haber_adi,haber_tarih,resim FROM haber order by id asc limit 5");
		$data["haber"]=$query->result();
		$data["sayfa"]="Haberler/Duyurular| ";

$query=$this->db->query("SELECT * FROM anasayfa_ayarlari");
		$data["ana"]=$query->result();

    $data["menuac"]="haberduyuru";
	
	$query=$this->db->query("SELECT resim FROM haber");
		$data["resim"]=$query->result();


	$query=$this->db->query("SELECT *from duyurular where $id=id");
		$data["duy"]=$query->result();

	




		$this->load->view('_header',$data);
	
		$this->load->view('duyuru',$data);
		
		$this->load->view('_footer');
	}



}
