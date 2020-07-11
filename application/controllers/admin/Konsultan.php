<?php
class Konsultan extends CI_Controller{
	function __construct(){
		parent::__construct();
		if($this->session->userdata('masuk') !=TRUE){
            $url=base_url('administrator');
            redirect($url);
        };
		$this->load->model('m_konsultan');
		$this->load->model('m_pengguna');
		$this->load->library('upload');
	}


	function index(){
		$x['data']=$this->m_konsultan->get_all_konsultan();
		$this->load->view('admin/v_konsultan',$x);
	}
	
	function simpan_konsultan(){
				$config['upload_path'] = './assets/images/'; //path folder
	            $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
	            $config['encrypt_name'] = TRUE; //nama yang terupload nantinya

	            $this->upload->initialize($config);
	            if(!empty($_FILES['filefoto']['name']))
	            {
	                if ($this->upload->do_upload('filefoto'))
	                {
	                        $gbr = $this->upload->data();
	                        //Compress Image
	                        $config['image_library']='gd2';
	                        $config['source_image']='./assets/images/'.$gbr['file_name'];
	                        $config['create_thumb']= FALSE;
	                        $config['maintain_ratio']= FALSE;
	                        $config['quality']= '60%';
	                        $config['width']= 300;
	                        $config['height']= 300;
	                        $config['new_image']= './assets/images/'.$gbr['file_name'];
	                        $this->load->library('image_lib', $config);
	                        $this->image_lib->resize();

	                        $photo=$gbr['file_name'];
							$nama=strip_tags($this->input->post('xnama'));
							$bidang=strip_tags($this->input->post('xbidang'));
							$kontak=strip_tags($this->input->post('xkontak'));

							$this->m_konsultan->simpan_konsultan($nama,$bidang,$kontak,$photo);
							echo $this->session->set_flashdata('msg','success');
							redirect('admin/konsultan');
					}else{
	                    echo $this->session->set_flashdata('msg','warning');
	                    redirect('admin/konsultan');
	                }
	                 
	            }else{
	            	$nama=strip_tags($this->input->post('xnama'));
					$bidang=strip_tags($this->input->post('xbidang'));
					$kontak=strip_tags($this->input->post('xkontak'));

					$this->m_konsultan->simpan_konsultan_tanpa_img($nama,$bidang,$kontak);
					echo $this->session->set_flashdata('msg','success');
					redirect('admin/konsultan');
				}
				
	}
	
	function update_konsultan(){
				
	            $config['upload_path'] = './assets/images/'; //path folder
	            $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
	            $config['encrypt_name'] = TRUE; //nama yang terupload nantinya

	            $this->upload->initialize($config);
	            if(!empty($_FILES['filefoto']['name']))
	            {
	                if ($this->upload->do_upload('filefoto'))
	                {
	                        $gbr = $this->upload->data();
	                        //Compress Image
	                        $config['image_library']='gd2';
	                        $config['source_image']='./assets/images/'.$gbr['file_name'];
	                        $config['create_thumb']= FALSE;
	                        $config['maintain_ratio']= FALSE;
	                        $config['quality']= '60%';
	                        $config['width']= 300;
	                        $config['height']= 300;
	                        $config['new_image']= './assets/images/'.$gbr['file_name'];
	                        $this->load->library('image_lib', $config);
	                        $this->image_lib->resize();
	                        $gambar=$this->input->post('gambar');
							$path='./assets/images/'.$gambar;
							unlink($path);

	                        $photo=$gbr['file_name'];
	                        $kode=$this->input->post('kode');
							$nama=strip_tags($this->input->post('xnama'));
							$bidang=strip_tags($this->input->post('xbidang'));
							$kontak=strip_tags($this->input->post('xkontak'));

							$this->m_konsultan->update_konsultan($kode,$nama,$bidang,$kontak,$photo);
							echo $this->session->set_flashdata('msg','info');
							redirect('admin/konsultan');
	                    
	                }else{
	                    echo $this->session->set_flashdata('msg','warning');
	                    redirect('admin/konsultan');
	                }
	                
	            }else{
							$kode=$this->input->post('kode');
							$nama=strip_tags($this->input->post('xnama'));
							$bidang=strip_tags($this->input->post('xbidang'));
							$kontak=strip_tags($this->input->post('xkontak'));
							$this->m_konsultan->update_konsultan_tanpa_img($kode,$nama,$bidang,$kontak);
							echo $this->session->set_flashdata('msg','info');
							redirect('admin/konsultan');
	            } 

	}

	function hapus_konsultan(){
		$kode=$this->input->post('kode');
		$gambar=$this->input->post('gambar');
		$path='./assets/images/'.$gambar;
		unlink($path);
		$this->m_konsultan->hapus_konsultan($kode);
		echo $this->session->set_flashdata('msg','success-hapus');
		redirect('admin/konsultan');
	}

}