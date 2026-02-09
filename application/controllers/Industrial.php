<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Industrial extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Industrial_model');
    }

    /* ================= COMMON PAGE ================= */
    private function page($view, $data = [])
    {
        $this->load->view('admin/navbar');
        $this->load->view('admin/'.$view, $data);
        $this->load->view('admin/footer');
    }

    /* ================= UPLOAD HELPER ================= */
    private function upload_files($fields)
    {
        $config['upload_path']   = FCPATH.'uploads/';
        $config['allowed_types'] = 'jpg|jpeg|png|webp';
        $config['encrypt_name']  = TRUE;
        $config['max_size']      = 25600; // 25MB

        $this->load->library('upload');
        $uploaded = [];

        foreach ($fields as $field) {
            if (!empty($_FILES[$field]['name'])) {

                $this->upload->initialize($config);

                if (!$this->upload->do_upload($field)) {
                    echo $this->upload->display_errors();
                    exit;
                }

                $data = $this->upload->data();
                $uploaded[$field] = $data['file_name'];
            }
        }
        return $uploaded;
    }

    /* ================= DASHBOARD ================= */

    public function index()
    {
        $data['about']        = $this->Industrial_model->about();
        $data['points']       = $this->Industrial_model->points();
        $data['capabilities'] = $this->Industrial_model->capabilities();
        $data['why']          = $this->Industrial_model->why_choose();

        $this->page('industrial', $data);
    }

    /* =================================================
       ABOUT SECTION
    ================================================= */

    public function industrial_about()
    {
        $data['about']  = $this->Industrial_model->about();
        $data['points'] = $this->Industrial_model->points();

        $this->page('industrial_about', $data);
    }

    public function update_about($id)
    {
        $data = [
            'description' => $this->input->post('description')
        ];

        if (!empty($_FILES['image']['name'])) {
            $file = $this->upload_files(['image']);
            $data['image'] = $file['image'];
        }

        $this->Industrial_model->update_by_id('industrial_about', $id, $data);
        redirect('admin/industrial/industrial_about');
    }

    /* =================================================
       POINTS (ABOUT LIST)
    ================================================= */

    public function add_point()
    {
        $this->Industrial_model->insert('industrial_points', [
            'point' => $this->input->post('point')
        ]);
        redirect('admin/industrial/industrial_about');
    }

    public function delete_point($id)
    {
        $this->Industrial_model->delete('industrial_points', $id);
        redirect('admin/industrial/industrial_about');
    }

    /* =================================================
       CAPABILITIES
    ================================================= */

    public function industrial_capabilities()
    {
        $data['capabilities'] = $this->Industrial_model->capabilities();
        $this->page('industrial_capabilities', $data);
    }

    public function add_capability()
    {
        $this->Industrial_model->insert('industrial_capabilities', [
            'title' => $this->input->post('title')
        ]);
        redirect('admin/industrial/industrial_capabilities');
    }

    public function delete_capability($id)
    {
        $this->Industrial_model->delete('industrial_capabilities', $id);
        redirect('admin/industrial/industrial_capabilities');
    }

    /* =================================================
       WHY CHOOSE
    ================================================= */

    public function industrial_why()
    {
        $data['why'] = $this->Industrial_model->why_choose();
        $this->page('industrial_why', $data);
    }

    public function add_why()
    {
        $this->Industrial_model->insert('industrial_why_choose', [
            'title' => $this->input->post('title')
        ]);
        redirect('admin/industrial/industrial_why');
    }

    public function delete_why($id)
    {
        $this->Industrial_model->delete('industrial_why_choose', $id);
        redirect('admin/industrial/industrial_why');
    }
}
