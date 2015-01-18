<?php

namespace EduardTrayan\WebSiteBundle\Controller\IndexController;

use EduardTrayan\CommonBundle\Controller\AbstractController;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class IndexController extends AbstractController
{
    /**
     * @Route("/hello/{name}")
     */
    public function indexAction($name)
    {
        return new Response('<html><body>Hello world!</body></html>');
    }
}
