<?php
	class Pages extends CI_Controller{
		public function view($page = 'home'){
			if(!file_exists(APPPATH.'views/pages/'.$page.'.php')){
				show_404();
			}


			switch ($page) {
				case 'login':
					$data['title'] = 'Login';
					$data['styles'] = array("All_Login-Register_Style", "FormInput_Style");
					break;		
				case 'register':
					$data['title'] = 'Register';
					$data['styles'] = array("All_Login-Register_Style", "FormInput_Style");
					break;
				case 'pasien_InfoDetailDokter':
					$data['title'] = 'Info Detail Dokter';
					$data['styles'] = array("Pasien_InfoDokter_Style");
					break;
				case 'pasien_ListDokter':
					$data['title'] = 'List Dokter';
					$data['styles'] = array("Pasien_ListDokter_Style");
					break;
				case 'pasien_SilahkanCek':
					$data['title'] = ';)';
					$data['styles'] = "no";
					break;
				case 'admin_VerifikasiDokter':
					$data['title'] = 'Verifikasi Dokter';
					$data['styles'] = "no";
					break;
				case 'admin_ListAkunUser':
					$data['title'] = 'List Akun User';
					$data['styles'] = array("FormInput_Style"); 
					break;
				case 'dokter_ListJanjian':
					$data['title'] = 'List Janjian';
					$data['styles'] = "no";
					break;
				case 'dokter_ListStatusKonsultasi':
					$data['title'] = 'List Status Konsultasi';
					$data['styles'] = "no";
					break;
				case 'dokter_ProfilAkun':
					$data['title'] = 'Profil Akun';
					$data['styles'] = array("Pasien_InfoDokter_Style", "FormInput_Style");
					break;
				case 'landingPage':
					$data['title'] = 'Welcome';
					$data['styles'] = array("LandingPage_Style");
					break;
				default:
					$data['styles'] = "no";
					break;
			}		

			$this->load->view('templates/header', $data);
			$this->load->view('pages/'.$page, $data);
			$this->load->view('templates/footer');
		}
	}