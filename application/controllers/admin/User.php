<?php

defined('BASEPATH') or exit ('no direct script access allowed');

class User extends CI_Controller

{
    public function __construct()
    {
        
        parent:: __construct();

        $this->load->model('UserModel');

        if ($this->session->userdata('level') != 'admin')
            {

                redirect('auth');

            }

    }

    public function index()

    {

        $data['title'] = 'User';

        $data['rows'] = $this->UserModel->getUser()->result();

        $this->load->view('templates/admin_header', $data);

        $this->load->view('templates/admin_topbar');

        $this->load->view('templates/admin_sidebar');

        $this->load->view('admin/user', $data);

        $this->load->view('templates/admin_footer');

    }
    
    public function tambah()

    {

        $data['title'] = 'Tambah User';

        $data['fakultas'] = $this->db->get('fakultas')->result();

        $this->load->view('templates/admin_header', $data);

        $this->load->view('templates/admin_topbar');

        $this->load->view('templates/admin_sidebar');

        $this->load->view('admin/user_tambah', $data);

        $this->load->view('templates/admin_footer');

    }

    public function simpan()

    {

        $this->UserModel->simpan();

        if ($this->db->affected_rows() > 0)
        
            {

                $this->session->set_flashdata('message', '
                
                <div class="alert alert-warning alert-dismissible mt-3">
                
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                
                    <h5><i class="icon fas fa-exclamation-triangle"></i> Notifikasi!</h5>
                
                    Berhasil Diupdate!</h4>
                
                </div>
                
                ');

                redirect('admin/user');

            }

    }

    public function edit($id)

    {
        $data['title'] = 'Edit User';

        $data['row'] = $this->db->get_where('user', ['id' => $id]) ->row();

        $data['fakultas'] = $this->db->get('fakultas')->result();

        $this->load->view('templates/admin_header', $data);

        $this->load->view('templates/admin_topbar');

        $this->load->view('templates/admin_sidebar');

        $this->load->view('admin/user_edit', $data);

        $this->load->view('templates/admin_footer');

    }

    public function update()

    {

        $this->UserModel->update();

        if ($this->db->affected_rows() > 0)
        
            {

                $this->session->set_flashdata('message', '
                
                <div class="alert alert-warning alert-dismissible mt-3">
                
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                
                    <h5><i class="icon fas fa-exclamation-triangle"></i> Notifikasi!</h5>
                
                    Berhasil Diupdate!</h4>
                
                </div>
                
                ');

                redirect('admin/user');

            }

    }

    public function hapus($id)

    {

        $this->db->delete('user', ['id' => $id]);

        if ($this->db->affected_rows() > 0)
        
            {

                $this->session->set_flashdata('message', '
                
                <div class="alert alert-warning alert-dismissible mt-3">
                
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                
                    <h5><i class="icon fas fa-exclamation-triangle"></i> Notifikasi!</h5>
                
                    Berhasil Dihapus!</h4>
                
                </div>
                
                ');

                redirect('admin/user');

            }

    }


}