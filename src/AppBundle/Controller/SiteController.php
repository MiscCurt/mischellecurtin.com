<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;

class SiteController extends Controller
{

    public function indexAction()
    {
        return new Response('<html><body>Hello world!</body></html>');
    }
}
