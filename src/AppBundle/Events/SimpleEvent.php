<?php
namespace AppBundle\Events;
/**
 * Created by PhpStorm.
 * User: kwawrzecki
 * Date: 21/02/16
 * Time: 15:07
 */
class SimpleEvent extends \Symfony\Component\EventDispatcher\GenericEvent
{
    protected $simple;

    public function __construct(\AppBundle\Entity\Simple $simple, array $arguments = [])
    {
        parent::__construct($simple, $arguments);
    }

    public function getSimple()
    {
        return $this->getSubject();
    }

}