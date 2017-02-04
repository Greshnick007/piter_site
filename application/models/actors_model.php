<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Actors_model extends CI_Model {

	function get_actors()
	{
		$query = $this->db->get('actors');
		return $query->result_array();
	}
}