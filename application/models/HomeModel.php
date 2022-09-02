<?php

class HomeModel extends CI_Model
{
    private $table_name = 'todo';

    public function __construct()
    {
        $this->load->database();
    }

    public function get_todos()
    {
        $query = $this->db->get($this->table_name);

        return $query->result_array();
    }

    public function get_specific_todo($id)
    {
        $query = $this->db->get_where($this->table_name, ['id' => $id]);

        return $query->row_array();
    }

    public function update($data, $id)
    {
        $this->db->where('id', $id);
        $this->db->update($this->table_name, $data);
    }

    public function delete($id)
    {
        $this->db->where('id', $id);
        $this->db->delete($this->table_name);
    }

    public function create($data)
    {
        $this->db->insert($this->table_name, $data);
    }
}
