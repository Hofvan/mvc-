<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TestController
{
    #[Route('/test')]
    public function test(): Response
    {
        return new Response(
            '<html><body>Hi to you! This is test controller speaking!</body></html>'
        );
    }
}
