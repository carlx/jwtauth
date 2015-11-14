<?php

namespace AppBundle\Tests\Services;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Extension\Extension;
use Symfony\Component\Security\Acl\Exception\Exception;
use Symfony\Component\DependencyInjection\Extension\ExtensionInterface;
use \AppKernel;
use \DateTime;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\HttpKernel\Exception\HttpException;
use Symfony\Component\Validator\Constraints\Date;

require_once(__DIR__ . "/../../../../app/AppKernel.php");


class ExampleServiceTest extends \PHPUnit_Framework_TestCase
{

    protected $container;
    protected $em;


    public function __construct() {
        $kernel = new AppKernel("test", true);
        $kernel->boot();
        $this->container = $kernel->getContainer();
        $this->em = $this->container->get('doctrine.orm.entity_manager');
        parent::__construct();
    }


    public function setUp()
    {
        //uruchamine przed kazdym testem
    }

    /**
     *
     *
     */
    public function testExampleService()
    {

        $result = $this->container->get('example.service')
            ->exampleMethod();

        $this->assertEquals(0, $result);
    }

    public function tearDown()
    {
        //uruchamiane po kazdym tescie
    }

}
