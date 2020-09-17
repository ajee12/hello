<?php

namespace App\Models;

use CodeIgniter\Model;

class AuthModel extends Model
{
    protected $table      = 'user';
    protected $useTimestamps = true;
    protected $allowedFields = ['username', 'email', 'password', 'role',  'update_by', 'updated_at'];
    protected $beforeInsert = ['beforeInsert'];
    protected $beforeUpdate = ['beforeUpdate'];


    protected function beforeInsert(array $data)
    {
        $data = $this->passwordHash($data);
        $data['data']['created_at'] = date('Y-m-d H:i:s');

        return $data;
    }

    protected function beforeUpdate(array $data)
    {
        $data = $this->passwordHash($data);
        $data['data']['updated_at'] = date('Y-m-d H:i:s');
        return $data;
    }

    protected function passwordHash(array $data)
    {
        if (isset($data['data']['password']))
            $data['data']['password'] = password_hash($data['data']['password'], PASSWORD_DEFAULT);

        return $data;
    }
    public function getUser($id = false)
    {
        if ($id == false) {
            //kalau slug nya kosng cari ->findall(); semunya brayy jangan lupa 
            //satu lagi nggak perlu pake else karena kalau return langsung keluar dari function nya ->findall();
            return $this->findAll();
        }
        //kalau slug nya nggak ada tampilkan yg dibawah
        return $this->where(['id' => $id])->first();
    }
}
