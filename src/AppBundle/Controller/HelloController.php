<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use FOS\RestBundle\Controller\FOSRestController;
use FOS\RestBundle\Controller\Annotations;

class HelloController extends FOSRestController
{

    /**
    * @return array
    *
    * @throws NotFoundHttpException when page not exist
    */

    public function getHelloWorldAction()
    {
        return ["Hello World"];
    }




}
