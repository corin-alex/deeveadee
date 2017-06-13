<?php

class UserModel extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function getByEmail($email) {
        $this->db->where('emailU =', $email);
        $query = $this->db->get('utilisateur', 1);
        return $query->result()[0];
    }
}