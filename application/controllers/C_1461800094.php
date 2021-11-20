<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class C_1461800094 extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('M_1461800094');
		$this->load->helper('url');
	}
	public function index(){
		$data['read']=$this->M_1461800094->read()->result();
		$this->load->view('V_1461800094', $data);
	}
	public function create_view(){
		$this->load->view('create');
	}
	public function create(){
		$data=array(
			'kd_brg'	=> $this->input->post('kd_brg'),
			'nm_brg'	=> $this->input->post('nm_brg'),
			'kd_kat'	=> $this->input->post('kd_ktgr'),
			'harga_beli'=> $this->input->post('hrg_beli'),
			'harga_jual'=> $this->input->post('hrg_jual')
		);
		$this->M_1461800094->create($data);
		redirect('C_1461800094/index','refresh');
	}
	public function delete(){
		$id['kd_brg']=$this->uri->segment(3);
		$this->M_1461800094->delete($id);
		redirect('C_1461800094/index','refresh');
	}
	public function edit($id){
		$id=$this->uri->segment(3);
		$data['edit_brg']=$this->M_1461800094->edit($id);
		$this->load->view('update', $data);
	}
	public function update(){
		$id['kd_brg']=$this->input->post('kd_brg');
		$data=array(
			'kd_brg'	=> $this->input->post('kd_brg'),
			'nm_brg'	=> $this->input->post('nm_brg'),
			'kd_kat'	=> $this->input->post('kd_ktgr'),
			'harga_beli'=> $this->input->post('hrg_beli'),
			'harga_jual'=> $this->input->post('hrg_jual')
		);
		$this->M_1461800094->update($data,$id);
		redirect('C_1461800094/index','refresh');
	}
}

/* End of file c_1461800094.php */
/* Location: ./application/controllers/c_1461800094.php */