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

    public function pembelian($pendapatan, $jumlah)
    {
        // $tiket = $this->get_tiket_sesi($sesi);
        // $this->db->set('stok', (int)$tiket[$index]['stok'] - $jumlah);
        // $this->db->where('sesi', (int)$sesi);
        // $this->db->where('tiket', $jenis);
        // $this->db->update('tb_tiket');

        $report = $this->get_tb_report();
        $this->db->set('pendapatan', (int)$report[1]['pendapatan'] + $pendapatan);
        $this->db->where('tiketKelinci', $jumlah);
        $this->db->where('tiketBunga', $jumlah);
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
