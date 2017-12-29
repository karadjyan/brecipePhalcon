<?php

namespace Multiple\Models;

use Phalcon\Mvc\Model;

class Ingredient extends Model
{
    public $id;
    public $name;

    public function initialize()
    {
        $this->setSource('ingredients');
    }
}