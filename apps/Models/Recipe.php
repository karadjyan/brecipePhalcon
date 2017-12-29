<?php
namespace Multiple\Models;
use Phalcon\Mvc\Model;

class Recipe extends Model
{
    public $id;
    public $name;
    public $description;

    public function initialize()
    {
        $this->setSource('recipes');
    }
}