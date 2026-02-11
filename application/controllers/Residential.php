<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Residential extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Residential_model');
         $this->load->helper('text');
    }

    /* ================= COMMON PAGE ================= */

    private function page($view, $data = [])
    {
        $this->load->view('admin/navbar');
        $this->load->view('admin/'.$view, $data);
        $this->load->view('admin/footer');
    }

    /* =================================================
       ABOUT SECTION
    ================================================= */


public function residential_about()
{
    $data['about'] = $this->Residential_model->residential_about();
    $this->page('residential_about', $data);
}

public function update_residential_about()
{
    $about = $this->Residential_model->residential_about();

    $data['description'] = $this->input->post('description');

    // IMAGE UPLOAD
    if (!empty($_FILES['image']['name'])) {

        $config['upload_path']   = FCPATH.'uploads/';
        $config['allowed_types'] = 'jpg|jpeg|png|webp';
        $config['encrypt_name']  = TRUE;

        $this->load->library('upload');
        $this->upload->initialize($config);

        if (!$this->upload->do_upload('image')) {

            $this->session->set_flashdata(
                'error',
                $this->upload->display_errors('', '')
            );

            redirect('residential/residential_about');
            return;
        }

        // DELETE OLD IMAGE
        if (!empty($about->image)) {
            $old = FCPATH.'uploads/'.$about->image;
            if (file_exists($old)) {
                unlink($old);
            }
        }

        $upload = $this->upload->data();
        $data['image'] = $upload['file_name'];
    }

    // UPDATE DB (id = 1)
    $this->db->where('id', 1)
             ->update('residential_about', $data);

    $this->session->set_flashdata(
        'success',
        'Residential About updated successfully'
    );

    redirect('residential/residential_about');
}

    /* =================================================
       POINTS SECTION
    ================================================= */

    public function residential_points()
    {
        $data['points'] = $this->Residential_model->residential_points();
        $this->page('residential_points', $data);
    }

    public function add_point()
    {
        $this->db->insert('residential_points', [
            'point' => $this->input->post('point')
        ]);

        redirect('residential/residential_points');
    }

    public function update_point($id)
    {
        $this->db->where('id', $id)
                 ->update('residential_points', [
                     'point' => $this->input->post('point')
                 ]);

        redirect('residential/residential_points');
    }

    public function delete_point($id)
    {
        $this->db->where('id', $id)
                 ->delete('residential_points');

        redirect('residential/residential_points');
    }

    /* =================================================
       BENEFITS (Capabilities) SECTION
    ================================================= */

    public function residential_capabilities()
    {
        $data['capabilities'] = $this->Residential_model->residential_benefits();
        $this->page('residential_capabilities', $data);
    }

    public function add_capability()
    {
        $this->db->insert('residential_benefits', [
            'title' => $this->input->post('title')
        ]);

        redirect('residential/residential_capabilities');
    }

    public function update_capability($id)
    {
        $this->db->where('id', $id)
                 ->update('residential_benefits', [
                     'title' => $this->input->post('title')
                 ]);

        redirect('residential/residential_capabilities');
    }

    public function delete_capability($id)
    {
        $this->db->where('id', $id)
                 ->delete('residential_benefits');

        redirect('residential/residential_capabilities');
    }
}
