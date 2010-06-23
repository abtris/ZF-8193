<?php

require_once 'Zend/Test/PHPUnit/ControllerTestCase.php';

class IndexControllerTest extends Zend_Test_PHPUnit_ControllerTestCase
{


    public $application;

    public function setUp()
    {
        $this->application = new Zend_Application(
            APPLICATION_ENV,
            APPLICATION_PATH . '/configs/application.ini'
        );

        $this->bootstrap = array($this, 'appBootstrap');
        parent::setUp();
    }

    public function appBootstrap()
    {
        $this->application->bootstrap();
    }

    public function testIndexAction() {
        
//        var_dump($this->_frontController->getParam('bootstrap'));
        
        $this->dispatch('/');
        $this->assertType('Zend_Application_Bootstrap_Bootstrap', $this->_frontController->getParam('bootstrap')); // FAILURE
    }


    
}

