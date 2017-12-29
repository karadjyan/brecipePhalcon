<?php

namespace Multiple\Frontend\Controllers;

use Multiple\Models\Recipe as Recipe;
use Multiple\Models\Menu as Menu;
use Multiple\Models\MenuContent as MenuContent;
use Phalcon\Http\Response;

class MenuController extends ControllerBase
{
    public function IndexAction(){
        $menus = Menu::find();
        return $this->view->setVars(['menus' => $menus->toArray()/*, '$recipeCount' => $recipeCount*/]);
    }

    public function ShowAction($id){
        $menus = MenuContent::findFirstById($id);
        return $this->view->setVars(['menus' => $menus->toArray()/*, '$recipeCount' => $recipeCount*/]);
    }
}