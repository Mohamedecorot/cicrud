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
}
