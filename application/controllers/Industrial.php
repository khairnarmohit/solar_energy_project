<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Industrial extends CI_Controller
{
   public function __construct()
{
    parent::__construct();
    $this->load->model('Industrial_model');
    $this->load->helper('text'); // ✅ ADD THIS
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

public function industrial_about()
{
    $data['about']  = $this->Industrial_model->about();
    $data['points'] = $this->Industrial_model->points();

    // admin layout loader
    $this->page('industrial_about', $data);
}

    /* =================================================
       ABOUT SECTION
    ================================================= */
    public function update_about()
{
    $id = 1;
    $about = $this->Industrial_model->about();

    $data['description'] = $this->input->post('description');

    if (!empty($_FILES['image']['name'])) {

        $config['upload_path']   = FCPATH.'uploads/';
        $config['allowed_types'] = 'webp|jpg|jpeg|png';
        $config['encrypt_name']  = TRUE;
        $config['max_size']      = 25900;

        $this->load->library('upload');
        $this->upload->initialize($config);

        if (!$this->upload->do_upload('image')) {
            $this->session->set_flashdata(
                'error',
                $this->upload->display_errors('', '')
            );
            redirect('industrial/industrial_about');
            return;
        }

        // delete old image
        if (!empty($about->image)) {
            $old = FCPATH.'uploads/'.$about->image;
            if (file_exists($old)) {
                unlink($old);
            }
        }

        $upload = $this->upload->data();
        $data['image'] = $upload['file_name'];
    }

    $this->Industrial_model->update_by_id('industrial_about', $id, $data);

    $this->session->set_flashdata(
        'success',
        'Industrial About updated successfully'
    );

    redirect('industrial/industrial_about');
}


    /* =================================================
       POINTS (ABOUT LIST)
    ================================================= */
    public function industrial_points()
{
    $data['points'] = $this->Industrial_model->points();
    $this->page('industrial_points', $data);
}

public function add_point()
{
    $this->Industrial_model->insert('industrial_points', [
        'point' => $this->input->post('point')
    ]);

    redirect('industrial/industrial_points');
}

public function delete_point($id)
{
    $this->Industrial_model->delete('industrial_points', $id);

    redirect('industrial/industrial_points');
}

public function update_point($id)
{
    $data = [
        'point' => $this->input->post('point')
    ];

    $this->db->where('id', $id)
             ->update('industrial_points', $data);

    redirect('industrial/industrial_points');
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

    redirect('industrial/industrial_capabilities');
}

public function delete_capability($id)
{
    $this->Industrial_model->delete('industrial_capabilities', $id);

    redirect('industrial/industrial_capabilities');
}

public function update_capability($id)
{
    $data = [
        'title' => $this->input->post('title')
    ];

    $this->db->where('id', $id)
             ->update('industrial_capabilities', $data);

    redirect('industrial/industrial_capabilities');
}


    /* =================================================
       WHY CHOOSE
    ================================================= */
public function update_why($id)
{
    $data = [
        'title' => $this->input->post('title')
    ];

    $this->db->where('id', $id)
             ->update('industrial_why_choose', $data);

    redirect('industrial/industrial_why');
}
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

    redirect('industrial/industrial_why');
}

public function delete_why($id)
{
    $this->Industrial_model->delete('industrial_why_choose', $id);

    redirect('industrial/industrial_why');
}

}
