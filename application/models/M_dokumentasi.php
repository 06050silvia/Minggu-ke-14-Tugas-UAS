<?php
class M_dokumentasi extends CI_Model{

	function get_all_dokumentasi(){
		$hsl=$this->db->query("SELECT tbl_dokumentasi.*,DATE_FORMAT(dokumentasi_tanggal,'%d/%m/%Y') AS tanggal,album_nama FROM tbl_dokumentasi join tbl_album on dokumentasi_album_id=album_id ORDER BY dokumentasi_id DESC");
		return $hsl;
	}
	function simpan_dokumentasi($judul,$album,$user_id,$user_nama,$gambar){
		$this->db->trans_start();
            $this->db->query("insert into tbl_dokumentasi(dokumentasi_judul,dokumentasi_album_id,dokumentasi_pengguna_id,dokumentasi_author,dokumentasi_gambar) values ('$judul','$album','$user_id','$user_nama','$gambar')");
            $this->db->query("update tbl_album set album_count=album_count+1 where album_id='$album'");
        $this->db->trans_complete();
        if($this->db->trans_status()==true)
        return true;
        else
        return false;
	}
	
	function update_dokumentasi($dokumentasi_id,$judul,$album,$user_id,$user_nama,$gambar){
		$hsl=$this->db->query("update tbl_dokumentasi set dokumentasi_judul='$judul',dokumentasi_album_id='$album',dokumentasi_pengguna_id='$user_id',dokumentasi_author='$user_nama',dokumentasi_gambar='$gambar' where dokumentasi_id='$dokumentasi_id'");
		return $hsl;
	}
	function update_dokumentasi_tanpa_img($dokumentasi_id,$judul,$album,$user_id,$user_nama){
		$hsl=$this->db->query("update tbl_dokumentasi set dokumentasi_judul='$judul',dokumentasi_album_id='$album',dokumentasi_pengguna_id='$user_id',dokumentasi_author='$user_nama' where dokumentasi_id='$dokumentasi_id'");
		return $hsl;
	}
	function hapus_dokumentasi($kode,$album){
		$this->db->trans_start();
            $this->db->query("delete from tbl_dokumentasi where dokumentasi_id='$kode'");
            $this->db->query("update tbl_album set album_count=album_count-1 where album_id='$album'");
        $this->db->trans_complete();
        if($this->db->trans_status()==true)
        return true;
        else
        return false;
	}

	//Front-End
	function get_dokumentasi_home(){
		$hsl=$this->db->query("SELECT tbl_dokumentasi.*,DATE_FORMAT(dokumentasi_tanggal,'%d/%m/%Y') AS tanggal,album_nama FROM tbl_dokumentasi join tbl_album on dokumentasi_album_id=album_id ORDER BY dokumentasi_id DESC limit 4");
		return $hsl;
	}

	function get_dokumentasi_by_album_id($idalbum){
		$hsl=$this->db->query("SELECT tbl_dokumentasi.*,DATE_FORMAT(dokumentasi_tanggal,'%d/%m/%Y') AS tanggal,album_nama FROM tbl_dokumentasi join tbl_album on dokumentasi_album_id=album_id where dokumentasi_album_id='$idalbum' ORDER BY dokumentasi_id DESC");
		return $hsl;
	}
	

}