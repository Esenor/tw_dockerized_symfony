<?php

namespace Efc\ProductBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($sku)
    {
        return $this->render('@EfcProduct/Default/index.html.twig', [
            'page' => [
                'head' => [
                    'title' => 'product index action'
                ],
                'header' => [
                    'title' => 'Products'
                ]
            ],
            'product' => [
                'sku' => 'ref_0001',
                'name' => 'placeholder0001'
            ]
        ]);
    }
}
