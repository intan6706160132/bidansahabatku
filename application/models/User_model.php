<?php

	defined('BASEPATH') OR EXIT('No direct script access allowed');

	class User_model extends CI_Model{

		public function __construct(){

			parent::__construct();

			$this->load->database();

		}



        public function insert_user($data){

		    $data['ID_USER'] = $this->get_id_user();

            $this->db->set($data);

            return $this->db->insert($this->db->dbprefix . 'user', $data);

        }



        public function get_id_user(){

            $user = $this->db->query("select max(ID_USER) count from user ORDER BY ID_USER DESC")->row_array();

            if($user['count'] == "NULL"){
                return "00001";
            }
            $jlh = (int)$user['count'];
            $jlh++;
            if(strlen((string)$jlh) > 4){

                return (string)$jlh;
            }elseif(strlen((string)$jlh) > 3){
                return "0".(string)$jlh;
            }elseif(strlen((string)$jlh) > 2){
                return "00".(string)$jlh;
            }elseif(strlen((string)$jlh) > 1){
                return "000".(string)$jlh;
            }else{
                return "0000".(string)$jlh;
            }
            return;

        }





        public function login($username, $password){

			$str = "SELECT * FROM user WHERE USERNAME = '".$username."' AND PASSWORD='".$password."' LIMIT 1";

			$res = $this->db->query($str);

			if($res->num_rows() == 1){



				$data = array();

				$data['data_user'] = $res->row_array();

				if(($data['data_user']['STATUS'] == "admin") || ($data['data_user']['STATUS'] == "bidan"))

					$str = "SELECT NAMA_BIDAN NAMA FROM bidan WHERE ID_BIDAN='".$data['data_user']['ID_PENGGUNA']."'";

				else

					$str = "SELECT NAMA_IBU NAMA FROM orang_tua WHERE ID_ORANG_TUA='".$data['data_user']['ID_PENGGUNA']."'";

				$data['data_pengguna'] = $this->db->query($str)->row_array();

				return $data;

			}else{

				return false;

			}

		}



		public function get_data_users($id_user = ""){

			if($id_user == ""){

				$str = "

				SELECT usr.*, usr.STATUS STATUS_USER, bdn.*, ortu.* FROM user usr

				LEFT JOIN bidan bdn ON usr.ID_PENGGUNA = bdn.ID_BIDAN

				LEFT JOIN orang_tua ortu ON usr.ID_PENGGUNA = ortu.ID_ORANG_TUA";

				$res = $this->db->query($str)->result_array();

			}else{

				$str = "

				SELECT usr.*, usr.STATUS STATUS_USER, bdn.*, ortu.* FROM user usr

				LEFT JOIN bidan bdn ON usr.ID_PENGGUNA = bdn.ID_BIDAN

				LEFT JOIN orang_tua ortu ON usr.ID_PENGGUNA = ortu.ID_ORANG_TUA WHERE ID_USER = '$id_user'";

				$res = $this->db->query($str)->row_array();

			}

			return $res;

		}



		public function get_new_id_pengguna(){
			$res= $this->db->query("select max(ID_USER) count from user ORDER BY ID_USER DESC")->row_array();
			if($res['count'] == "NULL"){
				return "00001";
			}else{
				$id = "";
				$int = (int)$res['count'];
				$int = $int+1;
				$length = strlen((string) $int);
				switch ($length) {
					case 1:
						$id = "0000".(string)($res['count'] + 1);
						break;
					case 2:
						$id = "000".(string)($res['count'] + 1);
						break;
					case 3:
						$id = "00".(string)($res['count'] + 1);
						break;
					case 4:
						$id = "0".(string)($res['count'] + 1);
						break;
					case 5:
						$id = (string)($res['count'] + 1);
						break;
				}

				return $id;

			}

		}



		public function insert_data_user($data){

			$this->db->insert('user', $data);

		}



		public function get_id_pengguna($status){

			$str ="";

			if($status == "bidan" || $status == "admin"){

				$str = "SELECT bidan.ID_BIDAN ID_PENGGUNA, bidan.NAMA_BIDAN NAMA FROM bidan LEFT OUTER JOIN user ON bidan.ID_BIDAN = user.ID_PENGGUNA WHERE user.ID_USER IS NULL";

			}else{

				$str = "SELECT ID_ORANG_TUA ID_PENGGUNA, CONCAT_WS(' / ', NAMA_IBU, NAMA_AYAH) NAMA FROM orang_tua LEFT OUTER JOIN user ON orang_tua.ID_ORANG_TUA = user.ID_PENGGUNA WHERE user.ID_USER IS NULL";

			}

			return $this->db->query($str)->result_array();

		}



		public function edit_data_user($data){

			$this->db->where('ID_USER', $data['ID_USER']);

			$this->db->update('user', $data);

		}



		public function delete_data_user($id_user){

			$this->db->delete('user', array('ID_USER' => $id_user));

		}


        public function update_user($data){
            $this->db->set($data);
            $this->db->where('ID_PENGGUNA', $_SESSION['id_pengguna']);
            return $this->db->update($this->db->dbprefix . 'user', $data);
        }
	}



?>