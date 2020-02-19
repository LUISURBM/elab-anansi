<?php

namespace App\Controller;

use App\Repository\UserRepository;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Class CustomerSiteController
 * @package App\Controller
 *
 * @Route(path="/customer")
 */
class CustomerController
{
    private $userRepository;

    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    /**
     * @Route("/add", name="add_customer", methods={"POST"})
     */
    public function addCustomer(Request $request)
    {
        $customers = $this->userRepository->findAll();
        $data = [];

        foreach ($customers as $customer) {
            $data[] = [
                'id' => $customer->getUserId(),
                'firstName' => $customer->getUserName()
            ];
        }

        return new JsonResponse(['users' => $data], Response::HTTP_OK);
    }

        /**
     * @Route("/get", name="add_customer", methods={"GET"})
     */
    public function getCustomer(Request $request)
    {
        $customers = $this->userRepository->findAll();
        $data = [];

        foreach ($customers as $customer) {
            $data[] = [
                'id' => $customer->getUserId(),
                'firstName' => $customer->getUserName()
            ];
        }

        return new JsonResponse(['users' => $data], Response::HTTP_OK);
    }

    /**
     * @Route("/get-all", name="get_all_customers", methods={"GET"})
     */
    public function getAllCustomers(): JsonResponse
    {
            return new Response(
            '<html><body>Lucky number: '.$number.'</body></html>'
        );
    }

    /**
     * @Route("/update/{id}", name="update_customer", methods={"PUT"})
     */
    public function updateCustomer($id, Request $request): JsonResponse
    {
            return new Response(
            '<html><body>Lucky number: '.$number.'</body></html>'
        );
    }

    /**
     * @Route("/delete/{id}", name="delete_customer", methods={"DELETE"})
     */
    public function deleteCustomer($id): JsonResponse
    {
            return new Response(
            '<html><body>Lucky number: '.$number.'</body></html>'
        );
    }
}