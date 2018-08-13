<?php

namespace MY\ChatBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        $user = $this->get('security.token_storage')->getToken()->getUser()->getUsername();
//        var_dump($user);
        return $this->render('@MYChat/Default/index.html.twig',array(
            'user' => $user ));
    }
}
