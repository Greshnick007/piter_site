<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class News_model extends CI_Model {

	function get_news_list()
	{
		$this->db->order_by('dates', 'desc');
		$this->db->order_by('id', 'desc');
		$query = $this->db->get('news_list');
		return $query->result_array();
	}

	function get_new($id)
	{
		$this->db->where('id', $id);
		$query = $this->db->get('news_list');
		return $query->result_array();
	}
}