<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends MY_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->model('UserModel');
        $this->load->helper(['form', 'url']);
        $this->load->library(['session', 'form_validation']);
    }

    public function login()
    {
        $config = array(
            array(
                'field' => 'password',
                'label' => 'password',
                'rules' => 'required',
                'errors' => array(
                    'required' => 'Veuillez fournir un mot de passe',

                ),
            ),
            array(
                'field' => 'email',
                'label' => 'email',
                'rules' => 'required',
                'errors' => array(
                    'required' => 'Veuillez fournir une adresse email'
                ),
            )
        );

        $this->form_validation->set_rules($config);

        if ($this->form_validation->run()) {
            $user = $this->UserModel->getByEmail($this->input->post('email'));
            if (!empty($user) and password_verify($this->input->post('password'), $user->passwordU)) {
                $userdata = array(
                    'email'     => $user->emailU,
                    'type'      => $user->typeU,
                    'logged_in' => true
                );
                $this->session->set_userdata($userdata);
                redirect('/');
            }
        }

        $this->load->view('login');
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('/');
    }

    public function register()
    {
         $config = array(
            array(
                'field' => 'password',
                'label' => 'password',
                'rules' => 'required',
                'errors' => array(
                    'required' => 'Veuillez fournir un mot de passe',

                ),
            ),
            array(
                'field' => 'email',
                'label' => 'email',
                'rules' => 'required|callback_userNotExists',
                'errors' => array(
                    'required' => 'Veuillez fournir une adresse email',
                    'userNotExists' => 'L\'adresse email existe déjà',
                ),
            )
        );

        $this->form_validation->set_rules($config);

        if ($this->form_validation->run())
        {
            $this->load->database();
            $data = array(
                'emailU' => $this->input->post('email'),
                'passwordU' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
                'dateU' => time()
            );
            $this->db->insert('utilisateur', $data);
            redirect('/user/login/');

        }

        $this->load->view('register');
    }

    public function userNotExists($email) {
        $user = $this->UserModel->getByEmail($email);
        return empty($user);
    }
}
