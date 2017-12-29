<?php

namespace Multiple\Backend\Controllers;

use http\Env\Request;
use Multiple\Models\Users as Users;
use Phalcon\Http\Response;

class AdminController extends ControllerBase
{
    public function ShowLoginAction()
    {
        return $this->view->setVars([]);
    }

    public function LoginAction()
    {
        if ($this->request->isPost()) {
            if ($this->security->checkToken()) {
                $email = $this->request->getPost('email');
                $password = $this->request->getPost('password');

                $user = Users::findFirst([
                    'conditions' => "email = :email:",
                    'bind' => array(
                        'email' => $email
                    )
                ]);
                if ($user) {
                    if ($this->security->checkHash($password, $user->password)) {
                        $this->session->set('user-name', $user->name);
                        return $this->response->redirect('admin/panel');
                    } else {
                        return $this->response->redirect('admin/');
                    }
                }
            }
        }

    }

    public function LogoutAction(){
        $this->session->remove('user-name');
        return $this->response->redirect('admin/');
    }

    public function ShowRegisterAction()
    {
        return $this->view->setVars([]);
    }

    public function RegisterAdminAction()
    {
        $success =false;
        if ($this->request->isPost()) {
            if ($this->security->checkToken()) {
                $user = new Users();
                $name    = $this->request->getPost('name');
                $email    = $this->request->getPost('email');
                $password = $this->request->getPost('password');
                $user->name = $name;
                $user->email = $email;
                $user->password = $this->security->hash($password);
                $user->admin = 1;
                $success = $user->save();
            }
        }



        if ($success) {
            echo "Thanks for registering!";
        } else {
            echo "Sorry, the following problems were generated: ";

            $messages = $user->getMessages();

            foreach ($messages as $message) {
                echo $message->getMessage(), "<br/>";
            }
        }

        $this->view->disable();
    }

    public function PanelAction(){
    }

    public function UsersAction(){
        $users = Users::find(['columns' => 'id, name, email']);
        //var_dump($users->toArray());exit;
        return $this->view->setVars(['users' => $users->toArray()]);
    }

    public function DeleteUserAction(){
        $user = Users::findById($this->request->getPost('id'));
        if (!$user) {
            return $this->response->redirect('admin/panel/users');
        }
        if ($user->id != 11) {
            $user->delete();
        }
        return $this->response->redirect('admin/panel/users');
    }

}