<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Residential_model extends CI_Model {

    public function residential_about(){
        return $this->db->get('residential_about')->row();
    }

    public function residential_points(){
        return $this->db->get('residential_points')->result();
    }

    public function residential_benefits(){
        return $this->db->get('residential_benefits')->result();
    }
}
