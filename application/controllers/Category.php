<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Category extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model('m_category');
       	$this->cek_status();
    }
    public function index()
    {
        $data['categories'] = $this->m_category->get('category');
        $this->load->view('category/index', $data);
    }
}