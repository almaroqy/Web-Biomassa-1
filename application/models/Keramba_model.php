<?php
class Keramba_model extends CI_Model
{
    public function getAllKeramba()
    {
        return $this->db->get('keramba')->result_array();
    }
}