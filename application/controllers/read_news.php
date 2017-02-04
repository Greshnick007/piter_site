<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class News extends CI_Controller {


	public function index()
	{
		$data['news'] = $this->news_model->get_news_list();
		$this->load->library('news_tmp');
		$this->news_tmp->page_view($data);
	}

	public function page_news($id)
	{
		$data['news'] = $this->news_model->get_news_list();
		$this->load->library('news_tmp');
		$this->news_tmp->view_news($data);
	}
}