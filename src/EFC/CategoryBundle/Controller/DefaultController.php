<?php
namespace EFC\CategoryBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{

    public function endpointAction()
    {
        $content = $this->get('templating')->render('EFCCategoryBundle:Default:endpoint.html.twig', [
            'endpoints' => [
                [
                    'method' => 'GET',
                    'url' => $this->get('router')->generate('efc_category_api_category', ['code' => 'first-demo-category-0-001'], UrlGeneratorInterface::ABSOLUTE_URL)
                ],
            ],
        ]);
        return new Response($content);
    }

}
