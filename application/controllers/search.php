<?php


class Search extends CI_Controller{
	public function index(){
		$this->load->view("search");
	}
	public function process(){
		$this->load->model("search_player");
		$result = $this->search_player->search($this->input->get());
		$this->session->set_flashdata('result',$result);
		redirect(base_url());
	}
}
