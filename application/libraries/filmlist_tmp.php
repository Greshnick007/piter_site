<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Filmlist_tmp {
	function page_view() {
	$CI =& get_instance();
	$CI->load->view('header.php');
	$CI->load->view('menu.php');
	$CI->load->view('pages/filmlist_page/section.php');
	$CI->load->view('footer.php');
	}
}
?>