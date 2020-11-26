<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class View extends CI_Controller {

    /**
     * 作品画面
     *
     * @return void
     */
    public function index()
    {
        $this->load->view('/header');
        $this->load->view('/display/view/index');
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
        $this->load->view('/display/view/serial');
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
        $this->load->view('/display/view/list');
        $this->load->view('/footer');
    }

}