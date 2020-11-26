<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mypage extends CI_Controller {

    /*
    *   マイページ
    */
    public function index()
    {
        $this->load->view('header');
		$this->load->view('/display/mypage/index');
		$this->load->view('footer');
    }

    /*
    *   マイページ/アカウント
    */
    public function account()
    {
        $this->load->view('header');
		$this->load->view('/display/mypage/account');
		$this->load->view('footer');
    }

    /*
    *   マイページ/カード情報(新規の場合)
    *   マイページ/カード情報(変更の場合)
    */
    public function card_information()
    {
        $this->load->view('header');
		$this->load->view('/display/mypage/card_information');
		$this->load->view('footer');
    }

    /*
    *   マイページ/カード情報(既存のカード情報を表示する画面)
    */
    public function card_information_view()
    {
        $this->load->view('header');
		$this->load->view('/display/mypage/card_information');
		$this->load->view('footer');
    }

    /*
    *   マイページ/支払先
    */
    public function pay()
    {
        $this->load->view('header');
		$this->load->view('/display/mypage/pay');
		$this->load->view('footer');
    }

    /*
    *   マイページ/クリエイター
    */
    public function creator()
    {
        $this->load->view('header');
		$this->load->view('/display/mypage/creator');
		$this->load->view('footer');
    }

    /*
    *   マイページ/連載
    */
    public function serial()
    {
        $this->load->view('header');
		$this->load->view('/display/mypage/serial');
		$this->load->view('footer');
    }

    /*
    *   マイページ/連載/編集
    */
    public function serial_edit()
    {
        $this->load->view('header');
		$this->load->view('/display/mypage/serial_edit');
		$this->load->view('footer');
    }

    /*
    *   マイページ/連載/新規
    */
    public function serial_new()
    {
        $this->load->view('header');
		$this->load->view('/display/mypage/serial_new');
		$this->load->view('footer');
    }

    /*
    *   マイページ/作品一覧
    */
    public function works()
    {
        $this->load->view('header');
		$this->load->view('/display/mypage/works');
		$this->load->view('footer');
    }

    /*
    *   マイページ/フォロー一覧
    *   マイページ/フォロワー一覧
    */
    public function follows()
    {
        $this->load->view('header');
		$this->load->view('/display/mypage/follows');
		$this->load->view('footer');
    }

    /*
    *   マイページ/月額会員
    */
    public function monthly_subscription()
    {
        $this->load->view('header');
		$this->load->view('/display/mypage/monthly_subscription');
		$this->load->view('footer');
    }


    /*
    *   作品一覧/Like&購入
    */
    public function like()
    {
        $this->load->view('header');
		$this->load->view('/display/mypage/like');
		$this->load->view('footer');
    }


    /*
    *   マイページ/ダッシュボード/閲覧数
    */
    public function count()
    {
        $this->load->view('header');
		$this->load->view('/display/mypage/count');
		$this->load->view('footer');
    }

    /*
    *   マイページ/ダッシュボード/売上管理
    */
    public function sales_data()
    {
        $this->load->view('header');
		$this->load->view('/display/mypage/sales_data');
		$this->load->view('footer');
    }

    /*
    *   マイページ/振込管理
    */
    public function transfer()
    {
        $this->load->view('header');
		$this->load->view('/display/mypage/transfer');
		$this->load->view('footer');
    }

    /*
    *   マイページ/コメント
    */
    public function comment()
    {
        $this->load->view('header');
		$this->load->view('/display/mypage/comment');
		$this->load->view('footer');
    }

    /*
    *   マイページ/通報
    */
    public function report()
    {
        $this->load->view('header');
		$this->load->view('/display/mypage/report');
		$this->load->view('footer');
    }
    
}