<?php

namespace Policy\Model;

class Policy
{

    protected $first_name;
    protected $last_name;
    protected $start_date;
    protected $end_date;
    protected $policy_number;
    protected $premium;
    protected $id;

    public function exchangeArray(array $data)
    {

        $this->first_name = $data['first_name'];
        $this->last_name= $data['last_name'];
        $this->start_date= $data['start_date'];
        $this->end_date= $data['end_date'];
        $this->policy_number= $data['policy_number'];
        $this->premium= $data['premium'];
        $this->id= $data['id'];   

    }
    public function getArrayCopy()
    {
        return [
                'first_name' => $this->first_name, 
                'last_name' => $this->last_name,
                'start_date' => $this->start_date,
                'end_date' => $this->end_date,
                'policy_number' => $this->policy_number,
                'premium' => $this->premium,
                'id' => $this->id 
        ];  

    }
     public function getId()
    {
       return $this->id;
    }
    public function getLastName()
    {
       return $this->last_name;
    }

    public function getFirstName()
    {
       return $this->first_name;
    }
	
	public function getStartDate()
    {
       return $this->start_date;
    }
	
	public function getEndDate()
    {
       return $this->end_date;
    }
	
	public function getPolicyNumber()
    {
       return $this->policy_number;
    }
	
	public function getPremium()
    {
       return $this->premium;
    }
    
}
