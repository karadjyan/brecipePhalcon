<?php
namespace Multiple\Models;
use Phalcon\Mvc\Model;

class Users extends Model
{
    public $id;
    public $name;
    public $email;
    public $password;
    public $admin;

    public function initialize()
    {
        $this->setSource('users');
    }
}