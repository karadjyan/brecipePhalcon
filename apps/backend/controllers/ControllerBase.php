<?php

namespace Multiple\Backend\Controllers;

use Phalcon\Mvc\Controller;

class ControllerBase extends Controller
{
    public function beforeExecuteRoute(){
        $acceptUrls = ['/admin/','/admin/signup'];
        $url = $this->router->getRewriteUri();
        $acceptd = false;
        $i=0;
        while(($i!=count($acceptUrls))&&(!$acceptd)){
            if($url==$acceptUrls[$i]){
                $acceptd = true;
            }
            $i++;
        }
        if(!$acceptd) {
            if (!$this->session->has('user-name')) {
                return $this->response->redirect('admin/');
            }
        }
    }
}
