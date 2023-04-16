<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller
{

    public function __construct()
    {

        parent::__construct();

        $this->load->model('HomeModel');
        
    }

    public function index()

    {

        $data['title'] = 'HOME';

        $data['paslon'] = $this->db->get('paslon')->result();

        $this->load->view('templates/header', $data);

        $this->load->view('home', $data);

        $this->load->view('templates/footer');
    }

    public function visimisi($id_paslon)

    {
        $data['title'] = 'Visi & Misi';

        $data['paslon'] = $this->db->get_where('paslon', ['id' => $id_paslon])->row();

        $data['visimisi'] = $this->db->get_where('visimisi', ['id_paslon' => $id_paslon])->row();

        $this->load->view('templates/header', $data);

        $this->load->view('visimisi', $data);

        $this->load->view('templates/footer');
    }

    public function pilih_kandidat()
    {

        $this->HomeModel->pilih_kandidat();
        $this->HomeModel->update_status_user();
        if ($this->db->affected_rows() > 0)
        {
            $result =['success' => true];
        }
        else 
        {
            $result =['success' => false];
        }
        echo json_encode($result);
    }
    
}