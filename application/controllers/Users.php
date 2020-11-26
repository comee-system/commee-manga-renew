<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {

    /**
     * 新規会員登録
     *
     * @return void
     */
    public function regist()
    {
        $this->load->view('/header');
        $this->load->view('/display/users/regist');
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
    
}