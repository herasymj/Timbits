<?php

class Request {
	//members
	var $requestID;
	var $userID;
	var $approverID;
	var $analystID;
	var $appID;
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
	var $dateSubmitted;
  
	//functions
	function __construct ($req_id, $uID, $approverID, $analystID, $appID, $userName, $email, $num, $department,
                          $app, $permission, $reason, $approverName, $analystApproved, $approverApproved, $permissionGranted,
                          $isOpen, $dateSubmitted) {
        $this->requestID = $req_id;
        $this->userID = $uID;
        $this->approverID = $approverID;
        $this->analystID = $analystID;
        $this->appID = $appID;
        $this->name = $userName;
        $this->email = $email;
        $this->contactNum = $num;
        $this->department = $department;
        $this->appName = $app;
        $this->permissionType = $permission;
        $this->reason = $reason;
        $this->approver = $approverName;
        $this->analystApproved = $analystApproved;
        $this->approverApproved = $approverApproved;
        $this->permissionGranted = $permissionGranted;
        $this->isOpen = $isOpen;
        $this->dateSubmitted = $dateSubmitted;
	}
}

?>