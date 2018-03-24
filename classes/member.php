<?php

/**
 * The Member class represents the members joining the site
 *
 * The memeber class has a first name, last name, counselor and activities.
 * @author Brian Saylor <bsaylor3@mail.greenriver.edu
 * @copyright 2017
 */
    Class Member
    {
        protected $id;
        protected $fname;
        protected $lname;
        protected $counselor;
        protected $activityOne;
        protected $activityTwo;
        protected $activityThree;
        protected $activityFour;
        protected $activityFive;
        protected $activitySix;
        protected $activitySeven;
        protected $activityEight;
        protected $activityNine;
        protected $activityTen;
        
        /**
        * Constructor that creates the basics of a member
        * @param $fname first name
        * @param $name last name
        * @param $age age
        * @param $gender gender
        * @param $phone phone
        * $id, $fname, $lname, $counselor, $activityOne, $activityTwo, $activityThree, $activityFour, $activityFive, $activitySix, $activitySeven, $activityEight, $activityNine, $activityTen
        *
        * @return void
        */
        function __construct()
        {
            //$this->id = $id;
            //$this->fname = $fname;
            //$this->lname = $lname;
            //$this->counselor = $counselor;
            //$this->activityOne = $activityOne;
            //$this->activityTwo = $activityTwo;
            //$this->activityThree = $activityThree;
            //$this->activityFour = $activityFour;
            //$this->activityFive = $activityFive;
            //$this->activitySix = $activitySix;
            //$this->activitySeven = $activitySeven;
            //$this->activityEight = $activityEight;
            //$this->activityNine = $activityNine;
            //$this->activityTen = $activityTen;

        }
        
        /**
        * Sets id
        * @param $id id
        *
        * @return void
        */
        function setID($id)
        {
            if(empty($id))
            {
                $this->id = "No ID";
            }
            else
            {
                $this->id = $id;
            }
            
        }
        /**
        * Gets id
        *
        * @return $id
        */
        function getID()
        {
            return $this->id;
        }
        
        /**
        * Sets first name
        * @param $fname first name
        *
        * @return void
        */
        function setFName($fname)
        {
            if(empty($fname))
            {
                $this->fname = "John";
            }
            else
            {
                $this->fname = $fname;
            }
            
        }
        /**
        * Gets first name
        *
        * @return $fname
        */
        function getFName()
        {
            return $this->fname;
        }
        
        /**
        * Sets last name
        * @param $lname last name
        *
        * @return void
        */
        function setLName($lname)
        {
            if(empty($lname))
            {
                $this->lname = "Smitha";
            }
            else
            {
                $this->lname = $lname;
            }
        }
        /**
        * Gets last name
        *
        * @return $lname
        */
        function getLName()
        {
            return $this->lname;
        }
    
    }
?>