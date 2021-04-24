<?php


class Home extends CI_Controller{
	public function index(){
		$this->load->model('leads');
		$data['result'] = $this->leads->view_leads();
		$this->load->view("home",$data);

	}
}
