<?php
class DataSiswa extends CI_Controller
{
	public $input;

	public function index()
	{
		$this->load->view('view-form-input-siswa');
	}
	public function cetak()
	{
		$data = [
			'nama' => $this->input->post('nama'),
			'nis' => $this->input->post('nis'),
			'kelas' => $this->input->post('kelas'),
			'tanggal' => $this->input->post('tanggal'),
			'tempat' => $this->input->post('tempat'),
			'jenis' => $this->input->post('jenis'),
			'agama' => $this->input->post('agama')
		];
		$this->load->view('view-data-input', $data);
	}
}
