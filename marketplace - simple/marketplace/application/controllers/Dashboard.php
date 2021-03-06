<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

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
		if(!is_logged_in()){
			redirect('/auth/sign-in');	
		}
		$data['page']		= "";
		
		$this->load->view('dashboard',$data);
	}
	
	function login()
	{
		
		if(is_logged_in()){
			redirect('/dashboard');	
		}
		$data['response']		= "";
		if($this->input->post())
		{
			$usra	= trim($this->input->post('ppobuser'));
			$pwda	= md5($this->input->post('ppobpass'));
			$cek = $this->dbasemodel->loadsql("SELECT * FROM m_user WHERE USERNAME='$usra' AND PASSWORD='$pwda'");
			if($cek->num_rows()>0){
				
				$res = $cek->row();
				
				$newdata = array(
					'ppobuser' => $res->USERNAME,
					'ppobid' 	 => $res->IDUSER
				);
				$this->session->set_userdata($newdata);
				redirect('/dashboard');	
						
			}else{
				$data['response'] = '<div class="alert alert-danger">Verify failed, please try again ...</div>';
				$data['code'] 		= "9";
			}
		}
		
		$this->load->view('login',$data);
	}
	
	function logout()
	{
		session_destroy();
		redirect('/auth/sign-in');
	}
}