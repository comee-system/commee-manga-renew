<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Account extends CI_Controller {

    /**
     * マイページ メニュー
     *
     */
    public function index()
    {
        $this->load->view('header');
		$this->load->view('/display/mypage/account/index');
		$this->load->view('footer');
    }

    /**
     * フォロー・フォロワー一覧
     *
     * @return void
     */
    public function follows_list()
    {
        $this->load->view('header');
		$this->load->view('/display/mypage/account/follows_list');
		$this->load->view('footer');
    }

    /**
     * 月額会員になっている漫画の一覧
     *
     * @return void
     */
    public function subscription_list()
    {
        $this->load->view('header');
		$this->load->view('/display/mypage/account/subscription_list');
		$this->load->view('footer');
    }

    /**
     * Like・購入した漫画一覧
     *
     * @return void
     */
    public function my_list()
    {
        $this->load->view('header');
		$this->load->view('/display/mypage/account/my_list');
		$this->load->view('footer');
    }

    /**
     * 通報
     *
     * @return void
     */
    public function report()
    {
        $this->load->view('header');
		$this->load->view('/display/mypage/account/report');
		$this->load->view('footer');
    }
}
