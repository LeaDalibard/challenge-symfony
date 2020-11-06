<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class MessageController extends AbstractController
{
    /**
     * @Route("/message", name="message", methods="GET")
     */
    public function index(Request $request): Response
    {
        $name=$request->query->get('name');

        return $this->render('learning/about-me.html.twig', [
            'name' => $name,
        ]);
    }
}
