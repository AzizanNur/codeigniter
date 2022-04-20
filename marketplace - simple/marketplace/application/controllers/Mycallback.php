<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class mycallback extends CI_Controller {

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
		$json = file_get_contents("php://input");
		
		
		$arrdata = json_decode($json);
		
		if(is_array($arrdata)){
			
			foreach($arrdata as $key){
			//echo $key->trxid;
			
				$trxproses 	= array('STATUS'=>$key->status,
									'TOKEN'=>$key->token,
									'NOTE'=>$key->note,
									'CALLBACK'=>$json);
				$wheredepo	= "TRXID='".$key->trxid."'";
				$this->dbasemodel->updateData("m_trx",$trxproses,$wheredepo);
			}
			//echo $json;
			//var_dump($json);
			//var_dump(json_decode($json, true));
			//echo $json;
			$myFile = "testfile.txt";
			file_put_contents($myFile,$json);
		}
		
		
	}
	
}