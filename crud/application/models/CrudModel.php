<?php
class CrudModel extends CI_Model{
    public function getRecords()
    {
        $query = $this->db->query('SELECT * from customer');
        return $query;
    }
    public function saveRecord($data)
    {
        return $this->db->insert('customer', $data);
    }
}
?>