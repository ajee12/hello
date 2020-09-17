<?php

namespace App\Controllers;

use App\Models\TrainerModel;
use App\Models\AuthModel;

class Home extends BaseController
{
	protected $TrainerModel;
	protected $AuthModel;
	public function __construct()
	{
		helper('form');
		$this->TrainerModel = new TrainerModel();
		$this->AuthModel = new AuthModel();
	}

	public function index()
	{
		$data = [
			'title' => 'Home | Webinar',


		];


		return view('/home', $data);
	}



	//--------------------------------------------------------------------
	public function trainer()
	{
		session();
		$data = [
			'title' => 'Trainer | Webinar',
			'validation' => \Config\Services::validation(),




		];

		return view('/trainer', $data);
	}

	public function save()

	{
		if (!$this->validate([
			'nama' => [
				'rules' => 'required',
				'errors' => [
					'required' => ' Nama wajib diisi !!',

				]
			],

			'id_user' => [
				'rules' => 'required',




			],
			'alamat' => [
				'rules' => 'required',
				'errors' => [
					'required' => ' wajib diisi !!',

				]



			],

			'jn_trainer ' => [
				'rules' => 'required',
				'errors' => [
					'required' => ' wajib diisi !!',

				]



			],

			'no_hp' => [
				'rules' => 'required',
				'errors' => [
					'required' => ' wajib diisi !!',

				]





			],
			'proposal' =>  [
				'rules' => 'uploaded[proposal]',
				'errors' => [
					'uploaded' => 'Yang anda upload bukan file',



				]
			]


		])) {

			//$validation = \Config\Services::validation();

			//return redirect()->to('/user/daftar')->withInput()->with('validation', $validation);
			return redirect()->to('/home/trainer')->withInput();
		}
		//ambil gambar

		$fileImage = $this->request->getFile('proposal');

		if ($fileImage->getError() == 4) {
		} else {


			//generate nama sampul random
			$namaImage = $fileImage->getRandomName();

			//cara pindah kan file ke folder img kntol

			$fileImage->move('file', $namaImage);
		}



		//mengambil request dari get/post
		// dd($this->request->getVar('judul'));



		$data = [
			'id_user' => $this->request->getVar('id_user'),
			'nama' => $this->request->getVar('nama'),
			'no_hp' => $this->request->getvar('no_hp'),
			'alamat' => $this->request->getVar('alamat'),
			'jn_trainer' => $this->request->getVar('jn_trainer'),
			'proposal' => $namaImage,
			'created_date' => date("Y-m-d H:i:s"),




		];
		//flash data


		$this->TrainerModel->insert_data($data);


		return redirect()->to('/');
	}
	public function i_trainer()
	{
		$data = [
			'title' => 'Info Trainer | Webinar'
		];
		return view('/i_trainer', $data);
	}
}
