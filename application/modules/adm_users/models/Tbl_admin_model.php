<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Tbl_admin_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get tbl_admin by id_admin
     */
    function get_tbl_admin($id_admin)
    {
        return $this->db->get_where('tbl_admin',array('id_admin'=>$id_admin))->row_array();
    }
        
    /*
     * Get all tbl_admin
     */
    function get_all_tbl_admin()
    {
        $this->db->order_by('id_admin', 'desc');
        return $this->db->get('tbl_admin')->result_array();
    }
        
    /*
     * function to add new tbl_admin
     */
    function add_tbl_admin($params)
    {
        $this->db->insert('tbl_admin',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update tbl_admin
     */
    function update_tbl_admin($id_admin,$params)
    {
        $this->db->where('id_admin',$id_admin);
        return $this->db->update('tbl_admin',$params);
    }
    
    /*
     * function to delete tbl_admin
     */
    function delete_tbl_admin($id_admin)
    {
        return $this->db->delete('tbl_admin',array('id_admin'=>$id_admin));
    }
    function get_tbl_admin_passwd($id_admin,$oldpasswd)
    {
        return $this->db->get_where('tbl_admin',array('id_admin'=>$id_admin, 'admin_password' => md5($oldpasswd)))->row_array();
    }
}
