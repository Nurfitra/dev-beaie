<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Adm_history extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->database(); // load database
        $this->load->model('Tbl_history_model');
        if (!$this->session->userdata('logged')) {            
            $this->session->set_flashdata('message','Silahkan login untuk memulai!');
            $this->session->set_flashdata('error','animated headShake red-box');
            //$this->index();
            redirect('login');
        }
    } 

    function history()
    {   
        // check if the tbl_home exists before trying to edit it
        $data['tbl_history'] = $this->Tbl_history_model->get_tbl_history();
        
        if(isset($data['tbl_history']['id_history']))
        {
            if(isset($_POST) && count($_POST) > 0)     
            {   
                $params = array(
                    'history_desc_id' => $this->input->post('history_desc_id'),
                    'history_desc_en' => $this->input->post('history_desc_en'),
                );

                $this->Tbl_history_model->update_tbl_history($params);            
                redirect('admin/history');
            }
            else
            {
                $data = array(
                    "site" => $_SERVER['SERVER_NAME'],
                    "page" => "History",
                    "tbl_history" => $this->Tbl_history_model->get_tbl_history()
                );
                $this->load->view('layout/admin/header', $data);
                $this->load->view('edit_history',$data);
                $this->load->view('layout/admin/footer');
            }
        }
        else
            show_error('The tbl_home you are trying to edit does not exist.');
    } 

    function add_vid()
    {   
        if (!empty($_FILES)) {
            $tempFile = $_FILES['file']['tmp_name'];
            $fileName = $_FILES['file']['name'];
            $targetPath = getcwd() . '/uploads/';
            $targetFile = $targetPath . $fileName ;
            move_uploaded_file($tempFile, $targetFile);
            if($this->db->get('tbl_history')->row('video') != ''){
                unlink('/home/sayuransiapsaji/public_html/uploads/'.$this->db->get('tbl_history')->row('video'));   
            }
            $this->db->where('id_history', 1);
            $this->db->update('tbl_history', array('video' => $fileName));
            redirect('admin/history');
        }
    }  

    /*
     * Deleting tbl_home
     */
    function remove($id_home)
    {
        $tbl_home = $this->Tbl_history_model->get_tbl_home($id_home);

        // check if the tbl_home exists before trying to delete it
        if(isset($tbl_home['id_home']))
        {
            $this->Tbl_history_model->delete_tbl_home($id_home);
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
