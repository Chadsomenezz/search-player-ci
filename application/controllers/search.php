<?php


class Search extends CI_Controller{
	public function index(){
		$this->load->view("search");
	}
	public function process(){
		/*IF THE INPUT NAME IS EMPTY UNSET IT, THIS IS TO GET ALL THE RESULT*/
		/*FROM THE DATABASE*/
		if (empty($_GET['name'])){
			unset($_GET['name']);
		}
		$this->load->model("search_player");
		$result = $this->search_player->search($this->input->get());
		$this->session->set_flashdata('result',$result);
		redirect(base_url());

	}
}
