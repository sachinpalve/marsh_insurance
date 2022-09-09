<?php
namespace Policy\Form;

//use Zend\Form\Form;
use Zend\Form\Form;

class PolicyForm extends Form
{

    public function __construct()
    {
        parent::__construct('policy');

        $this->setAttribute('method', 'POST');
		
        $this->add([
            'name' => 'id',
            'type' => 'hidden'
        ]);

        $this->add([
            'name' => 'first_name',
            'id' => 'first_name',
            'type' => 'text',
			'attributes' => [
               'id' => 'first_name',
			   'required' => 'required',
            ],
            'options' => [
                'label' => 'First name'
            ]
        ]);
		
		$this->add([
            'name' => 'last_name',
            'id' => 'last_name',
            'type' => 'text',
			'attributes' => [
               'id' => 'last_name',
			   'required' => 'required',
            ],
            'options' => [
                'label' => 'Last name'
            ]
        ]);
		
		$this->add([
            'name' => 'start_date',
            'type' => 'text',
			'attributes' => [
               'id' => 'start_date',
			   'required' => 'required',
            ],
            'options' => [
                'label' => 'Start Date'
            ]
        ]);
		
		$this->add([
            'name' => 'end_date',
            'id' => 'end_date',
            'type' => 'text',
			'attributes' => [
               'id' => 'end_date',
			   'required' => 'required',
            ],
            'options' => [
                'label' => 'End Date'
            ]
        ]);

        $this->add([
            'name' => 'policy_number',
            'id' => 'policy_number',
            'type' => 'text',
			'attributes' => [
               'id' => 'policy_number',
			   'required' => 'required',
            ],
            'options' => [
                'label' => 'Policy Number'
            ]
        ]);
		
		$this->add([
            'name' => 'premium',
            'type' => 'text',
			'attributes' => [
               'id' => 'premium',
			   'required' => 'required',
            ],
            'options' => [
                'label' => 'Premium'
            ]
        ]);
		
        $this->add([
            'name' => 'submit',
            'type' => 'submit',
            'attributes' => [
               'value' => 'Save',
               'id'    => 'buttonSave'
            ]
        ]);

    }

}
