<?php
namespace UserBundle\EventListener;
/**
 * Created by PhpStorm.
 * User: kwawrzecki
 * Date: 21/09/15
 * Time: 00:28
 */
use Lexik\Bundle\JWTAuthenticationBundle\Event\AuthenticationSuccessEvent;
use FOS\UserBundle\Model\UserInterface;

class AuthenticationSuccessListener
{
    /**
     * @param AuthenticationSuccessEvent $event
     */
    public function onAuthenticationSuccessResponse(AuthenticationSuccessEvent $event)
    {
        $data = $event->getData();
        $user = $event->getUser();


        if (!$user instanceof UserInterface) {
            return;
        }

        // $data['token'] contains the JWT

        $data['data'] = array(
            'roles' => $user->getRoles(),
        );

        //print_r($data);

        $event->setData($data);
    }
}