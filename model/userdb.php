<?php
    /**
     * Provides access to members in our database
     * @author Brian Saylor <bsaylor3@mail.greenriver.edu>
     * @version 1.0
     *
     * CREATE TABLE members
        (
        member_id int NOT NULL AUTO_INCREMENT PRIMARY KEY,
        fName varchar(255),
        lName varchar(255),
        counselor varchar(255),
        activities varchar(500)
        );
        
        **********************************************
        CREATE TABLE user
        (
        user_id int NOT NULL AUTO_INCREMENT PRIMARY KEY,
        username varchar(255),
        password varchar(255)
        );
     */
    
    //CONNECT
    class UserDB
    {
        private $_pdo;
        
        function __construct()
        {
            //Require configuration file
            require_once("../config_campsambica.php");
            //require_once("../../../config.php");
            
            try {
                //Establish database connection
                $this->_pdo = new PDO( DB_DSN, DB_USERNAME, DB_PASSWORD );
                
                //Keep the connection open for reuse to improve performance
                $this->_pdo->setAttribute( PDO::ATTR_PERSISTENT, true);
                
                //Throw an exception whenever a database error occurs
                $this->_pdo->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
            }
            catch (PDOException $e) {
                die( "Error!: " . $e->getMessage());
            }
        }
        
         /**
          * Checks if the user exists
          * @param Email: checks the email passed in to see if the user exists
          * @param password: checks the password to see if it matches
          * @return Returns a row from the database that matches this. 
          */
        function memberUserExists($username, $password)
        {            
            $select = 'SELECT user_id, username, password FROM user WHERE username=:username && password=:password';
             
            $statement = $this->_pdo->prepare($select);
            $statement->bindValue(':username', $username, PDO::PARAM_STR);
            $statement->bindValue(':password', $password, PDO::PARAM_STR);
            $statement->execute();
             
            $row = $statement->fetch(PDO::FETCH_ASSOC);
            
            return !empty($row);
             
        }
        //CREATE
         
        /**
         * Adds a member to the collection of members in the db.
         *
         * @access public
         * @param string $fnamename the name of the pet
         * @param string $lname the type of pet (giraffe, turtle, bear, ...)
         * @param string $counselor the color of the animal
         * @param string $activities the name of the pet
         *
         * @return true if the insert was successful, otherwise false
         */
        function addMember($fname, $lname, $counselor, $activityOne, $activityTwo, $activityThree, $activityFour, $activityFive, $activitySix, $activitySeven, $activityEight, $activityNine, $activityTen)
        {
            $insert = 'INSERT INTO members (fname, lname, counselor, activityOne, activityTwo, activityThree, activityFour, activityFive, activitySix, activitySeven, activityEight, activityNine, activityTen) VALUES (:fname, :lname, :counselor, :activityOne, :activityTwo, :activityThree, :activityFour, :activityFive, :activitySix, :activitySeven, :activityEight, :activityNine, :activityTen)';
             
            $statement = $this->_pdo->prepare($insert);
            $statement->bindValue(':fname', $fname, PDO::PARAM_STR);
            $statement->bindValue(':lname', $lname, PDO::PARAM_STR);
            $statement->bindValue(':counselor', $counselor, PDO::PARAM_STR);
            $statement->bindValue(':activityOne', $activityOne, PDO::PARAM_STR);
            $statement->bindValue(':activityTwo', $activityTwo, PDO::PARAM_STR);
            $statement->bindValue(':activityThree', $activityThree, PDO::PARAM_STR);
            $statement->bindValue(':activityFour', $activityFour, PDO::PARAM_STR);
            $statement->bindValue(':activityFive', $activityFive, PDO::PARAM_STR);
            $statement->bindValue(':activitySix', $activitySix, PDO::PARAM_STR);
            $statement->bindValue(':activitySeven', $activitySeven, PDO::PARAM_STR);
            $statement->bindValue(':activityEight', $activityEight, PDO::PARAM_STR);
            $statement->bindValue(':activityNine', $activityNine, PDO::PARAM_STR);
            $statement->bindValue(':activityTen', $activityTen, PDO::PARAM_STR);
            
            
            $statement->execute();
            
            //Return ID of inserted row
            return $this->_pdo->lastInsertId();
        }
         
        //READ
        /**
         * Returns all members in the database collection.
         *
         * @access public
         *
         * @return an associative array of members indexed by id
         */
        function allMembers()
        {
            $select = 'SELECT member_id, fname, lname, counselor, activityOne, activityTwo, activityThree, activityFour, activityFive, activitySix, activitySeven, activityEight, activityNine, activityTen FROM members ORDER BY member_id';
            $results = $this->_pdo->query($select);
             
            $resultsArray = array();
             
            //map each pet id to a row of data for that pet
            while ($row = $results->fetch(PDO::FETCH_ASSOC)) {
                $resultsArray[$row['member_id']] = $row;
            }
             
            return $resultsArray;
        }
         
        /**
         * Returns a member that has the given id.
         *
         * @access public
         * @param int $id the id of the member
         *
         * @return an associative array of member attributes, or false if
         * the member was not found
         */
        function memberById($id)
        {
            $select = 'SELECT member_id, fname, lname, counselor, activityOne, activityTwo, activityThree, activityFour, activityFive, activitySix, activitySeven, activityEight, activityNine, activityTen FROM members WHERE member_id=:id';
             
            $statement = $this->_pdo->prepare($select);
            $statement->bindValue(':id', $id, PDO::PARAM_INT);
            $statement->execute();
             
            return $statement->fetch(PDO::FETCH_ASSOC);
        }
        
        /**
         * Returns a member that has the given id.
         *
         * @access public
         * @param int $id the id of the member
         *
         * @return an associative array of member attributes, or false if
         * the member was not found
         */
        function deleteMembers()
        {
            $select = 'DELETE FROM members';
             
            $statement = $this->_pdo->prepare($select);
            $statement->execute();
        }
        
        /**
           SELECT fName, lName FROM members WHERE activityOne ="Wakeboarding" ORDER BY RAND()
            LIMIT
            (SELECT camper_limit FROM activities WHERE activity ="Wakeboarding")
            
            SELECT fName, lName FROM members WHERE activityOne ="Wakeboarding" ORDER BY RAND() LIMIT 2
         */
        function sortMembersByChoice($activityList, $activitySearch, $camperLimit)
        {
            $select = 'SELECT fName, lName, activityOne, activityTwo, activityThree, activityFour, activityFive, activitySix, activitySeven, activityEight, activityNine, activityTen
                        FROM members WHERE :activityList =:activitySearch ORDER BY RAND() LIMIT :camperLimit';
            
            $statement = $this->_pdo->prepare($select);
            
            $statement->bindValue(':activityList', $activityList, PDO::PARAM_INT);
            $statement->bindValue(':activitySearch', $activitySearch, PDO::PARAM_INT);
            $statement->bindValue(':camperLimit', $camperLimit, PDO::PARAM_INT);
            
            $statement->execute();
             
            return $statement->fetch(PDO::FETCH_ASSOC);
        }
    }