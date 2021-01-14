<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Manga extends CI_Controller {

    /**
     * 作成した漫画一覧
     *
     * @return void
     */
    public function list()
    {
        $this->load->view('elements/header');
		$this->load->view('manga/list');
		$this->load->view('elements/footer');
    }

    /**
    * 漫画新規作成、編集ページ
    *   
    */
    public function edit()
    {
        $this->load->view('elements/header');
		$this->load->view('manga/edit');
		$this->load->view('elements/footer');  
    }

    /**
    * 漫画新規作成、編集完了ページ
    *
    */
    public function complete()
    {
        $this->load->view('elements/header');
		$this->load->view('manga/complete');
		$this->load->view('elements/footer');  
    }


    

    /* 連載
    ****************************************/

        /**
         * 連載一覧
         *
         * @return void
         */
        public function serial_list()
        {
            $this->load->view('elements/header');
            $this->load->view('manga/serial_list');
            $this->load->view('elements/footer');
        }

        /**
         * 連載新規作成
         *
         * @return void
         */
        public function regist_serial()
        {
            $this->load->view('elements/header');
            $this->load->view('manga/regist_serial');
            $this->load->view('elements/footer');
        }

        /**
         * 連載編集
         *
         * @return void
         */
        public function update_serial()
        {
            $this->load->view('elements/header');
            $this->load->view('manga/update_serial');
            $this->load->view('elements/footer');
        }
}
