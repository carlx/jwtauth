<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Simple;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Events\SimpleEvent;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        $simple = new Simple();
        $simple->setName('Janek');
        $this->getDoctrine()->getManager()->persist($simple);
        $this->getDoctrine()->getManager()->flush();

        $this->getDoctrine()->getRepository('AppBundle:Simple');



        print_r($this->getDoctrine()->getRepository('AppBundle:Simple')->find(5));

        $this->get('example.service')->exampleMethod();
        // replace this example code with whatever you need
        return $this->render('default/index.html.twig', array(
            'base_dir' => realpath($this->container->getParameter('kernel.root_dir').'/..'),
        ));
    }

    /**
     * @Route("/eventtest", name="eventtest")
     */
    public function eventAction(Request $request)
    {
        $simple = new Simple();

        $event = new SimpleEvent($simple);

        $this->get('event_dispatcher')->dispatch('simple.created', $event);

        return new JsonResponse();
    }


}
