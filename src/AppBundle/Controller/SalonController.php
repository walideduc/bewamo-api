<?php

namespace AppBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use FOS\RestBundle\Controller\Annotations as Rest; // alias pour toutes les annotations
use FOS\RestBundle\View\ViewHandler;
use FOS\RestBundle\View\View; // Utilisation de la vue de FOSRestBundle
use AppBundle\Entity\Salon;


class SalonController extends Controller
{
    /**
     * @Rest\View()
     * @Rest\Get("/salons")
     */
    public function getSalonsAction()
    {
        $salons = $this->get('doctrine.orm.entity_manager')
            ->getRepository('AppBundle:Salon')
            ->findAll();
        /* @var $salons Salon[] */

        $view = View::create($salons);
        $view->setFormat('json');

        return $view;

    }

}
