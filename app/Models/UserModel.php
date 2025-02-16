<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'user';
    protected $primaryKey = 'id';
    protected $allowedFields = ['username', 'password', 'name', 'roleId', 'isDeleted'];

    public function getUserByUsername($username)
    {
        return $this->select('user.*, roles.role')  
                    ->join('roles', 'roles.roleId = user.roleId', 'left')
                    ->where('user.username', $username)
                    ->where('user.isDeleted', 0)
                    ->first();
    }

    public function login($username , $password )
    {
        return $this->select('user.*, roles.role')  
                    ->join('roles', 'roles.roleId = user.roleId', 'left')
                    ->where('user.username', $username)
                    ->where('user.password', md5 ($password))
                    ->where('user.isDeleted', 0)
                    ->first();
    }

}
