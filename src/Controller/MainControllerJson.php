<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MainControllerJson
{
    #[Route("/api/quote", name: "quote")]
    public function quote(): Response
    {
        $number = random_int(0, 6);

        $quoteList = [
            'This is a quoute',
            'This is not a quote',
            'There is no real blue sky',
            'Quotes are for noobs',
            'Nothing is impossible, unless you cant do it',
            'Quoute this, quote that, what do YOU have to say?',
            'Praise the sun!'
        ];

        $data = [
            'lucky-message' => $quoteList[$number]
        ];

        // return new JsonResponse($data);

        $response = new JsonResponse($data);
        $response->setEncodingOptions(
            $response->getEncodingOptions() | JSON_PRETTY_PRINT
        );

        return $response;
    }
}
