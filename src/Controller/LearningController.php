<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class LearningController extends AbstractController
{
    /**
     * @Route("/about-me")
     */

    public function showMyName():Response
    {$name='Unknown';
        return $this->render('learning/about-me.html.twig', [
            'name' => $name,
        ]);
    }

    public function changeMyName():RedirectResponse
    {
        return $this->redirectToRoute('index');
    }


}
