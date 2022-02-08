<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Lapor extends CI_Model
{
    public function get_lapor()
    {
        return $this->db->get('tb_report')->result_array();
    }
}