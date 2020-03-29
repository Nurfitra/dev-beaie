<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Adm_login extends MX_Controller {
    
    public function __construct() {
        parent::__construct();
        $this->load->model('adm_login/Auth_model');
        $this->load->library(array('Form_validation','session'));
        $this->load->helper(array('Form', 'Cookie', 'String'));
    }
        

    public function index()
    {
        // ambil cookie
        $cookie = get_cookie('fitrr');
        
        // cek session
        if ($this->session->userdata('logged')) {
            redirect('admin/dashboard');
        } else if($cookie <> '') {
            // cek cookie
            $row = $this->Auth_model->get_by_cookie($cookie)->row();
            if ($row) {
                $this->_daftarkan_session($row);
            } else {
                $data = array(
                     'username' => set_value('username'),
                     'password' => set_value('password'),
                     'remember' => set_value('remember'),
                     'message' => $this->session->flashdata('message'),
                     'error' => $this->session->flashdata('error'),
                );
                $this->load->view('v_login', $data);    
            }
        } else {
            $data = array(
                'username' => set_value('username'),
                'password' => set_value('password'),
                'remember' => set_value('remember'),
                'message' => $this->session->flashdata('message'),
                'error' => $this->session->flashdata('error'),
            );
            $this->load->view('v_login', $data);            
        }
    }
        
    public function check_login()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $remember = $this->input->post('remember');

        $row = $this->Auth_model->login($username, $password)->row();

        
        if ($row) {
            // login berhasil
            // 1. Buat Cookies jika remember di check
            if ($remember) {
                $key = random_string('alnum', 64);
                set_cookie('fitrr', $key, 3600*24*30); // set expired 30 hari kedepan
                
                // simpan key di database
                $update_key = array(
                    'cookie' => $key
                );
                $this->Auth_model->update($update_key, $row->id_admin);
            }
            $update_key = array(
                'last_login' => date('Y-m-d H:i:s')
            );
            $this->Auth_model->update($update_key, $row->id_admin);
            
            $this->_daftarkan_session($row);
        } else {
            // login gagal
            $this->session->set_flashdata('message','Username/Password Salah!');
            $this->session->set_flashdata('error','animated headShake red-box');
            //$this->index();
            redirect('login');
        }
        
    }
    
    public function _daftarkan_session($row) {
        // 1. Daftarkan Session
        $sess = array(
            'logged' => TRUE,
            'id_admin' => $row->id_admin,
            'admin_username' => $row->admin_username,
            'last_login' => $row->last_login,
        );
        $this->session->set_userdata($sess);
            
        // 2. Redirect ke home
        redirect('admin/dashboard');        
    }
        
    public function logout()
    {
        // delete cookie dan session
        delete_cookie('fitrr');
        $this->session->sess_destroy();
        redirect('login');
    }
        
}