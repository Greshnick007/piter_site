<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gallery_tmp {
	function page_view($data) {
	$CI =& get_instance();
	$CI->load->view('header.php');
	$CI->load->view('menu.php');
	$CI->load->view('pages/gallery_page/section.php', $data);
	$CI->load->view('footer.php');
	}
}
?>