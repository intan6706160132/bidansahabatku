<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Management_model extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }


    public function get_data_ortu(){
        $str = "SELECT * FROM orang_tua";
        $query = $this->db->query($str);
        $data = $query->result_array();
        for($i = 0; $i < $query->num_rows(); $i++){
            $str = "SELECT anak.ID_ANAK, anak.NAMA_ANAK, anak.ANAK_KE FROM anak WHERE anak.ID_ORANG_TUA = '".$data[$i]['ID_ORANG_TUA']."' order by anak.ANAK_KE";
            $data[$i]['DATA_ANAK'] = $this->db->query($str)->result_array();
        }
        return $data;
    }
    public function get_id_ortu(){
        $this->db->select('ID_ORANG_TUA');
        $this->db->from('orang_tua');
        return $this->db->get()->result_array();
    }
    public function get_all_anak(){
        $this->db->from('anak');
        return $this->db->get()->result_array();
    }

    public function count_anak($id_ortu){
        $c = $this->db->query("select COUNT(ID_ORANG_TUA) JLH from anak where ID_ORANG_TUA = '$id_ortu'");
        return $c->num_rows();
    }

    public function get_detail_ortu($id_ortu){
        return $this->db->get_where('orang_tua', array('ID_ORANG_TUA' => $id_ortu))->row();
    }

    public function get_data_anak($id_ortu){
        $result = $this->db->query("SELECT * FROM `anak` WHERE ID_ORANG_TUA='" . $id_ortu . "' order by ANAK_KE");
        if ($result) {
            return $result->result_array();
        } else {
            return false;
        }
    }

    public function get_data_imunisasi($id_anak){
        $query = "SELECT * FROM `imunisasi`  WHERE ID_ANAK = '".$id_anak."'";
        $result = $this->db->query($query);
        if($result->num_rows() == 0){
            $idimun = $id_anak."1";
            $str = "INSERT INTO `imunisasi`(`ID_IMUNISASI`, `ID_ANAK`) VALUES ('$idimun', '$id_anak')";
            $this->db->query($str);
        }
        $str = "SELECT * FROM anak WHERE ID_ANAK = '$id_anak'";
        $data['data_anak'] = $this->db->query($str)->row_array();
        $str = "SELECT * FROM pengkajian WHERE ID_ANAK = '$id_anak'";
        $data['data_pengkajian'] = $this->db->query($str)->row_array();
        $str = "SELECT * FROM imunisasi WHERE ID_ANAK = '$id_anak'";
        $data['data_imunisasi'] = $this->db->query($str)->row_array();
        $str = "SELECT
						`pengkajian`.*,
						`pelayanan`.*
					FROM `pengkajian`  
					JOIN `pelayanan` ON `pengkajian`.`NO_MEDREG` = `pelayanan`.`NO_MEDREG`
					WHERE ID_ANAK = '".$id_anak."'";
        $data['data_pelayanan'] = $this->db->query($str)->result_array();
        return $data;
    }

    public function get_data_pengkajian($id_anak){
        $result = $this->db->query("SELECT * FROM `pengkajian` WHERE ID_ANAK='" . $id_anak . "'");
        if ($result) {
            return $result->result_array();
        } else {
            return false;
        }
    }

    public function get_detail_anak($id_anak){
        $data =$this->db->get_where('anak', array('ID_ANAK' => $id_anak))->row();
        return $data;
    }
    public function get_detail_pengkajian($id_anak){
        $data = $this->db->get_where('pengkajian', array('ID_ANAK' => $id_anak))->row();
        return $data;
    }

    public function getOrtu($id_ortu = "null"){
        $this->db->from('orang_tua');
        if ($id_ortu != "null"){
            $this->db-> where('id_orang_tua', $id_ortu);
        }
        if ($id_ortu == "null"){
            return $this->db->get()->result_array();
        }else{
            return $this->db->get()->row_array();
        }
        return $this->db->get()->result_array();
    }

    public function getUser($id_ortu = "null"){
        $this->db->from('user');
        if ($id_ortu != "null"){
            $this->db-> where('id_pengguna', $id_ortu);
        }
        if ($id_ortu == "null"){
            return $this->db->get()->result_array();
        }else{
            return $this->db->get()->row_array();
        }
        return $this->db->get()->result_array();
    }

    public function getAnak($id_anak = "null"){
        $this->db->from('anak');
        if ($id_anak != "null"){
            $this->db-> where('ID_ANAK', $id_anak);
        }
        if ($id_anak == "null"){
            return $this->db->get()->result_array();
        }else{
            return $this->db->get()->row_array();
        }
        return $this->db->get()->result_array();
    }


    public function  get_id_anak($id_ortu){
        $anak = $this->db->query("select COUNT(ID_ORANG_TUA) JLH from anak where ID_ORANG_TUA = '$id_ortu'")->row_array();
        $id = substr($id_ortu,7,9);
        if($anak['JLH'] == "NULL"){
            return $id."01";
        }
        $jlh = $anak['JLH'];
        $jlh++;
        if(strlen((string)$jlh) > 1){
            return $id.(string)$jlh;
        }else{
            return $id."0".(string)$jlh;
        }
        return;
    }

    public function  get_no_medreg(){
        $med = "";
        $jum = $this->db->query("select COUNT(NO_MEDREG) JLH from pengkajian")->row_array();
        if($jum['JLH'] == "NULL"){
            $med = "00.25.01";
        }
        $jlh = $jum['JLH'];
        $jlh++;
        $str = (string)$jlh;
        if(strlen((string)$jlh) > 5){
            $med = substr($str, 0,1).".".substr($str, 2,3).".".substr($str, 4,5);
        }
        else if(strlen((string)$jlh) > 4){
            $med = "0.".substr($str, 0).".".substr($str, 1,2).".".substr($str, 3,4);
        }elseif(strlen((string)$jlh) > 3) {
            $med = "00.".substr($str, 0,1).".".substr($str, 2,3);
        }elseif(strlen((string)$jlh) > 2) {
            $med = "00.2".substr($str, 0).".".substr($str, 1,2);
        }else if(strlen((string)$jlh) > 1){
            $med = "00.25.".$str;
        }else{
            $med = "00.25.0".$str;
        }
        return $med;
    }

    public function insert_ortu(){
        $data = array(
            'ID_ORANG_TUA' => $this->input->post('ID_ORANG_TUA'),
            'NAMA_IBU' => $this->input->post('NAMA_IBU'),
            'TGL_LAHIR_IBU' => $this->input->post('TGL_LAHIR_IBU'),
            'PEKERJAAN_IBU' => $this->input->post('PEKERJAAN_IBU'),
            'AGAMA_IBU' => $this->input->post('AGAMA_IBU'),
            'PENDIDIKAN_AKHIR_IBU' => $this->input->post('PENDIDIKAN_AKHIR_IBU'),
            'ALAMAT_IBU' => $this->input->post('ALAMAT_IBU'),
            'NO_TELP_IBU' => $this->input->post('NO_TELP_IBU'),
            'NAMA_AYAH' => $this->input->post('NAMA_AYAH'),
            'TGL_LAHIR_AYAH' => $this->input->post('TGL_LAHIR_AYAH'),
            'PEKERJAAN_AYAH' => $this->input->post('PEKERJAAN_AYAH'),
            'AGAMA_AYAH' => $this->input->post('AGAMA_AYAH'),
            'PENDIDIKAN_AKHIR_AYAH' => $this->input->post('PENDIDIKAN_AKHIR_AYAH'),
            'ALAMAT_AYAH' => $this->input->post('ALAMAT_AYAH'),
            'NO_TELP_AYAH' => $this->input->post('NO_TELP_AYAH'),
        );

        $this->db->set($data);
        return $this->db->insert($this->db->dbprefix . 'orang_tua');
    }

    public function update_ortu($data){
        $data_ortu = array(
            'ID_ORANG_TUA' => $data['ID_ORANG_TUA'],
            'NAMA_IBU' => $data['NAMA_IBU'],
            'TGL_LAHIR_IBU' => date('Y-m-d',strtotime($data['TGL_LAHIR_IBU'])),
            'PEKERJAAN_IBU' => $data['PEKERJAAN_IBU'],
            'AGAMA_IBU' => $data['AGAMA_IBU'],
            'PENDIDIKAN_AKHIR_IBU' => $data['PENDIDIKAN_AKHIR_IBU'],
            'ALAMAT_IBU' => $data['ALAMAT_IBU'],
            'NO_TELP_IBU' => $data['NO_TELP_IBU'],
            'NAMA_AYAH' => $data['NAMA_AYAH'],
            'TGL_LAHIR_AYAH' => date('Y-m-d',strtotime($data['TGL_LAHIR_AYAH'])),
            'PEKERJAAN_AYAH' => $data['PEKERJAAN_AYAH'],
            'AGAMA_AYAH' => $data['AGAMA_AYAH'],
            'PENDIDIKAN_AKHIR_AYAH' => $data['PENDIDIKAN_AKHIR_AYAH'],
            'ALAMAT_AYAH' => $data['ALAMAT_AYAH'],
            'NO_TELP_AYAH' => $data['NO_TELP_AYAH'],
        );

        $this->db->set($data_ortu);
        $this->db->where('ID_ORANG_TUA', $data['ID_ORANG_TUA']);
        return $this->db->update($this->db->dbprefix . 'orang_tua', $data_ortu);
    }
    public function delete_ortu($id_ortu){
        $pengkajian = $this->db->query("select COUNT(ID_ORANG_TUA) JLHP from pengkajian where ID_ORANG_TUA = '$id_ortu'")->row_array();
        $anak = $this->db->query("select COUNT(ID_ORANG_TUA) JLHA from anak where ID_ORANG_TUA = '$id_ortu'")->row_array();
        $user = $this->db->query("select COUNT(ID_PENGGUNA) JLHU from user where ID_PENGGUNA = '$id_ortu'")->row_array();

        if($pengkajian['JLHP'] != "NULL") {
            $this->db->where('ID_ORANG_TUA', $id_ortu);
            $this->db->delete('pengkajian');
        }
        if($anak['JLHA'] != "NULL") {
            $this->db->where('ID_ORANG_TUA', $id_ortu);
            $this->db->delete('anak');
        }
        if($user['JLHu'] != "NULL") {
            $this->db->where('ID_PENGGUNA', $id_ortu);
            $this->db->delete('user');
        }
        $this->db->where('ID_ORANG_TUA', $id_ortu);
        $this->db->delete('orang_tua');
    }


    public function insert_anak($data){
        $data_anak = array(
            'ID_ANAK' => $this->get_id_anak($data['ID_ORANG_TUA']),
            'NAMA_ANAK' => $this->input->post('NAMA_ANAK'),
            'TGL_LAHIR' => $this->input->post('TGL_LAHIR'),
            'TEMPAT_LAHIR_ANAK' => $this->input->post('TEMPAT_LAHIR_ANAK'),
            'JK' => $this->input->post('JK'),
            'BBL' => $this->input->post('BBL'),
            'TBL' => $this->input->post('TBL'),
            'LK' => $this->input->post('LK'),
            'ANAK_KE' => $this->input->post('ANAK_KE'),
            'PERSALINAN' => $this->input->post('PERSALINAN'),
            'RIWAYAT_MENYUSUI' => $this->input->post('RIWAYAT_MENYUSUI'),
            'RIWAYAT_MAKAN_MINUM' => $this->input->post('RIWAYAT_MAKAN_MINUM'),
            'ID_ORANG_TUA' => $this->input->post('ID_ORANG_TUA'),
        );

        $this->db->set($data_anak);
        return $this->db->insert($this->db->dbprefix . 'anak');

    }

    public function update_anak($data){
        $data_anak = array(
            'ID_ANAK' => $data['ID_ANAK'],
            'NAMA_ANAK' => $data['NAMA_ANAK'],
            'TGL_LAHIR' => date('Y-m-d',strtotime($data['TGL_LAHIR'])),
            'TEMPAT_LAHIR_ANAK' => $data['TEMPAT_LAHIR_ANAK'],
            'JK' => $data['JK'],
            'BBL' => $data['BBL'],
            'TBL' => $data['TBL'],
            'LK' => $data['LK'],
            'ANAK_KE' => $data('ANAK_KE'),
            'PERSALINAN' => $data['PERSALINAN'],
            'RIWAYAT_MENYUSUI' => $data['RIWAYAT_MENYUSUI'],
            'RIWAYAT_MAKAN_MINUM' => $data['RIWAYAT_MAKAN_MINUM'],
            'ID_ORANG_TUA' => $data['ID_ORANG_TUA'],
        );

        $this->db->set($data_anak);
        $this->db->where('ID_ANAK', $data['ID_ANAK'] );
        return $this->db->update($this->db->dbprefix . 'anak', $data);
    }

    public function insert_reg($data){
        $this->db->set($data);
        return $this->db->insert($this->db->dbprefix . 'pengkajian', $data);
    }

    public function get_data_bidan(){
        $this->db->from('bidan');
        return $this->db->get()->result_array();
    }

    public function insert_bidan(){
	    $idbidan=$this->input->post('ID_BIDAN');
	    $namabidan=$this->input->post('NAMA_BIDAN');
	    $tptlhrbidan=$this->input->post('TEMPAT_LHR_BIDAN');
	    $tgllhrbidan=$this->input->post('TGL_LHR_BIDAN');
	    $alamatbidan=$this->input->post('ALAMAT_BIDAN');
	    $notelpbidan=$this->input->post('NO_TELP_BIDAN');
	    $pendidikanakhir=$this->input->post('PENDIDIKAN_TERAKHIR');
	    $namapt=$this->input->post('NAMA_PT');
	    $data_bidan = array(
	        'ID_BIDAN'=>$idbidan,
	        'NAMA_BIDAN'=>$namabidan,
	        'TEMPAT_LHR_BIDAN'=>$tptlhrbidan,
	        'TGL_LHR_BIDAN'=>$tgllhrbidan,
	        'ALAMAT_BIDAN'=>$alamatbidan,
	        'NO_TELP_BIDAN'=>$notelpbidan,
	        'PENDIDIKAN_TERAKHIR'=>$pendidikanakhir,
	        'NAMA_PT'=>$namapt
	    );
	    $this->db->insert('bidan',$data_bidan);
	}
	public function update_bidan($data){
	    $idbidan=$this->input->post('ID_BIDAN');
	    $namabidan=$this->input->post('NAMA_BIDAN');
	    $tptlhrbidan=$this->input->post('TEMPAT_LHR_BIDAN');
	    $tgllhrbidan=$this->input->post('TGL_LHR_BIDAN');
	    $alamatbidan=$this->input->post('ALAMAT_BIDAN');
	    $notelpbidan=$this->input->post('NO_TELP_BIDAN');
	    $pendidikanakhir=$this->input->post('PENDIDIKAN_TERAKHIR');
	    $namapt=$this->input->post('NAMA_PT');
	    $data_bidan = array(
	        'ID_BIDAN'=>$idbidan,
	        'NAMA_BIDAN'=>$namabidan,
	        'TEMPAT_LHR_BIDAN'=>$tptlhrbidan,
	        'TGL_LHR_BIDAN'=>$tgllhrbidan,
	        'ALAMAT_BIDAN'=>$alamatbidan,
	        'NO_TELP_BIDAN'=>$notelpbidan,
	        'PENDIDIKAN_TERAKHIR'=>$pendidikanakhir,
	        'NAMA_PT'=>$namapt
	    );
	    $this->db->where('ID_BIDAN',$data['ID_BIDAN']);
	    $this->db->update('bidan', $data_bidan);
	}

	public function getBidan($id_bidan = "null"){
        $this->db->from('bidan');
        if ($id_bidan != "null"){
            $this->db-> where('id_bidan', $id_bidan);
        }
        if ($id_bidan == "null"){
            return $this->db->get()->result_array();
        }else{
            return $this->db->get()->row_array();
        }
        return $this->db->get()->result_array();
    }

    public function delete_bidan($id_bidan){
        $this->db->where('ID_BIDAN', $id_bidan);
        $this->db->delete('bidan');
    }

    public function get_detail_bidan($id_bidan){
        return $this->db->get_where('bidan', array('ID_BIDAN' => $id_bidan))->row();
    }

    public function get_artikel($limit, $start){
       $query = $this->db->get('artikel', $limit, $start);
        return $query;
    }
	
	public function get_artikel_table(){
		        $this->db->from('artikel');
        return $this->db->get()->result_array();
	}

    function insert_artikel($data){
 		return $this->db->insert('artikel',$data);
 	}

    function update_artikel($data){
        $data=array('ID_ARTIKEL'=>$this->input->post('ID_ARTIKEL'),
            'JUDUL_ARTIKEL'=>$this->input->post('JUDUL_ARTIKEL'),
                    'ISI_ARTIKEL'=>$this->input->post('ISI_ARTIKEL'));
        $this->db->where('ID_ARTIKEL',$data['ID_ARTIKEL']);
        return ($this->db->update('artikel', $data));
    }

 	public function delete_artikel($id_artikel){
        $this->db->where('ID_ARTIKEL', $id_artikel);
        $this->db->delete('artikel');
    }

        public function getArtikel($id_artikel = "null"){
        $this->db->from('artikel');
        if ($id_artikel != "null"){
            $this->db-> where('id_artikel', $id_artikel);
        }
        if ($id_artikel == "null"){
            return $this->db->get()->result_array();
        }else{
            return $this->db->get()->row_array();
        }
        return $this->db->get()->result_array();
    }

    public function get_data_user(){
        $this->db->from('user');
        return $this->db->get()->result_array();
    }

    public function upload(){
        $config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'jpg|png|jpeg';
        $config['max_size']  = '2048';
        $config['remove_space'] = TRUE;

        $this->load->library('upload', $config); // Load konfigurasi uploadnya
        if($this->upload->do_upload('foto')){ // Lakukan upload dan Cek jika proses upload berhasil
            // Jika berhasil :
            $return = array('result' => 'success', 'file' => $this->upload->data(), 'error' => '');
            return $return;
        }else{
            // Jika gagal :
            $return = array('result' => 'failed', 'file' => '', 'error' => $this->upload->display_errors());
            return $return;
        }
    }

    public function get_laporan_anak($id_anak){
        $data = array();
        $this->db->from('anak');
        $this->db->where('ID_ANAK', $id_anak);
        $data['data_anak'] = $this->db->get()->result_array();
        $this->db->from('anak');
        $this->db->where('ID_ANAK', $id_anak);
    }

}