<?php

namespace EduardTrayan\WebSiteBundle\Controller\IndexController;
use EduardTrayan\CommonBundle\Controller\AbstractController;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\DependencyInjection\Definition;
$container->setDefinition('app.index_controller', new Definition(
    'WebSiteBundle\Controller\IndexController'
));
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
