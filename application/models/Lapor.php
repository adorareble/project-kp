<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Lapor extends CI_Model
{
    public function get_lapor()
    {
        $this->db->select('*');
        $this->db->from('tb_report');

        $result = $this->db->get();

        return $result->result_array();
    }
}