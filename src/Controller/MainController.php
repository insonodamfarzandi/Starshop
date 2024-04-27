<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class MainController
{
    #[Route('/')]
    public function index()
    {
        return new Response('<h1>Hello Symfony</h1>');
    }
}
