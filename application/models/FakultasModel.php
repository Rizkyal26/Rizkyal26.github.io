<?php

defined('BASEPATH') or exit ('no direct script access allowed');


class FakultasModel extends CI_Model

    {

        public function simpan()

        {

            $fakultas = $this->input->post('fakultas', true);

            $data = [];
            foreach ($fakultas as $key => $value)

                {

                    $data[] =
                    [
                            'nama' => $fakultas[$key]
                    ];

                }

            $this->db->insert_Batch('fakultas', $data);


        }

        public function update()

        {

            $data = ['nama' => $this->input->post('fakultas', true)];

            $this->db->where('id', $this->input->post('id'));

            $this->db->update('fakultas', $data);

        }

    }