<?php
namespace App\Controllers;
use App\Controllers\BaseController;
use App\Models\M_user;

class Administator extends BaseController{
    
    public function __construct()
    {
        $this->M_user = new M_user();
        helper('url','form');
    }
    public function dashboard(){
        $data = [
            'title' => 'Dashboard',
            'content' => 'admin/dashboard'
        ];
        echo view('template_admin',$data);
    }
    public function user(){
        $data = [
            'title' => 'User',
            'user' => $this->M_user->findAll(),
            'content' => 'admin/user/user_view'
        ];
        // dd($data);
        echo view('template_admin', $data);
    }
    public function addUser(){
        $data = [
            'title' => 'User',
            'validation' => \Config\Services::validation(),
            'content' => 'admin/user/add_user'
        ];
        echo view('template_admin', $data);
    }
    public function saveUser(){
        // if(!$this->validate([
        //     'inputName' => 'required'
        //     'inputEmail' => 'required|is_unique[t_user.email]',
        //     'inputPassword' => 'required|min_length[8]',
        //     'inputPassword2' => 'required|matches[inputPassword]',
        //     'inputPhone' => 'numeric'
        // ])){
        //     $validation = \Config\Services::validation();
        //     return redirect()->to('addUser')->withInput()->with('validation', $validation);
        // }
        
        $this->M_user->save([
            'id_user' => (int)floor(microtime(true)),
            'email' => $this->request->getPost('inputEmail'),
            'name' => $this->request->getPost('inputName'),
            'password' => md5($this->request->getPost('inputPassword')),
            'phone' => $this->request->getPost('inputPhone'),
            'gender' => $this->request->getPost(('inputGender')),
            'img' => 'null'
        ]);
        dd($this->M_user->save());
        // dd($this->M_user->getLastQuery());
        // return redirect()->to('user');
    }
    public function delUser($id_user){
        $this->M_user->delete($id_user);
        return redirect()->to('/administator/user');
    }
}