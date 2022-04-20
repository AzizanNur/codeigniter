<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Maincontrol extends CI_Controller {
    
    function __construct(){ 
        parent::__construct();
		//$this->load->helper(array('form','url', 'xml','text_helper','date','inflector','app'));
        $this->load->helper(array('form','url', 'xml','text_helper','date','inflector'));
		$this->load->database();
		$this->load->library(array('Pagination','user_agent','session','form_validation'));
		$this->load->model('dbasemodel');   
		//phpinfo(); 
		//@session_start();
    }
	
	public function index()
	{
        /*
        if(!is_logged_in()){
			redirect('/auth-login');	
		}
        */
        
		$data['title']		   = "Wismartlink - Dashboard";
		$data['page']		   = "";
		$data['response'] 	   = "";
		$data['code'] 		   = "";
        $data['main']  = $this->load->view('main_content');

        return $this->load->view('mainview',$data);
	}

	function login()
	{

		$data['title']		= "Wismartlink - Account Login";
		$data['response'] 	= "";

		if($this->input->post())
		{

			$usra	= trim($this->input->post('email'));
			$pwda	= md5($this->input->post('password'));
            
           	$cek = $this->dbasemodel->loadsql("SELECT * FROM m_user WHERE EMAIL='$usra' AND PASSWORD='$pwda'");
            if($cek->num_rows()>0){
				$res = $cek->row();
				$newdata = array(
					'slink_user' 		=> $res->USERNAME,
					'slink_email' 		=> $res->EMAIL,
					'slink_id'  		=> $res->PASSWD,
					'slink_idapt'  		=> $res->IDPAT,
					'slink_idgedung'  	=> $res->IDGEDUNG,
					'slink_id' 	 		=> $res->IDUSER
				);
				$this->session->set_userdata($newdata);
                
				redirect('/');	

			}else{

				$data['response'] 	= '';//alertDanger("Login gagal, Username atau password salah");
			}
		}
		

		$this->load->view('login',$data);
	}

	
}
