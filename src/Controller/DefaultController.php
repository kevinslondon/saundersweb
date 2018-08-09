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
use Swift_Mailer;
use Swift_Message;

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
     * @var
     * @return Response
     */
    public function contactAction(Request $request, Swift_Mailer $mailer)
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
            /**
             * @var ContactEmail
             */
            $task = $form->getData();

            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($task);
            $entityManager->flush();

            $this->send_contact_email($task->getName(), $task->getEmail(),$task->getPhone(), $task->getComments(), $mailer);

            return $this->redirectToRoute('contact_success');
        }

        return $this->render('contact.html.twig', array(
            'form' => $form->createView(),
        ));
    }


    private function send_contact_email($name, $email, $phone, $message, Swift_Mailer $mailer)
    {
        $params = compact($name,$email,$phone, $message);
        $message = (new \Swift_Message('Contact from Saunders Web Solutions'))
            ->setFrom('send@example.com')
            ->setTo($email)
            ->setBody(
                $this->renderView(
                    'emails/contact.html.twig',
                    $params
                ),
                'text/html'
            )

            ->addPart(
                $this->renderView(
                    'emails/contact.txt.twig',
                    $params
                ),
                'text/plain'
            )

        ;

        $mailer->send($message);
    }

}
