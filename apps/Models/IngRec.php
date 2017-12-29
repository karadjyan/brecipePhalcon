<?php

namespace Multiple\Models;

use Phalcon\Mvc\Model;

class IngRec extends Model
{
    public $id;
    public $id_recipe;
    public $id_ingredient;
    public $name;
    public $count;

    public function initialize()
    {
        $this->setSource('ing_rec');
    }
}