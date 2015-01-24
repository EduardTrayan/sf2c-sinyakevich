<?php
namespace EduardTrayan\WebSiteBundle\Controller\IndexController;

use EduardTrayan\CommonBundle\Controller\AbstractController;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;

/**
* @Route("/hello/{name}")
*/
class IndexController extends AbstractController
{    
    public function indexAction($name)
    {
        return new Response('<html><body>Hello '.$name.'!</body></html>');
    }
}
