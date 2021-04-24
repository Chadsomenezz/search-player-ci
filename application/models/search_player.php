<?php

class Search_player extends CI_Model{
	//THE data PARAMETER IS THE GET/POST INPUT ARRAY TO BE USE TO SEARCH THE DATABASE
	public function search($data){
		$where = "";
		foreach ($data as $key => $value){
			$where .= "'$key' = '$value' AND ";
		}

		//REMOVE THE LAST INSTANCE OF 'AND' INTO WHERE CLAUSE
		$where = substr_replace($where,'',strlen($where) -5);

		//SEND THE RESULT DATA AND THEN RETURN BACK THE RESULT TO BE PARSE INTO THE VIEW BY THE CONTROLLER search
		$this->db->where($data);
		$data = $this->db->get('players');
		return $data->result();
	}
}
