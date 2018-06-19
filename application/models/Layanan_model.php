<?php

	defined('BASEPATH') OR exit('No direct script access allowed');

	class Layanan_model extends CI_Model{



		public function __construct(){

			parent::__construct();

			$this->load->database();

		}

		

		public function get_data_bayi($idortu){

			$str = "SELECT 

						`anak`.*, 

						`orang_tua`.*

			 	 	FROM `anak`	

			 	 	JOIN `orang_tua` ON `anak`.`ID_ORANG_TUA` = `orang_tua`.`ID_ORANG_TUA`

				";

			if($idortu != null){

				$str = $str." WHERE `anak`.`ID_ORANG_TUA` = '$idortu'";

			}

			$result = $this->db->query($str);

			if($result){

				return $result->result_array();

			}else{

				return false;

			}      

		}

		

		public function get_data_layanan_bayi($idanak){

		    $query = "SELECT * FROM `imunisasi`  WHERE ID_ANAK = '".$idanak."'";

		    $result = $this->db->query($query);

			if($result->num_rows() == 0){

				$idimun = $idanak."1";

				$str = "INSERT INTO `imunisasi`(`ID_IMUNISASI`, `ID_ANAK`) VALUES ('$idimun', '$idanak')";

				$this->db->query($str);

			}

			$str = "SELECT * FROM anak WHERE ID_ANAK = '$idanak'";

			$data['data_anak'] = $this->db->query($str)->row_array();

			$str = "SELECT * FROM pengkajian WHERE ID_ANAK = '$idanak'";

			$data['data_pengkajian'] = $this->db->query($str)->row_array();

			$str = "SELECT * FROM imunisasi WHERE ID_ANAK = '$idanak'";

			$data['data_imunisasi'] = $this->db->query($str)->row_array();

			$str = "SELECT

						`pengkajian`.*,

						`pelayanan`.*

					FROM `pengkajian`  

					JOIN `pelayanan` ON `pengkajian`.`NO_MEDREG` = `pelayanan`.`NO_MEDREG`

					WHERE ID_ANAK = '".$idanak."'";

			$data['data_pelayanan'] = $this->db->query($str)->result_array();

			return $data;

		}

		

		public function insert_pelayanan_bayi($data){

			$pelayanan = array(

				'ID_PELAYANAN' => $data['ID_PELAYANAN'],

				'TGL_KUNJUNGAN' => $data['TGL_KUNJUNGAN'],

				'KEADAAN_UMUM' => $data['KEADAAN_UMUM'],

				'SUHU' => $data['SUHU'],

				'RESPIRASI' => $data['RESPIRASI'],

				'JANTUNG' => $data['JANTUNG'],

				'BB' => $data['BB'],

				'TB' => $data['TB'],

				'LK' => $data['LK'],

				'KPSP' => $data['KPSP'],

				'TINDAKAN' => $data['TINDAKAN'],

				'KUNJUNGAN_KE' => $data['KUNJUNGAN_KE'],

				'ID_BIDAN' => $data['ID_BIDAN'],

				'NO_MEDREG' => $data['NO_MEDREG']

			);

			$this->db->insert('pelayanan', $pelayanan);

	    }

	    

	    public function delete_pelayanan_bayi($idpel){

			$this->db->where('ID_PELAYANAN', $idpel);

			$this->db->delete('pelayanan');

		}

		

		public function insert_imunisasi($data){

	        $this->db->where('ID_ANAK', $data['ID_ANAK']);

	        $this->db->update('imunisasi', $data);

	        echo json_encode($data);

	    }

	    

	    public function getPela($id_pela = "null"){

	        $this->db->from('pelayanan');

	        if ($id_pela != "null"){

	            $this->db-> where('ID_PELAYANAN', $id_pela);

	        }

	        if ($id_pela == "null"){

	            return $this->db->get()->result_array();

	        }else{

	            return $this->db->get()->row_array();

	        }

	        return $this->db->get()->result_array();

	    }

	}

		

?>