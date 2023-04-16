<?php

defined('BASEPATH') or exit ('no direct script access allowed');


class UserModel extends CI_Model

    {
        public function getUser()

        {

            $this->db->select('*, user.id as id_user, user.nama as nama_user, fakultas.nama as nama_fakultas');

            $this->db->from('user');

            $this->db->join('fakultas', 'fakultas.id = user.id_fakultas', 'left');

            return $this->db->get();

        }

        public function simpan()

        {
            $data = [

                'id_fakultas' => $this->input->post('id_fakultas'),
                'nama' => $this->input->post('nama', true),
                'email' => $this->input->post('email', true),
                'npm' => $this->input->post('npm', true),
                'password' => password_hash($this->input->post('password', true), PASSWORD_DEFAULT),
                'level' => $this->input->post('level', true),

            ];

            $this->db->insert('user', $data);
        }

        public function update()

        {

            $data = [

                'id' => $this->input->post('id'),
                'id_fakultas' => $this->input->post('id_fakultas'),
                'nama' => $this->input->post('nama', true),
                'email' => $this->input->post('email', true),
                'npm' => $this->input->post('npm', true),


            ];

            $this->db->where('id', $this->input->post('id'));

            $this->db->update('user', $data);

        }
    }

    // Stuck Di menit 14:52
