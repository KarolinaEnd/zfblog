<?php
/**
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2016 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace BlogAdmin;

use Zend\ModuleManager\ModuleManager;
use Zend\Mvc\MvcEvent;
use Zend\EventManager\EventInterface as Event;

class Module
{

    const VERSION = '3.0.3-dev';

    public function init(ModuleManager $manager)
    {
        // Get event manager.
        $eventManager = $manager->getEventManager();
        $sharedEventManager = $eventManager->getSharedManager();
        $sharedEventManager->attach(__NAMESPACE__, 'dispatch', [$this, 'onDispatch'], 100);

    }

    public function onDispatch(MvcEvent $event)
    {
          $event->getTarget()->layout('template/layout');
    }

    public function getConfig()
    {
        return include __DIR__ . '/../config/module.config.php';
    }

}
