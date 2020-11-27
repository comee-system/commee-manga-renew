<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Manga extends CI_Controller {

    /**
     * 作品画面
     *
     * @return void
     */
    public function index()
    {
        $this->load->view('/header');
        $this->load->view('/display/manga/index');
        $this->load->view('/footer');
    }

     /**
     * 連載画面
     *
     * @return void
     */
    public function serial()
    {
        $this->load->view('/header');
        $this->load->view('/display/manga/serial');
        $this->load->view('/footer');
    }

     /**
     * 作品一覧
     *
     * @return void
     */
    public function list()
    {
        $this->load->view('/header');
        $this->load->view('/display/manga/list');
        $this->load->view('/footer');
    }

}
