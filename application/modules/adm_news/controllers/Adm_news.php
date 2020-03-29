<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Adm_news extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Tbl_news_model');
        if (!$this->session->userdata('logged')) {            
            $this->session->set_flashdata('message','Silahkan login untuk memulai!');
            $this->session->set_flashdata('error','animated headShake red-box');
            //$this->index();
            redirect('login');
        }
    } 

    /*
     * Listing of tbl_news
     */
    function index()
    {
        $data = array(
            "site" => $_SERVER['SERVER_NAME'],
            "page" => "News",
            "tbl_news" => $this->Tbl_news_model->get_all_tbl_news()
        );
        
        $this->load->view('layout/admin/header', $data);
        $this->load->view('index', $data);
        $this->load->view('layout/admin/footer');
    }

    /*
     * Adding a new tbl_news
     */
    function add()
    {   
        if(isset($_POST) && count($_POST) > 0)     
        {   
            $config['upload_path']          = './uploads/';
            $config['allowed_types']        = 'gif|jpg|png|jpeg';
            $config['max_size']             = 0;
            $config['max_width']            = 0;
            $config['max_height']           = 0;

            $this->load->library('upload', $config);

            if ( ! $this->upload->do_upload('news_img'))
            {
                $params = array(
                    'news_title_id' => $this->input->post('news_title_id'),
                    'news_title_en' => $this->input->post('news_title_en'),
                    'news_desc_id' => $this->input->post('news_desc_id'),
                    'news_desc_en' => $this->input->post('news_desc_en'),
                );
                
                $tbl_news_id = $this->Tbl_news_model->add_tbl_news($params);
                redirect('admin/news');
            }
            else
            {
                $data = array('upload_data' => $this->upload->data());
                $params = array(
                    'news_title_id' => $this->input->post('news_title_id'),
                    'news_title_en' => $this->input->post('news_title_en'),
                    'news_img' => $this->upload->data('file_name'),
                    'news_desc_id' => $this->input->post('news_desc_id'),
                    'news_desc_en' => $this->input->post('news_desc_en'),
                );
                
                $tbl_news_id = $this->Tbl_news_model->add_tbl_news($params);
                redirect('admin/news');
            }
        }
        else
        {            
            $data = array(
                "site" => $_SERVER['SERVER_NAME'],
                "page" => "News"
            );
            
            $this->load->view('layout/admin/header', $data);
            $this->load->view('add', $data);
            $this->load->view('layout/admin/footer');
        }
    }  

    /*
     * Editing a tbl_news
     */
    function edit($id_news)
    {   
        // check if the tbl_news exists before trying to edit it
        $data['tbl_news'] = $this->Tbl_news_model->get_tbl_news($id_news);
        
        if(isset($data['tbl_news']['id_news']))
        {
            if(isset($_POST) && count($_POST) > 0)     
            {         
                $config['upload_path']          = './uploads/';
                $config['allowed_types']        = 'gif|jpg|png|jpeg';
                $config['max_size']             = 0;
                $config['max_width']            = 0;
                $config['max_height']           = 0;

                $this->load->library('upload', $config);

                if ( ! $this->upload->do_upload('news_img'))
                {
                    $params = array(
                        'news_title_id' => $this->input->post('news_title_id'),
                        'news_title_en' => $this->input->post('news_title_en'),
                        'news_desc_id' => $this->input->post('news_desc_id'),
                        'news_desc_en' => $this->input->post('news_desc_en'),
                    );
                    
                    $this->Tbl_news_model->update_tbl_news($id_news,$params);
                    redirect('admin/news');
                }
                else
                {
                    $data = array('upload_data' => $this->upload->data());
                    $params = array(
                        'news_title_id' => $this->input->post('news_title_id'),
                        'news_title_en' => $this->input->post('news_title_en'),
                        'news_img' => $this->upload->data('file_name'),
                        'news_desc_id' => $this->input->post('news_desc_id'),
                        'news_desc_en' => $this->input->post('news_desc_en'),
                    );
                    
                    $this->Tbl_news_model->update_tbl_news($id_news,$params);
                    redirect('admin/news');
                }
            }
            else
            {
                $data = array(
                    "site" => $_SERVER['SERVER_NAME'],
                    "page" => "News",
                    "tbl_news" => $this->Tbl_news_model->get_tbl_news($id_news)
                );
                
                $this->load->view('layout/admin/header', $data);
                $this->load->view('edit', $data);
                $this->load->view('layout/admin/footer');
            }
        }
        else
            show_error('The tbl_news you are trying to edit does not exist.');
    } 

    /*
     * Deleting tbl_news
     */
    function remove($id_news)
    {
        $tbl_news = $this->Tbl_news_model->get_tbl_news($id_news);

        // check if the tbl_news exists before trying to delete it
        if(isset($tbl_news['id_news']))
        {
            unlink('./uploads/'.$tbl_news['news_img']);
            $this->Tbl_news_model->delete_tbl_news($id_news);
            redirect('admin/news');
        }
        else
            show_error('The tbl_news you are trying to delete does not exist.');
    }
    
}