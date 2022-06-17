<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_Auth extends CI_Model
{
    private $tbl_user = "user";
    private $tbl_log = "user_log";
    const SESSION_KEY = 'id_user';

    public function rules()
    {
        return [
            [
                'field' => 'username',
                'label' => 'Username',
                'rules' => 'required'
            ],
            [
                'field' => 'password',
                'label' => 'Password',
                'rules' => 'required|max_length[255]'
            ]
        ];
    }

    public function login($username, $password)
    {
        $this->db->where('username', $username);
        $query = $this->db->get($this->tbl_user);
        $user = $query->row();

        // cek apakah user sudah terdaftar?
        if (!$user) {
            return FALSE;
        }

        // cek apakah passwordnya benar?
        if (!password_verify($password, $user->password)) {
            return FALSE;
        }

        // bikin session
        $this->session->set_userdata([self::SESSION_KEY => $user->id]);
        $this->_update_last_login($user->id);

        return $this->session->has_userdata(self::SESSION_KEY);
    }

    public function current_user()
    {
        if (!$this->session->has_userdata(self::SESSION_KEY)) {
            return null;
        }

        $user_id = $this->session->userdata(self::SESSION_KEY);
        $query = $this->db->get_where($this->tbl_user, ['id_user' => $user_id]);
        return $query->row();
    }

    public function logout()
    {
        $this->session->unset_userdata(self::SESSION_KEY);
        return !$this->session->has_userdata(self::SESSION_KEY);
    }
}
