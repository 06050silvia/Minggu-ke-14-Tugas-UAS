<?php
class Home extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('m_dokumentasi');
		$this->load->model('m_files');
		$this->load->model('m_pengunjung');
		$this->m_pengunjung->count_visitor();
	}
	function index(){
			$x['tot_konsultan']=$this->db->get('tbl_konsultan')->num_rows();
			$x['tot_files']=$this->db->get('tbl_files')->num_rows();
			$this->load->view('depan/v_home',$x);
	}

}
