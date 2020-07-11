<?php 
class M_konsultan extends CI_Model{

	function get_all_konsultan(){
		$hsl=$this->db->query("SELECT * FROM tbl_konsultan");
		return $hsl;
	}

	function simpan_konsultan($nama,$bidang,$kontak,$photo){
		$hsl=$this->db->query("INSERT INTO tbl_konsultan (konsultan_nama,konsultan_bidang,konsultan_kontak,konsultan_photo) VALUES ('$nama','$bidang','$kontak','$photo')");
		return $hsl;
	}
	function simpan_konsultan_tanpa_img($nama,$bidang,$kontak){
		$hsl=$this->db->query("INSERT INTO tbl_konsultan (konsultan_nama,konsultan_bidang,konsultan_kontak) VALUES ('$nip','$nama','$bidang','$kontak')");
		return $hsl;
	}

	function update_konsultan($kode,$nama,$bidang,$kontak,$photo){
		$hsl=$this->db->query("UPDATE tbl_konsultan SET konsultan_nama='$nama',konsultan_bidang='$bidang',konsultan_kontak='$kontak',konsultan_photo='$photo' WHERE konsultan_id='$kode'");
		return $hsl;
	}
	function update_konsultan_tanpa_img($kode,$nama,$bidang,$kontak){
		$hsl=$this->db->query("UPDATE tbl_konsultan SET konsultan_nama='$nama',konsultan_bidang='$bidang',konsultan_kontak='$kontak' WHERE konsultan_id='$kode'");
		return $hsl;
	}
	function hapus_konsultan($kode){
		$hsl=$this->db->query("DELETE FROM tbl_konsultan WHERE konsultan_id='$kode'");
		return $hsl;
	}

	//front-end
	function konsultan(){
		$hsl=$this->db->query("SELECT * FROM tbl_konsultan");
		return $hsl;
	}
	function konsultan_perpage($offset,$limit){
		$hsl=$this->db->query("SELECT * FROM tbl_konsultan limit $offset,$limit");
		return $hsl;
	}

}