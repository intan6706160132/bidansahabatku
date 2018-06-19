<?php
defined('BASEPATH') OR EXIT('No direct script access allowed');
class Bidan_controller extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('User_model');
        $this->load->model('Management_model');
        $this->load->model('Bidan_model');
        $this->load->database();
    }
    public function show_bidan_view($id_bidan)
    {
        $data['detail_bidan'] = $this->Bidan_model->get_detail_bidan($id_bidan);
        $this->load->view('Templates/Header');
        $this->load->view('Bidan/view_bidan', $data);
        $this->load->view('Templates/Footer');
    }

    function show_edit_bidan_view($id_bidan)
    {
        $data['data_bidan'] = $this->Management_model->getBidan($id_bidan);
        $data['data_user'] = $this->Management_model->getUser($id_bidan);
        $this->load->view('Templates/Header', $data);
        $this->load->view('Bidan/view_bidan_edit', $data);
        $this->load->view('Templates/Footer', $data);
    }

    function show_editakun_bidan_view($id_bidan)
    {
        $data['data_bidan'] = $this->Management_model->getBidan($id_bidan);
        $data['data_user'] = $this->Management_model->getUser($id_bidan);
        $this->load->view('Templates/Header');
        $this->load->view('Bidan/view_bidan_edit_akun', $data);
        $this->load->view('Templates/Footer');
    }

    function show_editpw_bidan_view($id_bidan)
    {
        $data['data_bidan'] = $this->Management_model->getBidan($id_bidan);
        $data['data_user'] = $this->Management_model->getUser($id_bidan);
        $this->load->view('Templates/Header');
        $this->load->view('Bidan/view_bidan_edit_pw', $data);
        $this->load->view('Templates/Footer');
    }

    function update_data_bidan()
    {
        if (isset($_POST) && !empty($_POST)) {
            $data = array(
                'ID_BIDAN' => $this->input->post('ID_BIDAN'),
                'NAMA_BIDAN' => $this->input->post('NAMA_BIDAN'),
                'TEMPAT_LHR_BIDAN' => $this->input->post('TEMPAT_LHR_BIDAN'),
                'TGL_LHR_BIDAN' => $this->input->post('TGL_LHR_BIDAN'),
                'ALAMAT_BIDAN' => $this->input->post('ALAMAT_BIDAN'),
                'NO_TELP_BIDAN' => $this->input->post('NO_TELP_BIDAN'),
                'PENDIDIKAN_TERAKHIR' => $this->input->post('PENDIDIKAN_TERAKHIR'),
                'NAMA_PT' => $this->input->post('NAMA_PT')
            );
            $this->Bidan_model->update_bidan($data);
        }
        redirect('Bidan_controller/show_bidan_view/'.$_SESSION['id_pengguna']);
    }
}