<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
use App\Entity\Bookings;
use Symfony\Component\Mime\Email;
use DateTime;
use DateInterval;

class MainController extends AbstractController
{
    public function index()
    {
        return $this->render('base.html.twig');
    }

    public function maintenance()
    {
        return $this->render('maintenance.html.twig');
    }
}
