<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Apartement extends CI_Controller {
    
    var $typebox = 'Apartement';
    var $typedb  = 'm_apartemen';
    
    function __construct(){ 
        parent::__construct();
		//$this->load->helper(array('form','url', 'xml','text_helper','date','inflector','app'));
        $this->load->helper(array('form','url', 'xml','text_helper','date','inflector'));
		$this->load->database();
		$this->load->library(array('Pagination','user_agent','session','form_validation'));
		$this->load->model('dbasemodel');
		//@session_start();
    }
	
	public function build_index(){
        /*
        if(!is_logged_in()){
			redirect('/auth-login');	
		}
        */
        $data['title']		   = "Wismartlink - ".$this->typebox;
		$data['page']		   = "";
		$data['response'] 	   = "";
		$data['code'] 		   = "";
        
        $cek = $this->dbasemodel->loadsql("SELECT * FROM `".$this->typedb."`");
        $dt = array(
            'title'     => 'Form '.$this->typebox,
            'dataapt'   => $cek->result()
            
        );        
        $data['main']  = $this->load->view(strtolower($this->typebox).'/main_form', $dt);
        return $this->load->view('mainview',$data);
	}

    public function build_add(){
       	$dt = array(
            'title'     => 'Add '.$this->typebox,
            'typelink'  => 'insert'
        ); 
        $data['main']  = $this->load->view(strtolower($this->typebox).'/add_form', $dt);
        return $this->load->view('mainview',$data);
	}
    
    function build_save($type){
        if($type == 'insert'){        
            if(($_POST['namaapt'] != '') && ($_POST['namaapt'] != '')){
                $data = array('NAMAAPT' => $_POST['namaapt'],'KODEAPT' => $_POST['kodeapt']);
                $cek    = $this->dbasemodel->insertData($this->typedb, $data);        
            }
        }
        
        if($type == 'update'){
            if($_POST['idapt'] != ''){
                $where  = "idapt = '".$_POST['idapt']."' limit 1";
                $data   = array('NAMAAPT' => $_POST['namaapt'],'KODEAPT' => $_POST['kodeapt']);
                $cek    = $this->dbasemodel->updateData($this->typedb, $data, $where);        
            }
        }        
        redirect('/form-'.strtolower($this->typebox));        
    }
    
    function build_edit($id=''){
        if(!empty($id)){
            $cek = $this->dbasemodel->loadsql("SELECT * FROM ".$this->typedb." WHERE IDAPT='$id'");
            if($cek->num_rows()>0){
				$res = $cek->row();
				$dt = array(
                    'title'     => 'Edit '.$this->typebox,
                    'typelink'  => 'update',
                    'kodeapt_'  => $res->NAMAAPT,
                    'namaapt_'  => $res->KODEAPT,
                    'idapt_'    => $id,
                ); 
                $data['main']  = $this->load->view(strtolower($this->typebox).'/add_form', $dt);
            }
            return $this->load->view('mainview',$data);
        }
        return null;
    }
    
    function build_delete($idapt){        
        if($idapt){
            $from = $this->typedb." where idapt='".$idapt."' limit 1" ;
            $cek  = $this->dbasemodel->hapus($from);
        }
        redirect('/form-'.strtolower($this->typebox));
    }
}

	

