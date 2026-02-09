<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class My_about extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database(); // ✅ load once
    }

    /* ================= GET ================= */

    public function get_hero()
    {
        return $this->db->get('about_hero')->result();
    }

    public function get_brand()
    {
        return $this->db->get('about_brand')->row(); // single row
    }

    public function get_vision()
    {
        return $this->db->get('about_vision')->row(); // single row
    }

    public function get_team()
    {
        return $this->db->get('team_members')->result();
    }

    public function get_verticals()
    {
        return $this->db->get('business_verticals')->result();
    }

    /* ================= INSERT ================= */

    public function insert_hero($data)
    {
        return $this->db->insert('about_hero', $data);
    }

    public function insert_brand($data)
    {
        return $this->db->insert('about_brand', $data);
    }

    public function insert_vision($data)
    {
        return $this->db->insert('about_vision', $data);
    }

    public function insert_team($data)
    {
        return $this->db->insert('team_members', $data);
    }

    public function insert_vertical($data)
    {
        return $this->db->insert('business_verticals', $data);
    }

    /* ================= COMMON CRUD ================= */

    public function get_by_id($table, $id)
    {
        return $this->db
                    ->where('id', $id)
                    ->get($table)
                    ->row();
    }

    public function update_by_id($table, $id, $data)
    {
        $this->db->where('id', $id)
                 ->update($table, $data);

        return ($this->db->affected_rows() > 0);
    }

    public function delete_by_id($table, $id)
    {
        $this->db->where('id', $id)
                 ->delete($table);

        return ($this->db->affected_rows() > 0);
    }
}
