<?php

namespace App\Controller;

use App\Entity\Name;
//use Doctrine\DBAL\Types\TextType;
//use http\Env\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class LearningController extends AbstractController
{
    /**
     * @Route("/about-me")
     */

    public function showMyName(): Response
    {
        $name = 'Unknown';
        return $this->render('learning/about-me.html.twig', [
            'name' => $name,
        ]);
    }

    public function new( Request $request)
    {
        $name = new Name();

        $form = $this->createFormBuilder($name)
            ->add('name', TextType::class)
            ->add('save', SubmitType::class, ['label' => 'Change Name'])
            ->getForm();
    }

    //  public function changeMyName():RedirectResponse
    //    {
    //        return $this->redirectToRoute('index');
    //    }


}
