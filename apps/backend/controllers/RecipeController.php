<?php
namespace Multiple\Backend\Controllers;

use Multiple\Models\Ingredient as Ingredient;
use Multiple\Models\Recipe as Recipe;
use Multiple\Models\IngRec as IngRec;
use Multiple\Models\MenuContent as MenuContent;
use Phalcon\Http\Response;

class RecipeController extends ControllerBase
{
    public function initialize()
    {
        $this->view->setVar('title', 'Recipes');
    }

    public function IndexAction()
    {
        $recipes = Recipe::find();
        return $this->view->setVars(['recipes' => $recipes->toArray()]);
    }

    public function CreateAction()
    {
        if ($this->request->isPost()) {
            $ingredients            = $this->request->getPost('ingredients');
            $counts                 = $this->request->getPost('count_ing');
            $recipe                 = new Recipe();
            $recipe->name           = $this->request->getPost('name');
            $recipe->description    = $this->request->getPost('description');
            $recipe->save();
            for ($index=0;$index<count($this->request->getPost('ingredients'));$index++)
            {
                $ingredient = Ingredient::findFirstByName($ingredients[$index]);
                if(!$ingredient)
                {
                    $ingredient         = new Ingredient();
                    $ingredient->name   = $ingredients[$index];
                    $ingredient->save();
                }
                $ing_rec                = new IngRec();
                $ing_rec->id_recipe     = $recipe->id;
                $ing_rec->id_ingredient = $ingredient->id;
                $ing_rec->name          = $ingredient->name;
                $ing_rec->count         = $counts[$index];
                $ing_rec->save();
            }
            return $this->response->redirect('admin/panel/recipes');
        }
    }

    public function EditAction($id){
        $this->assets->addJs('/public/js/jquery.min.js');
        $this->assets->addJs('/public/js/ingredients.js');
        $recipe = Recipe::findFirstById($id);
        $ingredients = IngRec::find([
            'conditions' => "id_recipe = :id_recipe:",
            'bind' => array(
                'id_recipe' => $recipe->id
            )
        ]);
        if (!$recipe) {
            return $this->response->redirect('admin/panel/recipes');
        } else {
            if ($this->request->isPost()) {
                $recipe->name           = $this->request->getPost('name');
                $recipe->description    = $this->request->getPost('description');
                $recipe->update();
                $ingredients = IngRec::find([
                    'conditions' => "id_recipe = :id_recipe:",
                    'bind' => array(
                        'id_recipe' => $recipe->id
                    )
                ]);
                $ingredients->delete();
                $ingredients            = $this->request->getPost('ingredients');
                $counts                 = $this->request->getPost('count_ing');
                for ($index=0;$index<count($this->request->getPost('ingredients'));$index++)
                {
                    $ingredient = Ingredient::findFirstByName($ingredients[$index]);
                    if(!$ingredient)
                    {
                        $ingredient         = new Ingredient();
                        $ingredient->name   = $ingredients[$index];
                        $ingredient->save();
                    }
                    $ing_rec                = new IngRec();
                    $ing_rec->id_recipe     = $recipe->id;
                    $ing_rec->id_ingredient = $ingredient->id;
                    $ing_rec->name          = $ingredient->name;
                    $ing_rec->count         = $counts[$index];
                    $ing_rec->save();
                }
                return $this->response->redirect('admin/panel/recipes');
            }
            return $this->view->setVars(['recipe' => $recipe->toArray(), 'ingredients' => $ingredients->toArray()]);
        }
    }

    public function DestroyAction($id){
        if ($this->request->isPost()){
            $recipe = Recipe::findFirstById($id);
            if ($recipe) {
                $ingredients = IngRec::find([
                    'conditions' => "id_recipe = :id_recipe:",
                    'bind' => array(
                        'id_recipe' => $recipe->id
                    )
                ]);
                $menuContent = MenuContent::find([
                    'conditions' => "id_recipe = :id_recipe:",
                    'bind' => array(
                        'id_recipe' => $recipe->id
                    )
                ]);
                $ingredients->delete();
                $menuContent->delete();
                $recipe->delete();
            }
            return $this->response->redirect('admin/panel/recipes');
        }
    }
}