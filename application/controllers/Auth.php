<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller 
{

    public function __construct()
    {
        parent::__construct();

        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['title'] = 'E-Vote UKM Granat';

        $data['fakultas'] = $this->db->get('fakultas')->result();

        $this->load->view('templates/header', $data);

        $this->load->view('auth', $data);

        $this->load->view('templates/footer');

        
    }

    public function registrasi()
    
    {

        $this->form_validation->set_rules('nama', 'Nama', 'trim|required', 
        [
            'required' => '%s masih kosong'
        ]);

        $this->form_validation->set_rules('email', 'Email', 'trim|required|is_unique[user.email]', 
        [
            'required' => '%s masih kosong',

            'is_unique' => '%s sudah ada'

        ]);

        $this->form_validation->set_rules('npm', 'Npm', 'trim|required', 
        [
            'required' => '%s masih kosong'
        ]);

        $this->form_validation->set_rules('password', 'Password', 'trim|required', 
        [
            'required' => '%s masih kosong'
        ]);


        if ($this->form_validation->run() == FALSE)
            
        {

            $this->index();

        }

        else

        {

            $data = 
            [ 

                'id_fakultas' => $this->input->post('id_fakultas', true),

                'nama' => $this->input->post('nama', true),

                'email' => $this->input->post('email', true),

                'npm' => $this->input->post('npm', true),

                'password' => password_hash($this->input->post('password', true), PASSWORD_DEFAULT),

                'level' => 'anggota'
            
            ];

            $this->db->insert('user', $data);

            if ($this->db->affected_rows() > 0)

                {
                    echo "<script>
                            alert ('akun berhasil diregistrasi');
                            
                            window.location.href = '" . site_url('auth') . " ';
                    </script>";
                }

        }

    }

    public function login()

        {
            $cek_npm = $this->db->get_where('user', ['npm' => $this->input->post('npm1', true)])->row();

            if ($cek_npm) {//jika ada npm
                
                if(password_verify($this->input->post('password1'), $cek_npm->password))
                {

                    if ($cek_npm->level == 'admin') //buat admin
                    {

                        $data_session =
                        [
                            'id' => $cek_npm->id,
                            'nama' => $cek_npm->nama,
                            'level' => $cek_npm->level,

                        ];
                        $this->session->set_userdata($data_session);
                        redirect('admin/dashboard');

                    }

                    else
                    {
                        $data_session =
                        [
                            'id' => $cek_npm->id,
                            'nama' => $cek_npm->nama,
                            'level' => $cek_npm->level,

                        ];
                        $this->session->set_userdata($data_session);
                        redirect('home');
                    }

                }

                else //jika tidak
                {
                    echo "<script>
                
                        alert('Password Anda Salah');

                        window.location.href = ' " . site_url('auth') . "';

                    </script>";
                }

            } 
            
            else //jika tidak
            {
                echo "<script>
                
                    alert('Npm Anda Salah');

                    window.location.href = ' " . site_url('auth') . "';

                </script>";
            }
            
        }



    public function logout()
        {

            $this->session->sess_destroy();
            redirect('auth');
        }
}

