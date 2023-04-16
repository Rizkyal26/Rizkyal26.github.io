<?php

defined('BASEPATH') or exit ('no direct script access allowed');

class Paslon extends CI_Controller

{
    public function __construct()
    {
        
        parent:: __construct();

        $this->load->model('PaslonModel');

        if ($this->session->userdata('level') != 'admin')
            {

                redirect('auth');

            }

    }

    public function index()

    {

        $data['title'] = 'Paslon';

        $data['rows'] = $this->db->get('paslon')->result();

        $this->load->view('templates/admin_header', $data);

        $this->load->view('templates/admin_topbar');

        $this->load->view('templates/admin_sidebar');

        $this->load->view('admin/paslon', $data);

        $this->load->view('templates/admin_footer');

    }

    public function edit($id)

    {
        $data['title'] = 'Edit Paslon';

        $data['row'] = $this->db->get_where('paslon', ['id' => $id]) ->row();

        $this->load->view('templates/admin_header', $data);

        $this->load->view('templates/admin_topbar');

        $this->load->view('templates/admin_sidebar');

        $this->load->view('admin/paslon_edit', $data);

        $this->load->view('templates/admin_footer');

    }

    public function update()

    {

        $this->PaslonModel->update();

        if ($this->db->affected_rows() > 0)
        
            {

                $this->session->set_flashdata('message', '
                
                <div class="alert alert-warning alert-dismissible mt-3">
                
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                
                    <h5><i class="icon fas fa-exclamation-triangle"></i> Notifikasi!</h5>
                
                    Berhasil Diupdate!</h4>
                
                </div>
                
                ');

                redirect('admin/paslon');

            }

    }

}