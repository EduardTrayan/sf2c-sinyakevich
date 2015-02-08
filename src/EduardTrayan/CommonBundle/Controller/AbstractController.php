<?php

namespace EduardTrayan\CommonBundle\Controller;

use Symfony\Component\Templating\EngineInterface;

/**
 * Class CommonController
 * @package EduardTrayan\CommonBundle\Controller
 */
abstract class AbstractController
{
// public function generateUrl($route, $parameters = array(), $referenceType = UrlGeneratorInterface::ABSOLUTE_PATH)
// {
//   return $this->container->get('router')->generate($route, $parameters, $referenceType);
// }

    public function setTemplating($templating)
    {
        return $this->templating = $templating;
    }
    
    public function render($view, $parameters = array())
    {
        return new Response($this->templating->render($view, $parameters));
    }
}