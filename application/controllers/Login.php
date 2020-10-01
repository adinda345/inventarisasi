<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model('m_login');
        $this->load->library('form_validation');
        $this->load->library('session');
    }

	public function index()
	{
		$this->load->view('login/index');
	}

    public function coba(){

        $this->load->view('category/index');
    }

    public function input_login(){
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
      if ($this->form_validation->run() == FALSE) {
             $errors = $this->form_validation->error_array();
            $this->session->set_flashdata('errors', $errors);
            $this->session->set_flashdata('input', $this->input->post());
            redirect('Login');
        } else {
            $username = htmlspecialchars($this->input->post('username'));
            $password = htmlspecialchars($this->input->post('password'));
            $cek_login = $this->m_login->cek_login($username);
         
        if($cek_login == FALSE)
            {
 
                $this->session->set_flashdata('error_login', 'Username yang Anda masukan tidak terdaftar.');
                redirect('Login');
 
            }else {
 
                if(password_verify($password, $cek_login->password)){
                    $this->session->set_userdata('id', $cek_login->id);
                    $this->session->set_userdata('name', $cek_login->name);
                    $this->session->set_userdata('level', $cek_login->level); 
 
                    redirect('Category');
 
                }else {
 
                    $this->session->set_flashdata('error_login', 'Email atau password yang Anda masukan salah.');
                    redirect('Login');
 
                }
            }    

        }
    
    }
    public function logout(){
        $this->session->sess_destroy();
        echo '<script>
            alert("Sukses! Anda berhasil logout."); 
            window.location.href="'.base_url().'";
            </script>';
    }
}