<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if ($this->session->userdata('slogin')!='True')
		{
			$this->session->set_flashdata('notif', '<script>swal("Warning","Silakan Login Dulu","warning")</script>');
			redirect('login');
		}	
	}

	public function index()
	{
		$data['title'] = 'DASHBOARD';
		$data['lokasi'] = $this->db->get('lokasi')->result();
		dashPage('admin/home',$data);
	}

	function maps_add()
	{
		$data['lokasi'] = $this->db->get('lokasi')->result();
		$this->load->view('front/map_add',$data);
	}

	function data_peternakan()
	{
		$data['title'] = 'Data Peternakan';
		$data['lokasi'] = $this->db->get('lokasi')->result();
		dashPage('admin/table_peternakan',$data);
	}


	function hapus_ternak($id="")
	{
		if ($id != "")
		{
			$del = $this->db->delete('lokasi',array('id' => decrypt_url($id), ));
			if ($del)
			{
				$this->session->set_flashdata('notif', '<script>swal("Success","Data Berhasil Terhapus","success")</script>');
				redirect('peternakan');
			}
		}
		else
		{
			http_response_code(404);
		}
	}

	function edit_ternak($id="")
	{
		if ($this->input->server('REQUEST_METHOD') == 'GET' AND $id != "")
		{
			$data['l'] = $this->db->get_where('lokasi','id = "'.decrypt_url($id).'"')->row();
			$this->load->view('admin/form_edit', $data);
		}
		elseif($this->input->server('REQUEST_METHOD') == 'POST')
		{
			$id = decrypt_url($this->input->post('arg'));
			$edit_foto = $this->input->post('cek_list');
			$pemilik = $this->input->post('pemilik');
			$ternak = $this->input->post('ternak');
			$populasi = $this->input->post('populasi');
			$alamat = $this->input->post('alamat');
			$luas = $this->input->post('luas');
			$x = $this->input->post('x');
			$y = $this->input->post('y');

			if ($ternak == 'Babi & Sapi')
			{
				$icon = 'babisapi';
			} elseif ($ternak == 'Ayam Daging') {
				$icon = 'ayamdaging';
			} elseif ($ternak == 'Ayam Kampung') {
				$icon = 'ayamkampung';
			} elseif ($ternak == 'Ayam Petelur') {
				$icon = 'ayampetelur';
			} elseif ($ternak == 'Sapi & Ayam Petelur') {
				$icon = 'sapiayamtelur';
			} elseif ($ternak == 'Sapi & Ayam Pedaging') {
				$icon = 'sapiayamdaging';
			} elseif ($ternak == 'Babi & Ayam Petelur') {
				$icon = 'babiayamtelur';
			} elseif ($ternak == 'Babi & Ayam Pedaging') {
				$icon = 'babiayamdaging';
			} elseif ($ternak == 'Babi & Ayam Kampung') {
				$icon = 'babiayamkampung';
			} else
			{
				$icon = $ternak;
			}

			if ($edit_foto == 'Y')
			{
				$data_update = array(
					'pemilik' => $pemilik, 
					'ternak' => $ternak, 
					'icon' => $icon, 
					'populasi' => $populasi, 
					'alamat' => $alamat, 
					'luas' => $luas, 
					'x' => $x, 
					'y' => $y, 
					'pict' => upload64($this->input->post('foto')), 
				);
			}
			else
			{
				$data_update = array(
					'pemilik' => $pemilik, 
					'ternak' => $ternak, 
					'icon' => $icon, 
					'populasi' => $populasi, 
					'alamat' => $alamat, 
					'luas' => $luas, 
					'x' => $x, 
					'y' => $y, 
				);
			}

			$update = $this->db->update('lokasi', $data_update,array('id' => $id, ));
			if ($update)
			{
				echo json_encode(array(
					'status' => 'ok', 
				));
			}
			else
			{
				echo json_encode(array(
					'status' => False, 
				));
			}

		}
		else
		{
			http_response_code(404);
		}
	}

	function simpan_ternak()
	{
		if ($this->input->server('REQUEST_METHOD') == 'POST')
		{
			$pemilik = $this->input->post('pemilik');
			$ternak = $this->input->post('ternak');
			$populasi = $this->input->post('populasi');
			$alamat = $this->input->post('alamat');
			$luas = $this->input->post('luas');
			$x = $this->input->post('x');
			$y = $this->input->post('y');
			$foto = upload64($this->input->post('foto_new'));
			if ($ternak == 'Babi & Sapi')
			{
				$icon = 'babisapi';
			} elseif ($ternak == 'Ayam Daging') {
				$icon = 'ayamdaging';
			} elseif ($ternak == 'Ayam Kampung') {
				$icon = 'ayamkampung';
			} elseif ($ternak == 'Ayam Petelur') {
				$icon = 'ayampetelur';
			} elseif ($ternak == 'Sapi & Ayam Petelur') {
				$icon = 'sapiayamtelur';
			} elseif ($ternak == 'Sapi & Ayam Pedaging') {
				$icon = 'sapiayamdaging';
			} elseif ($ternak == 'Babi & Ayam Petelur') {
				$icon = 'babiayamtelur';
			} elseif ($ternak == 'Babi & Ayam Pedaging') {
				$icon = 'babiayamdaging';
			} elseif ($ternak == 'Babi & Ayam Kampung') {
				$icon = 'babiayamkampung';
			} else
			{
				$icon = $ternak;
			}

			$data = array(
				'pemilik' => $pemilik, 
				'ternak' => $ternak, 
				'icon' => $icon, 
				'populasi' => $populasi, 
				'alamat' => $alamat, 
				'luas' => $luas, 
				'x' => $x, 
				'y' => $y, 
				'pict' => $foto,
			);

			$insert = $this->db->insert('lokasi', $data);
			if ($insert)
			{
				echo json_encode(array(
					'status' => 'ok', 
				));
			}
			else
			{
				echo json_encode(array(
					'status' => False, 
				));
			}
		}
	}
}

/* End of file Admin.php */
/* Location: ./application/controllers/Admin.php */