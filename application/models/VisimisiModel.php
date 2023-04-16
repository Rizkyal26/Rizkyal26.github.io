<?php

defined('BASEPATH') or exit ('no direct script access allowed');


class VisimisiModel extends CI_Model

    {

        public function getVisimisi()
        
        {

            $this->db->select('*, visimisi.id as id_visimisi');
            $this->db->from('visimisi');
            $this->db->join('paslon', 'paslon.id = visimisi.id_paslon');
            return $this->db->get();


        }

        public function simpan()

        {

           $data = [

                'id_paslon' => $this->input->post('id_paslon'),

                'visi' => $this->input->post('visi', true),

                'misi' => $this->input->post('misi', true),

           ];
           $this->db->insert('visimisi', $data);

        }

        public function update()

        {

            $data = [

                'id_paslon' => $this->input->post('id_paslon'),

                'visi' => $this->input->post('visi', true),

                'misi' => $this->input->post('misi', true),

           ];

            $this->db->where('id', $this->input->post('id'));

            $this->db->update('visimisi', $data);

        }

    }