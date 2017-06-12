<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dvd extends MY_Controller {
    public function list($offset = 0, $count = 12)
    {
        $this->load->model('DvdModel');
        $vars['dvdlist'] = $this->DvdModel->getList($offset, $count);
        $vars['itemcount'] = $this->DvdModel->count();
        $vars['itemoffset'] = $offset;
        $vars['itemcount'] = $count;

        $this->load->view('header');
        $this->load->view('dvd_list', $vars);
        $this->load->view('footer');
    }

    public function categorie($cat) {
        $this->load->model('DvdModel');
        $vars['dvdlist'] = $this->DvdModel->getCat(urldecode($cat));
        $vars['itemcount'] = $this->DvdModel->count();
        $vars['itemoffset'] = 0;
        $vars['itemcount'] = 12;

        $this->load->view('header');
        $this->load->view('dvd_list', $vars);
        $this->load->view('footer');
    }

    public function view($id = 1) {
        $this->load->model('DvdModel');
        $vars['dvd'] = $this->DvdModel->getOne($id);

        $this->load->view('header');
        $this->load->view('dvd_view', $vars);
        $this->load->view('footer');
    }
}
