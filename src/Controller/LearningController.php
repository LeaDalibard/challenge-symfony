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
use Symfony\Component\HttpFoundation\Session\SessionInterface;


class LearningController extends AbstractController
{
    private $session;

    public function __construct(SessionInterface $session)
    {
        $this->session = $session;
    }

    /**
     * @Route("/", name="homepage")
     */
    public function index(): Response
    {

        return $this->render('learning/index.html.twig', [
            'controller_name' => 'HomepageController',
        ]);
    }

    /**
     * @Route("/about-me", name="aboutMe")
     */

    public function aboutMe(): Response
    {
        return $this->render('learning/about-me.html.twig', [
            'name' => $name,
        ]);
    }

    /**
     * @Route("/show-my-name", name="show-my-name")
     */

    public function showMyName(): Response
    {
        $name = 'Unknown';
        return $this->render('learning/show-my-name.html.twig', [
            'name' => $name,
        ]);
    }

    /**
     * @Route("/changemyname", name="changemyname", methods="GET")
     */

    public function changeMyName(Request $request): Response
    {
        $name=$request->query->get("name");

        $this->session->set('name', $name);

        return $this->render('learning/change-my-name.html.twig', [
            "name" =>  $this->session->get('name'),
        ]);
    }


    //(if(session->get('name)) {} else {}
//change to POST, POST['name']

    //public function new(Request $request)
    //    {
    //        $name = new Name();
    //
    //        $form=$this->createForm(NameType::class,$name);
    //
    //        $form->handleRequest($request);
    //        if($form->isSubmitted() && $form->isValid()){
    //            $name=$form->getData();
    //            return $this->redirectToRoute('index');
    //        }
    //
    //        return $this->render('learning/about-me.html.twig',['form'=>$form->createView(),]);
    //    }


    //  public function changeMyName():RedirectResponse
    //    {
    //        return $this->redirectToRoute('index');
    //    }


}
