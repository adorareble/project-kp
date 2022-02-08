<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Tiket extends CI_Model
{
    public function get_tiket_sesi($sesi)
    {
        return $this->db->get_where("tb_tiket", ["sesi" => $sesi])->result_array();
    }

    public function get_tb_report()
    {
        return $this->db->get_where("tb_report")->result_array();
    }

    public function insert($data){
        $this->db->insert('tb_report', $data);
        return TRUE;
    }

    public function reset($resetLaporan, $resetTiket)
    {
        $this->db->set('stok', $resetTiket);
        $this->db->update('tb_tiket');

        $this->db->set('jumlah', $resetLaporan);
        $this->db->update('tb_report');
    }
}
