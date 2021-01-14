<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mypage extends CI_Controller {

    /**
     * クリエータープロフィール登録・更新
     *
     * @return void
     */
    public function edit_creator_profile()
    {
        $this->load->view('elements/header');
		$this->load->view('mypage/edit_creator_profile');
		$this->load->view('elements/footer');
    }

    /**
     * フォロー一覧
     *
     * @return void
     */
    public function following_list()
    {
        $this->load->view('elements/header');
        $this->load->view('mypage/follows_list');
        $this->load->view('elements/footer');
    }

    /**
     * フォロワー一覧
     *
     * @return void
     */
    public function follower_list()
    {
        $this->load->view('elements/header');
        $this->load->view('mypage/follows_list');
        $this->load->view('elements/footer');
    }

    /**
     * 月額会員になっている漫画の一覧
     *
     * @return void
     */
    public function subscription_list()
    {
        $this->load->view('elements/header');
		$this->load->view('mypage/subscription_list');
		$this->load->view('elements/footer');
    }

    /**
     * Like・購入した漫画一覧
     *
     * @return void
     */
    public function my_list()
    {
        $this->load->view('elements/header');
		$this->load->view('mypage/my_list');
		$this->load->view('elements/footer');
    }

    /**
     * 通知
     *
     * @return void
     */
    public function notice()
    {
        $this->load->view('elements/header');
        $this->load->view('mypage/notice');
        $this->load->view('elements/footer');
    }




    /* dashboard
     ********************************************/

        /**
         * 閲覧数
         *
         */
        public function manga_views_count()
        {
            $this->load->view('elements/header');
            $this->load->view('mypage/dashboard/manga_views_count');
            $this->load->view('elements/footer');
        }

        /**
         * 売上管理
         *
         * @return void
         */
        public function sales_data()
        {
            $this->load->view('elements/header');
            $this->load->view('mypage/dashboard/sales_data');
            $this->load->view('elements/footer');
        }

        /**
         * 振込履歴
         *
         */
        public function transfer_history()
        {
            $this->load->view('elements/header');
            $this->load->view('mypage/dashboard/transfer_history');
            $this->load->view('elements/footer');
        }

        /**
         * 支援、購入、連載買い切り時に送られてくるコメントの一覧
         *
         */
        public function comment_list()
        {
            $this->load->view('elements/header');
            $this->load->view('mypage/dashboard/comment_list');
            $this->load->view('elements/footer');
        }

        /**
         * コメントを通報する
         *
         * @return void
         */
        public function comment_report()
        {
            $this->load->view('elements/header');
            $this->load->view('mypage/dashboard/comment_report');
            $this->load->view('elements/footer');
        }
}
