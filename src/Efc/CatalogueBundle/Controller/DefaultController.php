<?php

namespace Efc\CatalogueBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function listAction()
    {
        
        $products = $this->getDoctrine()->getRepository('EfcProductBundle:Product')->findAll();

        return $this->render('@EfcCatalogue/Default/list.html.twig', [
            'page' => [
                'head' => [
                    'title' => 'catalogue list action'
                ],
                'header' => [
                    'title' => 'Catalogue'
                ]
            ],
            'products' => $products
        ]);
    }
}
