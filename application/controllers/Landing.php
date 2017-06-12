<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Landing extends CI_Controller {
    public function index()
    {
        $this->load->model('DvdModel');
        $vars['last_dvds'] = $this->DvdModel->getLast();

        $this->load->view('header');
        $this->load->view('landing_page', $vars);
        $this->load->view('footer');

    }
}
