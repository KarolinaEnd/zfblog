<?php
/**
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2016 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace BlogAdmin\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class LoginController extends AbstractActionController
{

    public function loginAction()
    {

        $layout = new ViewModel([
          'pageTitle' => 'Login'
        ]);


        $layout->setTerminal(true);
        $layout->setTemplate('template/simple');

        $content = new ViewModel();
        $content->setTemplate('blog-admin/login/login');

        $layout->addChild($content, 'content');

        return $layout;

    }

}
