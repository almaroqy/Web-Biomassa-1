<?php
class Keramba_model extends CI_Model
{
    public function getAllKeramba($keramba_id = null)
    {
        if ($keramba_id === null) {
            return $this->db->get('keramba')->result_array();
        } else {
            return $this->db->get_where('keramba', ['keramba_id' => $keramba_id])->result_array();
        }
    }

    public function deleteKeramba($keramba_id)
    {
        $this->db->delete('keramba', ['keramba_id' => $keramba_id]);

        return $this->db->affected_rows();
    }

    public function createKeramba($data)
    {
        $this->db->insert('keramba', $data);

        return $this->db->affected_rows();
    }

    public function updateKeramba($data, $keramba_id)
    {
        $this->db->update('keramba', $data, ['keramba_id'=> $keramba_id]);

        return $this->db->affected_rows();
    }
}
