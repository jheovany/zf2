<?php

namespace HardwareStore\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use Zend\Db\Sql\Sql;

class MakersController extends AbstractActionController {
    
	protected $dbAdapter;

    protected $sql;

    public function dataTableAction() {

        if (!$this->dbAdapter) {
            $sm = $this->getServiceLocator();
            $this->dbAdapter = $sm->get('Zend\Db\Adapter\Adapter');
        }

        $sql = new Sql($this->dbAdapter);
        $select = $sql->select();
        $select->from('makers');
        $select->order('name');

        $adapter = new \Zend\Paginator\Adapter\DbSelect($select, $this->dbAdapter);

        $paginator = new \Zend\Paginator\Paginator($adapter);
        $paginator->setCurrentPageNumber($this->params()->fromRoute('id'));
        //$paginator->setItemCountPerPage(5);

        return new ViewModel(['page' => $paginator]);
    }
/*
    public function dataTableAction() {

        if (!$this->dbAdapter) {
            $sm = $this->getServiceLocator();
            $this->dbAdapter = $sm->get('Zend\Db\Adapter\Adapter');
        }

        $sql = 'select * from makers order by name';

	    $stmt = $this->dbAdapter->createStatement($sql);
		$result = $stmt->execute();

        return new ViewModel(['mnfctrs' => $result]);
    }
*/
    public function otherMethodAction() {
    	
        return new ViewModel(['test' => 'Otro Método']);
    }  
}

