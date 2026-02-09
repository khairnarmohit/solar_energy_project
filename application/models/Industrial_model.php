

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Industrial_model extends CI_Model {

  public function about(){
    return $this->db->get('industrial_about')->row();
  }

  public function points(){
    return $this->db->get('industrial_points')->result();
  }

  public function capabilities(){
    return $this->db->get('industrial_capabilities')->result();
  }

  public function why_choose(){
    return $this->db->get('industrial_why_choose')->result();
  }

public function update_by_id($table, $id, $data)
{
    return $this->db->where('id', $id)->update($table, $data);
}

public function insert($table, $data)
{
    return $this->db->insert($table, $data);
}

public function delete($table, $id)
{
    return $this->db->where('id', $id)->delete($table);
}
}