<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Adm_activity extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Tbl_activity_model');
        if (!$this->session->userdata('logged')) {            
            $this->session->set_flashdata('message','Silahkan login untuk memulai!');
            $this->session->set_flashdata('error','animated headShake red-box');
            //$this->index();
            redirect('login');
        }
    } 

    /*
     * Listing of tbl_activity
     */
    function index()
    {
        $data = array(
            "site" => $_SERVER['SERVER_NAME'],
            "page" => "activity",
            "tbl_activity" => $this->Tbl_activity_model->get_all_tbl_activity()
        );
        
        $this->load->view('layout/admin/header', $data);
        $this->load->view('index', $data);
        $this->load->view('layout/admin/footer');
    }

    /*
     * Adding a new tbl_activity
     */
    function add()
    {   
        if(isset($_POST) && count($_POST) > 0)     
        {        
            $config['upload_path']          = './uploads/';
            $config['allowed_types']        = 'gif|jpg|png';

            $this->load->library('upload', $config);

            if ( ! $this->upload->do_upload('activity_img'))
            {
                $params = array(
                    'activity_title_id' => $this->input->post('activity_title_id'),
                    'activity_title_en' => $this->input->post('activity_title_en'),
                    'activity_desc_id' => $this->input->post('activity_desc_id'),
                    'activity_desc_en' => $this->input->post('activity_desc_en'),
                );
                
                $Tbl_activity_id = $this->Tbl_activity_model->add_tbl_activity($params);
            }
            else
            {
                $data = array('upload_data' => $this->upload->data());
                $params = array(
                    'activity_title_id' => $this->input->post('activity_title_id'),
                    'activity_title_en' => $this->input->post('activity_title_en'),
                    'activity_img' => $this->upload->data('file_name'),
                    'activity_desc_id' => $this->input->post('activity_desc_id'),
                    'activity_desc_en' => $this->input->post('activity_desc_en'),
                );
                
                $Tbl_activity_id = $this->Tbl_activity_model->add_tbl_activity($params);
            }

            if($Tbl_activity_id)
            {
                $this->session->set_flashdata('pesan', 'toastr.success("Berhasil Menambah", "Success")');
            }else{
                $this->session->set_flashdata('pesan', 'toastr.error("Gagal Menambah", "Error")');
            }
            redirect('admin/activity');
        }
        else
        {            
            $data = array(
                "site" => $_SERVER['SERVER_NAME'],
                "page" => "Activity"
            );
            
            $this->load->view('layout/admin/header', $data);
            $this->load->view('add', $data);
            $this->load->view('layout/admin/footer');
        }
    }

    function activity_upload($id_activity)
    {
        if (!empty($_FILES)) {
            $tempFile = $_FILES['file']['tmp_name'];
            $fileName = $_FILES['file']['name'];
            $fileName = rand(1,1000).md5($fileName).'_'.$fileName;
            $targetPath = getcwd() . '/uploads/';
            $targetFile = $targetPath . $fileName ;
            move_uploaded_file($tempFile, $targetFile);
            // if you want to save in db,where here
            // with out model just for example
            $this->load->database(); // load database
            $this->db->insert('tbl_activity_img',array('id_activity' => $id_activity, 'image' => $fileName));
            redirect('admin/activity_upload/'.$id_activity);
        }
        else
        {            
            $data = array(
                "site" => $_SERVER['SERVER_NAME'],
                "page" => "Image activity",
                "image" => $this->Tbl_activity_model->get_tbl_activity_id($id_activity),
                "activity" => $this->Tbl_activity_model->get_tbl_activity($id_activity),
            );
            
            $this->load->view('layout/admin/header', $data);
            $this->load->view('upload', $data);
            $this->load->view('layout/admin/footer');
        }
    }

    function remove_upload($id_img, $id_activity)
    {
        $tbl_activity = $this->Tbl_activity_model->get_tbl_activity_img($id_img);

        // check if the tbl_home exists before trying to delete it
        if(isset($tbl_activity['id_img']))
        {   
            unlink('/home/sayuransiapsaji/public_html/uploads/'.$tbl_activity['image']);
            $this->Tbl_activity_model->delete_tbl_activity_img($id_img);
            redirect('admin/activity_upload/'.$id_activity);
            
        }
        else
            show_error('The home you are trying to delete does not exist.');
    }

    /*
     * Editing a tbl_activity
     */
    function edit($id_activity)
    {   
        // check if the tbl_activity exists before trying to edit it
        $data['tbl_activity'] = $this->Tbl_activity_model->get_tbl_activity($id_activity);
        
        if(isset($data['tbl_activity']['id_activity']))
        {
            if(isset($_POST) && count($_POST) > 0)     
            {         
                $config['upload_path']          = './uploads/';
                $config['allowed_types']        = 'gif|jpg|png';

                $this->load->library('upload', $config);

                if ( ! $this->upload->do_upload('activity_img'))
                {
                    $params = array(
                        'activity_title_id' => $this->input->post('activity_title_id'),
                        'activity_title_en' => $this->input->post('activity_title_en'),
                        'activity_desc_id' => $this->input->post('activity_desc_id'),
                        'activity_desc_en' => $this->input->post('activity_desc_en'),
                    );
                    
                    $Tbl_activity_id = $this->Tbl_activity_model->update_tbl_activity($id_activity,$params);
                }
                else
                {
                    $data = array('upload_data' => $this->upload->data());
                    $params = array(
                        'activity_title_id' => $this->input->post('activity_title_id'),
                        'activity_title_en' => $this->input->post('activity_title_en'),
                        'activity_img' => $this->upload->data('file_name'),
                        'activity_desc_id' => $this->input->post('activity_desc_id'),
                        'activity_desc_en' => $this->input->post('activity_desc_en'),
                    );
                    
                    $Tbl_activity_id = $this->Tbl_activity_model->update_tbl_activity($id_activity,$params);
                }

                if($Tbl_activity_id)
                {
                    $this->session->set_flashdata('pesan', 'toastr.success("Berhasil Mengubah", "Success")');
                }else{
                    $this->session->set_flashdata('pesan', 'toastr.error("Gagal Mengubah", "Error")');
                }
                redirect('admin/activity');
            }
            else
            {
                $data = array(
                    "site" => $_SERVER['SERVER_NAME'],
                    "page" => "activity",
                    "tbl_activity" => $this->Tbl_activity_model->get_tbl_activity($id_activity)
                );
                
                $this->load->view('layout/admin/header', $data);
                $this->load->view('edit', $data);
                $this->load->view('layout/admin/footer');
            }
        }
        else
            show_error('The tbl_activity you are trying to edit does not exist.');
    } 

    /*
     * Deleting tbl_activity
     */
    function remove($id_activity)
    {
        $tbl_activity = $this->Tbl_activity_model->get_tbl_activity($id_activity);

        // check if the tbl_activity exists before trying to delete it
        if(isset($tbl_activity['id_activity']))
        {
            if($tbl_activity['image'] != '' || $tbl_activity['image'] != null){
                unlink('/home/sayuransiapsaji/public_html/uploads/'.$tbl_activity['image']);                
            }
            $Tbl_activity_id = $this->Tbl_activity_model->delete_tbl_activity($id_activity);
            
            if($Tbl_activity_id)
            {
                $this->session->set_flashdata('pesan', 'toastr.success("Berhasil Menghapus", "Success")');
            }else{
                $this->session->set_flashdata('pesan', 'toastr.error("Gagal Menghapus", "Error")');
            }
            redirect('admin/activity');
        }
        else
            show_error('The tbl_activity you are trying to delete does not exist.');
    }
    
}
