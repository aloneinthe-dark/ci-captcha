<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Komentar extends CI_Controller {

	public function index()
	{
		$config = [
			"img_path" => "./captcha/",
			"img_url" => base_url('captcha'),
			"img_width" => "250",
			"img_height" => 40,
			"border" => 1,
			"expiration" => 3600,
		];

		$captcha = create_captcha($config);

		$this->session->set_userdata('captcha_word', $captcha['word']);

		$data["image"] = $captcha['image'];
		$this->load->view('komentar/index', $data);
	}

	public function simpanKomentar() {
		$currentCaptcha = $this->session->userdata('captcha_word');
		$sendedCaptcha = $this->input->post('captcha');

		if($currentCaptcha == $sendedCaptcha) {
			//jika captcha benar
			$nama = $this->input->post('nama');
			$komentar = $this->input->post('komentar');

			echo "nama: " . $nama . "<br><br>";
			echo "komentar: " . $komentar;

			
		} else {
			//captcha salah
			echo "Captcha salah!!!";
		}
	}

}