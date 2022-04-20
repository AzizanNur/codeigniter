<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Dbasemodel extends CI_Model{
        function __construct(){
        parent::__construct();
    }
	
	function loadsql($sql){
		return $this->db->query($sql);
	}
	function insertData($table,$data){
		$str = $this->db->insert_string($table, $data); 
 	    //echo $str; die;
		$this->db->query($str);
	}
	function updateData($table, $data, $where){
		$str = $this->db->update_string($table, $data, $where); 	
		//echo $str; die;
		$this->db->query($str);
	}
	function hapus($from){
		$sql	= "DELETE FROM $from";
		//echo $sql; die;
		return $this->db->query($sql);
	}
	

	
}