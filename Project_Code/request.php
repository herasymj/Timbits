<?php

class Request {
	//members
	var $requestID;
	var $userID;
	var $approverID;
	var $analystID;
	var $name;
	var $email;
	var $contactNum;
	var $department;
	
	var $appName;
	var $permissionType;
	var $reason;
	var $approver;
	
	var $analystApproved;
	var $approverApproved;
	var $permissionGranted;
	var $isOpen;
	
  
	//functions
	function add_value ($input_param) {
		return include ("path/some_file.php");
	}
}

?>