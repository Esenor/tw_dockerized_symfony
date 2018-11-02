<?php

namespace Efc\EcommerceBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('@EfcEcommerce/Default/index.html.twig', [
            'page' => [
                'head' => [
                    'title' => 'ecommerce index action'
                ],
                'header' => [
                    'title' => 'Home'
                ]
            ]
        ]);
    }
}
