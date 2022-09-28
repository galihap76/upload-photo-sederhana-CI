<?php
class Upload extends CI_Controller {

        public function index(){
                //load upload form 
                $this->load->view('upload_form', array('error' => ' ' ));
        }

        //lakukan upload
        public function do_upload(){
                //set path
                $config['upload_path'] = './uploads/';
                //izinkan file yang hanya di upload
                $config['allowed_types'] = 'jpg|png';
                //set ukuran 
                $config['max_size'] = 2000;
                $config['max_width'] = 1500;
                $config['max_height'] = 1500;

                //load library upload
                $this->load->library('upload', $config);

                //cek jika upload nya gagal
                if (!$this->upload->do_upload('userfile')){
                         //beri pesan pada views upload_form
                        $error = array('error' => $this->upload->display_errors());
                        $this->load->view('upload_form', $error);
                }

                //selain upload photo nya berhasil
                else{
                         //beri pesan pada views upload_data
                        $data = array('upload_data' => $this->upload->data());
                        $this->load->view('upload_form', $data);
                }
        }
}
?>
