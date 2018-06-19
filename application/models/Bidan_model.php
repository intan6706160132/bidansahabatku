<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Bidan_model extends CI_Model
{
    public function get_detail_bidan($id_bidan)
    {
        return $this->db->get_where('bidan', array('ID_BIDAN' => $id_bidan))->row();
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
}