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

    public function getList($offset, $count) {
        $query = $this->db->get('dvd', $offset, $count);
        return $query->result();
    }

    public function count() {
        return $this->db->count_all_results('dvd');
    }

    public function getCat($cat) {
        $this->db->where('categorieD =', $cat);
        $query = $this->db->get('dvd');
        return $query->result();
    }

    public function getAll() {
        $query = $this->db->get('dvd');
        return $query->result();
    }

    public function getOne($id) {

        $this->db->where('id =', $id);
        $query = $this->db->get('dvd');
        return $query->result()[0];
    }
}