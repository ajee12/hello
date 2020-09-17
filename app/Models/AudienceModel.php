<?php

namespace App\Models;

use CodeIgniter\Model;

class AudienceModel extends Model
{
    protected $table      = 'audience';
    protected $useTimestamps = true;
    protected $allowedFields = ['id_user', 'nama',  'no_hp', 'alamat', 'pekerjaan',   'created_date', 'updated_date',];

    public function get_all_data()
    {
        return $this->db->table('audience')->get()->getResultArray();
    }
    public function insert_data($data)
    {
        return $this->db->table('audience')->insert($data);
    }

    public function getTrainer($id = false)
    {
        if ($id == false) {
            //kalau slug nya kosng cari ->findall(); semunya brayy jangan lupa 
            //satu lagi nggak perlu pake else karena kalau return langsung keluar dari function nya ->findall();
            return $this->findAll();
        }
        //kalau slug nya nggak ada tampilkan yg dibawah
        return $this->where(['id' => $id])->first();
    }

    public function update_trainer($data, $id)
    {
        return $this->db->table('audience')->update($data, array('id' => $id));
    }
}
