<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	function __construct(){ 
        parent::__construct();
		$this->load->helper(array('form','url', 'xml','text_helper','date','inflector'));
		$this->load->database();
		$this->load->library(array('Pagination','user_agent','session','form_validation','session'));
		$this->load->model('dbasemodel');
		//@session_start();
    }
	
	public function index()
	{
		if($this->input->post()){
			$noanggota  = substr($this->input->post("user"),-4);//$this->input->post("user");
			$otherdb 	= $this->load->database('otherdb', TRUE);
			$cek  		= $otherdb->query("SELECT * from m_anggota WHERE NO_ANGGOTA='$noanggota'");
			if($cek->num_rows()>0)
			{
				$res =  $cek->row();
				$array = array("code"=>"200",
								"msg"=>"",
								"data"=>array("saldo"=>"100000","nama"=>$res->NAMA));
				echo json_encode($array);
			}else{
				$array = array("code"=>"404",
								"msg"=>"No Anggota Tidak Terdaftar",
								"data"=>"");
				echo json_encode($array);
			}
		}

	}

}