<?php

namespace AppBundle\Events;

use AppBundle\Events\SimpleEvent;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;


class SimpleListener implements EventSubscriberInterface
{

    public function created(SimpleEvent $simpleEvent)
    {
        var_dump('Sukces');

    }

    /**
     * {@inheritdoc}
     */
    public static function getSubscribedEvents()
    {
        return array(
            'simple.created'  => 'created'
        );
    }

}