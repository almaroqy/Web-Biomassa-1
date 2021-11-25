<?php
class Pakan_model extends CI_Model
{
    public function getPakan()
    {
        $this->db->get('pakan')->result_array();
    }

    public function createPakan($data)
    {
        $this->db->insert('pakan', $data);

        return $this->db->affected_rows();
    }

    public function updatePakan($data, $pakan_id)
    {
        $this->db->update('pakan', $data, ['pakan_id' => $pakan_id]);

        return $this->db->affected_rows();
    }


    public function deletePakan($pakan_id)
    {
        $this->db->delete('pakan', ['pakan_id' => $pakan_id]);

        return $this->db->affected_rows();
    }
}