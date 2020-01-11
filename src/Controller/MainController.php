<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;




class MainController extends AbstractController
{
    /**
     * @Route("/mainpage", name="main_page")
     */
    public function main_page()
    {
        return $this->render('base.html.twig');
    }

    /**
     * @Route("/", name="landing")
     */
    public function maintenance()
    {
        return $this->render('maintenance.html.twig');
    }
}
