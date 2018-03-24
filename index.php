<?php

    /*
    Author: Brian Saylor
    04/11/2017
    handles routing using fat free framework*/

    //Require the autoload file
    require_once('vendor/autoload.php');
    session_start();

    //require("../../../config.php")
    require("../config_campsambica.php");

    try{
        //instantiate a database object
        $dbh = new PDO(DB_DSN, DB_USERNAME, DB_PASSWORD);
    }
    catch(PDOException $e){
        echo $e->getMessage();
    }

    //Create an instance of the Base class
    $f3 = Base::instance();

    $f3->set('DEBUG', 3);

    $memberDB = new MemberDB();
    $activityDB = new ActivityDB();
    $userDB = new UserDB();

    //Define a default route
    $f3->route('GET /', function($f3) {
                //echo'<h1>Hello World!</h1>';
                $view = new View;

                    $usernameCheck = $_SESSION['username'];
                    $passwordCheck = $_SESSION['password'];
                    if($usernameCheck == null || $passwordCheck == null){
                        $f3->reroute('/login');
                    }
                echo $view->render('pages/home.html');
                
    });

            $f3->route('GET /profile/information_form', function($f3){

                    $activities =  $GLOBALS['activityDB']->allActivitiesSortByName();
                    $f3->set('activities', $activities);

                    echo Template::instance()->render('pages/information_form.html');
                   });

            $f3->route('GET /information_form', function($f3){

                    $activities =  $GLOBALS['activityDB']->activeActivities();
                    $f3->set('activities', $activities);

                    $usernameCheck = $_SESSION['username'];
                    $passwordCheck = $_SESSION['password'];
                    if($usernameCheck == null || $passwordCheck == null){
                        $f3->reroute('/login');
                    }

                    echo Template::instance()->render('pages/information_form.html');
                   });


                    $f3->route('GET /login', function($f3){
                    $usernameCheck = $_SESSION['username'];
                    $passwordCheck = $_SESSION['password'];
                    
                    
                    $var1 = "Staff";
                    $var2 = "staff";

                    if($usernameCheck != null && $passwordCheck != null && $usernameCheck  == "Staff" || $usernameCheck == "staff"){
                       
                    $f3->reroute('/staff');
                    }
                    else if($usernameCheck != null && $passwordCheck != null && $usernameCheck == "Admin" || $usernameCheck == "admin"){
                      $f3->reroute('/');  
                    }

                    echo Template::instance()->render('pages/login.html');
                   });

                    $f3->route('GET /logout', function($f3){

                    session_destroy();
                        $f3->reroute('/login');

                   });

                    $f3->route('POST /loginPost', function($f3){

                    $usernameInputAttempt = $_POST['username'];
                    $passwordInputAttempt = $_POST['password'];

                    $userExists = $GLOBALS['userDB']->memberUserExists($usernameInputAttempt, $passwordInputAttempt);

                    if($userExists){
                        $_SESSION['username'] = $usernameInputAttempt;
                        $_SESSION['password'] = $passwordInputAttempt;
                        //echo $_SESSION['username'] ;
                        //echo$_SESSION['password'];
                        $f3->reroute('/login');
                    }


                    echo Template::instance()->render('pages/login.html');

                   });

        $f3->route('POST /memberCreation', function($f3){

                            //$member = new Member(
                                    //$_POST['firstname'], $_POST['lastname'], $_POST['counselor'], $_POST['activityOne'],
                                    //$_POST['activityTwo'], $_POST['activityThree'], $_POST['activityFour'], $_POST['activityFive'],
                                    //$_POST['activitySix'], $_POST['activitySeven'], $_POST['activityEight'], $_POST['activityNine']
                                    //,$_POST['activityTen']);

                            $_SESSION['member'] = $member;
                            $_SESSION['firstname'] = $_POST['firstname'];
                            $_SESSION['lastname'] = $_POST['lastname'];
                            $_SESSION['counselor'] = $_POST['counselor'];
                            $_SESSION['activityOne'] = $_POST['activityOne'];
                            $_SESSION['activityTwo'] = $_POST['activityTwo'];
                            $_SESSION['activityThree'] = $_POST['activityThree'];
                            $_SESSION['activityFour'] = $_POST['activityFour'];
                            $_SESSION['activityFive'] = $_POST['activityFive'];
                            $_SESSION['activitySix'] = $_POST['activitySix'];
                            $_SESSION['activitySeven'] = $_POST['activitySeven'];
                            $_SESSION['activityEight'] = $_POST['activityEight'];
                            $_SESSION['activityNine'] = $_POST['activityNine'];
                            $_SESSION['activityTen'] = $_POST['activityTen'];


                        $f3->set('fname', $_SESSION['firstname']);
                        $f3->set('lname', $_SESSION['lastname']);
                        $f3->set('counselor', $_SESSION['counselor']);
                        $f3->set('activityOne', $_SESSION['activityOne']);
                        $f3->set('activityTwo', $_SESSION['activityTwo']);
                        $f3->set('activityThree', $_SESSION['activityThree']);
                        $f3->set('activityFour', $_SESSION['activityFour']);
                        $f3->set('activityFive', $_SESSION['activityFive']);
                        $f3->set('activitySix', $_SESSION['activitySix']);
                        $f3->set('activitySeven', $_SESSION['activitySeven']);
                        $f3->set('activityEight', $_SESSION['activityEight']);
                        $f3->set('activityNine', $_SESSION['activityNine']);
                        $f3->set('activityTen', $_SESSION['activityTen']);


                        $memberDB = $GLOBALS['memberDB']->addMember($_SESSION['firstname'], $_SESSION['lastname'], $_SESSION['counselor'], $_SESSION['activityOne'],
                                    $_SESSION['activityTwo'], $_SESSION['activityThree'], $_SESSION['activityFour'], $_SESSION['activityFive'],
                                    $_SESSION['activitySix'], $_SESSION['activitySeven'], $_SESSION['activityEight'], $_SESSION['activityNine']
                                    ,$_SESSION['activityTen']);

                    $usernameCheck = $_SESSION['username'];
                    $passwordCheck = $_SESSION['password'];
                    
                    
                    $var1 = "Staff";
                    $var2 = "staff";

                    if($usernameCheck != null && $passwordCheck != null && $usernameCheck  == "Staff" || $usernameCheck == "staff"){
                       
                    $f3->reroute('/staff');
                    }
                    
                    else{
                        $f3->reroute('/information_form');
                    }
                   });
        
        $f3->route('POST /memberUpdate', function($f3){

                            //$member = new Member(
                                    //$_POST['firstname'], $_POST['lastname'], $_POST['counselor'], $_POST['activityOne'],
                                    //$_POST['activityTwo'], $_POST['activityThree'], $_POST['activityFour'], $_POST['activityFive'],
                                    //$_POST['activitySix'], $_POST['activitySeven'], $_POST['activityEight'], $_POST['activityNine']
                                    //,$_POST['activityTen']);

                            
                            $_SESSION['firstname'] = $_POST['firstname'];
                            $_SESSION['lastname'] = $_POST['lastname'];
                            $_SESSION['counselor'] = $_POST['counselor'];
                            $_SESSION['activityOne'] = $_POST['activityOne'];
                            $_SESSION['activityTwo'] = $_POST['activityTwo'];
                            $_SESSION['activityThree'] = $_POST['activityThree'];
                            $_SESSION['activityFour'] = $_POST['activityFour'];
                            $_SESSION['activityFive'] = $_POST['activityFive'];
                            $_SESSION['activitySix'] = $_POST['activitySix'];
                            $_SESSION['activitySeven'] = $_POST['activitySeven'];
                            $_SESSION['activityEight'] = $_POST['activityEight'];
                            $_SESSION['activityNine'] = $_POST['activityNine'];
                            $_SESSION['activityTen'] = $_POST['activityTen'];


                        /*$f3->set('fname', $_SESSION['firstname']);
                        $f3->set('lname', $_SESSION['lastname']);
                        $f3->set('counselor', $_SESSION['counselor']);
                        $f3->set('activityOne', $_SESSION['activityOne']);
                        $f3->set('activityTwo', $_SESSION['activityTwo']);
                        $f3->set('activityThree', $_SESSION['activityThree']);
                        $f3->set('activityFour', $_SESSION['activityFour']);
                        $f3->set('activityFive', $_SESSION['activityFive']);
                        $f3->set('activitySix', $_SESSION['activitySix']);
                        $f3->set('activitySeven', $_SESSION['activitySeven']);
                        $f3->set('activityEight', $_SESSION['activityEight']);
                        $f3->set('activityNine', $_SESSION['activityNine']);
                        $f3->set('activityTen', $_SESSION['activityTen']);*/


                        $memberDB = $GLOBALS['memberDB']->updateMember($_SESSION['searchEditId'], $_SESSION['firstname'], $_SESSION['lastname'], $_SESSION['counselor'], $_SESSION['activityOne'],
                                    $_SESSION['activityTwo'], $_SESSION['activityThree'], $_SESSION['activityFour'], $_SESSION['activityFive'],
                                    $_SESSION['activitySix'], $_SESSION['activitySeven'], $_SESSION['activityEight'], $_SESSION['activityNine']
                                    ,$_SESSION['activityTen']);

                    $usernameCheck = $_SESSION['username'];
                    $passwordCheck = $_SESSION['password'];
                    
                    
                    $var1 = "Staff";
                    $var2 = "staff";

                    if($usernameCheck != null && $passwordCheck != null && $usernameCheck  == "Staff" || $usernameCheck == "staff"){
                       
                    $f3->reroute('/staff');
                    }
                    
                    else{
                        $f3->reroute('/displaymembers');
                    }
                   });

                    //This method sends the members that are searched to be displayed in the new page
                            $f3->route('POST /displaymembers', function($f3){
                                
                                $search = trim($_POST['get_name']);
                            
                                $get_name = $GLOBALS['memberDB']->getMemberName($search);
                               
                                $f3->set('members', $get_name);
                                
                                echo Template::instance()->render('pages/display_search.html');    
                            });
                            
                        $f3->route('GET /display_search/@id', function($f3, $params){

                                       $_SESSION['searchEditId'] = $params['id'];
                                   
                                   $f3->reroute('/edit_search');
                            });
                        
                        $f3->route('GET /edit_search', function($f3){
                                        
                            $member = $GLOBALS ['memberDB']->memberByID($_SESSION['searchEditId']);
                                    $activities =  $GLOBALS['activityDB']->activeActivities();
                                       
                                           $f3->set('members', $member);
                                           $f3->set('activities', $activities);
                                   
                            echo Template::instance()->render('pages/edit_search_user.html');
                            });
                            
                            //This method deletes one person from the database
                            $f3->route('GET /deletePerson/@id', function($f3, $params){
                                    
                                    $member = $GLOBALS ['memberDB']->deleteOneMember($params['id']);
                                    
                                    $f3->reroute('/displaymembers');
                            });
		


        $f3->route('GET /displaymembers', function($f3) {

                $members = $GLOBALS['memberDB']->allMembers();

                //Assign the members to an f3 variable
                $f3->set('members', $members);

                    $usernameCheck = $_SESSION['username'];
                    $passwordCheck = $_SESSION['password'];
                    if($usernameCheck == null || $passwordCheck == null){
                        $f3->reroute('/login');
                    }

                echo Template::instance()->render('pages/displaymembers.html');
            });

        $f3->route('GET /deletemembers', function($f3) {

                    $usernameCheck = $_SESSION['username'];
                    $passwordCheck = $_SESSION['password'];
                    if($usernameCheck == null || $passwordCheck == null){
                        $f3->reroute('/login');
                    }
                $members = $GLOBALS['memberDB']->deleteMembers();

                // Removed profile off the path
                $f3->reroute('/displaymembers');
            });


        // this method reroutes here ----->echo Template::instance()->render('pages/sortGroups.html');
        //Groups are sorted here

        $f3->route('GET /activities', function($f3) {
                    $usernameCheck = $_SESSION['username'];
                    $passwordCheck = $_SESSION['password'];
                    if($usernameCheck == null || $passwordCheck == null){
                        $f3->reroute('/login');
                    }
                $activeActivities =  $GLOBALS['activityDB']->activeActivities();
                $disabledActivities =  $GLOBALS['activityDB']->disabledActivities();
                    $f3->set('activeActivities', $activeActivities);
                    $f3->set('disabledActivities', $disabledActivities);

                echo Template::instance()->render('pages/activities.html');
            });

                $f3->route('POST /activityCreate', function($f3) {

                        $_SESSION['activity'] = $_POST['activity'];
                        $_SESSION['camper_limit'] = $_POST['camper_limit'];

                        $activityDB = $GLOBALS['activityDB']->addActivity($_POST['activity'], $_POST['camper_limit']);

                    $f3->reroute('/activities');
                });

                $f3->route('GET /delete/@id', function($f3, $params) {

                        $_SESSION['id'] = $params['id'];

                        $activityDB = $GLOBALS['activityDB']->deleteActivity($_SESSION['id']);

                    $f3->reroute('/activities');
                });

                $f3->route('GET /disable/@id', function($f3, $params) {

                        $activityDB = $GLOBALS['activityDB']->disableActivity($params['id']);

                    $f3->reroute('/activities');
                });

                $f3->route('GET /activate/@id', function($f3, $params) {

                        $activityDB = $GLOBALS['activityDB']->activateActivity($params['id']);

                    $f3->reroute('/activities');
                });

        $f3->route('POST /edit/@id', function($f3, $params) {

                        $_SESSION['id'] = $params['id'];
                        $_SESSION['activity'] = $_POST['activity'];
                        $_SESSION['camper_limit'] = $_POST['camper_limit'];

                        $activityDB = $GLOBALS['activityDB']->editActivity($_SESSION['id'], $_SESSION['activity'], $_SESSION['camper_limit']);

                    $f3->reroute('/activities');
        });
        
                $f3->route('GET /staff', function($f3){
                        
                    $usernameCheck = $_SESSION['username'];
                    $passwordCheck = $_SESSION['password'];

                    if($usernameCheck == null || $passwordCheck == null){
                        $f3->reroute('/login');
                    }
                    
                    $activities =  $GLOBALS['activityDB']->activeActivities();
                    $f3->set('activities', $activities);

                    $usernameCheck = $_SESSION['username'];
                    $passwordCheck = $_SESSION['password'];


                    echo Template::instance()->render('pages/information_form_staff.html');
                   });

    $f3->route('GET /exportData', function($f3){
      require("/model/exportData.php");
    });

    require("./indexRequire/brian.php");
    require("./indexRequire/kevin.php");
    require("./indexRequire/ted.php");
    require("./indexRequire/travis.php");

    //Run fat free
    $f3->run();
?>
