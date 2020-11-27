<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Creator extends CI_Controller {

    /**
     * 
     *
     * @return void
     */
    public function index()
    {
        $this->load->view('/header');
        $this->load->view('/display/creator/index');
        $this->load->view('/footer');
    }

}
