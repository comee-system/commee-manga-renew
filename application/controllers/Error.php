<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Error extends CI_Controller {

    /*
    * 会員登録エラー
    */
    public function regist_error()
    {
        $this->load->view('header');
		$this->load->view('/display/error/regist_error');
		$this->load->view('footer');  
    }
}