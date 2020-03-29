<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Tbl_news_img_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get tbl_news_img by id_img
     */
    function get_tbl_news_img($id_img)
    {
        return $this->db->get_where('tbl_news_img',array('id_img'=>$id_img))->row_array();
    }
        
    /*
     * Get all tbl_news_img
     */
    function get_all_tbl_news_img()
    {
        $this->db->order_by('id_img', 'desc');
        return $this->db->get('tbl_news_img')->result_array();
    }
        
    /*
     * function to add new tbl_news_img
     */
    function add_tbl_news_img($params)
    {
        $this->db->insert('tbl_news_img',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update tbl_news_img
     */
    function update_tbl_news_img($id_img,$params)
    {
        $this->db->where('id_img',$id_img);
        return $this->db->update('tbl_news_img',$params);
    }
    
    /*
     * function to delete tbl_news_img
     */
    function delete_tbl_news_img($id_img)
    {
        return $this->db->delete('tbl_news_img',array('id_img'=>$id_img));
    }
}
