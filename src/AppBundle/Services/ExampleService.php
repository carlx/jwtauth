<?php
/**
 * Created by PhpStorm.
 * User: kwawrzecki
 * Date: 22/10/15
 * Time: 20:42
 */

namespace AppBundle\Services;


use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\EntityManager;
use Monolog\Logger;
use Symfony\Component\HttpKernel\Exception\HttpException;
use Symfony\Component\Validator\Constraints\Date;
use \DateTime;

class ExampleService
{
    private $entityManager;
    private $logger;

    public function __construct(EntityManager $entityManager, Logger $logger)
    {
        $this->entityManager = $entityManager;
        $this->logger = $logger;
    }

    public function exampleMethod()
    {
        return 0;
    }


}