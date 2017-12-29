<?php

namespace Multiple\Backend\Controllers;

use Multiple\Models\Recipe as Recipe;
use Multiple\Models\Menu as Menu;
use Multiple\Models\MenuContent as MenuContent;
use Phalcon\Http\Response;

class MenuController extends ControllerBase
{
    public function IndexAction()
    {
        $this->assets->addCss('public/css/component.css');
        $this->assets->addJs('public/js/jquery.min.js');
        $this->assets->addJs('public/js/deleteform.js');
        $this->assets->addJs('public/js/modernizr.custom.js');
        $this->assets->addJs('public/js/classie.js');
        $this->assets->addJs('public/js/modalEffects.js');
        $this->assets->addJs('public/js/cssParser.js');
        $this->assets->addJs('public/js/css-filters-polyfill.js');
        $menus = Menu::find();
        return $this->view->setVars(['menus' => $menus->toArray()]);
    }

    public function CreateAction()
    {
        if ($this->request->isPost()) {
            $menu = new Menu();
            $menu->name = $this->request->getPost('name_menu');
            $menu->save();

            $recipes = $this->request->getPost('recipes');
            if ($recipes) {
                for ($index = 0; $index < count($this->request->getPost('recipes')); $index++) {
                    $menu_content = new MenuContent();
                    $menu_content->id_menu = $menu->id;
                    $menu_content->id_recipe = $recipes[$index];
                    $menu_content->save();
                }
            }
            return $this->response->redirect('admin/panel/menus');
        }
        return $this->response->redirect('admin/panel/recipes');
    }

    public function DestroyAction($id){
        if ($this->request->isPost()){
            $menu = Menu::findFirstById($id);
            $menu->delete();
            $menu_con = MenuContent::find(['conditions' => "id_menu = :id_menu:",
                'bind' => array(
                    'id_menu' => $menu->id
                )
            ]);
            $menu_con->delete();
            if ($menu && $menu_con){
                //add alert success
                return $this->response->redirect('admin/panel/menus');
            } else {
                //add alert error
                return $this->response->redirect('admin/panel/menus');
            }
        }
    }
}