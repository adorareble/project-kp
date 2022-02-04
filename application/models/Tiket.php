<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Tiket extends CI_Model
{
    public function get_tiket_sesi($sesi)
    {
        return $this->db->get_where("tb_tiket", ["sesi" => $sesi])->result_array();
    }

    public function get_tb_report($sesi)
    {
        return $this->db->get_where("tb_report", ["sesi" => $sesi])->result_array();
    }

    public function pembelian($jumlah, $sesi, $jenis, $index)
    {
        $tiket = $this->get_tiket_sesi($sesi);
        $this->db->set('stok', (int)$tiket[$index]['stok'] - $jumlah);
        $this->db->where('sesi', (int)$sesi);
        $this->db->where('tiket', $jenis);
        $this->db->update('tb_tiket');

        $report = $this->get_tb_report($sesi);
        $this->db->set('jumlah', (int)$report[$index]['jumlah'] + $jumlah);
        $this->db->where('sesi', (int)$sesi);
        $this->db->where('tiket', $jenis);
        $this->db->update('tb_report');
    }

    public function reset($resetLaporan, $resetTiket)
    {
        $this->db->set('stok', $resetTiket);
        $this->db->update('tb_tiket');

        $this->db->set('jumlah', $resetLaporan);
        $this->db->update('tb_report');
    }
}
