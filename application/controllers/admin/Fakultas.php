<?php

defined('BASEPATH') or exit ('no direct script access allowed');

class Fakultas extends CI_Controller

{
    public function __construct()
    {
        
        parent:: __construct();

        $this->load->model('FakultasModel');

        if ($this->session->userdata('level') != 'admin')
            {

                redirect('auth');

            }

    }

    public function index()

    {

        $data['title'] = 'Fakultas';

        $data['rows'] = $this->db->get('fakultas')->result();

        $this->load->view('templates/admin_header', $data);

        $this->load->view('templates/admin_topbar');

        $this->load->view('templates/admin_sidebar');

        $this->load->view('admin/fakultas', $data);

        $this->load->view('templates/admin_footer');

    }

    
    public function tambah()

    {
        $data['title'] = 'Tambah Fakultas';

        $this->load->view('templates/admin_header', $data);

        $this->load->view('templates/admin_topbar');

        $this->load->view('templates/admin_sidebar');

        $this->load->view('admin/fakultas_tambah', $data);

        $this->load->view('templates/admin_footer');

    }

    public function simpan()

    {

        $this->FakultasModel->simpan();

        if ($this->db->affected_rows() > 0)
        
            {

                $this->session->set_flashdata('message', '
                
                <div class="alert alert-warning alert-dismissible mt-3">
                
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                
                    <h5><i class="icon fas fa-exclamation-triangle"></i> Notifikasi!</h5>
                
                    Berhasil Disimpan!</h4>
                
                </div>
                ');

                redirect('admin/fakultas');

            }

    }

    public function edit($id)

    {
        $data['title'] = 'Edit Fakultas';

        $data['row'] = $this->db->get_where('fakultas', ['id' => $id]) ->row();

        $this->load->view('templates/admin_header', $data);

        $this->load->view('templates/admin_topbar');

        $this->load->view('templates/admin_sidebar');

        $this->load->view('admin/fakultas_edit', $data);

        $this->load->view('templates/admin_footer');

    }

    public function update()

    {

        $this->FakultasModel->update();

        if ($this->db->affected_rows() > 0)
        
            {

                $this->session->set_flashdata('message', '
                
                <div class="alert alert-warning alert-dismissible mt-3">
                
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                
                    <h5><i class="icon fas fa-exclamation-triangle"></i> Notifikasi!</h5>
                
                    Berhasil Diupdate!</h4>
                
                </div>
                ');

                redirect('admin/fakultas');

            }

    }

    public function hapus($id)

    {

        $this->db->delete('fakultas', ['id' => $id]);

        if ($this->db->affected_rows() > 0)
        
            {

                $this->session->set_flashdata('message', '
                
                <div class="alert alert-warning alert-dismissible mt-3">
                
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                
                    <h5><i class="icon fas fa-exclamation-triangle"></i> Notifikasi!</h5>
                
                    Berhasil dihapus!.</h4>
                
                </div>
                ');

                redirect('admin/fakultas');

            }

    }

}