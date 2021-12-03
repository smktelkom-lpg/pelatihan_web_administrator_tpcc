<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengumuman extends CI_Controller {

	public function __construct(){
        parent::__construct();
        $this->load->model('pengumuman_model','pengumuman');
    }

	public function index()
	{
		$data['records'] = $this->pengumuman->find_all();
		$this->load->view('pengumuman/index',$data);
	}

	function tambah(){
        $this->load->view('pengumuman/tambah');
    }

    function tambah_save(){
        //validasi server side
        $this->form_validation->set_rules('judul','Judul Pengumuman','required');
        $this->form_validation->set_rules('tgl_pengumuman','Tanggal Pengumuman','required');
        $this->form_validation->set_rules('isi_pengumuman','Isi Pengumuman','required');
        if($this->form_validation->run() == FALSE){
            //validasi menemukan error
            $this->load->view('pengumuman/tambah');
        }else{
            //lolos validasi
            $data = [
                'judul' => $this->input->post('judul'),
                'tgl_pengumuman' => $this->input->post('tgl_pengumuman'),
                'isi_pengumuman' => $this->input->post('isi_pengumuman')
            ];
            $this->pengumuman->insert($data);
            redirect(base_url('pengumuman'));
        }
    }

    function edit(){
        $id = $this->uri->segment(3);
        $data = $this->pengumuman->find_by_id($id);
        $this->load->view('pengumuman/edit',$data);
    }

    function edit_save(){
        //validasi server side
        $id = $this->input->post('id');
        $this->form_validation->set_rules('judul','Judul Pengumuman','required');
        $this->form_validation->set_rules('tgl_pengumuman','Tanggal Pengumuman','required');
        $this->form_validation->set_rules('isi_pengumuman','Isi Pengumuman','required');
        if($this->form_validation->run() == FALSE){
            //validasi menemukan error
            $data = $this->pengumuman->find_by_id($id);
            $this->load->view('pengumuman/edit',$data);
        }else{
            //lolos validasi
            $data = [
                'judul' => $this->input->post('judul'),
                'tgl_pengumuman' => $this->input->post('tgl_pengumuman'),
                'isi_pengumuman' => $this->input->post('isi_pengumuman')
            ];
            $this->pengumuman->update($id,$data);
            redirect(base_url('pengumuman'));
        }
    }

    function detail(){
        $id = $this->uri->segment(3);
        $data = $this->pengumuman->find_by_id($id);
        $this->load->view('pengumuman/detail',$data);
    }

    function hapus(){
        $id = $this->uri->segment(3);
        $this->pengumuman->delete($id);
        redirect(base_url('pengumuman'));
    }


}
