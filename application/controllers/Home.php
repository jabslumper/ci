<?php

/**
 * Created by PhpStorm.
 * User: lab
 * Date: 26/11/2559
 * Time: 13:24
 */
class Home extends CI_Controller
{
    public function index()
    {
        $this->load->view('layout/headerview.php');
        $this->load->view('home_view');
    }
    public function test()
    {
        $this->load->view('layout/headerview.php');
        $this->load->view('test_view');
        $this->load->view('layout/footer_view.php');
    }
}