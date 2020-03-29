<?php

class M_public extends CI_Model {
	function get_profile()
	{
		return $this->db->get('tbl_profile');
	}
	function get_processing()
	{
		return $this->db->get('tbl_processing');
	}
	function get_onfarm()
	{
		return $this->db->get('tbl_onfarm');
	}
	function get_history()
	{
		return $this->db->get('tbl_history');
	}
	function get_kemitraan()
	{
		//$this->db->join('tbl_kemitraan','tbl_kemitraan.id_kemitraan = tbl_kemitraan_img.id_mitra','right');
		return $this->db->get('tbl_kemitraan');
	}
	function get_kemitraan_id($id)
	{
		$this->db->where('id_kemitraan',$id);
		return $this->db->get('tbl_kemitraan');
	}
	function get_kemitraan_img_id($id)
	{
		$this->db->where('id_mitra',$id);
		return $this->db->get('tbl_kemitraan_img');
	}
	function get_onfarm_img()
	{
		return $this->db->get('tbl_onfarm_img');
	}
	function get_processing_img()
	{
		return $this->db->get('tbl_processing_img');
	}
	function get_faq()
	{
		return $this->db->get('tbl_faq');		
	}
	function get_product()
	{
		//$this->db->limit(10);
		$this->db->order_by('id_product', 'desc');
		return $this->db->get('tbl_product');		
	}
	function get_ourpartner()
	{
		return $this->db->get('tbl_ourpartner');		
	}
	function get_news()
	{
		return $this->db->get('tbl_news');		
	}
	function get_news_id($id)
	{
		$this->db->where('id_news', $id);
		return $this->db->get('tbl_news');		
	}
	function get_joinus()
	{
		return $this->db->get('tbl_joinus');		
	}
	function get_slider()
	{
	    return $this->db->get('tbl_slider');    
	}

	function get_gallery()
	{
	    return $this->db->get('tbl_gallery');    
	}

	function get_gallery_img()
	{
	    return $this->db->get('tbl_gallery_img');    
	}

	function get_activity()
	{
	    return $this->db->get('tbl_activity');    
	}

	function get_activity_img()
	{
	    return $this->db->get('tbl_activity_img');    
	}


    function get_all_tbl_slider()
    {
        $this->db->order_by('id_slider', 'desc');
        return $this->db->get('tbl_slider');
    }
	
}