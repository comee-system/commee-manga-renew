<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Creator extends CI_Controller {

    /**
     * クリエータープロフィール設定登録・更新
     *
     * @return void
     */
    public function update_profile()
    {
        $this->load->view('header');
		$this->load->view('/display/mypage/creator/update_profile');
		$this->load->view('footer');
    }

    /**
     * 作成した漫画一覧
     *
     * @return void
     */
    public function manga_list()
    {
        $this->load->view('header');
		$this->load->view('/display/mypage/creator/manga_list');
		$this->load->view('footer');
    }

    /**
     * 連載一覧
     *
     * @return void
     */
    public function serial_list()
    {
        $this->load->view('header');
		$this->load->view('/display/mypage/serial/list');
		$this->load->view('footer');
    }

    /**
     * 連載編集
     *
     * @return void
     */
    public function update_serial()
    {
        $this->load->view('header');
		$this->load->view('/display/mypage/serial/update');
		$this->load->view('footer');
    }

    /**
     * 連載新規作成
     *
     * @return void
     */
    public function regist_serial()
    {
        $this->load->view('header');
		$this->load->view('/display/mypage/serial/regist');
		$this->load->view('footer');
    }


    /* dashboard
     ********************************************/

        /**
         * 閲覧数
         *
         */
        public function manga_views_count()
        {
            $this->load->view('header');
            $this->load->view('/display/mypage/dashboard/manga_views_count');
            $this->load->view('footer');
        }

        /**
         * 売上管理
         *
         * @return void
         */
        public function sales_data()
        {
            $this->load->view('header');
            $this->load->view('/display/mypage/dashboard/sales_data');
            $this->load->view('footer');
        }

        /**
         * 振込履歴
         *
         */
        public function transfer_history()
        {
            $this->load->view('header');
            $this->load->view('/display/mypage/dashboard/transfer_history');
            $this->load->view('footer');
        }

        /**
         * コメント一覧
         *
         */
        public function comment_list()
        {
            $this->load->view('header');
            $this->load->view('/display/mypage/dashboard/comment_list');
            $this->load->view('footer');
        }
}
