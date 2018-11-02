<?php

namespace Efc\ProductBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($sku)
    {
        $product = $this->getDoctrine()->getRepository('EfcProductBundle:Product')->findOneBy(array('sku' => $sku));

        return $this->render('@EfcProduct/Default/index.html.twig', [
            'page' => [
                'head' => [
                    'title' => 'product index action'
                ],
                'header' => [
                    'title' => $product->getName()
                ]
            ],
            'product' => $product
        ]);
    }
}
