<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_telp');	
	}

	public function index()
	{
		$data['list'] = $this->M_telp->listWA();

		$this->load->view('welcome_message',$data);
	}

	public function kirim_pesan()
	{
		$tujuan =  	 $this->input->post('tujuan');
		$isi =		 urlencode( $this->input->post('isi'));
		
		$result = file_get_contents("http://localhost:5000/" . "msg?number=" . $tujuan ."&message=" . $isi);

		$this->session->set_flashdata('message','berhasil kirim');
		redirect('welcome');
	}	

	public function AddNumber()
    {
            if ($this->input->post('save')) {
            $data = [
                'no_tujuan' => htmlspecialchars($this->input->post('awal', true)),
        
            ];

            $respons = $this->M_telp->AddNumbers($data);

            if ($respons == true) {
                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
                Berhasil input </div>');
                redirect('welcome');
            }else {
                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
                gagal input </div>');
                redirect('welcome');
            }
        }
        
    }
}