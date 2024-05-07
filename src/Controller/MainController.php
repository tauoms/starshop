<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class MainController
{
    #[Route('/', )]
    public function homepage(): Response
    {
        return new Response('This is a test string');
    }
}
