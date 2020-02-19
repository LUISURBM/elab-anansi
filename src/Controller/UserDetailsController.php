<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class UserDetailsController
{
    /**
     * @Route("/user/details", name="user_details")
     */
    public function index()
    {
         return new Response(
            '<html><body>Lucky number: 8</body></html>'
        );
    }

    /**
 * @Route("/customers/{id}", name="get_one_customer", methods={"GET"})
 */
public function get($id)
{
     return new JsonResponse(['status' => 'Customer created!'], Response::HTTP_CREATED);
}
}
