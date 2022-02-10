<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Tiket extends CI_Model
{
    public function get_tb_report($tanggal)
    {
        return $this->db->query("SELECT * FROM tb_report WHERE tanggal = '$tanggal'")->result_array();
    }

    public function insert($data)
    {
        $this->db->insert('tb_report', $data);
        return TRUE;
    }

    public function update($data)
    {
        $tiketKelinci = (int)$data['tiketKelinci'];
        $tiketBunga = (int)$data['tiketBunga'];;
        $pendapatan = (int)$data['pendapatan'];
        $tanggal = $data['tanggal'];

        $this->db->query("UPDATE tb_report SET tiketKelinci = tiketKelinci+$tiketKelinci , tiketBunga = tiketBunga+$tiketBunga , pendapatan = pendapatan+$pendapatan  WHERE tanggal = '$tanggal'");
    }

    // public function reset($resetLaporan, $resetTiket)
    // {
    //     $this->db->set('stok', $resetTiket);
    //     $this->db->update('tb_tiket');

    //     $this->db->set('jumlah', $resetLaporan);
    //     $this->db->update('tb_report');
    // }
}
