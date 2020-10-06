<?php namespace App\Models;

use CodeIgniter\Model;

class M_user extends Model
{
    protected $table = 't_user';
    protected $primaryKey = 'id_user';
    protected $allowedFields = ['email','name','password','phone','gender','img'];

    
}