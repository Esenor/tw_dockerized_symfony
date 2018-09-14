<?php

namespace EFC\CategoryBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('EFCCategoryBundle:Default:index.html.twig');
    }
}
