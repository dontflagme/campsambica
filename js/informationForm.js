var activityChoices = [];
var total = document.getElementById("activityOne").length;
function getSlectedValue(){

    var choiceOne = document.getElementById("activityOne");
    var strUser = choiceOne.options[choiceOne.selectedIndex].value;
    
    //This one will grab the second choice
    var choiceTwo = document.getElementById("activityTwo");
    var strUserTwo = choiceTwo.options[choiceTwo.selectedIndex].value;
    
    var choiceThree = document.getElementById("activityThree");
    var strUserThree = choiceThree.options[choiceThree.selectedIndex].value;
    
    var choiceFour = document.getElementById("activityFour");
    var strUserFour = choiceFour.options[choiceFour.selectedIndex].value;
    
    var choiceFive = document.getElementById("activityFive");
    var strUserFive = choiceFive.options[choiceFive.selectedIndex].value;
      
    var choiceSix = document.getElementById("activitySix");
    var strUserSix = choiceSix.options[choiceSix.selectedIndex].value;
    
    var choiceSeven = document.getElementById("activitySeven");
    var strUserSeven = choiceSeven.options[choiceSeven.selectedIndex].value;
    
    var choiceEight = document.getElementById("activityEight");
    var strUserEight = choiceEight.options[choiceEight.selectedIndex].value;
    
    var choiceNine = document.getElementById("activityNinth");
    var strUserNine = choiceNine.options[choiceNine.selectedIndex].value;
    
    var choiceTen = document.getElementById("activityTen");
    var strUserTen = choiceTen.options[choiceTen.selectedIndex].value;

    activityChoices[0] = strUser;
    activityChoices[1] = strUserTwo;
    activityChoices[2] = strUserThree;
    activityChoices[3] = strUserFour;
    activityChoices[4] = strUserFive;
    activityChoices[5] = strUserSix;
    activityChoices[6] = strUserSeven;
    activityChoices[7] = strUserEight;
    activityChoices[8] = strUserNine;
     activityChoices[9] = strUserTen;


    //activityChoices[0] =  strUserNumber;
    //activityChoices[1] =  strUserNumberTwo;
           // document.getElementsByName("activity").options[strUserNumber].disabled = true;

       
           disableChoiceTwo();
           disableChoiceThree();
           disableChoiceFour();
          disableChoiceFive();
           disableChoiceSix();
           disableChoiceSeven();
           disableChoiceEight();
           disableChoiceNine();
           disableChoiceTen();
}

/**
 *This will disable the items for the choices selected.
 */
function disableChoiceTwo(){
            document.getElementById("activityTwo").options[ activityChoices[0]].disabled = true;
            for(i = 0; i < total; i++){
                 document.getElementById("activityTwo").options[i].disabled = false;    
            }
            document.getElementById("activityTwo").options[ activityChoices[0]].disabled = true;
            
            for(i = 0; i < total; i++){
                 document.getElementById("activityOne").options[i].disabled = false;    
            }
         document.getElementById("activityOne").options[ activityChoices[1]].disabled = true;
          document.getElementById("activityTwo").options[ activityChoices[1]].disabled = false;
    //document.getElementById("activityTwo").options[ activityChoices[0]].disabled = true;
    
}

function disableChoiceThree(){
            document.getElementById("activityThree").options[ activityChoices[0]].disabled = true;
            document.getElementById("activityThree").options[ activityChoices[1]].disabled = true;
            
            
            
            for(i = 0; i < total; i++){
                 document.getElementById("activityThree").options[i].disabled = false;    
            }
            
 
            document.getElementById("activityThree").options[ activityChoices[0]].disabled = true;
            document.getElementById("activityThree").options[ activityChoices[1]].disabled = true;
            

            for(i = 0; i < total; i++){
                 document.getElementById("activityOne").options[i].disabled = false;
                 document.getElementById("activityTwo").options[i].disabled = false;
                 document.getElementById("activityThree").options[i].disabled = false;    
            }
            
            document.getElementById("activityTwo").options[ activityChoices[0]].disabled = true;
           document.getElementById("activityTwo").options[ activityChoices[0]].disabled = true;
           document.getElementById("activityThree").options[ activityChoices[0]].disabled = true;
            
         document.getElementById("activityOne").options[ activityChoices[1]].disabled = true;
          document.getElementById("activityTwo").options[ activityChoices[1]].disabled = false;
           document.getElementById("activityThree").options[ activityChoices[1]].disabled = true;
            
            document.getElementById("activityTwo").options[ activityChoices[2]].disabled = true;
            document.getElementById("activityOne").options[ activityChoices[2]].disabled = true;
             document.getElementById("activityThree").options[ activityChoices[2]].disabled = false;
            
            
    
}


function disableChoiceFour(){
            document.getElementById("activityFour").options[ activityChoices[0]].disabled = true;
            document.getElementById("activityFour").options[ activityChoices[1]].disabled = true;
             document.getElementById("activityFour").options[ activityChoices[2]].disabled = true;
            
            
            
            for(i = 0; i < total; i++){
                 document.getElementById("activityFour").options[i].disabled = false;    
            }
            
 
            document.getElementById("activityFour").options[ activityChoices[0]].disabled = true;
            document.getElementById("activityFour").options[ activityChoices[1]].disabled = true;
            document.getElementById("activityFour").options[activityChoices[2]].disabled = true;    
            

            for(i = 0; i < total; i++){
                 document.getElementById("activityOne").options[i].disabled = false;
                 document.getElementById("activityTwo").options[i].disabled = false;
                 document.getElementById("activityThree").options[i].disabled = false;
                  document.getElementById("activityFour").options[i].disabled = false; 
            }
            
            document.getElementById("activityTwo").options[ activityChoices[0]].disabled = true;
           document.getElementById("activityTwo").options[ activityChoices[0]].disabled = true;
           document.getElementById("activityThree").options[ activityChoices[0]].disabled = true;
           document.getElementById("activityFour").options[ activityChoices[0]].disabled = true;
            
         document.getElementById("activityOne").options[ activityChoices[1]].disabled = true;
          document.getElementById("activityTwo").options[ activityChoices[1]].disabled = false;
           document.getElementById("activityThree").options[ activityChoices[1]].disabled = true;
           document.getElementById("activityFour").options[ activityChoices[1]].disabled = true;
            
            document.getElementById("activityTwo").options[ activityChoices[2]].disabled = true;
            document.getElementById("activityOne").options[ activityChoices[2]].disabled = true;
             document.getElementById("activityThree").options[ activityChoices[2]].disabled = false;
             document.getElementById("activityFour").options[ activityChoices[2]].disabled = true;
             
            document.getElementById("activityTwo").options[ activityChoices[3]].disabled = true;
            document.getElementById("activityOne").options[ activityChoices[3]].disabled = true;
             document.getElementById("activityThree").options[ activityChoices[3]].disabled = true;
             document.getElementById("activityFour").options[ activityChoices[3]].disabled = false;
            
            
    
}

function disableChoiceFive(){
            document.getElementById("activityFive").options[ activityChoices[0]].disabled = true;
            document.getElementById("activityFive").options[ activityChoices[1]].disabled = true;
             document.getElementById("activityFive").options[ activityChoices[2]].disabled = true;
             document.getElementById("activityFive").options[ activityChoices[3]].disabled = true;
             
            
            
            
            for(i = 0; i < total; i++){
                 document.getElementById("activityFive").options[i].disabled = false;    
            }
            
 
            document.getElementById("activityFive").options[ activityChoices[0]].disabled = true;
            document.getElementById("activityFive").options[ activityChoices[1]].disabled = true;
            document.getElementById("activityFive").options[activityChoices[2]].disabled = true;    
            

            for(i = 0; i < total; i++){
                 document.getElementById("activityOne").options[i].disabled = false;
                 document.getElementById("activityTwo").options[i].disabled = false;
                 document.getElementById("activityThree").options[i].disabled = false;
                  document.getElementById("activityFour").options[i].disabled = false;
                  document.getElementById("activityFive").options[i].disabled = false; 
            }
            
            document.getElementById("activityTwo").options[ activityChoices[0]].disabled = true;
           document.getElementById("activityTwo").options[ activityChoices[0]].disabled = true;
           document.getElementById("activityThree").options[ activityChoices[0]].disabled = true;
           document.getElementById("activityFour").options[ activityChoices[0]].disabled = true;
           document.getElementById("activityFive").options[ activityChoices[0]].disabled = true;
            
         document.getElementById("activityOne").options[ activityChoices[1]].disabled = true;
          document.getElementById("activityTwo").options[ activityChoices[1]].disabled = false;
           document.getElementById("activityThree").options[ activityChoices[1]].disabled = true;
           document.getElementById("activityFour").options[ activityChoices[1]].disabled = true;
           document.getElementById("activityFive").options[ activityChoices[1]].disabled = true;
            
            document.getElementById("activityTwo").options[ activityChoices[2]].disabled = true;
            document.getElementById("activityOne").options[ activityChoices[2]].disabled = true;
             document.getElementById("activityThree").options[ activityChoices[2]].disabled = false;
             document.getElementById("activityFour").options[ activityChoices[2]].disabled = true;
             document.getElementById("activityFive").options[ activityChoices[2]].disabled = true;
             
            document.getElementById("activityTwo").options[ activityChoices[3]].disabled = true;
            document.getElementById("activityOne").options[ activityChoices[3]].disabled = true;
             document.getElementById("activityThree").options[ activityChoices[3]].disabled = true;
             document.getElementById("activityFour").options[ activityChoices[3]].disabled = false;
             document.getElementById("activityFive").options[ activityChoices[3]].disabled = true;
             
            document.getElementById("activityTwo").options[ activityChoices[4]].disabled = true;
            document.getElementById("activityOne").options[ activityChoices[4]].disabled = true;
             document.getElementById("activityThree").options[ activityChoices[4]].disabled = true;
             document.getElementById("activityFour").options[ activityChoices[4]].disabled = true;
             document.getElementById("activityFive").options[ activityChoices[4]].disabled = false;
            
            
    
}


function disableChoiceSix(){
            document.getElementById("activitySix").options[ activityChoices[0]].disabled = true;
            document.getElementById("activitySix").options[ activityChoices[1]].disabled = true;
             document.getElementById("activitySix").options[ activityChoices[2]].disabled = true;
             document.getElementById("activitySix").options[ activityChoices[3]].disabled = true;
             document.getElementById("activitySix").options[ activityChoices[4]].disabled = true;
            
            
            
            for(i = 0; i < total; i++){
                 document.getElementById("activitySix").options[i].disabled = false;    
            }
            
 
            document.getElementById("activitySix").options[ activityChoices[0]].disabled = true;
            document.getElementById("activitySix").options[ activityChoices[1]].disabled = true;
            document.getElementById("activitySix").options[activityChoices[2]].disabled = true;    
            

            for(i = 0; i < total; i++){
                 document.getElementById("activityOne").options[i].disabled = false;
                 document.getElementById("activityTwo").options[i].disabled = false;
                 document.getElementById("activityThree").options[i].disabled = false;
                  document.getElementById("activityFour").options[i].disabled = false;
                  document.getElementById("activityFive").options[i].disabled = false;
                  document.getElementById("activitySix").options[i].disabled = false; 
            }
            
            document.getElementById("activityTwo").options[ activityChoices[0]].disabled = true;
           document.getElementById("activityTwo").options[ activityChoices[0]].disabled = true;
           document.getElementById("activityThree").options[ activityChoices[0]].disabled = true;
           document.getElementById("activityFour").options[ activityChoices[0]].disabled = true;
           document.getElementById("activityFive").options[ activityChoices[0]].disabled = true;
           document.getElementById("activitySix").options[ activityChoices[0]].disabled = true;
            
         document.getElementById("activityOne").options[ activityChoices[1]].disabled = true;
          document.getElementById("activityTwo").options[ activityChoices[1]].disabled = false;
           document.getElementById("activityThree").options[ activityChoices[1]].disabled = true;
           document.getElementById("activityFour").options[ activityChoices[1]].disabled = true;
           document.getElementById("activityFive").options[ activityChoices[1]].disabled = true;
           document.getElementById("activitySix").options[ activityChoices[1]].disabled = true;
            
            document.getElementById("activityTwo").options[ activityChoices[2]].disabled = true;
            document.getElementById("activityOne").options[ activityChoices[2]].disabled = true;
             document.getElementById("activityThree").options[ activityChoices[2]].disabled = false;
             document.getElementById("activityFour").options[ activityChoices[2]].disabled = true;
             document.getElementById("activityFive").options[ activityChoices[2]].disabled = true;
             document.getElementById("activitySix").options[ activityChoices[2]].disabled = true;
             
            document.getElementById("activityTwo").options[ activityChoices[3]].disabled = true;
            document.getElementById("activityOne").options[ activityChoices[3]].disabled = true;
             document.getElementById("activityThree").options[ activityChoices[3]].disabled = true;
             document.getElementById("activityFour").options[ activityChoices[3]].disabled = false;
             document.getElementById("activityFive").options[ activityChoices[3]].disabled = true;
             document.getElementById("activitySix").options[ activityChoices[3]].disabled = true;
             
            document.getElementById("activityTwo").options[ activityChoices[4]].disabled = true;
            document.getElementById("activityOne").options[ activityChoices[4]].disabled = true;
             document.getElementById("activityThree").options[ activityChoices[4]].disabled = true;
             document.getElementById("activityFour").options[ activityChoices[4]].disabled = true;
             document.getElementById("activityFive").options[ activityChoices[4]].disabled = false;
             document.getElementById("activitySix").options[ activityChoices[4]].disabled = true;
             
            document.getElementById("activityTwo").options[ activityChoices[5]].disabled = true;
            document.getElementById("activityOne").options[ activityChoices[5]].disabled = true;
             document.getElementById("activityThree").options[ activityChoices[5]].disabled = true;
             document.getElementById("activityFour").options[ activityChoices[5]].disabled = true;
             document.getElementById("activityFive").options[ activityChoices[5]].disabled = true;
             document.getElementById("activitySix").options[ activityChoices[5]].disabled = true;
             document.getElementById("activitySix").options[ activityChoices[5]].disabled = false;
            
            
    
}



function disableChoiceSeven(){
            document.getElementById("activitySeven").options[ activityChoices[0]].disabled = true;
            document.getElementById("activitySeven").options[ activityChoices[1]].disabled = true;
             document.getElementById("activitySeven").options[ activityChoices[2]].disabled = true;
             document.getElementById("activitySeven").options[ activityChoices[3]].disabled = true;
             document.getElementById("activitySeven").options[ activityChoices[4]].disabled = true;
             document.getElementById("activitySeven").options[ activityChoices[5]].disabled = true;
            
            
            
            for(i = 0; i < total; i++){
                 document.getElementById("activitySeven").options[i].disabled = false;    
            }
            
 
            document.getElementById("activitySeven").options[ activityChoices[0]].disabled = true;
            document.getElementById("activitySeven").options[ activityChoices[1]].disabled = true;
            document.getElementById("activitySeven").options[activityChoices[2]].disabled = true;    
            

            for(i = 0; i < total; i++){
                 document.getElementById("activityOne").options[i].disabled = false;
                 document.getElementById("activityTwo").options[i].disabled = false;
                 document.getElementById("activityThree").options[i].disabled = false;
                  document.getElementById("activityFour").options[i].disabled = false;
                  document.getElementById("activityFive").options[i].disabled = false;
                  document.getElementById("activitySix").options[i].disabled = false;
                  document.getElementById("activitySeven").options[i].disabled = false;
            }
            
            document.getElementById("activityTwo").options[ activityChoices[0]].disabled = true;
           document.getElementById("activityTwo").options[ activityChoices[0]].disabled = true;
           document.getElementById("activityThree").options[ activityChoices[0]].disabled = true;
           document.getElementById("activityFour").options[ activityChoices[0]].disabled = true;
           document.getElementById("activityFive").options[ activityChoices[0]].disabled = true;
           document.getElementById("activitySix").options[ activityChoices[0]].disabled = true;
           document.getElementById("activitySeven").options[ activityChoices[0]].disabled = true;
            
         document.getElementById("activityOne").options[ activityChoices[1]].disabled = true;
          document.getElementById("activityTwo").options[ activityChoices[1]].disabled = true;
           document.getElementById("activityThree").options[ activityChoices[1]].disabled = true;
           document.getElementById("activityFour").options[ activityChoices[1]].disabled = true;
           document.getElementById("activityFive").options[ activityChoices[1]].disabled = true;
           document.getElementById("activitySix").options[ activityChoices[1]].disabled = true;
           document.getElementById("activitySeven").options[ activityChoices[1]].disabled = true;
            
            document.getElementById("activityTwo").options[ activityChoices[2]].disabled = true;
            document.getElementById("activityOne").options[ activityChoices[2]].disabled = true;
             document.getElementById("activityThree").options[ activityChoices[2]].disabled = true;
             document.getElementById("activityFour").options[ activityChoices[2]].disabled = true;
             document.getElementById("activityFive").options[ activityChoices[2]].disabled = true;
             document.getElementById("activitySix").options[ activityChoices[2]].disabled = true;
             document.getElementById("activitySeven").options[ activityChoices[2]].disabled = true;
             
            document.getElementById("activityTwo").options[ activityChoices[3]].disabled = true;
            document.getElementById("activityOne").options[ activityChoices[3]].disabled = true;
             document.getElementById("activityThree").options[ activityChoices[3]].disabled = true;
             document.getElementById("activityFour").options[ activityChoices[3]].disabled = true;
             document.getElementById("activityFive").options[ activityChoices[3]].disabled = true;
             document.getElementById("activitySix").options[ activityChoices[3]].disabled = true;
             document.getElementById("activitySeven").options[ activityChoices[3]].disabled = true;
             
            document.getElementById("activityTwo").options[ activityChoices[4]].disabled = true;
            document.getElementById("activityOne").options[ activityChoices[4]].disabled = true;
             document.getElementById("activityThree").options[ activityChoices[4]].disabled = true;
             document.getElementById("activityFour").options[ activityChoices[4]].disabled = true;
             document.getElementById("activityFive").options[ activityChoices[4]].disabled = true;
             document.getElementById("activitySix").options[ activityChoices[4]].disabled = true;
             document.getElementById("activitySeven").options[ activityChoices[4]].disabled = true;
             document.getElementById("activitySeven").options[ activityChoices[4]].disabled = true;
             
            document.getElementById("activityTwo").options[ activityChoices[5]].disabled = true;
            document.getElementById("activityOne").options[ activityChoices[5]].disabled = true;
             document.getElementById("activityThree").options[ activityChoices[5]].disabled = true;
             document.getElementById("activityFour").options[ activityChoices[5]].disabled = true;
             document.getElementById("activityFive").options[ activityChoices[5]].disabled = true;
             document.getElementById("activitySix").options[ activityChoices[5]].disabled = true;
             document.getElementById("activitySix").options[ activityChoices[5]].disabled = true;
             document.getElementById("activitySeven").options[ activityChoices[5]].disabled = true;
             
             document.getElementById("activityTwo").options[ activityChoices[6]].disabled = true;
            document.getElementById("activityOne").options[ activityChoices[6]].disabled = true;
             document.getElementById("activityThree").options[ activityChoices[6]].disabled = true;
             document.getElementById("activityFour").options[ activityChoices[6]].disabled = true;
             document.getElementById("activityFive").options[ activityChoices[6]].disabled = true;
             document.getElementById("activitySix").options[ activityChoices[6]].disabled = true;
             document.getElementById("activitySix").options[ activityChoices[6]].disabled = true;
             document.getElementById("activitySeven").options[ activityChoices[6]].disabled = false;
            
    
}


function disableChoiceEight(){
            document.getElementById("activityEight").options[ activityChoices[0]].disabled = true;
            document.getElementById("activityEight").options[ activityChoices[1]].disabled = true;
             document.getElementById("activityEight").options[ activityChoices[2]].disabled = true;
             document.getElementById("activityEight").options[ activityChoices[3]].disabled = true;
             document.getElementById("activityEight").options[ activityChoices[4]].disabled = true;
             document.getElementById("activityEight").options[ activityChoices[5]].disabled = true;
             document.getElementById("activityEight").options[ activityChoices[6]].disabled = true;
             document.getElementById("activityEight").options[ activityChoices[7]].disabled = true;
             
            
            
            
            for(i = 0; i < total; i++){
                 document.getElementById("activityEight").options[i].disabled = false;    
            }
            
 
            document.getElementById("activityEight").options[ activityChoices[0]].disabled = true;
            document.getElementById("activityEight").options[ activityChoices[1]].disabled = true;
            document.getElementById("activityEight").options[activityChoices[2]].disabled = true;    
            

            for(i = 0; i < total; i++){
                 document.getElementById("activityOne").options[i].disabled = false;
                 document.getElementById("activityTwo").options[i].disabled = false;
                 document.getElementById("activityThree").options[i].disabled = false;
                  document.getElementById("activityFour").options[i].disabled = false;
                  document.getElementById("activityFive").options[i].disabled = false;
                  document.getElementById("activitySix").options[i].disabled = false;
                  document.getElementById("activitySeven").options[i].disabled = false;
                  document.getElementById("activityEight").options[i].disabled = false;
            }
            
            document.getElementById("activityOne").options[ activityChoices[0]].disabled = false;
           document.getElementById("activityTwo").options[ activityChoices[0]].disabled = true;
           document.getElementById("activityThree").options[ activityChoices[0]].disabled = true;
           document.getElementById("activityFour").options[ activityChoices[0]].disabled = true;
           document.getElementById("activityFive").options[ activityChoices[0]].disabled = true;
           document.getElementById("activitySix").options[ activityChoices[0]].disabled = true;
           document.getElementById("activitySeven").options[ activityChoices[0]].disabled = true;
           document.getElementById("activityEight").options[ activityChoices[0]].disabled = true;
            
         document.getElementById("activityOne").options[ activityChoices[1]].disabled = true;
          document.getElementById("activityTwo").options[ activityChoices[1]].disabled = false;
           document.getElementById("activityThree").options[ activityChoices[1]].disabled = true;
           document.getElementById("activityFour").options[ activityChoices[1]].disabled = true;
           document.getElementById("activityFive").options[ activityChoices[1]].disabled = true;
           document.getElementById("activitySix").options[ activityChoices[1]].disabled = true;
           document.getElementById("activitySeven").options[ activityChoices[1]].disabled = true;
           document.getElementById("activityEight").options[ activityChoices[1]].disabled = true;
            
            document.getElementById("activityTwo").options[ activityChoices[2]].disabled = true;
            document.getElementById("activityOne").options[ activityChoices[2]].disabled = true;
             document.getElementById("activityThree").options[ activityChoices[2]].disabled = false;
             document.getElementById("activityFour").options[ activityChoices[2]].disabled = true;
             document.getElementById("activityFive").options[ activityChoices[2]].disabled = true;
             document.getElementById("activitySix").options[ activityChoices[2]].disabled = true;
             document.getElementById("activitySeven").options[ activityChoices[2]].disabled = true;
             document.getElementById("activityEight").options[ activityChoices[2]].disabled = true;
             
            document.getElementById("activityTwo").options[ activityChoices[3]].disabled = true;
            document.getElementById("activityOne").options[ activityChoices[3]].disabled = true;
             document.getElementById("activityThree").options[ activityChoices[3]].disabled = true;
             document.getElementById("activityFour").options[ activityChoices[3]].disabled = false;
             document.getElementById("activityFive").options[ activityChoices[3]].disabled = true;
             document.getElementById("activitySix").options[ activityChoices[3]].disabled = true;
             document.getElementById("activitySeven").options[ activityChoices[3]].disabled = true;
             document.getElementById("activityEight").options[ activityChoices[3]].disabled = true;
             
            document.getElementById("activityTwo").options[ activityChoices[4]].disabled = true;
            document.getElementById("activityOne").options[ activityChoices[4]].disabled = true;
             document.getElementById("activityThree").options[ activityChoices[4]].disabled = true;
             document.getElementById("activityFour").options[ activityChoices[4]].disabled = true;
             document.getElementById("activityFive").options[ activityChoices[4]].disabled = false;
             document.getElementById("activitySix").options[ activityChoices[4]].disabled = true;
             document.getElementById("activitySeven").options[ activityChoices[4]].disabled = true;
             document.getElementById("activitySeven").options[ activityChoices[4]].disabled = true;
             document.getElementById("activityEight").options[ activityChoices[4]].disabled = true;
             
            document.getElementById("activityTwo").options[ activityChoices[5]].disabled = true;
            document.getElementById("activityOne").options[ activityChoices[5]].disabled = true;
             document.getElementById("activityThree").options[ activityChoices[5]].disabled = true;
             document.getElementById("activityFour").options[ activityChoices[5]].disabled = true;
             document.getElementById("activityFive").options[ activityChoices[5]].disabled = true;
             document.getElementById("activitySix").options[ activityChoices[5]].disabled = false;
             document.getElementById("activitySeven").options[ activityChoices[5]].disabled = true;
             document.getElementById("activityEight").options[ activityChoices[5]].disabled = true;
             
             document.getElementById("activityTwo").options[ activityChoices[6]].disabled = true;
            document.getElementById("activityOne").options[ activityChoices[6]].disabled = true;
             document.getElementById("activityThree").options[ activityChoices[6]].disabled = true;
             document.getElementById("activityFour").options[ activityChoices[6]].disabled = true;
             document.getElementById("activityFive").options[ activityChoices[6]].disabled = true;
             document.getElementById("activitySix").options[ activityChoices[6]].disabled = true;
             document.getElementById("activitySeven").options[ activityChoices[6]].disabled = false;
             document.getElementById("activityEight").options[ activityChoices[6]].disabled = true;
             
            document.getElementById("activityTwo").options[ activityChoices[7]].disabled = true;
            document.getElementById("activityOne").options[ activityChoices[7]].disabled = true;
             document.getElementById("activityThree").options[ activityChoices[7]].disabled = true;
             document.getElementById("activityFour").options[ activityChoices[7]].disabled = true;
             document.getElementById("activityFive").options[ activityChoices[7]].disabled = true;
             document.getElementById("activitySix").options[ activityChoices[7]].disabled = true;
             document.getElementById("activitySeven").options[ activityChoices[7]].disabled = true;
             document.getElementById("activityEight").options[ activityChoices[7]].disabled = false;
            
    
}


function disableChoiceNine(){
            document.getElementById("activitySeven").options[ activityChoices[0]].disabled = true;
            document.getElementById("activitySeven").options[ activityChoices[1]].disabled = true;
             document.getElementById("activitySeven").options[ activityChoices[2]].disabled = true;
             document.getElementById("activitySeven").options[ activityChoices[3]].disabled = true;
             document.getElementById("activitySeven").options[ activityChoices[4]].disabled = true;
             document.getElementById("activitySeven").options[ activityChoices[5]].disabled = true;
             document.getElementById("activityEight").options[ activityChoices[6]].disabled = true;
             
             
            
            
            
            for(i = 0; i < total; i++){
                 document.getElementById("activityNinth").options[i].disabled = false;    
            }
            
 
            document.getElementById("activityNinth").options[ activityChoices[0]].disabled = true;
            document.getElementById("activityNinth").options[ activityChoices[1]].disabled = true;
            document.getElementById("activityNinth").options[activityChoices[2]].disabled = true;    
            

            for(i = 0; i < total; i++){
                 document.getElementById("activityOne").options[i].disabled = false;
                 document.getElementById("activityTwo").options[i].disabled = false;
                 document.getElementById("activityThree").options[i].disabled = false;
                  document.getElementById("activityFour").options[i].disabled = false;
                  document.getElementById("activityFive").options[i].disabled = false;
                  document.getElementById("activitySix").options[i].disabled = false;
                  document.getElementById("activitySeven").options[i].disabled = false;
                  document.getElementById("activityEight").options[i].disabled = false;
                  document.getElementById("activityNinth").options[i].disabled = false;
                   
            }
            
            document.getElementById("activityOne").options[ activityChoices[0]].disabled = false;
           document.getElementById("activityTwo").options[ activityChoices[0]].disabled = true;
           document.getElementById("activityThree").options[ activityChoices[0]].disabled = true;
           document.getElementById("activityFour").options[ activityChoices[0]].disabled = true;
           document.getElementById("activityFive").options[ activityChoices[0]].disabled = true;
           document.getElementById("activitySix").options[ activityChoices[0]].disabled = true;
           document.getElementById("activitySeven").options[ activityChoices[0]].disabled = true;
           document.getElementById("activityEight").options[ activityChoices[0]].disabled = true;
           document.getElementById("activityNinth").options[activityChoices[0]].disabled = true;
            
            
         document.getElementById("activityOne").options[ activityChoices[1]].disabled = true;
          document.getElementById("activityTwo").options[ activityChoices[1]].disabled = false;
           document.getElementById("activityThree").options[ activityChoices[1]].disabled = true;
           document.getElementById("activityFour").options[ activityChoices[1]].disabled = true;
           document.getElementById("activityFive").options[ activityChoices[1]].disabled = true;
           document.getElementById("activitySix").options[ activityChoices[1]].disabled = true;
           document.getElementById("activitySeven").options[ activityChoices[1]].disabled = true;
           document.getElementById("activityEight").options[ activityChoices[1]].disabled = true;
           document.getElementById("activityNinth").options[activityChoices[1]].disabled = true;
            
            
            document.getElementById("activityTwo").options[ activityChoices[2]].disabled = true;
            document.getElementById("activityOne").options[ activityChoices[2]].disabled = true;
             document.getElementById("activityThree").options[ activityChoices[2]].disabled = false;
             document.getElementById("activityFour").options[ activityChoices[2]].disabled = true;
             document.getElementById("activityFive").options[ activityChoices[2]].disabled = true;
             document.getElementById("activitySix").options[ activityChoices[2]].disabled = true;
             document.getElementById("activitySeven").options[ activityChoices[2]].disabled = true;
             document.getElementById("activityEight").options[ activityChoices[2]].disabled = true;
             document.getElementById("activityNinth").options[activityChoices[2]].disabled = true;
              
             
            document.getElementById("activityTwo").options[ activityChoices[3]].disabled = true;
            document.getElementById("activityOne").options[ activityChoices[3]].disabled = true;
             document.getElementById("activityThree").options[ activityChoices[3]].disabled = true;
             document.getElementById("activityFour").options[ activityChoices[3]].disabled = false;
             document.getElementById("activityFive").options[ activityChoices[3]].disabled = true;
             document.getElementById("activitySix").options[ activityChoices[3]].disabled = true;
             document.getElementById("activitySeven").options[ activityChoices[3]].disabled = true;
             document.getElementById("activityEight").options[ activityChoices[3]].disabled = true;
             document.getElementById("activityNinth").options[activityChoices[3]].disabled = true;
              
             
            document.getElementById("activityTwo").options[ activityChoices[4]].disabled = true;
            document.getElementById("activityOne").options[ activityChoices[4]].disabled = true;
             document.getElementById("activityThree").options[ activityChoices[4]].disabled = true;
             document.getElementById("activityFour").options[ activityChoices[4]].disabled = true;
             document.getElementById("activityFive").options[ activityChoices[4]].disabled = false;
             document.getElementById("activitySix").options[ activityChoices[4]].disabled = true;
             document.getElementById("activitySeven").options[ activityChoices[4]].disabled = true;
             document.getElementById("activityEight").options[ activityChoices[4]].disabled = true;
             document.getElementById("activityNinth").options[activityChoices[4]].disabled = true;
             
             
            document.getElementById("activityTwo").options[ activityChoices[5]].disabled = true;
            document.getElementById("activityOne").options[ activityChoices[5]].disabled = true;
             document.getElementById("activityThree").options[ activityChoices[5]].disabled = true;
             document.getElementById("activityFour").options[ activityChoices[5]].disabled = true;
             document.getElementById("activityFive").options[ activityChoices[5]].disabled = true;
             document.getElementById("activitySix").options[ activityChoices[5]].disabled = false;
             document.getElementById("activitySeven").options[ activityChoices[5]].disabled = true;
             document.getElementById("activityEight").options[ activityChoices[5]].disabled = true;
             document.getElementById("activityNinth").options[activityChoices[5]].disabled = true;
             
             
             document.getElementById("activityTwo").options[ activityChoices[6]].disabled = true;
            document.getElementById("activityOne").options[ activityChoices[6]].disabled = true;
             document.getElementById("activityThree").options[ activityChoices[6]].disabled = true;
             document.getElementById("activityFour").options[ activityChoices[6]].disabled = true;
             document.getElementById("activityFive").options[ activityChoices[6]].disabled = true;
             document.getElementById("activitySix").options[ activityChoices[6]].disabled = true;
             document.getElementById("activitySeven").options[ activityChoices[6]].disabled = false;
             document.getElementById("activityEight").options[ activityChoices[6]].disabled = true;
             document.getElementById("activityNinth").options[activityChoices[6]].disabled = true;
              
             
            document.getElementById("activityTwo").options[ activityChoices[7]].disabled = true;
            document.getElementById("activityOne").options[ activityChoices[7]].disabled = true;
             document.getElementById("activityThree").options[ activityChoices[7]].disabled = true;
             document.getElementById("activityFour").options[ activityChoices[7]].disabled = true;
             document.getElementById("activityFive").options[ activityChoices[7]].disabled = true;
             document.getElementById("activitySix").options[ activityChoices[7]].disabled = true;
             document.getElementById("activitySeven").options[ activityChoices[7]].disabled = true;
             document.getElementById("activityEight").options[ activityChoices[7]].disabled = false;
             document.getElementById("activityNinth").options[activityChoices[7]].disabled = true;
              
             
                          
            document.getElementById("activityTwo").options[ activityChoices[8]].disabled = true;
            document.getElementById("activityOne").options[ activityChoices[8]].disabled = true;
             document.getElementById("activityThree").options[ activityChoices[8]].disabled = true;
             document.getElementById("activityFour").options[ activityChoices[8]].disabled = true;
             document.getElementById("activityFive").options[ activityChoices[8]].disabled = true;
             document.getElementById("activitySix").options[ activityChoices[8]].disabled = true;
             document.getElementById("activitySeven").options[ activityChoices[8]].disabled = true;
             document.getElementById("activityEight").options[ activityChoices[8]].disabled = true;
             document.getElementById("activityNinth").options[activityChoices[8]].disabled = false;
             
            
    
}



function disableChoiceTen(){
            document.getElementById("activitySeven").options[ activityChoices[0]].disabled = true;
            document.getElementById("activitySeven").options[ activityChoices[1]].disabled = true;
             document.getElementById("activitySeven").options[ activityChoices[2]].disabled = true;
             document.getElementById("activitySeven").options[ activityChoices[3]].disabled = true;
             document.getElementById("activitySeven").options[ activityChoices[4]].disabled = true;
             document.getElementById("activitySeven").options[ activityChoices[5]].disabled = true;
             document.getElementById("activityEight").options[ activityChoices[6]].disabled = true;
             document.getElementById("activityNinth").options[ activityChoices[7]].disabled = true;
            
            
            
            for(i = 0; i < total; i++){
                 document.getElementById("activityTen").options[i].disabled = false;    
            }
            
 
            document.getElementById("activityTen").options[ activityChoices[0]].disabled = true;
            document.getElementById("activityTen").options[ activityChoices[1]].disabled = true;
            document.getElementById("activityTen").options[activityChoices[2]].disabled = true;    
            

            for(i = 0; i < total; i++){
                 document.getElementById("activityOne").options[i].disabled = false;
                 document.getElementById("activityTwo").options[i].disabled = false;
                 document.getElementById("activityThree").options[i].disabled = false;
                  document.getElementById("activityFour").options[i].disabled = false;
                  document.getElementById("activityFive").options[i].disabled = false;
                  document.getElementById("activitySix").options[i].disabled = false;
                  document.getElementById("activitySeven").options[i].disabled = false;
                  document.getElementById("activityEight").options[i].disabled = false;
                  document.getElementById("activityNinth").options[i].disabled = false;
                   document.getElementById("activityTen").options[i].disabled = false;
            }
            
            document.getElementById("activityTwo").options[ activityChoices[0]].disabled = false;
           document.getElementById("activityTwo").options[ activityChoices[0]].disabled = true;
           document.getElementById("activityThree").options[ activityChoices[0]].disabled = true;
           document.getElementById("activityFour").options[ activityChoices[0]].disabled = true;
           document.getElementById("activityFive").options[ activityChoices[0]].disabled = true;
           document.getElementById("activitySix").options[ activityChoices[0]].disabled = true;
           document.getElementById("activitySeven").options[ activityChoices[0]].disabled = true;
           document.getElementById("activityEight").options[ activityChoices[0]].disabled = true;
           document.getElementById("activityNinth").options[activityChoices[0]].disabled = true;
            document.getElementById("activityTen").options[ activityChoices[0]].disabled = true;
            
         document.getElementById("activityOne").options[ activityChoices[1]].disabled = true;
          document.getElementById("activityTwo").options[ activityChoices[1]].disabled = false;
           document.getElementById("activityThree").options[ activityChoices[1]].disabled = true;
           document.getElementById("activityFour").options[ activityChoices[1]].disabled = true;
           document.getElementById("activityFive").options[ activityChoices[1]].disabled = true;
           document.getElementById("activitySix").options[ activityChoices[1]].disabled = true;
           document.getElementById("activitySeven").options[ activityChoices[1]].disabled = true;
           document.getElementById("activityEight").options[ activityChoices[1]].disabled = true;
           document.getElementById("activityNinth").options[activityChoices[1]].disabled = true;
            document.getElementById("activityTen").options[ activityChoices[1]].disabled = true;
            
            document.getElementById("activityTwo").options[ activityChoices[2]].disabled = true;
            document.getElementById("activityOne").options[ activityChoices[2]].disabled = true;
             document.getElementById("activityThree").options[ activityChoices[2]].disabled = false;
             document.getElementById("activityFour").options[ activityChoices[2]].disabled = true;
             document.getElementById("activityFive").options[ activityChoices[2]].disabled = true;
             document.getElementById("activitySix").options[ activityChoices[2]].disabled = true;
             document.getElementById("activitySeven").options[ activityChoices[2]].disabled = true;
             document.getElementById("activityEight").options[ activityChoices[2]].disabled = true;
             document.getElementById("activityNinth").options[activityChoices[2]].disabled = true;
              document.getElementById("activityTen").options[ activityChoices[2]].disabled = true;
             
            document.getElementById("activityTwo").options[ activityChoices[3]].disabled = true;
            document.getElementById("activityOne").options[ activityChoices[3]].disabled = true;
             document.getElementById("activityThree").options[ activityChoices[3]].disabled = true;
             document.getElementById("activityFour").options[ activityChoices[3]].disabled = false;
             document.getElementById("activityFive").options[ activityChoices[3]].disabled = true;
             document.getElementById("activitySix").options[ activityChoices[3]].disabled = true;
             document.getElementById("activitySeven").options[ activityChoices[3]].disabled = true;
             document.getElementById("activityEight").options[ activityChoices[3]].disabled = true;
             document.getElementById("activityNinth").options[activityChoices[3]].disabled = true;
              document.getElementById("activityTen").options[ activityChoices[3]].disabled = true;
             
            document.getElementById("activityTwo").options[ activityChoices[4]].disabled = true;
            document.getElementById("activityOne").options[ activityChoices[4]].disabled = true;
             document.getElementById("activityThree").options[ activityChoices[4]].disabled = true;
             document.getElementById("activityFour").options[ activityChoices[4]].disabled = true;
             document.getElementById("activityFive").options[ activityChoices[4]].disabled = false;
             document.getElementById("activitySix").options[ activityChoices[4]].disabled = true;
             document.getElementById("activitySeven").options[ activityChoices[4]].disabled = true;
             document.getElementById("activityEight").options[ activityChoices[4]].disabled = true;
             document.getElementById("activityNinth").options[activityChoices[4]].disabled = true;
              document.getElementById("activityTen").options[ activityChoices[4]].disabled = true;
             
            document.getElementById("activityTwo").options[ activityChoices[5]].disabled = true;
            document.getElementById("activityOne").options[ activityChoices[5]].disabled = true;
             document.getElementById("activityThree").options[ activityChoices[5]].disabled = true;
             document.getElementById("activityFour").options[ activityChoices[5]].disabled = true;
             document.getElementById("activityFive").options[ activityChoices[5]].disabled = true;
             document.getElementById("activitySix").options[ activityChoices[5]].disabled = false;
             document.getElementById("activitySeven").options[ activityChoices[5]].disabled = true;
             document.getElementById("activityEight").options[ activityChoices[5]].disabled = true;
             document.getElementById("activityNinth").options[activityChoices[5]].disabled = true;
              document.getElementById("activityTen").options[ activityChoices[5]].disabled = true;
             
             document.getElementById("activityTwo").options[ activityChoices[6]].disabled = true;
            document.getElementById("activityOne").options[ activityChoices[6]].disabled = true;
             document.getElementById("activityThree").options[ activityChoices[6]].disabled = true;
             document.getElementById("activityFour").options[ activityChoices[6]].disabled = true;
             document.getElementById("activityFive").options[ activityChoices[6]].disabled = true;
             document.getElementById("activitySix").options[ activityChoices[6]].disabled = true;
             document.getElementById("activitySeven").options[ activityChoices[6]].disabled = false;
             document.getElementById("activityEight").options[ activityChoices[6]].disabled = true;
             document.getElementById("activityNinth").options[activityChoices[6]].disabled = true;
              document.getElementById("activityTen").options[ activityChoices[6]].disabled = true;
             
            document.getElementById("activityTwo").options[ activityChoices[7]].disabled = true;
            document.getElementById("activityOne").options[ activityChoices[7]].disabled = true;
             document.getElementById("activityThree").options[ activityChoices[7]].disabled = true;
             document.getElementById("activityFour").options[ activityChoices[7]].disabled = true;
             document.getElementById("activityFive").options[ activityChoices[7]].disabled = true;
             document.getElementById("activitySix").options[ activityChoices[7]].disabled = true;
             document.getElementById("activitySeven").options[ activityChoices[7]].disabled = true;
             document.getElementById("activityEight").options[ activityChoices[7]].disabled = false;
             document.getElementById("activityNinth").options[activityChoices[7]].disabled = true;
              document.getElementById("activityTen").options[ activityChoices[7]].disabled = true;
             
                          
            document.getElementById("activityTwo").options[ activityChoices[8]].disabled = true;
            document.getElementById("activityOne").options[ activityChoices[8]].disabled = true;
             document.getElementById("activityThree").options[ activityChoices[8]].disabled = true;
             document.getElementById("activityFour").options[ activityChoices[8]].disabled = true;
             document.getElementById("activityFive").options[ activityChoices[8]].disabled = true;
             document.getElementById("activitySix").options[ activityChoices[8]].disabled = true;
             document.getElementById("activitySix").options[ activityChoices[8]].disabled = true;
             document.getElementById("activitySeven").options[ activityChoices[8]].disabled = true;
             document.getElementById("activityEight").options[ activityChoices[8]].disabled = true;
             document.getElementById("activityNinth").options[activityChoices[8]].disabled = false;
              document.getElementById("activityTen").options[ activityChoices[8]].disabled = true;
              
            document.getElementById("activityTwo").options[ activityChoices[9]].disabled = true;
            document.getElementById("activityOne").options[ activityChoices[9]].disabled = true;
             document.getElementById("activityThree").options[ activityChoices[9]].disabled = true;
             document.getElementById("activityFour").options[ activityChoices[9]].disabled = true;
             document.getElementById("activityFive").options[ activityChoices[9]].disabled = true;
             document.getElementById("activitySix").options[ activityChoices[9]].disabled = true;
             document.getElementById("activitySix").options[ activityChoices[9]].disabled = true;
             document.getElementById("activitySeven").options[ activityChoices[9]].disabled = true;
             document.getElementById("activityEight").options[ activityChoices[9]].disabled = true;
             document.getElementById("activityNinth").options[activityChoices[9]].disabled = true;
              document.getElementById("activityTen").options[ activityChoices[9]].disabled = false;
            
    
}





