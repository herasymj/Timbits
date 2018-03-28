<?php

class UserRequests {
	//members
	var $userRequest;
	var $userRequestCount;
	var $needApproval;
	var $needApprovalCount;
    var $completed;
    var $completedCount;
  
	//functions
    function __construct($userID)
    {
        //populate lists with user's values
    }

    function next_user_requests () {
        //get next ten requests

	}
	
	function next_need_approval(){
		//next 10 requests
	}

    function next_completed(){
        //next 10 requests
    }

    function last_user_requests () {
        //get last ten requests

    }

    function last_need_approval(){
        //last 10 requests
    }

    function last_completed(){
        //last 10 requests
    }
}

?>