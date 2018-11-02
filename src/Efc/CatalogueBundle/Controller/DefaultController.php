<?php

namespace Efc\CatalogueBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('@EfcCatalogue/Default/index.html.twig');
    }
}
