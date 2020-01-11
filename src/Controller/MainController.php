<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
use App\Entity\Bookings;
use Symfony\Component\Mime\Email;
use DateTime;
use DateInterval;

class BookingController extends AbstractController
{
    public function index()
    {
        return $this->render('booking/index.html.twig');
    }
}
