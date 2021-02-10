<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('blog_m', 'm');
	}

	function index(){
		$data['blogs'] = $this->m->getData();
		$this->load->view('layout/header');
		$this->load->view('blog/index', $data);
		$this->load->view('layout/footer');
	}

	function add(){
		$data['blogs'] = $this->m->getData();
		$this->load->view('layout/header');
		$this->load->view('blog/add', $data);
		$this->load->view('layout/footer');
	}

	function submit(){
		$result = $this->m->submit();
		if($result) {
			$this->session->set_flashdata('success_msg', 'Ajout réussit');
		}else{
			$this->session->set_flashdata('error_msg', 'Echec de l\'ajout');
		}
		redirect(base_url('blog/index'));
	}
}
