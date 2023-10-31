<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController {

    /**
     * @Route("/", name="homepage")
     */
    public function index()
    {
        return new Response("This is my home page");
    }
}

?>