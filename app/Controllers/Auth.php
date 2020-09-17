<?php

namespace App\Controllers;

use App\Models\AuthModel;

class Auth extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Login | Webinar'
        ];

        if (session()->get('email')) {
            return redirect()->to('/home');
        }


        helper(['form']);
        if ($this->request->getMethod() == 'post') {
            //let's do the validation here
            $rules = [
                'email' => 'required|min_length[6]|max_length[50]|valid_email',
                'password' => 'required|min_length[8]|max_length[255]|validateUser[email,password]',
            ];

            $errors = [
                'password' => [
                    'validateUser' => 'Email or Password don\'t match'
                ]
            ];

            if (!$this->validate($rules, $errors)) {
                $data['validation'] = $this->validator;
            } else {
                $model = new  AuthModel();

                $user = $model->where('email', $this->request->getVar('email'))
                    ->first();

                $this->setUserSession($user);
                //$session->setFlashdata('success', 'Successful Registration');
                return redirect()->to('/home');
            }
        }
        return view('auth/login', $data);
    }




    public function setUserSession($user)
    {
        $data = [
            'id' => $user['id'],
            'username' => $user['username'],
            'email' => $user['email'],
            'password' => $user['password'],
            'role' => $user['role'],
            'isLoggedIn' => true,

        ];
        session()->set($data);
        return true;
    }

    public function register()
    {
        $data = [
            'title' => 'Form Register | Webinar',


        ];
        if (session()->get('email')) {
            return redirect()->to('/home');
        }

        helper(['form']);

        if ($this->request->getMethod() == 'post') {
            //let's do the validation here
            $rules = [

                'username' => 'required|min_length[3]|max_length[20]',
                'email' => 'required|min_length[6]|max_length[50]|valid_email|is_unique[user.email]',
                'password' => 'required|min_length[8]|max_length[255]',
                'password_confirm' => 'matches[password]',
            ];

            if (!$this->validate($rules)) {
                $data['validation'] = $this->validator;
            } else {
                $model = new AuthModel();

                $newData = [

                    'username' => $this->request->getVar('username'),
                    'email' => $this->request->getVar('email'),
                    'password' => $this->request->getVar('password'),
                ];
                $model->save($newData);
                $session = session();
                $session->setFlashdata('success', 'Successful Registration');
                return redirect()->to('/auth');
            }
        }

        return view('auth/register', $data);
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/auth');
    }

    //--------------------------------------------------------------------

}
    //--------------------------------------------------------------------
