<?php
namespace App\Controller;

use KnpU\OAuth2ClientBundle\Client\ClientRegistry;
use League\OAuth2\Client\Provider\Exception\IdentityProviderException;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Class CustomerSiteController
 * @package App\Controller
 *
 * @Route(path="/auth0")
 */
class Auth0Controller
{
/**
     * @Route("/connect", name="auth_connet", methods={"GET"})
     */
    public function connectAction(ClientRegistry $clientRegistry)
    {
        // on Symfony 3.3 or lower, $clientRegistry = $this->get('knpu.oauth2.registry');

        // will redirect to Auth0!
        return $clientRegistry
            ->getClient('auth0') // key used in config/packages/knpu_oauth2_client.yaml
            ->redirect([
	    	'email' // the scopes you want to access
            ])
        ;
	}

    /**
     * After going to Auth0, you're redirected back here
     * because this is the "redirect_route" you configured
     * in config/packages/knpu_oauth2_client.yaml
     *
     * @Route("/check", name="connect_auth0_check", methods={"GET"})
     */
    public function connectCheckAction(Request $request, ClientRegistry $clientRegistry)
    {
        // ** if you want to *authenticate* the user, then
        // leave this method blank and create a Guard authenticator
        // (read below)

        /** @var \App\Provider\Auth0 $client */
        $client = $clientRegistry->getClient('auth0');

        try {
            // the exact class depends on which provider you're using
            /** @var \App\Provider\Auth0ResourceOwner $user */
            $user = $client->fetchUser();

            // do something with all this new power!
	    // e.g. $name = $user->getFirstName();
            var_dump($user); die;
            // ...
        } catch (IdentityProviderException $e) {
            // something went wrong!
            // probably you should return the reason to the user
            var_dump($e->getMessage()); die;
        }
    }
}