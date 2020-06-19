<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;




class MainController extends AbstractController
{
    /**
     * @Route("/", name="main_page")
     */
    public function main_page()
    {
        return $this->render('main.html.twig');
    }

    /**
     * @Route("/tabs", name="tabs_page")
     */
    public function tabs_page()
    {
        return $this->render('tabs.html.twig');
    }

    /**
     * @Route("/tabs2", name="tabs2_page")
     */
    public function tabs2_page()
    {
        return $this->render('tabs2.html.twig');
    }

    /**
     * @Route("/maintenance ", name="maintenance")
     */
    public function maintenance()
    {
        return $this->render('maintenance.html.twig');
    }
}
