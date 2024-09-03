<?php
defined('BASEPATH') or exit('No direct script access allowed');

class m_booking extends CI_Model
{

    public function get_booking()
    {
        //select semua data siswa
        $this->db->select('*');
        $this->db->from('booking');
        $this->db->order_by('id_booking', 'DESC');
        return $this->db->get();
    }

    public function simpan_booking($data)
    {

        //insert data
        return $this->db->insert("booking", $data);
    }

    function get_no_invoice()
    {
        $q = $this->db->query("SELECT MAX(RIGHT(kode_booking,4)) AS kd_max FROM booking WHERE DATE(tanggal_booking)=CURDATE()");
        $kd = "";
        if ($q->num_rows() > 0) {
            foreach ($q->result() as $k) {
                $tmp = ((int) $k->kd_max) + 1;
                $kd = sprintf("%04s", $tmp);
            }
        } else {
            $kd = "0001";
        }
        date_default_timezone_set('Asia/Jakarta');
        return date('dmy') . $kd;
    }


}