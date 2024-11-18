<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		
	}
	
	function index()
	{
		$data['title'] = 'DASHBOARD';
		$data['lokasi'] = $this->db->get('lokasi')->result();
		frontPage('front/home',$data);
	}

	function maps()
	{
		$data['lokasi'] = $this->db->get('lokasi')->result();
		$this->load->view('front/map', $data);
	}

	function login_page()
	{
		if ($this->session->userdata('slogin') == 'True')
		{
			redirect('dashboard');
		}
		else
		{
			$data['title'] = 'Login Administrator';
			frontPage('front/login');
		}
	}

	function login_proses()
	{
		if ($this->input->server('REQUEST_METHOD') == 'POST')
		{
			$username = $this->input->post('username');
			$password = $this->input->post('password');

			$cek = $this->db->get_where('login', 'username = "'.$username.'" AND password = "'.md5($password).'"');
			if ($cek->num_rows() > 0)
			{
				$dataSession = array(
					'slogin' => 'True', 
					'username' => $cek->row()->username, 
				);

				$welcome = '<script>swal("Success","Selamat Datang '.$username.'","success")</script>';
				$this->session->set_userdata($dataSession);
				$this->session->set_flashdata('notif', $welcome);
				redirect('dashboard');
			}
			else
			{
				$this->session->set_flashdata('notif', '<script>swal("Warning","Akun Tidak Terdaftar","error")</script>');
				redirect('/');
			}
		}
	}

	function data_peternakan()
	{
		$data['title'] = 'Data Peternakan';
		$data['lokasi'] = $this->db->get('lokasi')->result();
		frontPage('front/table_peternakan',$data);
	}

	function profil_dinas()
	{
		$data['title'] = 'Profile';
		frontPage('front/profil_dinas',$data);
	}

	function logout()
	{
		$this->session->sess_destroy();
		redirect('home');
	}

	
}
