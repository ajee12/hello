<?php

namespace App\Controllers;

use App\Models\TrainerModel;
use App\Models\AudienceModel;

class admin extends BaseController
{
    protected $TrainerModel;
    protected $AudienceModel;
    public function __construct()
    {
        helper('form');
        $this->TrainerModel = new TrainerModel();
        $this->AudienceModel = new AudienceModel();
    }
    public function index()
    {
        $data = [
            'title' => 'Admin | Webinar'
        ];
        return view('/adminpanel/i_user', $data);
    }
    public function dashboard()
    {
        $data = [
            'title' => 'Dashboard | Webinar'
        ];
        return view('/adminpanel/dashboard', $data);
    }
    public function i_anggota()
    {
        $data = [
            'title' => 'Info Anggota | Webinar',
            'trainer' => $this->TrainerModel->get_all_data()
        ];
        return view('/adminpanel/i_anggota', $data);
    }
    public function v_trainer($id)
    {
        $data = [
            'title' => 'Detail Trainer',
            'trainer' => $this->TrainerModel->getTrainer($id)


        ];


        //jika komik tidak ada di tabel


        return view('adminpanel/v_trainer', $data);
    }

    public function u_trainer($id)
    {
        $data = [
            'title' => 'Update Trainer | Webinar',
            'validation' => \Config\Services::validation(),
            'trainer' => $this->TrainerModel->getTrainer($id)
        ];
    }
    public function saveTrainer($id)

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
            'update_date' => date("Y-m-d H:i:s"),
            'proposal' => $namaImage,


        ];
        //flash data


        $this->TrainerModel->update_trainer($data, $id);
        session()->setFlashdata('pesan', 'Data Berhasil Di Perbarui');
        return redirect()->to('/admin/v_trainer');
    }
    public function delete($id)
    {
        $this->TrainerModel->delete($id);
        session()->setFlashdata('warning', 'Data Berhasil Dihapus');
        return redirect()->to('/admin/i_anggota');
    }
    public function i_audience()
    {
        $data = [
            'title' => 'Audience | Admin',
            'audience' => $this->AudienceModel->get_all_data()
        ];
        return view('/adminpanel/i_audience', $data);
    }
    public function deleteaudience($id)
    {
        $this->AudienceModel->delete($id);
        session()->setFlashdata('warning', 'Data Berhasil Dihapus');
        return redirect()->to('/admin/i_audience');
    }
}
