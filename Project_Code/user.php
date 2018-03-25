<?php

class User {
	//members
	var $id;
	var $firstName;
	var $lastName;
	var $email;
	var $isApprover;
	var $isAnalyst;
  
	//functions
	function set_user ($id, $first, $last, $email, $approver, $analyst) {
		$this->id = $id;
		$this->firstName = $first;
		$this->lastName = $last;
		$this->email = $email;
		$this->isApprover = $approver;
		$this->isAnalyst = $analyst;
	}
}

?>