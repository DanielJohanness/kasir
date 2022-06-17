<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller
{
    public function index()
    {
        $data['title'] = 'Login kafe Laine';

        $this->form_validation->set_rules('username', 'Username', 'trim|required');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('auth/login', $data);
        } else {
            if ($this->input->post('login')) {
                $username = htmlspecialchars($this->input->post('username', TRUE));
                $password = htmlspecialchars($this->input->post('password', TRUE));

                $this->check_login($username, $password);
            }
        }
    }

    // login process
    public function check_login($username, $password)
    {
        $admin  = $this->db->get_where('user', ['username' => $username])->row();

        if ($admin != null) {

            if (password_verify($password, $admin->password)) {

                $session = [
                    'id_user'    => $admin->id_user,
                    'username'   => $admin->username,
                    'level'      => $admin->level
                ];

                $this->session->set_userdata($session);
                
                helper_log("login", "user login");
                return redirect(base_url('Dashboard'));
            } else {
                $this->session->set_flashdata('auth_msg', '<h3 class="text-danger col-md-12"><span class="badge badge-danger">
                       Username atau password salah!
                    </span></h3>');

                return redirect(base_url('Login'));
            }
        }
        else {
            $this->session->set_flashdata('auth_msg', '<h3 class="text-danger col-md-12"><span class="badge badge-danger">
                    Username atau password salah!
                </span></h3>');

            return redirect(base_url('Login'));
        }
    }
}
