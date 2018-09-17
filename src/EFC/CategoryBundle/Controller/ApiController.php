<?php
namespace EFC\CategoryBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class ApiController extends Controller
{

    public function categoryAction($code)
    {
        $object = [
          'code' => $code,
          'label' => 'Custom category'
        ];
        $response = json_encode($object);
        return new Response($response);
    }

}
