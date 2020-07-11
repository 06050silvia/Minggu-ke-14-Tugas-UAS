<?php
class Dokumentasi extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('m_dokumentasi');
		$this->load->model('m_album');
		$this->load->model('m_pengunjung');
		$this->m_pengunjung->count_visitor();
	}
	function index(){
		$x['alb']=$this->m_album->get_all_album();
		$x['all_dokumentasi']=$this->m_dokumentasi->get_all_dokumentasi();
		$this->load->view('depan/v_dokumentasi',$x);
	}
	function album(){
		$idalbum=$this->uri->segment(3);
		$x['alb']=$this->m_album->get_all_album();
		$x['data']=$this->m_dokumentasi->get_dokumentasi_by_album_id($idalbum);
		$this->load->view('depan/v_dokumentasi_per_album',$x);
	}
}
