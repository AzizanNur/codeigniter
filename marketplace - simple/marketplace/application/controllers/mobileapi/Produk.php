<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Produk extends CI_Controller {

	function __construct(){ 
        parent::__construct();
		$this->load->helper(array('form','url', 'xml','text_helper','date','inflector','app'));
		$this->load->database();
		$this->load->library(array('Pagination','user_agent','session','form_validation','session'));
		$this->load->model('dbasemodel');
		//@session_start();
    }
	
	public function index()
	{
		$id =  $this->input->post('idkat'); 
		$arr = array();
		$cek = $this->dbasemodel->loadsql("SELECT * FROM m_product WHERE KATEGORI='$id' ORDER BY IDPRODUK ASC");
		if($cek->num_rows()>0){
			
			foreach($cek->result() as $key)
			{
				array_push($arr, array("id"=>$key->IDPRODUK,
										"kode"=>$key->KODE,
										"nama"=>$key->NAMA,
										"inq"=>$key->PRDINQ,
										"priceview"=>toRp($key->HARGA_JUAL),
										"price"=>$key->HARGA_JUAL));
			}
			$array = array("code"=>"200",
									"msg"=>"",
									"data"=>$arr);
			echo json_encode($array);
			
		}else{
			$array = array("code"=>"404",
									"msg"=>"Produk tidak ditemukan ".$id,
									"data"=>"");
			echo json_encode($array);
		}
	}
	
	function kategori()
	{
		//echo "pulsa";
		$parent	= $this->input->post('parent'); 
		$arr 	= array();
		$cek 	= $this->dbasemodel->loadsql("SELECT * FROM m_kat_prod WHERE PARENT='$parent' ORDER BY IDKAT ASC");
		if($cek->num_rows()>0){
			
			foreach($cek->result() as $key)
			{
				array_push($arr, array("id"=>$key->IDKAT,
										"provider"=>$key->KATEGORI,
										"images"=>base_url()."assets/produk/".$key->GAMBAR));
			}
			
			$array = array("code"=>"200",
									"msg"=>"",
									"data"=>$arr);
			echo json_encode($array);
		}else{
			$array = array("code"=>"404",
									"msg"=>"Produk tidak ditemukan",
									"data"=>"");
			echo json_encode($array);
		}
	}
}