<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class DishController extends AbstractController
{
    /**
     * @Route("/dish", name="dish")
     * @return Response 
     */
    public function index() : Response
    {
        return $this->render('dish/index.html.twig', [
            'controller_name' => 'DishController',
            
        ]);
    }
}
