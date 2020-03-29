<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Adm_home extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Tbl_home_model');
        if (!$this->session->userdata('logged')) {            
            $this->session->set_flashdata('message','Silahkan login untuk memulai!');
            $this->session->set_flashdata('error','animated headShake red-box');
            //$this->index();
            redirect('login');
        }
    } 

    /*
     * Edit a new tbl_home
     */

    function processing()
    {   
        // check if the tbl_home exists before trying to edit it
        $data['tbl_processing'] = $this->Tbl_home_model->get_tbl_processing();
        
        if(isset($data['tbl_processing']['id_processing']))
        {
            if(isset($_POST) && count($_POST) > 0)     
            {   
                $params = array(
					'processing_desc_id' => $this->input->post('processing_desc_id'),
                    'processing_desc_en' => $this->input->post('processing_desc_en'),
                );

                $this->Tbl_home_model->update_tbl_processing($params);            
                redirect('admin/processing');
            }
            else
            {
                $data = array(
                    "site" => $_SERVER['SERVER_NAME'],
                    "page" => "Processing",
                    "tbl_processing" => $this->Tbl_home_model->get_tbl_processing()
                );
                $this->load->view('layout/admin/header', $data);
                $this->load->view('edit_processing',$data);
                $this->load->view('layout/admin/footer');
            }
        }
        else
            show_error('The tbl_home you are trying to edit does not exist.');
    } 

    function onfarm()
    {   
        // check if the tbl_home exists before trying to edit it
        $data['tbl_onfarm'] = $this->Tbl_home_model->get_tbl_onfarm();
        
        if(isset($data['tbl_onfarm']['id_onfarm']))
        {
            if(isset($_POST) && count($_POST) > 0)     
            {   
                $params = array(
                    'onfarm_desc_id' => $this->input->post('onfarm_desc_id'),
                    'onfarm_desc_en' => $this->input->post('onfarm_desc_en'),
                );

                $this->Tbl_home_model->update_tbl_onfarm($params);            
                redirect('admin/onfarm');
            }
            else
            {
                $data = array(
                    "site" => $_SERVER['SERVER_NAME'],
                    "page" => "OnFarm",
                    "tbl_onfarm" => $this->Tbl_home_model->get_tbl_onfarm()
                );
                $this->load->view('layout/admin/header', $data);
                $this->load->view('edit_onfarm',$data);
                $this->load->view('layout/admin/footer');
            }
        }
        else
            show_error('The tbl_home you are trying to edit does not exist.');
    } 

    /*
     * Deleting tbl_home
     */
    function remove($id_home)
    {
        $tbl_home = $this->Tbl_home_model->get_tbl_home($id_home);

        // check if the tbl_home exists before trying to delete it
        if(isset($tbl_home['id_home']))
        {
            $this->Tbl_home_model->delete_tbl_home($id_home);
            redirect('admin/home');
        }
        else
            show_error('The home you are trying to delete does not exist.');
    }

    function editor_upload() {
        if (!empty($_FILES)) {
            $tempFile = $_FILES['file']['tmp_name'];
            $fileName = $_FILES['file']['name'];
            $targetPath = getcwd() . '/uploads/';
            $targetFile = $targetPath . $fileName ;
            move_uploaded_file($tempFile, $targetFile);
            // if you want to save in db,where here
            // with out model just for example
            json_encode(array('url' => 'http://localhost/sayuransiapsaji/uploads/'.$targetFile));
        }
    }
    
}