<?php

namespace Multiple\Frontend\Controllers;

use Multiple\Models\Recipe as Recipe;
use Multiple\Models\IngRec as IngRec;
use Phalcon\Http\Response;

class RecipeController extends ControllerBase
{
    public function IndexAction(){
        $recipes = Recipe::find();
        return $this->view->setVars(['recipes' => $recipes->toArray()]);
    }

    public function ShowAction($id){
        $recipe = Recipe::findFirstById($id);
        $ingredients = IngRec::find([
            'conditions' => "id_recipe = :id_recipe:",
            'bind' => array(
                'id_recipe' => $recipe->id
            )
        ]);
        return $this->view->setVars(['recipe' => $recipe->toArray(), 'ingredients' => $ingredients->toArray()]);
    }
}