<?php
/**
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2016 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Policy\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class IndexController extends AbstractActionController
{
    protected $table;
	public function __construct($table)
	{
		$this->table = $table;
	}
    public function indexAction()
    {
    	$policies=$this->table->fetchAll();
    	
        return new ViewModel();
    }

    public function addAction()
    {
    	$form = new \Policy\Form\PolicyForm();
        $form->get('submit')->setAttribute('class', 'btn btn-success');

         $request = $this->getRequest();
 
         if (! $request->isPost()) {
             return new ViewModel([
                 'form' => $form
             ]);
         }
 
         $policy = new \Policy\Model\Policy();
 
         $form->setData($request->getPost());
 
         if (! $form->isValid()) {
             exit('not valid');
         }
 
         $policy->exchangeArray($form->getData());
 
         $this->table->savePolicy($policy);
 
         return $this->redirect()->toRoute('policy', [
           'controller' => 'index',
           'action' => 'list'
         ]);
		 
    }
     public function editAction()
     {
 
         $id = (int) $this->params()->fromRoute('id',0);
 
         if ($id == 0) {
             exit('invalid id');
         }
 
         try {
             $policy = $this->table->getPolicy($id);
         } catch(\Exception $e) {
             exit('Error with Policy table');
         }
 
         $form = new \Policy\Form\PolicyForm();
 
         $form->bind($policy);
 
         $request = $this->getRequest();
 
         //if not post request
         if (! $request->isPost()) {
             return new ViewModel([
                 'form' => $form,
                 'id' => $id
             ]);
         }
 
         $form->setData($request->getPost());
 
         if (! $form->isValid()) {
             exit('not valid');
         }
 
         $this->table->savePolicy($policy);
 
         return $this->redirect()->toRoute('policy', [
           'controller' => 'index',
           'action' => 'list',
           'id' => $id
         ]);
		 
 
     }

     public function listAction()
     {
        return new ViewModel([
            'policies' => $this->table->fetchAll()
        ]);

     }
     public function deleteAction()
     {
 
         $id = (int) $this->params()->fromRoute('id',0);
 
         if ($id == 0) {
             exit('invalid id');
         }
 
         try {
             $policy = $this->table->getPolicy($id);
         } catch(\Exception $e) {
             exit('Error with Policy table');
         }
 
         $request = $this->getRequest();
 
         //if not post request
         if (! $request->isPost()) {
             return new ViewModel([
                 'policy' => $policy,
                 'id' => $id
             ]);
         }
         //if post request

         $del = $request->getPost('del','No');
         if($del=='Yes')
         {
            $id = (int) $policy->getId();
            $this->table->deletePolicy($id);
         }
            $this->redirect()->toRoute('policy',['action' => 'list']);
     }
}
