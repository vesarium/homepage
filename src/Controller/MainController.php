<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
use App\Entity\Bookings;
use Symfony\Component\Mime\Email;
use DateTime;
use DateInterval;
use Symfony\Component\Routing\Annotation\Route;


class MainController extends AbstractController
{
    /**
     * @Route("/main_page", name="main_page")
     */

    public function main_page()
    {
        return $this->render('base.html.twig');
    }

    /**
     * @Route("/", name="index")
     */

    public function maintenance()
    {
        return $this->render('maintenance.html.twig');
    }
}
