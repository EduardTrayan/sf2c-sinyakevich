<?php
namespace EduardTrayan\CommonBundle\Controller\AbstractController;
/**
 * Class CommonController
 * @package EduardTrayan\CommonBundle\Controller
 */
use Symfony\Component\DependencyInjection\Definition;

$container->setDefinition('app.abstract_controller', new Definition(
    'CommonBundle\Controller\AbstractController'
));
abstract class AbstractController
{
}