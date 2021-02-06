<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mypage extends CI_Controller {
	//------------
	//コンストラクタ
	public function __construct()
	{
		parent::__construct();
		
		//ログインチェック
		$this->loginflag = 1;
		//メニューの表示
		$this->set['menuflag'] = false;

	}
	//--------------------------
	// マイページトップ
	//-------------
	public function index()
	{
		$this->setView("index");
		
	}
	/********************
	 * アカウント設定
	 */
	public function account(){
		$this->setView("account");
	}
	/********************
	 * クリエーター設定
	 */
	public function creater(){
		$this->setView("creater");
	}

	/************************
	 * 連載一覧
	 */
	public function serial(){
		$this->setView("serial");
	}

	/*********************
	 * 連載をつくる
	 */
	public function write(){
		$this->setView("write");
	}

	/**********************
	 * 連載編集
	 */
	public function edit(){
		$this->setView("edit");
	}
	/**********************
	 * フォロー一覧
	 */
	public function follow(){
		$this->setView("follow");
	}
	
	//ビューファイル表示
	private function setView($view="index"){

		$this->set[ 'loginflag' ] = $this->loginflag;
		$this->load->view('elements/header');
		$this->load->view('mypage/'.$view,$this->set);
		$this->load->view('elements/footer');
	}

	
    
}
