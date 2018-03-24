<?php
	/*//This method sends the members that are searched to be displayed in the new page
        $f3->route('POST /displaymembers', function($f3){
            
            $search = trim($_POST['get_name']);
        
            $get_name = $GLOBALS['memberDB']->getMemberName($search);
           
            $f3->set('members', $get_name);
            
            echo Template::instance()->render('pages/display_search.html');    
        });
		
	$f3->route('GET /display_search/@id', function($f3, $params){
                    
		$member = $GLOBALS ['memberDB']->memberByID($params['id']);
                $activities =  $GLOBALS['activityDB']->allActivities();
                   
                       $f3->set('members', $member);
                       $f3->set('activities', $activities);
		       
		echo Template::instance()->render('pages/edit_search.html');
        });
        
        //This method deletes one person from the database
        $f3->route('GET /deletePerson/@id', function($f3, $params){
                
                $member = $GLOBALS ['memberDB']->deleteOneMember($params['id']);
                
                $f3->reroute('/displaymembers');
        });
		