<?php

namespace App\Controller;

use App\Entity\ContactEmail;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction()
    {
        // replace this example code with whatever you need
        return $this->render('index.html.twig',compact('ping') );
    }


    /**
     * @Route("/contact", name="contact")
     * @var $request Request
     * @return Response
     */
    public function contactAction(Request $request)
    {
        // creates a task and gives it some dummy data for this example
        $task = new ContactEmail();

        $form = $this->createFormBuilder($task)
            ->add('name', TextType::class)
            ->add('email', TextType::class)
            ->add('phone', TextType::class)
            ->add('comments', TextareaType::class)
            ->add('save', SubmitType::class, array('label' => 'Submit'))
            ->getForm();


        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // $form->getData() holds the submitted values
            // but, the original `$task` variable has also been updated
            $task = $form->getData();

            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($task);
            $entityManager->flush();

            return $this->redirectToRoute('contact_success');
        }

        return $this->render('contact.html.twig', array(
            'form' => $form->createView(),
        ));
    }

}
