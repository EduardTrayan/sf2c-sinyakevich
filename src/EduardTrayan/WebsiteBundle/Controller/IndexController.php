<?php

namespace EduardTrayan\WebSiteBundle\Controller;

use EduardTrayan\CommonBundle\Controller;

class IndexController extends AbstractController
{
    /**
     *
     * @return \EduardTrayan\WebsiteBundle\Controller\AbstractController\Response
     */
   public function indexAction()
    {
        return new Response('<html><body>Hello world!</body></html>');
    }
}
