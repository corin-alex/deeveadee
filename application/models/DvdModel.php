<?php

class DvdModel extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function getLast($n = 4) {
        $query = $this->db->get('dvd', $n);
        return $query->result();
    }

    public function getAll() {
        $query = $this->db->get('dvd');
        return $query->result();
    }
}