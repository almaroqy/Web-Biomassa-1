<?php
class Feeding_model extends CI_Model
{
    public function getFeeding($keramba_id, $activity_id = null)
    {
        if ($activity_id === null) {
            $this->db->get_where('feeding', ['keramba_id' => $keramba_id])->result_array();
        } else {
            $this->db->get_where('feeding', ['keramba_id' => $keramba_id, 'activity_id' => $activity_id])->result_array();
        }
    }

    public function createFeeding($data)
    {
        $this->db->insert('feeding', $data);

        return $this->db->affected_rows();
    }

    public function createDetailFeeding($data)
    {
        $this->db->insert('detail_feeding', $data);
    }
}
