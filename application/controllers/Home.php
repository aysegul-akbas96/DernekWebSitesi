<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

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
		$data["sayfa"]=$query->result();

		$data["sayfa"]="Anasayfa | ";
		

		$data["menuac"]="anasayfa";

		
$query=$this->db->query("SELECT * FROM dernek");
		$data["dernek"]=$query->result();

		$query=$this->db->query("SELECT * FROM duyurular order by duyuru_tarih desc limit 6");
		$data["duyuru"]=$query->result();

			$query=$this->db->query("SELECT * FROM haber order by haber_tarih desc limit 2");
		$data["haber"]=$query->result();

			$query=$this->db->query("SELECT *FROM etkinlik order by etkinlik_tarih desc limit 3");
		$data["etkinlik"]=$query->result();

		


		$query=$this->db->query("SELECT * FROM anasayfa_ayarlari");
		$data["ana"]=$query->result();






		$this->load->view('_header',$data);
		$this->load->view('_content',$data);
		$this->load->view('_footer');

		

		



	
	}
	public function iletisim()
	{
		$query=$this->db->query("SELECT * FROM ayarlar");
		$data["veri"]=$query->result();

		

		$query=$this->db->query("SELECT * FROM menu where menu_durum='Aktif'");
		$data["menu"]=$query->result();

		$query=$this->db->query("SELECT * FROM menu where id=7");
		$data["menu_ad"]=$query->result();


		$data["sayfa"]="İletişim| ";

$query=$this->db->query("SELECT * FROM anasayfa_ayarlari");
		$data["ana"]=$query->result();

    $data["menuac"]="iletisim";
	
	


	

	




		$this->load->view('_header',$data);
	
		$this->load->view('iletisim',$data);

		$this->load->view('_footer');
	}



public function mesaj_kaydet()
	{
		 $data=array(
		 			

                        'isim'=>$this->input->post('isim'),
                         
                        'email'=>$this->input->post('email'),
                       'konu'=>$this->input->post('konu'),
                      
						'mesaj'=>$this->input->post('mesaj'),
						
						
                       
                 );

            $this->db->insert('mesajlar',$data);




			   $this->session->set_flashdata("mesaj","Mesajınız Başarıyla Gönderilmiştir. Sizinle en kısa zamanda iletişime geçilecektir."); 
			   redirect(base_url()."home/iletisim");

	}


	








}
