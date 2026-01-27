<?php
class User extends CI_Controller {

   public function __construct()
	{
		parent::__construct();
		$this->load->model('My_model');
	}
    public function index()
{
    $this->load->view("user/navbar");
    $this->load->view("user/index");
    $this->load->view("user/footer");
}

}
