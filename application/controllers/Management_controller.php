<?php

defined('BASEPATH') OR EXIT('No direct script access allowed');

class Management_controller extends CI_Controller

{

    public function __construct()

    {

        parent::__construct();

        $this->load->model('User_model');

        $this->load->model('Management_model');

        $this->load->database();

		$this->load->library('pagination');

        if(isset($_SESSION['status']) && ($_SESSION['status'] == "bidan" || $_SESSION['status'] == "admin")){

            

        }else{

            if(($this->uri->segment(2) == "show_detail_anak") && ($_SESSION['status'] == "ortu")){



            }else{


				if($this->uri->segment(2) == "readmore_artikel"){

				}else{
				   echo "denied";
					redirect(base_url());
				}

            }


        }

    }



	function index(){

 

        //konfigurasi pagination

        $config['base_url'] = site_url('Management_controller/index'); //site url

        $config['total_rows'] = $this->db->count_all('artikel'); //total row

        $config['per_page'] = 5;  //show record per halaman

        $config["uri_segment"] = 3;  // uri parameter

        $choice = $config["total_rows"] / $config["per_page"];

        $config["num_links"] = floor($choice);

 

        // Membuat Style pagination untuk BootStrap v4

        $config['first_link']       = 'First';

        $config['last_link']        = 'Last';

        $config['next_link']        = 'Next';

        $config['prev_link']        = 'Prev';

        $config['full_tag_open']    = '<div class="pagging text-center"><nav Style="background-color:#FFF; box-shadow:none"><ul class="pagination justify-content-center">';

        $config['full_tag_close']   = '</ul></nav></div>';

        $config['num_tag_open']     = '<li class="page-item"><span class="page-link">';

        $config['num_tag_close']    = '</span></li>';

        $config['cur_tag_open']     = '<li class="page-item"><span class="page-link">';

        $config['cur_tag_close']    = '</span></li>';

        $config['next_tag_open']    = '<li class="page-item"><span class="page-link">';

        $config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';

        $config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';

        $config['prev_tagl_close']  = '</span>Next</li>';

        $config['first_tag_open']   = '<li class="page-item"><span class="page-link">';

        $config['first_tagl_close'] = '</span></li>';

        $config['last_tag_open']    = '<li class="page-item"><span class="page-link">';

        $config['last_tagl_close']  = '</span></li>';

 

        $this->pagination->initialize($config);

        $data['page'] = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;

 

        //panggil function get_mahasiswa_list yang ada pada mmodel mahasiswa_model. 

        $data['data'] = $this->Management_model->get_artikel($config['per_page'], $data['page']);           

 

        $data['pagination'] = $this->pagination->create_links();

 

        //load view mahasiswa view

	$this->load->view('Templates/Header');

        $this->load->view('Management/content',$data);
	
	$this->load->view('Templates/Footer');

    }



    public function show_beranda()

    {

        $data['berita'] = $this->Management_model->get_artikel();

        $this->load->view('Templates/Header');

        $this->load->view('Management/content', $data);

    }



    //INDITA

    function show_data_user()

    {

        $data['data_user'] = $this->Management_model->get_data_user();

        $this->load->view('Templates/Header');

        $this->load->view('Management/Data_user_view', $data);

        $this->load->view('Templates/Footer');

    }



    function show_data_ortu()

    {

        $data['data_ortu'] = $this->Management_model->get_data_ortu();

        $data['id_ortu'] = $this->Management_model->get_id_ortu();

        $this->load->view('Templates/Header');

        $this->load->view('Management/Data_ortu_view', $data);

        $this->load->view('Templates/Footer');

    }



    function show_tambah_data_ortu()

    {

        $data['title'] = $data['title'] = 'Tampilan Daftar Orang Tua';

        $this->load->view('Templates/Header', $data);

        $this->load->view('Management/Tambah_data_ortu', $data);

        $this->load->view('Templates/Footer', $data);

    }



    function show_tambah_data_anak($id_ortu)

    {

        $data['data_ortu'] = $this->Management_model->getOrtu($id_ortu);

        $data['id_anak'] = $this->Management_model->get_id_anak($id_ortu);

        $data['data_bidan'] = $this->Management_model->get_data_bidan();

        $this->load->view('Templates/Header', $data);

        $this->load->view('Management/Tambah_data_anak', $data);

        $this->load->view('Templates/Footer', $data);

    }



    function show_detail_ortu($id_ortu)

    {

        $data['detail_ortu'] = $this->Management_model->get_detail_ortu($id_ortu);

        $data['data_anak'] = $this->Management_model->get_data_anak($id_ortu);

        $this->load->view('Templates/Header');

        $this->load->view('Management/Detail_ortu_view', $data);

        $this->load->view('Templates/Footer');

    }



    function show_detail_anak($id_anak)

    {

        $data = $this->Management_model->get_data_imunisasi($id_anak);

        $data['detail_anak'] = $this->Management_model->get_detail_anak($id_anak);

        $data['data_kajian'] = $this->Management_model->get_detail_pengkajian($id_anak);

        $data['id_anak'] = $id_anak;

        $this->load->view('Templates/Header');

        $this->load->view('Management/Detail_anak_view', $data);

        $this->load->view('Templates/Footer');

    }



    function show_edit_ortu($id_ortu)

    {

        $data['data_ortu'] = $this->Management_model->getOrtu($id_ortu);

        $this->load->view('Templates/Header');

        $this->load->view('Management/Edit_data_ortu', $data);

        $this->load->view('Templates/Footer', $data);

    }



    function show_edit_anak($id_anak)

    {

        $data['data_anak'] = $this->Management_model->getAnak($id_anak);

        $this->load->view('Templates/Header', $data);

        $this->load->view('Management/Edit_data_anak', $data);

        $this->load->view('Templates/Footer', $data);

    }



    function show_tambah_reg($id_ortu)

    {

        $data['data_ortu'] = $this->Management_model->getOrtu($id_ortu);

        $data['data_anak'] = $this->Management_model->get_data_anak($id_ortu);

        $data['data_bidan'] = $this->Management_model->get_data_bidan();

        $this->load->view('Templates/Header', $data);

        $this->load->view('Management/Tambah_registrasi', $data);

        $this->load->view('Templates/Footer', $data);

    }





    function tambah_data_ortu()

    {

        if (isset($_POST) && !empty($_POST)) {

            $data_ortu = array(

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

            $data_user = array(

                'USERNAME' => $this->input->post('ID_ORANG_TUA'),

                'PASSWORD' => md5($this->input->post('ID_ORANG_TUA')),

                'STATUS' => 'ortu',

                'ID_PENGGUNA' => $this->input->post('ID_ORANG_TUA'),

            );

            $this->Management_model->insert_ortu($data_ortu);

            $this->User_model->insert_user($data_user);

        }

        redirect('Management_controller/show_data_ortu');

    }



    function update_data_ortu()

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

        redirect('Management_controller/show_data_ortu');

    }



    function update_data_anak()

    {

        if (isset($_POST) && !empty($_POST)) {

            $data = array(

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

                'ID_ORANG_TUA' => $this->input->post('ID_ORANG_TUA')

            );

            $this->Management_model->update_anak($data);

        }

        redirect('Management_controller/show_detail_ortu/' . $data['ID_ORANG_TUA']);

    }



    function hapus_data_ortu($id_ortu)

    {

        $this->Management_model->delete_ortu($id_ortu);

        redirect('Management_controller/show_data_ortu');

    }



    function tambah_data_anak()

    {

        if (isset($_POST) && !empty($_POST)) {

            $data = array(

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

            $day = date("Y-m-d");

            date_default_timezone_set('Asia/Jakarta');

            $jam = date("H:m");

            $data_reg = array(

                'NO_MEDREG' => $this->Management_model->get_no_medreg(),

                'ID_BIDAN' => $_SESSION['id_pengguna'],

                'TANGGAL_KAJIAN' => $day,

                'JAM' => $jam,

                'ID_ANAK' => $this->input->post('ID_ANAK'),

            );

            $this->Management_model->insert_anak($data);

            $this->Management_model->insert_reg($data_reg);



        }

        redirect('Management_controller/show_data_ortu');

    }



    function show_data_bidan()

    {

        $data['data_bidan'] = $this->Management_model->get_data_bidan();

        $this->load->view('Templates/Header');

        $this->load->view('Management/Data_bidan_view', $data);

        $this->load->view('Templates/Footer');

    }

	

	function show_form_bidan(){

		    //$data['data_bidan'] = $this->Management_model->get_data_bidan();

			$this->load->view('Templates/Header');

			$this->load->view('Management/view_form_bidan');

            $this->load->view('Templates/Footer');

	}





    function tambah_data_bidan()

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

                'NAMA_PT' => $this->input->post('NAMA_PT'),

                'FOTO_BIDAN' => $this->input->post('foto_artikel'),

            );

            if (!empty($_FILES['foto_artikel']['name'])) {

                $id_bidan = $this->Management_model->getBidan($this->input->post('ID_BIDAN'));

                $this->upload_photo($id_bidan);

                $type = explode("/", $_FILES['foto_artikel']['type']);

                $foto = $id_bidan . "." . $type[1];

                $data['foto_bidan'] = $foto;

                echo $data['foto_bidan'];

            } else {

                echo "null";

            }

            $data_user = array(

                'USERNAME' => $this->input->post('ID_BIDAN'),

                'PASSWORD' => md5($this->input->post('ID_BIDAN')),

                'STATUS' => 'bidan',

                'ID_PENGGUNA' => $this->input->post('ID_BIDAN'),

            );



            $this->Management_model->insert_bidan($data);

            $this->User_model->insert_user($data_user);

        }

        redirect('Management_controller/show_data_bidan');

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

            $this->Management_model->update_bidan($data);

        }

        redirect('Management_controller/show_data_bidan');

    }



    function show_edit_bidan($id_bidan){

        $data['data_bidan'] = $this->Management_model->getBidan($id_bidan);

        $this->load->view('Templates/Header');

        $this->load->view('Management/Edit_data_bidan', $data);

        $this->load->view('Templates/Footer');

    }



    function hapus_data_bidan($id_bidan)

    {

        $this->Management_model->delete_bidan($id_bidan);

        redirect('Management_controller/show_data_bidan');

    }



    function show_detail_bidan($id_bidan)

    {

        $data['detail_bidan'] = $this->Management_model->get_detail_bidan($id_bidan);

        $this->load->view('Templates/Header');

        $this->load->view('Management/detail_bidan', $data);

        $this->load->view('Templates/Footer');

    }





    function show_form_artikel()

    {

        $this->load->helper('form');

        $this->load->view('Templates/Header');

        $this->load->view('Management/tambah_artikel');

        $this->load->view('Templates/Footer');



    }



    function tambah_artikel()

    {

        if (isset($_POST) && !empty($_POST)) {

            $res = $this->db->query('SELECT MAX(ID_ARTIKEL) COUNT FROM artikel')->row_array();

            $count = $res['COUNT'];

            $count = $count+1;

            $data = array(

                'JUDUL_ARTIKEL' => $this->input->post('JUDUL_ARTIKEL'),

                'ISI_ARTIKEL' => $this->input->post('ISI_ARTIKEL'),

                'foto_artikel' => $this->input->post('foto_artikel'),

            );

            if(!empty($_FILES['foto_artikel']['name'])){

                $type = explode("/", $_FILES['foto_artikel']['type']);

                $foto = "ARTIKEL-".$count.".".$type[1];

                $data['foto_artikel'] = $foto;

                $this->upload_photo($foto);

                echo $data['foto_artikel'];

            }else{

                echo "null";

            }



            $this->Management_model->insert_artikel($data);

        }

        redirect('Management_controller/lihat_artikel');

    }



    public function upload_photo($nama_foto){

        $config['file_name'] = $nama_foto;

        $config['upload_path'] = './uploads/';

        $config['allowed_types'] = 'jpeg|jpg|png';

        $config['max_size'] = 2048;

        $config['max_width'] = 2048;

        $config['max_height'] = 2048;

        $this->load->library('upload', $config);

        if(!$this->upload->do_upload('foto_artikel')){

            echo "error";

        }else{

            echo "success";

        }

        echo $this->upload->display_errors();



    }





    function ubah_artikel()

    {

        if (isset($_POST) && !empty($_POST)) {

            $data = array(

                'JUDUL_ARTIKEL' => $this->input->post('JUDUL_ARTIKEL'),

                'ISI_ARTIKEL' => $this->input->post('ISI_ARTIKEL'),

            );

            $this->Management_model->update_artikel($data);

        }

        redirect('Management_controller/lihat_artikel');

    }



    function show_edit_artikel($id_artikel)

    {

        $data['data_artikel'] = $this->Management_model->getArtikel($id_artikel);

        $this->load->view('Templates/Header');

        $this->load->view('Management/update_artikel',$data);

        $this->load->view('Templates/Footer');

    }



    function hapus_artikel($id_artikel)

    {

        $this->Management_model->delete_artikel($id_artikel);

        redirect('Management_controller/lihat_artikel');

    }



    function lihat_artikel()

    { //lihat artikel ini tabel buat admin

        $data['berita'] = $this->Management_model->get_artikel_table();

        $this->load->view('Templates/Header');

        $this->load->view('Management/view_artikel', $data);

        $this->load->view('Templates/Footer');

    }

	

	function readmore_artikel($id_artikel){

		$data['baca']=$this->Management_model->getArtikel($id_artikel);

		$this->load->view('Templates/Header');

		$this->load->view('Management/view_artikel_lengkap',$data);

        $this->load->view('Templates/Footer');

	}



    function hash()

    { 

		echo md5("admin");

    }

    public function md5(){

        echo md5("123");

    }

    public function show_laporan($id_anak = null){
        $data['laporan_anak'] = null;
        if($id_anak != null){
            $data['laporan_anak'] = $this->Management_model->get_laporan_anak($id_anak);
        }
        $this->load->view('Templates/Header');
        $this->load->view('Management/view_laporan',$data);
        $this->load->view('Templates/Footer');
    }
}

?>