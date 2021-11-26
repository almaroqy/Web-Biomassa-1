<?php
class History_model extends CI_Model
{
    public function getHistoryBiota($keramba_id)
    {
        $history = $this->db->query('SELECT * FROM biota WHERE keramba_id='. $keramba_id . 'AND tanggal_panen IS NOT NULL');

        return $history;
    }
}