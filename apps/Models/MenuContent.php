<?php

namespace Multiple\Models;

use Phalcon\Mvc\Model;

class MenuContent extends Model
{
    public $id;
    public $id_menu;
    public $id_recipe;

    public function initialize()
    {
        $this->setSource('menu_content');
    }

}