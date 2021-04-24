<?php

class Search_player extends CI_Model{
	public function search($data){
		$where = "";
		foreach ($data as $key => $value){
			$where .= "'$key' = '$value' AND ";
		}

		$where = substr_replace($where,'',strlen($where) -5);

		$this->db->where($data);
		$data = $this->db->get('players');
		return $data->result();
	}
}
