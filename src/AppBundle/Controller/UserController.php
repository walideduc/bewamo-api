<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class UserController extends Controller
{
    /**
     * @Route("/users")
     */
    public function getUsersAction()
    {
        return $this->render('AppBundle:User:get_users.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("users/{id}")
     */
    public function getUserAction($id)
    {
        return $this->render('AppBundle:User:get_user.html.twig', array(
            // ...
        ));
    }

}
