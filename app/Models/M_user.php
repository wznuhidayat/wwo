<?php namespace App\Models;

use CodeIgniter\Model;

class M_user extends Model
{
    protected $table = 't_user';
    protected $primaryKey = 'id_user';
    protected $allowedFields = ['email','name','password','phone','gender','img'];


    public function getUser($id = false)
    {
        if($id === false){
            return $this->findAll();
        }else{
            return $this->where(['id_user' => $id])->first();
        }   
    }

    public function saveUser($data)
    {
        $query = $this->db->table($this->table)->insert($data);
        return $query;
    }
}