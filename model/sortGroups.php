<?php/*
$f3->route('GET /sortGroups', function($f3) {
                    $usernameCheck = $_SESSION['username'];
                    $passwordCheck = $_SESSION['password'];
                    if($usernameCheck == null || $passwordCheck == null){
                        $f3->reroute('/login');
                    }
                //variables created to be used in the nested for each loops
                $activityArray = array();
                $activities =  $GLOBALS['activityDB']->allActivities();
                
                //these need to be reset before the nested for each
                $count = 0;
                $current = 1;
                $activityCounter = 0;
                
                
                //this nested for each stores the members alphabetically by their first activity choice
                foreach($activities as $value)
                {
                    foreach($value as $activity)
                    {
                        if($count == $current)
                        {
                            //echo $activity;
                            //echo "<br>";
                            $activityArray[$activityCounter] = $GLOBALS['memberDB']->membersByActivityOne($activity);
                            $current = $current + 3;
                            $activityCounter++;
                        }
                        $count++;
                    }
                }
                
                //these need to be reset before the nested for each
                $count = 0;
                $current = 2;
                $itemCounter = 1;
                $activityCounter = 0;
                $limitArray = array();
                
                //this nested for each stores the camper_limits in alphabetical order in an array
                foreach($activities as $value)
                {
                    foreach($value as $activity)
                    {
                        if($count == $current)
                        {
                            //echo "inside " . $activity;
                            //echo "<br>";
                            $limitArray[$activityCounter] = $activity;
                            $current = $current + 3;
                            $activityCounter++;
                        }
                        $count++;
                    }
                    
                }
                
                //these need to be reset before the nested for each
                $count = 0;
                $limitCounter = 0;
                $camperCounter = 0;
                $current = 0;
                $itemCounter = 1;
                $memberID = "";
                $memberActivity = "";
                
                //this nested for each stores the camper_limits in alphabetical order in an array
                foreach($activityArray as $memberArray)
                {
                    //echo "Limit Counter: $limitCounter";
                    //echo "<br>";
                    foreach($memberArray as $member)
                    {
                        //echo "Number of campers: $camperCounter";
                        //echo "<br>";
                        foreach($member as $memberInfo)
                        {
                            if($count == $current)
                            {    
                                if(($itemCounter == 1))
                                {
                                    $memberID = $memberInfo;
                                    //echo "member id: $memberID";
                                    //echo "<br>";
                                    $current = $current + 3;
                                }
                                else if(($itemCounter == 2))
                                {
                                    //echo "member activity: $memberActivity";
                                    //echo "<br>";
                                    $memberActivity = $memberInfo;
                                    //echo "Limit array: $limitArray[$limitCounter]";
                                    //echo "<br>";
                                    if($camperCounter < $limitArray[$limitCounter])
                                    {
                                        echo "camper counter: $camperCounter ---- limit array: $limitArray[$limitCounter]";
                                        echo "<br>";
                                        $memberUpdate = $GLOBALS['memberDB']->updateMembersDays("Monday", $memberActivity, $memberID);
                                    }
                                    $itemCounter = 0;
                                    $current = $current + 1;
                                }
                                $itemCounter++;         
                            }
                            $count++; 
                        }
                        $camperCounter++;
                    }
                    $camperCounter = 0;
                    $limitCounter++;
                }
                
                
                
                /*//variables created to be used in the nested for each loops
                $activityArray = array();
                $limitArray = array();
                $activities =  $GLOBALS['activityDB']->allActivities();
                
                //these need to be reset before the nested for each
                $count = 0;
                $current = 1;
                $activityCounter = 0;
                
                
                //this nested for each stores the members alphabetically by their first activity choice
                foreach($activities as $value)
                {
                    foreach($value as $activity)
                    {
                        if($count == $current)
                        {
                            //echo $activity;
                            //echo "<br>";
                            $activityArray[$activityCounter] = $GLOBALS['memberDB']->membersByActivityOne($activity);
                            $current = $current + 3;
                            $activityCounter++;
                        }
                        $count++;
                    }
                }
                
                //these need to be reset before the nested for each
                $count = 0;
                $current = 1;
                $activityCounter = 0;
                
                //this nested for each stores the camper_limits in alphabetical order in an array
                foreach($activities as $value)
                {
                    foreach($value as $activity)
                    {
                        if($count == $current)
                        {
                            //echo " " . $activity;
                            //echo "<br>";
                            $limitArray[$activityCounter] = $GLOBALS['activityDB']->activityLimit($activity);
                            $current = $current + 3;
                            $activityCounter++;
                        }
                        $count++;
                    }
                    
                }
                
                //these need to be reset before the nested for each
                $count = 0;
                $current = 0;
                $itemCounter = 1;
                $memberID = "";
                $memberActivity = "";
                
                //this nested for each stores the camper_limits in alphabetical order in an array
                foreach($activityArray as $memberArray)
                {
                    foreach($memberArray as $member)
                    {
                        foreach($member as $memberInfo)
                        {
                            //echo "" . $memberInfo  . " ";
                            //echo "<br>";
                            if($count == $current)
                            {
                                
                                if(($itemCounter == 1))
                                {
                                    $memberID = $memberInfo;
                                    //echo "member id: $memberID";
                                    //echo "<br>";
                                    $current = $current + 3;
                                }
                                else if(($itemCounter == 2))
                                {
                                    $memberActivity = $memberInfo;
                                    //echo "member activity: $memberActivity";
                                    //echo "<br>";
                                    $itemCounter = 0;
                                    $current = $current + 1;
                                    $memberUpdate = $GLOBALS['memberDB']->updateMembersDays("Monday", $memberActivity, $memberID);
                                    
                                }
                                $itemCounter++;
                                
                            }
                            $count++;
                        }
                    }
                }
                
                $count = 0;
                $current = 2;
                foreach($activities as $value)
                {
                    foreach($value as $limit)
                    {
                        if($count == $current)
                        {
                            //echo " " . $limit;
                            //echo "<br>";
                            $current = $current + 3;
                        }
                    $count++;
                    }
                                        
                }*/
                /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
                /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
                /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
                /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
                /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
                /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
                
                //testing for results down here
                //print_r($limitArray);
                /*echo "<br>";
                echo "<br>";
                echo "limit goes above";
                echo "<br>";
                echo "<br>";
                print_r($activityArray);*/
                //Assign the variables to an f3 variable
                $members = $GLOBALS['memberDB']->allMembers();
                //$f3->set('activity', $activity);
                $f3->set('members', $members);
                
                //$f3->reroute('/sortGroupsTuesday');
                
                
                });*/