<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Artikel extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->model('artikel_model','artikel');
    }

    public function index()
    {
        $data['records'] = $this->artikel->find_all();
        $this->load->view('artikel/index',$data);
    }

    function tambah(){
        $this->load->view('artikel/tambah');
    }

    function tambah_save(){
        //validasi server side
        $this->form_validation->set_rules('judul','Judul artikel','required');
        $this->form_validation->set_rules('tgl_artikel','Tanggal artikel','required');
        $this->form_validation->set_rules('isi','Isi artikel','required');
        if($this->form_validation->run() == FALSE){
            //validasi menemukan error
            $this->load->view('artikel/tambah');
        }else{
            //handle upload foto
            $config = array(
                'upload_path' => "./assets/uploads/",
                'allowed_types' => "*",
                'overwrite' => TRUE,
                'max_size' => "5048000" // Can be set to particular file size , here it is 2 MB(2048 Kb)
            );
            $file_name = "";
            $this->load->library('upload', $config);
            if ($this->upload->do_upload('gambar')) {
                $upload_data = $this->upload->data(); //Returns array of containing all of the data related to the file you uploaded.
                $file_name = $upload_data['file_name'];
            } else {
                $error = array('error' => $this->upload->display_errors());
                print_r($error);
                exit;
            }
            //lolos validasi
            $data = [
                'judul' => $this->input->post('judul'),
                'tgl_artikel' => $this->input->post('tgl_artikel'),
                'isi' => $this->input->post('isi'),
                'gambar' => $file_name
            ];
            $this->artikel->insert($data);
            redirect(base_url('artikel'));
        }
    }

    function detail(){
        $id = $this->uri->segment(3);
        $data = $this->artikel->find_by_id($id);
        $this->load->view('artikel/detail',$data);
    }

    function hapus(){
        $id = $this->uri->segment(3);
        $this->artikel->delete($id);
        redirect(base_url('artikel'));
    }

    function edit(){
        $id = $this->uri->segment(3);
        $data = $this->artikel->find_by_id($id);
        $this->load->view('artikel/edit',$data);
    }

    function edit_save(){
        //validasi server side
        $id = $this->input->post('id');
        $this->form_validation->set_rules('judul','Judul artikel','required');
        $this->form_validation->set_rules('isi','Isi Artikel','required');
        if($this->form_validation->run() == FALSE){
            //validasi menemukan error
            $data = $this->artikel->find_by_id($id);
            $this->load->view('artikel/edit',$data);
        }else{
            //handle upload
            $file_name = $this->input->post('foto_lama');
            if($_FILES['gambar']['name'] != ""){
                $config = array(
                    'upload_path' => "./assets/uploads/",
                    'allowed_types' => "*",
                    'overwrite' => TRUE,
                    'file_name' => "foto_".date('YmdHis'),
                    'max_size' => "5048000" // Can be set to particular file size , here it is 2 MB(2048 Kb)
                );
                $this->load->library('upload', $config);
                if ($this->upload->do_upload('gambar')) {
                    $upload_data = $this->upload->data(); //Returns array of containing all of the data related to the file you uploaded.
                    $file_name = $upload_data['file_name'];
                } else {
                    $error = array('error' => $this->upload->display_errors());
                    print_r($error);
                    exit;
                }
            }
            //lolos validasi
            $data = [
                'judul' => $this->input->post('judul'),
                'tgl_artikel' => $this->input->post('tgl_artikel'),
                'isi' => $this->input->post('isi'),
                'gambar' => $file_name
            ];
            $this->artikel->update($id,$data);
            redirect(base_url('artikel'));
        }
    }
}
