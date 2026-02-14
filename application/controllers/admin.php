

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->library('session');
    }

    /* ================= LOGIN PAGE ================= */

    public function login()
    {
        $this->load->view('admin/login');
    }

    /* ================= LOGIN PROCESS ================= */
    public function login_process()
{
    $email = trim($this->input->post('email'));
    $password = trim($this->input->post('password'));

    $admin = $this->db->get_where('admin_users', [
        'email' => $email,
        'password' => $password
    ])->row();

    if($admin){

        $this->session->set_userdata([
            'admin_id'   => $admin->id,
            'admin_name' => $admin->name,
            'logged_in'  => TRUE
        ]);

        redirect('admin');

    } else {
        $this->session->set_flashdata('error', 'Invalid Email or Password');
        redirect('admin/login');
    }
}



    /* ================= DASHBOARD ================= */

    public function index()
    {
        if(!$this->session->userdata('logged_in')){
            redirect('admin/login');
        }

        $this->load->view('admin/navbar');
        $this->db->select("MONTH(created_at) as month, COUNT(id) as total");
$this->db->where("YEAR(created_at)", date('Y'));
$this->db->group_by("MONTH(created_at)");
$result = $this->db->get("quotes")->result();

$months = [];
$totals = [];

// 12 months default 0
for ($i = 1; $i <= 12; $i++) {
    $months[] = date("M", mktime(0, 0, 0, $i, 10));
    $totals[$i] = 0;
}

foreach ($result as $row) {
    $totals[$row->month] = (int)$row->total;
}

$data['months'] = json_encode($months);
$data['totals'] = json_encode(array_values($totals));

        $this->load->view('admin/dashboard',$data);
        
        $this->load->view('admin/footer');
    }

    /* ================= LOGOUT ================= */

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('admin/login');
    }

    public  function navbar()
      {
          $this->load->view('admin/navbar');
      }
      public function footer()
      {
        $this->load->view('admin/footer');
      }

public function quotes()
{
     $this->navbar();
    $data['quotes'] = $this->db->order_by('id','DESC')->get('quotes')->result();
    $this->load->view('admin/quotes_list', $data);
    $this->footer();
}
public function delete_quote($id)
{
    if(!empty($id)){

        $this->db->where('id', $id);
        $this->db->delete('quotes');

        $this->session->set_flashdata('success','Quote Deleted Successfully!');
    }

    redirect('admin/quotes');
}





      
      
}
