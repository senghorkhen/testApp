<?php namespace App\Models;
use CodeIgniter\Model;
class UserModel extends Model
{
 protected $table = 'users';
 protected $primaryKey = 'id';
 protected $returnType = 'array';
 protected $allowedFields = ['name', 'email', 'age', 'password', 'province'];

//  public function createUser($userInfo)
//  {
//      $this->insert([
//         'name' => $userInfo['name'],
//         'email' => $userInfo['email'],
//         'age' => $userInfo['age'],
//         'password' => password_hash($userInfo['password'],PASSWORD_DEFAULT),
//         'province' => $userInfo['province']
//      ]);
//  }
}