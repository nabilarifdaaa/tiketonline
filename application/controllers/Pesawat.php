<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pesawat extends CI_Controller {
	
	public function index(){
		$this->load->model('PesawatModel');

		$data['result'] = $this->PesawatModel->getPesawat();

		$this->load->view('index_home', $data);
	} 

	public function tes(){
		$this->load->model('PesawatModel');
		$ddkota = $this->PesawatModel->get_kota();
		$data['kota'] = $ddkota->result();
		//dropdown kota asal
		$ddtujuan = $this->PesawatModel->get_kotatujuan();
		$data['tujuan'] = $ddtujuan->result();

		if(isset($_POST['cari_asal']))
		{
			$data['pencarian_kota']=$_POST['cari_asal'];
		}
		else{
			$data['pencarian_kota']='';
		}

		if(isset($_POST['cari_tujuan']))
		{
			$data['pencarian_tujuan']=$_POST['cari_tujuan'];
		}
		else{
			$data['pencarian_tujuan']='';
		}
		$this->load->view('templates/header');
		$this->load->view('pesawat/home',$data);
		$this->load->view('templates/footer');
	} 

	public function cari(){
		$this->load->model('PesawatModel');
		//tampil data pesawat
		$data['result'] = $this->PesawatModel->getPesawat();
		//dropdown kota asal
		$ddkota = $this->PesawatModel->get_kota();
		$data['kota'] = $ddkota->result();
		//dropdown kota asal
		$ddtujuan = $this->PesawatModel->get_kotatujuan();
		$data['tujuan'] = $ddtujuan->result();
		//pencarian
		

		$this->load->view('tes', $data);
	} 

	public function caripesawat(){
		$this->load->model('PesawatModel');
		//tampil data pesawat
		$data['result'] = $this->PesawatModel->getPesawat();
		//pencarian
		if(isset($_POST['cari_asal']))
		{
			$data['pencarian_kota']=$_POST['cari_asal'];
		}
		else{
			$data['pencarian_kota']='';
		}

		if(isset($_POST['cari_tujuan']))
		{
			$data['pencarian_tujuan']=$_POST['cari_tujuan'];
		}
		else{
			$data['pencarian_tujuan']='';
		}

		$this->load->view('templates/header');
		$this->load->view('pesawat/pencarian',$data);
		$this->load->view('templates/footer');
	}

	public function pilih($KodePesawat=""){
		$this->load->model('PesawatModel');

		$data['pesawat'] = $this->PesawatModel->getDetail($KodePesawat);
		
		$this->load->view('preview', $data);
	}

	public function dropdown(){
		$this->load->model('PesawatModel');
		$ddkota = $this->PesawatModel->get_kota();
		$data['kota'] = $ddkota->result();
		$this->load->view('dropdown', $data);
	}

	public function add_data(){
		$this->load->view('form_add_penumpang');
	}
	public function do_insert(){
			$kdpswt			= $_POST['kdpswt'];
            $nama 			= $_POST['nama'];
            $ktp 			= $_POST['ktp'];
            $email 			= $_POST['email'];
            $nohp 			= $_POST['nohp'];
			$tgl			= date("Y-m-d H:i:s");
			$jum 			= $_POST['jum'];
			$duduk			= $_POST['duduk'];
			$harga 			= $_POST['harga'];
			
			$data_insert	= array(
									'KodePesawat'	=> $kdpswt,
									'Nama' 			=> $nama,
									'KTP'			=> $ktp,
									'Email'			=> $email,
									'NoHp' 			=> $nohp,
									'Tanggal'		=> $tgl,
									'JumlahTiket'	=> $jum,
									'TempatDuduk'	=> $duduk,
									'TotalHarga'	=> $harga
								);

			$this->load->model('PesawatModel');
			$res = $this->PesawatModel->InsertData('penumpang', $data_insert);
			
			if($res>=1){
				$this->session->set_flashdata('pesan','Tambah Data Sukses');
				redirect('crud_penumpang/index');
			}else{
				echo "<h2>Insert Data Gagal</h2>";	
			}
        
	}

}

