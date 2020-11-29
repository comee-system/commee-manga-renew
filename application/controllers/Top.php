<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Top extends CI_Controller {

	/**
	*	ログイン前トップ
	*	ログイン後トップ
	*
	*/
	public function index()
	{
		$this->load->view('elements/header');
		$this->load->view('top/index');
		$this->load->view('elements/footer');
	}
}
