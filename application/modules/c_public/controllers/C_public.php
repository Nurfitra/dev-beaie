<?php
class C_public extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('M_public');
        if(!$this->session->userdata('lang')){
            $this->session->set_userdata('lang', 'id');
        }
    } 

    function index()
    {
        $data = array(
            "profile" => $this->M_public->get_profile(),
            "gallery" => $this->M_public->get_gallery(),
            "gallery_img" => $this->M_public->get_gallery_img(),
            "activity" => $this->M_public->get_activity(),
            "activity_img" => $this->M_public->get_activity_img(),
            "news" => $this->M_public->get_news(),
            "slider" => $this->M_public->get_all_tbl_slider(),
            "img" => $this
        );
        $this->load->view('header', $data);
        //$this->load->view('banner-home');
        $this->load->view('home');
        $this->load->view('footer',$data);
    }
    function get_img($id)
    {
        $this->db->where('id_mitra', $id);
        $this->db->limit(1);
        return $this->db->get('tbl_kemitraan_img')->row('image');
    }
    function get_desc_activity($id)
    {
        $this->db->where('id_activity', $id);
        $this->db->limit(1);
        return $this->db->get('tbl_activity');
    }
    function get_desc_gallery($id)
    {
        $this->db->where('id_gallery', $id);
        $this->db->limit(1);
        return $this->db->get('tbl_gallery');
    }
    function companyProfile()
    {
        $data = array(
            "profile" => $this->M_public->get_profile(),
            "ourpartner" => $this->M_public->get_ourpartner(),
        );
        $this->load->view('header', $data);
        $this->load->view('banner');
        $this->load->view('about', $data);
        $this->load->view('footer',$data);
    }
    function get_mitra_img($id)
    {
        $this->db->where('id_mitra', $id);
        return $this->db->get('tbl_kemitraan_img');
    }
    function mitra_detail($id='')
    {
        $data = array(
            "profile" => $this->M_public->get_profile(),
            "kemitraan" => $this->M_public->get_kemitraan_id($id),
            "kemitraan_img" => $this->M_public->get_kemitraan_img_id($id),
        );
        $this->load->view('header', $data);
        $this->load->view('banner');
        $this->load->view('mitra-detail', $data);
        $this->load->view('footer',$data);
    }
    function products()
    {
        $data = array(
            "profile" => $this->M_public->get_profile(),
            "products" => $this->M_public->get_product(),
            "image" => $this
        );
        $this->load->view('header', $data);
        $this->load->view('banner');
        $this->load->view('products');
        $this->load->view('footer',$data);
    }
    function get_product_img($id)
    {
        $this->db->where('id_product', $id);
        return $this->db->get('tbl_product_img');
    }
    function contact()
    {
        $data = array(
            "profile" => $this->M_public->get_profile(),
        );
        $this->load->view('header', $data);
        $this->load->view('banner');
        $this->load->view('contact');
        $this->load->view('footer',$data);
    }
    function news()
    {
        $data = array(
            "profile" => $this->M_public->get_profile(),
            "news" => $this->M_public->get_news(),
        );
        $this->load->view('header', $data);
        $this->load->view('banner');
        $this->load->view('news');
        $this->load->view('footer',$data);
    }
    function news_detail($news_id)
    {
        $data = array(
            "profile" => $this->M_public->get_profile(),
            "news" => $this->M_public->get_news_id($news_id),
            "slider" => $this->M_public->get_all_tbl_slider(),
            "img" => $this
        );
        $this->load->view('header2', $data);
        //$this->load->view('banner');
        $this->load->view('news-detail', $data);
        $this->load->view('footer',$data);
    }
    function joinus()
    {
        $data = array(
            "profile" => $this->M_public->get_profile(),
            "joinus" => $this->M_public->get_joinus(),
        );
        $this->load->view('header', $data);
        $this->load->view('banner');
        $this->load->view('joinus');
        $this->load->view('footer',$data);
    }
    function faq()
    {
        $data = array(
            "profile" => $this->M_public->get_profile(),
            "faq" => $this->M_public->get_faq(),
        );
        $this->load->view('header', $data);
        $this->load->view('banner');
        $this->load->view('faq', $data);
        $this->load->view('footer',$data);
    }
    function lang($param)
    {
        $key = base64_decode($this->input->get('key'));
        if($param == 'en'){
            $this->session->unset_userdata('lang');
            $this->session->set_userdata('lang', 'en');
            redirect($key);
        }else{
            $this->session->unset_userdata('lang');
            $this->session->set_userdata('lang', 'id');
            redirect($key);
        }
    }
}
