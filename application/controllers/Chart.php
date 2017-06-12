<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Chart extends MY_Controller {
    public function view() {
        $this->load->helper('cookie');
        $chart = (array)json_decode(get_cookie('chart'));
        if (is_null($chart)) $chart = array();
        $vars["chart"] = $chart;

        $this->load->view('header');
        $this->load->view('chart_view', $vars);
        $this->load->view('footer');
    }

    public function add($id) {
        $this->load->helper('cookie');
        $chart = (array)json_decode(get_cookie('chart'));
        if (is_null($chart)) $chart = array();

        $this->load->model('DvdModel');
        $dvd =  $this->DvdModel->getOne($id);

        if (!empty($dvd)) {
            $chart[] = $dvd;
            set_cookie('chart', json_encode($chart), time()+3600);
        }


        redirect('/chart/view/');
    }

    public function remove($id) {
        $this->load->helper('cookie');
        $chart = (array)json_decode(get_cookie('chart'));
        if (is_null($chart)) $chart = array();
        unset($chart[$id]);
        $chart = array_values($chart);

        set_cookie('chart', json_encode($chart), time()+3600);

        redirect('/chart/view/');
    }

    public function empty() {
        set_cookie('chart', json_encode(array()), time()+3600);
        redirect('/chart/view/');
    }
}
