<?php

namespace Multiple\Backend\Controllers;

use Multiple\Models\Ingredient as Ingredient;
use Phalcon\Http\Response;
use Multiple\Models\IngRec as IngRec;

class IngredientController extends ControllerBase
{
    public function initialize()
    {
        $this->view->setVar('title', 'Ingredients');
    }

    public function IndexAction()
    {
        $ingredients = Ingredient::find();
        $this->view->setVars(['ingredients' => $ingredients->toArray()]);
    }

    public function CreateAction()
    {
        $this->view->setVar('title', 'Create ingredient');
        if ($this->request->isPost()) {
                $ingredient = new Ingredient();
                $ingredient->name = $this->request->getPost('name');
                $ingredient->save();
                return $this->response->redirect('admin/panel/ingredients');
        }
    }

    public function EditAction($id){
        $ingredient = Ingredient::findFirstById($id);
        if (!$ingredient) {
            return $this->response->redirect('admin/panel/ingredients');
        } else {
            if ($this->request->isPost()) {
                $ingredient->name = $this->request->getPost('name');
                $ingredient->update();
                return $this->response->redirect('admin/panel/ingredients');
            }
            $this->view->setVars(['title' => 'Edit '.$ingredient->name,'ingredient' => $ingredient->toArray()]);
        }
    }

    public function DestroyAction($id){
        if ($this->request->isPost()){
            $ingredient = Ingredient::findFirstById($id);
            if ($ingredient) {
                $ingredients = IngRec::find([
                    'conditions' => "id_ingredient = :id_ingredient:",
                    'bind' => array(
                        'id_ingredient' => $ingredient->id
                    )
                ]);
                if($ingredients){
                    $ingredients->delete();
                }
                $ingredient->delete();
            }
            return $this->response->redirect('admin/panel/ingredients');
        }
    }
}