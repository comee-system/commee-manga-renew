<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sample extends CI_Controller {

    /**
     * 
     *
     * @return void
     */
    public function o()
    {
        $this->load->view('/header');
        $this->load->view('/display/sample/o');
        $this->load->view('/footer');
    }

}