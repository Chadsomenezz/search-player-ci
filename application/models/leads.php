<?php


class Leads extends CI_Model{
	public function view_leads(){
		$data = $this->db->get('leads');
		return $data->result();
	}
}
