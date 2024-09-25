<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\HttpClient\HttpClient;

class SongController extends AbstractController
{
    #[Route('/song', name: 'app_song')]
    public function index(): Response
    {
        $client = HttpClient::create([
            'headers' => [
                'User-Agent' => 'My App'
            ], 
        ]);

        $response = $client->request(
            'GET',
            'https://api.spotify.com/v1/search?q=Luther&type=artist',
            [
                'headers' => [
                    'Content-Type' => 'text/plain',
                    'Authorization' => 'Bearer BQBLBy_J1TeijlHG0Ds5leqpaRaZoGKUoPwcZBZg1eUufYX_NywNH31xkEDU_H3Pjxa7Dd8CD2rd7fE0x95_SEcr5sgnjhGqQiTXLDRpY3pyeBlTp1k',
                ],
            ]
        );

        //dd($response->toArray());

        return $this->render('song/index.html.twig', [
            'controller_name' => 'SongController',
            'albums' => $response->toArray(),
        ]);
    }
}
