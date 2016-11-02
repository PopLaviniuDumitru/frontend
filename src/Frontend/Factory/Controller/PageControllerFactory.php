<?php
/**
 * @copyright: DotKernel
 * @library: dotkernel/dot-frontend
 * @author: n3vrax
 * Date: 7/18/2016
 * Time: 9:55 PM
 */

namespace Dot\Frontend\Factory\Controller;

use Dot\Frontend\Controller\PageController;
use Interop\Container\ContainerInterface;

/**
 * Class PageControllerFactory
 * @package Dot\Frontend\Factory\Controller
 */
class PageControllerFactory
{
    /**
     * @param ContainerInterface $container
     * @return PageController
     */
    public function __invoke(ContainerInterface $container)
    {
        return new PageController();
    }
}