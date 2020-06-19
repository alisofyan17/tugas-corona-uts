<?php 

class Pegawai extends CI_Controller{

	public function index()
	{
		$data['pegawai'] = $this->model_pegawai->tampil_data()->result();
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('administrator/pegawai',$data);
		$this->load->view('templates/footer');
	}
	

	public function input()
	{
		$data = array(
			'id'			=> set_value('id'),
			'nama'			=> set_value('nama'),
			'alamat'		=> set_value('alamat'),
			'pendidikan'	=> set_value('pendidikan'),

		);
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('administrator/form_pegawai', $data);
		$this->load->view('templates/footer');
	}

	public function input_aksi()
	{
		$data = array(
			
			'nama'			=> $this->input->post('nama', true),
			'alamat'		=> $this->input->post('alamat', true),
			'pendidikan'	=> $this->input->post('pendidikan', true),
		);
		
		$this->model_pegawai->simpan($data);
		redirect('administrator/pegawai');
		
	}


	public function update($id)
	{
		$where = array('id' => $id);
		$data['pegawai'] = $this->model_pegawai->edit_data($where,'tb_pegawai')->result();
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('administrator/form_update_pegawai', $data);
		$this->load->view('templates/footer');
	}

	public function update_aksi()
	{
		$id = $this->input->post('id');
		$nama = $this->input->post('nama');
		$alamat = $this->input->post('alamat');
		$pendidikan = $this->input->post('pendidikan');

		$data = array(
			'nama' => $nama,
			'alamat' => $alamat,
			'pendidikan' => $pendidikan
		);

		$where = array(
			'id' => $id
		);

		$this->model_pegawai->update_data($where,$data,'tb_pegawai');
		redirect('administrator/pegawai');
	}

	public function delete($id)
	{
		$where = array('id' => $id);
		$this->model_pegawai->hapus_data($where, 'tb_pegawai');
		redirect('administrator/pegawai');
	}
	
}