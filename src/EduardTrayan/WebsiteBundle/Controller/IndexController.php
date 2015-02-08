<?php

namespace EduardTrayan\WebsiteBundle\Controller;

use EduardTrayan\CommonBundle\Controller\AbstractController;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;

class IndexController extends AbstractController
{    
    public function indexAction($name)
    {
        //return new Response('<html><body>Hello '.$name.'!</body></html>');
        return $this->render('EduardTrayanWebSiteBundle:Index:index.html.twig', array('name' => $name));
        // render a PHP template instead 
        // return $this->render('EduardTrayanWebSiteBundle:Index:index.html.php', array('name' => $name));
    }
}
