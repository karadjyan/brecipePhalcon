<?php

namespace Multiple\Models;

use Phalcon\Mvc\Model;

class Menu extends Model
{
    public $id;
    public $name;

    public function initialize()
    {
        $this->setSource('menus');
    }
}