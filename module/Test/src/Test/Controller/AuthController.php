<?php

namespace Test\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class AuthController extends AbstractActionController
{

    public function indexAction()
    {
        $index = 'This is the index </br>';

        return new ViewModel(array('index' => $index));
    }

    public function showAction()
    {

        return new ViewModel(array('name' => 'Jheovany Menjivar', 'age' => 24));
    }


}

