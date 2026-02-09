<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class My_about extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    /* ================= GET LIST ================= */

    

  public function get_brand()
{
    return $this->db->get('about_brand')->row();   // ✅ SINGLE OBJECT
}

public function get_vision()
{
    return $this->db->get('about_vision')->row();  // ✅ SINGLE OBJECT
}


    public function get_team()
    {
        return $this->db->get('team_members')->result();
    }

    public function get_verticals()
    {
        return $this->db->get('business_verticals')->result();
    }

    /* ================= SINGLE ROW (🔥 ERROR FIX) ================= */

    public function get_by_id($table, $id)
    {
        return $this->db
                    ->where('id', $id)
                    ->get($table)
                    ->row();
    }

    /* ================= UPDATE ================= */

    public function update_by_id($table, $id, $data)
    {
        return $this->db
                    ->where('id', $id)
                    ->update($table, $data);
    }
}
