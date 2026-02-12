<?php
class Solar_water_pump_model extends CI_Model {

    private $table = 'solar_water_pumps';

    public function get_all(){
        return $this->db->order_by('id','DESC')
                        ->get($this->table)
                        ->result();
    }

    public function insert($data){
        return $this->db->insert($this->table,$data);
    }
}
