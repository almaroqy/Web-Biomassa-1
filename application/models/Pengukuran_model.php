<?php

class Pengukuran_model extends CI_Model
{
    public function getPengukuran($biota_id)
    {
        return $this->db->order_by('tanggal_ukur', 'DESC')->get_where('pengukuran', ['biota_id' => $biota_id], 10)->result_array();
    }


    public function createPengukuran($data)
    {
        $this->db->insert('pengukuran', $data);

        return $this->db->affected_rows();
    }

    public function updatePengukuran($biota_id, $data)
    {
        $this->db->update('pengukuran', $data, ['biota_id' => $biota_id]);

        return $this->db->affected_rows();
    }

    public function deletePengukuran($biota_id)
    {
        $this->db->delete('pengukuran', ['biota_id' => $biota_id]);
    }
}