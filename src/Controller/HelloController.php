<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HelloController
{

    #[Route('/')]
    public function index():Response
    {
        return new Response('Olá, Mundo!');
    }

    #[Route('/dinossauro')]
    public function dinossauro():Response
    {
        return new Response('Olá, dinossauros!');
    }

    #[Route('/mamiferos')]
    public function mamiferos():Response
    {
        return new Response('Olá, mamíferos!');
    }

    #[Route('/invertebrados')]
    public function invertebrados():Response
    {
        return new Response('Olá, invertebrados!');
    }
    #[Route('/insetos')]
    public function insetos():Response
    {
        return new Response('Olá, insetos!');
    }

    #[Route('/aves')]
    public function aves():Response
    {
        return new Response('Olá, aves!');
    }

    #[Route('/felinos')]
    public function felinos():Response
    {
        return new Response('Olá, felinos!');
    }
    #[Route('/caninos')]
    public function caninos():Response
    {
        return new Response('Olá, caninos!');
    

    #[Route('/roedores')]
    public function roedorees():Response
    {
        return new Response('Olá, roedores!');
    }

}