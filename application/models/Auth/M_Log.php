<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_Log extends CI_Model
{
    public function getLog()
    {
        return $this->db->get('user_log')->result_array();
    }

    public function save_log($param)
    {
        $sql        = $this->db->insert_string('user_log',$param);
        $ex         = $this->db->query($sql);
        return $this->db->affected_rows($sql);
    }
}