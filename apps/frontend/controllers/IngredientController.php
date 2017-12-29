<?php
/**
 * Created by PhpStorm.
 * User: Богдан
 * Date: 18.12.2017
 * Time: 15:18
 */

namespace Multiple\Frontend\Controllers;

use Multiple\Models\Ingredient as Ingredient;
use Multiple\Models\Recipe as Recipe;
use Phalcon\Http\Response;
use Multiple\Models\IngRec as IngRec;

class IngredientController extends ControllerBase
{
    public function IndexAction(){
        $ingredients = Ingredient::find();
        /*$recipeCount = array();
        $index = 0;
        foreach ( $ingredients as $ingredient) {

            $listRecipesId =  IngRec::find([
                'conditions' => "id_ingredient = :id_ingredient:",
                'bind' => array(
                    'id_ingredient' => $ingredient->id
                ),
                'columns' => 'id_recipe'
            ]);

            $listRecipesId = $this->splitArrayId($listRecipesId);
            $recipeCount[$index] = count($listRecipesId);
            $index++;
        }*/

        return $this->view->setVars(['ingredients' => $ingredients->toArray()/*, '$recipeCount' => $recipeCount*/]);
    }

    public function ShowAction($id){
        $ingredient = Ingredient::findFirstById($id);
        $listRecipesId =  IngRec::find([
            'conditions' => "id_ingredient = :id_ingredient:",
            'bind' => array(
                'id_ingredient' => $ingredient->id
            ),
            'columns' => 'id_recipe'
        ]);

        $listRecipesId = $this->splitArrayId($listRecipesId);

        if ($listRecipesId){
            $recipes = Recipe::find(['conditions' => 'id IN ({listRecipesId:array})',
                'bind' => [
                    'listRecipesId' => $listRecipesId,
                ],
                ]);
            return $this->view->setVars(['ingredient' => $ingredient->toArray(), 'recipes' => $recipes->toArray()]);
        } else {
            //return alert error
        }
    }

    public function splitArrayId($listRecipesId){
        $resault = array();
        for ($index = 0;$index<count($listRecipesId);$index++){
            array_push($resault,$listRecipesId[$index]['id_recipe']);
        }
        return  $resault;
    }
}