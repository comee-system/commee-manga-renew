<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Posting extends CI_Controller {

    /*
    *   作品投稿(最初は不要)
    */
    public function door()
    {
        $this->load->view('header');
		$this->load->view('/display/posting/door');
		$this->load->view('footer');  
    }

    /*
    *   作品投稿/マンガ/新規
    */
    public function new()
    {
        $this->load->view('header');
		$this->load->view('/display/posting/new');
		$this->load->view('footer');  
    }

    /*
    *   作品投稿/マンガ/画像選択(PC版では不要)
    *   作品投稿/マンガ/画像選択/クライアント()
    */
    public function picture()
    {
        $this->load->view('header');
		$this->load->view('/display/posting/picture');
		$this->load->view('footer'); 
    }

    /*
    *   作品投稿/マンガ/編集
    */
    public function edit()
    {
        $this->load->view('header');
		$this->load->view('/display/posting/edit');
		$this->load->view('footer');  
    }

    /*
    *   作品投稿/マンガ/完了
    */
    public function done()
    {
        $this->load->view('header');
		$this->load->view('/display/posting/done');
		$this->load->view('footer');  
    }
}