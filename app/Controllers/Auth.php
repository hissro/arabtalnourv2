<?php

namespace App\Controllers;

use App\Models\UserModel;
use CodeIgniter\Controller;

class Auth extends BaseController
{
     
    public function login()
    {
        $session = session();
        if ($session->get('logged_in')) 
        {
            return redirect()->to('/');
        }

        helper(['form']);
        return view('auth/login');
    }

    public function loginProcess()
    {
        $session = session();
        $userModel = new UserModel();
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        $user = $userModel->login( $username , $password);

        if ($user) 
        {         
            $sessionData = [
                'id'       => $user['id'],
                'username' => $user['username'],
                'name'     => $user['name'],
                'roleId'   => $user['roleId'],
                'role'     => $user['role'], // Store role name in session
                'logged_in' => true
            ];
            $session->set($sessionData);
            return redirect()->to('/');
             
        } else {
            $session->setFlashdata('error', 'Invalid Password');
            return redirect()->to('/login');
        }
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/login');
    }
 
}
