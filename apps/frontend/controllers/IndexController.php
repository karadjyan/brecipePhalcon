<?php

namespace Multiple\Frontend\Controllers;
use Multiple\Models\Recipe as Recipe;
use Multiple\Models\Ingredient as Ingredient;
use Multiple\Models\Menu as Menu;

class IndexController extends ControllerBase
{
    public function indexAction()
    {
        $recipes = Recipe::count();
        $ingredients = Ingredient::count();
        $menus = Menu::count();
        return $this->view->setVars(['recipes' => $recipes,'ingredients' => $ingredients,'menus' => $menus]);
    }
}
