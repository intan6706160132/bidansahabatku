<?php 

	defined('BASEPATH') OR EXIT('No direct script access allowed');

	class User_controller extends CI_Controller

    {

        public function __construct()

        {

            parent::__construct();

            $this->load->model('User_model');

            $this->load->model('Management_model');

            $this->load->library('pagination');

            $this->load->helper('text');

        }



        public function index()

        {

            //konfigurasi pagination

            $config['base_url'] = site_url('Management_controller/index'); //site url

            $config['total_rows'] = $this->db->count_all('artikel'); //total row

            $config['per_page'] = 5;  //show record per halaman

            $config["uri_segment"] = 3;  // uri parameter

            $choice = $config["total_rows"] / $config["per_page"];

            $config["num_links"] = floor($choice);



            // Membuat Style pagination untuk BootStrap v4

            $config['first_link'] = 'First';

            $config['last_link'] = 'Last';

            $config['next_link'] = 'Next';

            $config['prev_link'] = 'Prev';

            $config['full_tag_open'] = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';

            $config['full_tag_close'] = '</ul></nav></div>';

            $config['num_tag_open'] = '<li class="page-item"><span class="page-link">';

            $config['num_tag_close'] = '</span></li>';

            $config['cur_tag_open'] = '<li class="page-item active"><span class="page-link">';

            $config['cur_tag_close'] = '<span class="sr-only">(current)</span></span></li>';

            $config['next_tag_open'] = '<li class="page-item"><span class="page-link">';

            $config['next_tagl_close'] = '<span aria-hidden="true">&raquo;</span></span></li>';

            $config['prev_tag_open'] = '<li class="page-item"><span class="page-link">';

            $config['prev_tagl_close'] = '</span>Next</li>';

            $config['first_tag_open'] = '<li class="page-item"><span class="page-link">';

            $config['first_tagl_close'] = '</span></li>';

            $config['last_tag_open'] = '<li class="page-item"><span class="page-link">';

            $config['last_tagl_close'] = '</span></li>';



            $this->pagination->initialize($config);

            $data['page'] = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;



            //panggil function get_mahasiswa_list yang ada pada mmodel mahasiswa_model.

            $data['data'] = $this->Management_model->get_artikel($config['per_page'], $data['page']);



            $data['pagination'] = $this->pagination->create_links();



            //load view mahasiswa view

            $this->load->view('Templates/Header');

            $this->load->view('Management/content', $data);

            $this->load->view('Templates/Footer');



        }



        public function show_login_view($error_msg = "null")

        {

            $this->load->view('Templates/Header');

            if ($error_msg != "null") {

                $data['error_msg'] = "Username atau Password Salah";

                $this->load->view('Templates/Login', $data);

            } else {

                $this->load->view('Templates/Login');

            }

            $this->load->view('Templates/Footer');

        }



//		public function addUser(){

//            $data = array(

//                'ID_USER' => $this->get_id_user(),

//                'USERNAME' => $this->input->post('ID_ORANG_TUA'),

//                'PASSWORD' => md5($this->input->post('ID_ORANG_TUA')),

//                'STATUS' => 'orang_tua',

//                'ID_PENGGUNA' => $this->input->post('ID_ORANG_TUA'),

//            );

//        }



    public function login_user()

    {

        if ($this->check_session() == true) {

            redirect(base_url());

        } else {

            $username = $this->input->post('username');

            $password = md5($this->input->post('password'));

            $res = $this->User_model->login($username, $password);

            if ($res == true) {

                $session = array(

                    'id_user' => $res['data_user']['ID_USER'],

                    'username' => $res['data_user']['USERNAME'],

                    'id_pengguna' => $res['data_user']['ID_PENGGUNA'],

                    'nama' => $res['data_pengguna']['NAMA'],

                    'status' => $res['data_user']['STATUS']

                );

                $this->session->set_userdata($session);

                redirect('User_controller/index');

            } else {

                redirect('User_controller/show_login_view/error');

            }

        }

    }



    public function check_session()

    {

        if ($this->session->userdata('ID_LOGIN') != null) {

            return true;

        } else {

            return false;

        }

    }



    public function logout_user()

    {

        $this->session->sess_destroy();

        redirect('User_controller/index');

    }



    public function show_data_user()

    {

        if (isset($_SESSION['status'])) {

            if ($_SESSION['status'] == "admin") {

                $data['data_user'] = $this->User_model->get_data_users();

                $data['id_user'] = $this->User_model->get_new_id_pengguna();

                $this->load->view('Templates/Header');

                $this->load->view('Management/Data_user_view', $data);

                $this->load->view('Templates/Footer');

            } else {

                redirect(base_url());

            }

        } else {

            redirect(base_url());

        }

    }



    public function get_id_pengguna()

    {

        $status = $this->input->post('status');

        if ($status != "null") {

            $data = $this->User_model->get_id_pengguna($status);

            echo json_encode($data);

        } else {

            $data = array("data" => "null");

            echo json_encode($data);

        }

    }



    public function input_data_user()

    {

        if ($this->input->post('submit') !== null) {

            $data = array(

                'ID_USER' => $this->input->post('id_user'),

                'USERNAME' => $this->input->post('username'),

                'PASSWORD' => md5($this->input->post('password')),

                'STATUS' => $this->input->post('status'),

                'ID_PENGGUNA' => $this->input->post('id_pengguna')

            );

            if ($this->User_model->insert_data_user($data)) {

                redirect('User_controller/show_data_user');

            } else {

                redirect('User_controller/show_data_user');

            }

        }

    }



    public function detail_user($id_user)

    {

        $data['data_user'] = $this->User_model->get_data_users($id_user);

        $this->load->view('Templates/Header');

        $this->load->view('User/Detail_user', $data);

        $this->load->view('Templates/Footer');

    }



    public function edit_user($id_user)

    {

        $data['data_user'] = $this->User_model->get_data_users($id_user);

        $this->load->view('Templates/Header');

        $this->load->view('User/Edit_user', $data);

        $this->load->view('Templates/Footer');

    }



    public function edit_data_user()

    {

        if ($this->input->post('submit') !== null) {

            $data = array(

                'ID_USER' => $this->input->post('id_user'),

                'USERNAME' => $this->input->post('username'),

                'PASSWORD' => md5($this->input->post('password')),

                'STATUS' => $this->input->post('status'),

                'ID_PENGGUNA' => $this->input->post('id_pengguna')

            );

            if ($this->User_model->edit_data_user($data)) {

                redirect('User_controller/show_data_user');

            } else {

                redirect('User_controller/show_data_user');

            }

        }

    }



    public function delete_user($id_user)

    {

        $this->User_model->delete_data_user($id_user);

        redirect('User_controller/show_data_user');

    }



    public function test()

    {

        echo md5('admin');

    }



    function ubah_username()

    {

        if (isset($_POST) && !empty($_POST)) {

            $data = array(

                'ID_USER' => $_SESSION['id_user'],

                'USERNAME' => $this->input->post('USERNAME_BARU'),

            );

            $this->User_model->update_user($data);

        }

        if ($_SESSION['status'] == "ortu") {

            redirect('Ortu_controller/show_editakun_ortu_view/' . $_SESSION['id_pengguna']);

        } elseif ($_SESSION['status'] == "bidan") {

            redirect('Bidan_controller/show_editakun_bidan_view/' . $_SESSION['id_pengguna']);

        }



    }



    function ubah_password()

    {

        if (isset($_POST) && !empty($_POST)) {

            $data = array(

                'ID_USER' => $this->input->post('ID_USER'),

                'PASSWORD' => md5($this->input->post('PASSWORD_BARU')),

            );

            $this->User_model->update_user($data);

        }

        if ($_SESSION['status'] == "ortu") {

            redirect('Ortu_controller/show_editakun_ortu_view/' . $_SESSION['id_pengguna']);

        } elseif ($_SESSION['status'] == "bidan") {

            redirect('Bidan_controller/show_editakun_bidan_view/' . $_SESSION['id_pengguna']);

        }

    }

}

?>