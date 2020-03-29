<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Tbl_ourpartner_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get tbl_ourpartner by id_ourpartner
     */
    function get_tbl_ourpartner($id_ourpartner)
    {
        return $this->db->get_where('tbl_ourpartner',array('id_ourpartner'=>$id_ourpartner))->row_array();
    }
        
    /*
     * Get all tbl_ourpartner
     */
    function get_all_tbl_ourpartner()
    {
        $this->db->order_by('id_ourpartner', 'desc');
        return $this->db->get('tbl_ourpartner')->result_array();
    }
        
    /*
     * function to add new tbl_ourpartner
     */
    function add_tbl_ourpartner($params)
    {
        $this->db->insert('tbl_ourpartner',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update tbl_ourpartner
     */
    function update_tbl_ourpartner($id_ourpartner,$params)
    {
        $this->db->where('id_ourpartner',$id_ourpartner);
        return $this->db->update('tbl_ourpartner',$params);
    }
    
    /*
     * function to delete tbl_ourpartner
     */
    function delete_tbl_ourpartner($id_ourpartner)
    {
        return $this->db->delete('tbl_ourpartner',array('id_ourpartner'=>$id_ourpartner));
    }
}
