<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class News_tmp {
	function page_view($data) {
	$CI =& get_instance();
	$CI->load->view('header.php');
	$CI->load->view('menu.php');
	$CI->load->view('pages/news_page/section.php', $data);
	$CI->load->view('footer.php');
	}

	function view_news($data) {
		$CI =& get_instance();
		$CI->load->view('header.php');
		$CI->load->view('menu.php');
		$CI->load->view('pages/news_page/news_view.php', $data);
		$CI->load->view('footer.php');
	}
}
?>