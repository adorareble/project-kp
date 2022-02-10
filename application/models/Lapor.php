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

    public function ambilData($keyword = null)
    {
        $this->db->select('*');
        $this->db->from('tb_report');
        if (!empty($keyword)) {
            $this->db->like('tanggal', $keyword);
        }
        return $this->db->get()->result_array();
    }

    public function ambilData1($tahun, $bulan, $tanggal)
    {
        if ($tahun != 'Tahun' && $bulan == 'Bulan' && $tanggal == 'Tanggal') {
            return $this->db->query("SELECT * FROM tb_report WHERE YEAR(tanggal) = '$tahun'")->result_array();
        } elseif ($tahun == 'Tahun' && $bulan != 'Bulan' && $tanggal == 'Tanggal') {
            return $this->db->query("SELECT * FROM tb_report WHERE MONTH(tanggal) = '$bulan'")->result_array();
        } elseif ($tahun == 'Tahun' && $bulan == 'Bulan' && $tanggal != 'Tanggal') {
            return $this->db->query("SELECT * FROM tb_report WHERE DAY(tanggal) = '$tanggal'")->result_array();
        } elseif ($tahun != 'Tahun' && $bulan == 'Bulan' && $tanggal != 'Tanggal') {
            return $this->db->query("SELECT * FROM tb_report WHERE YEAR(tanggal) = '$tahun' AND DAY(tanggal) = '$tanggal'")->result_array();
        } elseif ($tahun != 'Tahun' && $bulan != 'Bulan' && $tanggal == 'Tanggal') {
            return $this->db->query("SELECT * FROM tb_report WHERE YEAR(tanggal) = '$tahun' AND MONTH(tanggal) = '$bulan'")->result_array();
        } elseif ($tahun == 'Tahun' && $bulan != 'Bulan' && $tanggal != 'Tanggal') {
            return $this->db->query("SELECT * FROM tb_report WHERE MONTH(tanggal) = '$bulan' AND DAY(tanggal) = '$tanggal'")->result_array();
        }
    }
}
