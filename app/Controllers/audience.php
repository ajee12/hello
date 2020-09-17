<?php

namespace App\Controllers;

use App\Models\AudienceModel;


class Audience extends BaseController
{
    protected $AudienceModel;
    public function __construct()
    {
        helper('form');
        $this->AudienceModel = new AudienceModel();
    }
    public function index()
    {
        session();
        $data = [
            'title' => 'Audience | Webinar',
            'validation' => \Config\Services::validation(),

        ];
        return view('/audience/audience', $data);
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

            'pekerjaan ' => [
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



        ])) {

            //$validation = \Config\Services::validation();

            //return redirect()->to('/user/daftar')->withInput()->with('validation', $validation);
            return redirect()->to('/audience')->withInput();
        }
        //ambil gambar

        //mengambil request dari get/post
        // dd($this->request->getVar('judul'));



        $data = [
            'id_user' => $this->request->getVar('id_user'),
            'nama' => $this->request->getVar('nama'),
            'no_hp' => $this->request->getvar('no_hp'),
            'alamat' => $this->request->getVar('alamat'),
            'Pekerjaan' => $this->request->getVar('pekerjaan'),
            'created_date' => date("Y-m-d H:i:s"),




        ];
        //flash data


        $this->AudienceModel->insert_data($data);


        return redirect()->to('/home');
    }
}
