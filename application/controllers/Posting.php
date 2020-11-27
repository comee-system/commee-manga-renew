<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Posting extends CI_Controller {

    /**
    * 作品投稿(最初は不要)
    *
    *  
    */
    public function work_submission()
    {
        $this->load->view('header');
		$this->load->view('/display/posting/work_submission');
		$this->load->view('footer');  
    }

    /**
    * 作品投稿/マンガ/新規
    *
    *   
    */
    public function manga_new()
    {
        $this->load->view('header');
		$this->load->view('/display/posting/manga_new');
		$this->load->view('footer');  
    }

    /**
    * 作品投稿/マンガ/画像選択(PC版では不要)
    * 作品投稿/マンガ/画像選択/クライアント(PC版では不要)
    *  
    */
    public function manga_picture()
    {
        $this->load->view('header');
		$this->load->view('/display/posting/manga_picture');
		$this->load->view('footer'); 
    }

    /**
    * 作品投稿/マンガ/編集
    *
    *   
    */
    public function manga_edit()
    {
        $this->load->view('header');
		$this->load->view('/display/posting/manga_edit');
		$this->load->view('footer');  
    }

    /**
    * 作品投稿/マンガ/完了
    *
    *  
    */
    public function manga_submission_complete()
    {
        $this->load->view('header');
		$this->load->view('/display/posting/manga_submission_complete');
		$this->load->view('footer');  
    }

}