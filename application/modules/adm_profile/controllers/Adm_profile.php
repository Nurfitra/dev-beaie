<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Adm_profile extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Tbl_profile_model');

        $this->load->database();
        $this->load->helper('url');
        if (!$this->session->userdata('logged')) {            
            $this->session->set_flashdata('message','Silahkan login untuk memulai!');
            $this->session->set_flashdata('error','animated headShake red-box');
            //$this->index();
            redirect('login');
        }
    } 

    /*
     * Listing of tbl_profile
     */
    function index()
    {
        // check if the tbl_profile exists before trying to edit it
        $data['tbl_profile'] = $this->Tbl_profile_model->get_tbl_profile(1);
        
        if(isset($data['tbl_profile']['id']))
        {
            if(isset($_POST) && count($_POST) > 0)     
            {   
                $m = $_FILES['contact_bg']['name'];      
                $n = $_FILES['profile_bg']['name']; 
                if ($m !== "")
                {
                    $config['upload_path']          = './uploads/';
                    $config['allowed_types']        = 'gif|jpg|png|jpeg';
                    $config['max_size']             = 0;
                    $config['max_width']            = 0;
                    $config['max_height']           = 0;
                    $this->load->library('upload', $config);
                    $this->upload->do_upload('contact_bg');
                    $upload_data = $this->upload->data();
                    $params['contact_bg'] = $upload_data['file_name'];
                }          
                if ($n !== "")
                {
                    $config['upload_path']          = './uploads/';
                    $config['allowed_types']        = 'gif|jpg|png|jpeg';
                    $config['max_size']             = 0;
                    $config['max_width']            = 0;
                    $config['max_height']           = 0;
                    $this->load->library('upload', $config);
                    $this->upload->do_upload('profile_bg');
                    $upload_data = $this->upload->data();
                    $params['profile_bg'] = $upload_data['file_name']; 
                } 

                $params['address']= $this->input->post('address');
                $params['telephone']= $this->input->post('telephone');
                $params['fax']= $this->input->post('fax');
                $params['email']= $this->input->post('email');
                $params['email_sales']= $this->input->post('email_sales');
                $params['email_kemitraan']= $this->input->post('email_kemitraan');
                $params['email_purchasing']= $this->input->post('email_purchasing');
                $params['profile_id']= $this->input->post('profile_id');
                $params['profile_en']= $this->input->post('profile_en');
                $params['facebook']= $this->input->post('facebook');
                $params['twitter']= $this->input->post('twitter');
                $params['instagram']= $this->input->post('instagram');

                $this->Tbl_profile_model->update_tbl_profile(1,$params);            
                redirect('admin/profile');
            }
            else
            {
                $data = array(
                    "site" => $_SERVER['SERVER_NAME'],
                    "page" => "Company Profile",
                    "tbl_profile" => $this->Tbl_profile_model->get_tbl_profile(1)
                );
                
                $this->load->view('layout/admin/header', $data);
                $this->load->view('edit', $data);
                $this->load->view('layout/admin/footer');
            }
        }
        else
            show_error('The tbl_profile you are trying to edit does not exist.');
    }  

    
}