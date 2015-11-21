<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Simple;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
//        $simple = new Simple();
//        $simple->setName('Janek');
//        $this->getDoctrine()->getManager()->persist($simple);
//        $this->getDoctrine()->getManager()->flush();
        $this->getDoctrine()->getRepository('AppBundle:Simple');



        print_r($this->getDoctrine()->getRepository('AppBundle:Simple')->find(1));

        $this->get('example.service')->exampleMethod();
        // replace this example code with whatever you need
        return $this->render('default/index.html.twig', array(
            'base_dir' => realpath($this->container->getParameter('kernel.root_dir').'/..'),
        ));
    }
}
