<?php

defined('BASEPATH') or exit ('no direct script access allowed');


class PaslonModel extends CI_Model

    {
        public function update()

        {

            $foto = $_FILES['foto']['name'];

            if ($foto)
            {
                $config['upload_path']          = './assets/img/';
                $config['allowed_types']        = 'gif|jpg|png|svg|jpeg';
                $config['max_height']           = 2048;

                $this->load->library('upload', $config);


                if ( ! $this->upload->do_upload('foto'))
                {
                    echo $this->upload->display_errors();
                }

                else
                {
                       $CekFotoLama = $this->db->get_where('paslon', ['id' => $this->input->post('id')])->row();
                       
                       if ($CekFotoLama->foto != 'default.png')
                       {
                            unlink('assets/img/' .$CekFotoLama->foto);
                       }

                       $FotoBaru = $this->upload->data('file_name'); 
                       
                       $paslon['foto'] = $FotoBaru;
                }

            }

            $paslon['nama_kandidat'] = $this->input->post('nama_kandidat');

            $paslon['nama_paslon'] = $this->input->post('nama_paslon');

            $this->db->where('id', $this->input->post('id')); //kalo error ini hapus

            $this->db->update('paslon', $paslon);  // ini juga

        }
    }
