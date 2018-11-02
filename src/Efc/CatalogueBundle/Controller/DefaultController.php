<?php

namespace Efc\CatalogueBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function listAction()
    {
        return $this->render('@EfcCatalogue/Default/list.html.twig', [
            'page' => [
                'head' => [
                    'title' => 'catalogue list action'
                ],
                'header' => [
                    'title' => 'Catalogue'
                ]
            ],
            'products' => [
                [
                    'sku' => 'ref_0001',
                    'name' => 'placeholder0001'
                ],
                [
                    'sku' => 'ref_0002',
                    'name' => 'placeholder0002'
                ]
            ]
        ]);
    }
}
