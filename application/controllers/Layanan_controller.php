<?php
	defined('BASEPATH') OR EXIT('No direct script access allowed');
	class Layanan_controller extends CI_Controller{
		
		public function __construct(){
			parent::__construct();
			$this->load->model('Layanan_model');
			$this->load->model('Management_model');
			$this->load->database();
		}
		
	    function index(){
	        
	    }
	    
	    public function show_layanan_bayi($title = "Pelayanan Bayi"){
		    $status = $this->session->userdata('status');
		    $id = null;
		    if($status == "ortu"){
			    $id = $this->session->userdata('id_pengguna');
		    }
		    if($title == "pelayanan"){
			    $data['title'] = "pelayanan";
		    }
		    else if($title == "imunisasi"){
			    $data['title'] = "imunisasi";
		    }
		    //$data['temp'] = $id;
			$data['data_bayi'] = $this->Layanan_model->get_data_bayi($id);
			$this->load->view('Templates/Header');
			$this->load->view('Layanan/Layanan_bayi', $data);
			$this->load->view('Templates/Footer');

		}
		
		public function show_data_layanan_bayi($idanak,$title){
			$data = $this->Layanan_model->get_data_layanan_bayi($idanak);
			$data['id_anak'] = $idanak;
			$data['title'] = $title;
			//$data['id_imun'] = $idimun;
			$this->load->view('Templates/Header');
			if($title == "pelayanan"){
			    $this->load->view('Layanan/Data_layanan_bayi', $data);
		    }
		    else if($title == "imunisasi"){
			    $this->load->view('Layanan/Data_imunisasi_bayi', $data);
		    }
			$this->load->view('Templates/Footer');
		}
		
		public function input_pelayanan(){
			$title = $this->input->post('title');
			$nomed = $this->input->post('nomed');
			$idanak = $this->input->post('idanak');
			$idbid = $this->input->post('idbid');
			$nourut=$this->db->query("SELECT MAX(KUNJUNGAN_KE) AS urutan FROM pelayanan WHERE NO_MEDREG='$nomed'");
			$result = $nourut->result();			
			if($result){
				foreach( $result as $row ){
					$a=$row->urutan;
					$b=$a+1;
					if (($b>0) and ($b < 10)) {
						$urut="0$b";
					}else{
						$urut=$b;
					}
				}
			}else{
				$urut="01";
			}
			$idpel = $nomed."".$urut;
			$pelayanan = array(
				'ID_PELAYANAN' => $idpel,
				'TGL_KUNJUNGAN' => $this->input->post('tglkunjung'),
				'KEADAAN_UMUM' => $this->input->post('kead'),
				'SUHU' => $this->input->post('suh'),
				'RESPIRASI' => $this->input->post('res'),
				'JANTUNG' => $this->input->post('jan'),
				'BB' => $this->input->post('bb'),
				'TB' => $this->input->post('tb'),
				'LK' => $this->input->post('lk'),
				'KPSP' => $this->input->post('kpsp'),
				'TINDAKAN' => $this->input->post('tin'),
				'KUNJUNGAN_KE' => $urut,
				'ID_BIDAN' => $idbid,
				'NO_MEDREG' => $nomed
			);
			$this->Layanan_model->insert_pelayanan_bayi($pelayanan);
			redirect('Layanan_controller/show_data_layanan_bayi/'.$idanak.'/'.$title);
		}
	    
	    public function delete_pelayanan_bayi($idanak,$idpel,$title){
			$this->Layanan_model->delete_pelayanan_bayi($idpel);
			redirect('Layanan_controller/show_data_layanan_bayi/'.$idanak.'/'.$title);
		}
		
		public function insert_imunisasi(){
			$idanak = $this->input->post('id_anak');
			$title = $this->input->post('title');
			$status = $this->session->userdata('status');
	        if($this->input->post('id_anak')){
	            $data = array(
	                'ID_ANAK' => $idanak, 
	                $this->input->post('jenis_imu') => $this->input->post('tgl_imu')
	            );
	            $this->Layanan_model->insert_imunisasi($data);
	            if($status == "ortu"){
		            redirect('Layanan_controller/show_detail_anak/'.$idanak.'/'.$title);
	            }
	            else{
	            	redirect('Layanan_controller/show_data_layanan_bayi/'.$idanak.'/'.$title);
	            }
	        }
	    }
	    
	    public function get_imunisasi(){
	        if($this->input->post('id_anak')){
	            $id_anak = $this->input->post('id_anak');
	            $jenis_imu = $this->input->post('jenis_imu');
				$str = "SELECT ".$jenis_imu." FROM `imunisasi` WHERE ID_ANAK = '".$id_anak."'";
	            $res = $this->db->query($str)->row_array();
	            $data = array("tgl_imu" => $res[$jenis_imu]);
	            echo json_encode($data);
	        }
	    }
	    
	    public function delete_imunisasi($idanak,$suplemen,$title){
		    $status = $this->session->userdata('status');
	        $data = array(
	            'ID_ANAK' => $idanak,
	            $suplemen => NULL
	        );
	        $this->Layanan_model->insert_imunisasi($data);
			if($status == "ortu"){
	            redirect('Layanan_controller/show_detail_anak/'.$idanak.'/'.$title);
            }
            else{
            	redirect('Layanan_controller/show_data_layanan_bayi/'.$idanak.'/'.$title);
            }	    
		}
		
		function show_detail_anak($id_anak,$title){
			$data = $this->Layanan_model->get_data_layanan_bayi($id_anak);
			$data['id_anak'] = $id_anak;
			$data['title'] = $title;
	        $data['detail_anak'] = $this->Management_model->get_detail_anak($id_anak);
	        $data['data_kajian'] = $this->Management_model->get_detail_pengkajian($id_anak);
	        $this->load->view('Templates/Header', $data);
	        $this->load->view('Layanan/Detail_anak', $data);
	        $this->load->view('Templates/Footer', $data);
	    }
	    
	    function show_edit_pelayanan_bayi($idpela){
	        $data['data_pela'] = $this->Layanan_model->getPela($idpela);
	        $this->load->view('Templates/Header');
	        $this->load->view('Layanan/Edit_pelayanan', $data);
	        $this->load->view('Templates/Footer', $data);
	    }
	    
	    function update_data_pelayanan(){
	        if (isset($_POST) && !empty($_POST)) {
	            $pelayanan = array(
					'ID_PELAYANAN' => $idpel,
					'TGL_KUNJUNGAN' => $this->input->post('tglkunjung'),
					'KEADAAN_UMUM' => $this->input->post('kead'),
					'SUHU' => $this->input->post('suh'),
					'RESPIRASI' => $this->input->post('res'),
					'JANTUNG' => $this->input->post('jan'),
					'BB' => $this->input->post('bb'),
					'TB' => $this->input->post('tb'),
					'LK' => $this->input->post('lk'),
					'KPSP' => $this->input->post('kpsp'),
					'TINDAKAN' => $this->input->post('tin'),
					'KUNJUNGAN_KE' => $urut,
					'ID_BIDAN' => $idbid,
					'NO_MEDREG' => $nomed
				);
	            $this->Management_model->update_ortu($data);
	        }
	        redirect('Management_controller/show_data_ortu');
	    }
		
	}
?>