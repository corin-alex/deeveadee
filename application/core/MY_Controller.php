<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Controller extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->helper('cookie');
        $chart = json_decode(get_cookie('chart'));
        if (is_null($chart)) $chart = array();
        $global_data = array('chart_count' => count($chart));

        $this->load->vars($global_data);
    }
}