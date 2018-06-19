<?php
defined('BASEPATH') OR EXIT('No direct script access allowed');
class Ortu_controller extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('User_model');
        $this->load->model('Management_model');
        $this->load->model('Ortu_model');
        $this->load->database();
    }


    public function show_beranda()
    {
        $data['berita'] = $this->Management_model->get_artikel();
        $this->load->view('Templates/Header');
        $this->load->view('Management/content', $data);
    }

    public function show_ortu_data_anak($id_ortu)
    {
        $data['detail_ortu'] = $this->Management_model->get_detail_ortu($id_ortu);
        $data['data_anak'] = $this->Management_model->get_data_anak($id_ortu);
        $this->load->view('Templates/Header');
        $this->load->view('OrangTua/view_ortu_data_anak', $data);
        $this->load->view('Templates/Footer');
    }

    public function show_ortu_view($id_ortu)
    {
        $data['detail_ortu'] = $this->Management_model->get_detail_ortu($id_ortu);
        $data['data_anak'] = $this->Management_model->get_data_anak($id_ortu);
        $this->load->view('Templates/Header');
        $this->load->view('OrangTua/view_ortu', $data);
        $this->load->view('Templates/Footer');
    }

    function show_edit_ortu_view($id_ortu)
    {
        $data['data_ortu'] = $this->Management_model->getOrtu($id_ortu);
        $data['data_user'] = $this->Management_model->getUser($id_ortu);
        $this->load->view('Templates/Header', $data);
        $this->load->view('OrangTua/view_ortu_edit', $data);
        $this->load->view('Templates/Footer', $data);
    }

    function show_editakun_ortu_view($id_ortu)
    {
        $data['data_ortu'] = $this->Management_model->getOrtu($id_ortu);
        $data['data_user'] = $this->Management_model->getUser($id_ortu);
        $this->load->view('Templates/Header');
        $this->load->view('OrangTua/view_ortu_edit_akun', $data);
        $this->load->view('Templates/Footer');
    }
    function show_editpw_ortu_view($id_ortu)
    {
        $data['data_ortu'] = $this->Management_model->getOrtu($id_ortu);
        $data['data_user'] = $this->Management_model->getUser($id_ortu);
        $this->load->view('Templates/Header');
        $this->load->view('OrangTua/view_ortu_edit_pw', $data);
        $this->load->view('Templates/Footer');
    }

    function update_data()
    {
        if (isset($_POST) && !empty($_POST)) {
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
            $this->Management_model->update_ortu($data);
        }
        redirect('Ortu_controller/show_ortu_view');
    }


}