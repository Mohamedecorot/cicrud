<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('blog_m', 'm');
	}

	public function index(){
		$data['blogs'] = $this->m->getData();
		$this->load->view('layout/header');
		$this->load->view('blog/index', $data);
		$this->load->view('layout/footer');
	}

	public function add(){
		$data['blogs'] = $this->m->getData();
		$this->load->view('layout/header');
		$this->load->view('blog/add', $data);
		$this->load->view('layout/footer');
	}

	public function submit(){
		$result = $this->m->submit();
		if($result) {
			$this->session->set_flashdata('success_msg', 'Ajout réussit');
		}else{
			$this->session->set_flashdata('error_msg', 'Echec de l\'ajout');
		}
		redirect(base_url('blog/index'));
	}

	public function edit($id){
		$data['blog'] = $this->m->getDataId($id);
		$this->load->view('layout/header');
		$this->load->view('blog/edit', $data);
		$this->load->view('layout/footer');
	}

	public function update(){
		$result = $this->m->update();
		if($result) {
			$this->session->set_flashdata('success_msg', 'Mise à jour réussit');
		}else{
			$this->session->set_flashdata('error_msg', 'Echec de la mise à jour');
		}
		redirect(base_url('blog/index'));
	}
}
