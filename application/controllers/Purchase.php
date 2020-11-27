<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Purchase extends CI_Controller {

    /**
     * 支援画面
     *
     * @return void
     */
    public function support()
    {
        $this->load->view('/header');
        $this->load->view('/display/purchase/support');
        $this->load->view('/footer');
    }

    /**
     * 記事購入画面
     *
     * @return void
     */
    public function article()
    {
        $this->load->view('/header');
        $this->load->view('/display/purchase/article');
        $this->load->view('/footer');
    }

    
    /**
     * 連載買い切り画面
     * @return void
     */
    public function outright()
    {
        $this->load->view('/header');
        $this->load->view('/display/purchase/outright');
        $this->load->view('/footer');
    }
    
    /**
     * 決済確認画面
     *
     * @return void
     */
    public function payment_confirm()
    {
        $this->load->view('/header');
        $this->load->view('/display/purchase/payment_confirm');
        $this->load->view('/footer');
    }

    /**
     * 購入完了画面
     *
     * @return void
     */
    public function payment_complete()
    {
        $this->load->view('/header');
        $this->load->view('/display/purchase/payment_complete');
        $this->load->view('/footer');
    }

    /**
     * 月額会員登録
     *
     * @return void
     */
    public function monthly_subscription()
    {
        $this->load->view('/header');
        $this->load->view('/display/purchase/monthly_subscription');
        $this->load->view('/footer');
    }

}
