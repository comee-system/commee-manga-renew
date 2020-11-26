<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {

    /**
     * 新規会員登録
     *
     * @return void
     */
    public function regist_user()
    {
        $this->load->view('/header');
        $this->load->view('/display/users/regist_user');
        $this->load->view('/footer');
    }

    /**
     * ログイン
     *
     * @return void
     */
    public function login()
    {
        $this->load->view('/header');
        $this->load->view('/display/users/login');
        $this->load->view('/footer');
    }

    /**
     * ログアウト
     *
     * @return void
     */
    public function logout()
    {

    }

    /**
     * パスワードの再設定
     * @return void
     */
    public function reset_password()
    {
        $this->load->view('/header');
        $this->load->view('/display/users/reset_password');
        $this->load->view('/footer');
    }
    
    /**
     * 退会ページ
     *
     * @return void
     */
    public function unsubscribe()
    {
        $this->load->view('/header');
        $this->load->view('/display/users/unsubscribe');
        $this->load->view('/footer');
    }

    /**
     * アカウント設定更新
     *
     * @return void
     */
    public function update_user()
    {
        $this->load->view('header');
		$this->load->view('/display/users/update_user');
		$this->load->view('footer');
    }

    /**
     * カード情報登録、更新
     */
    public function update_card_infomation()
    {
        $this->load->view('header');
		$this->load->view('/display/users/update_card_infomation');
		$this->load->view('footer');
    }

    /**
     * カード情報表示
     *
     * @return void
     */
    public function view_card_infomation()
    {
        $this->load->view('header');
		$this->load->view('/display/users/view_card_infomation');
		$this->load->view('footer');
    }

    /**
     * 支払い先登録・更新
     *
     * @return void
     */
    public function update_bunk()
    {
        $this->load->view('header');
		$this->load->view('/display/mypage/pay');
		$this->load->view('footer');
    }
    
}