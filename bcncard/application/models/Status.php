<?php

/**
* 
*/
class Status extends CI_Model
{
	
	public function getStatus(){
		//return $this->db->get("bcnc_status");
		return $this->db->get("bcnc_status");
	}
}
?>