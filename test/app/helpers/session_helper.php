<?php 
 session_start(); 

function checkLoggedIn()

{
    if(!isset($_SESSION['pseudo']))
    return(true);
    else
    return(false);
}
function cartempty(){
  
        echo('</div>
    
        <div class="alert show showAlert">
        <span  class="fa fa-exclamation-circle" aria-hidden="true"></span>
        <span class="msg">Your cart is empty ! Add product </span>
        <div class="close-btn">
          <span class="fa fa-times-circle-o" aria-hidden="true"></span>
        </div>
    </div>');


    }
function passError(){
    if(isset($_SESSION['passError'])){
    if(!empty($_SESSION['passError']['passError'])){
        echo('</div>
    
        <div class="alert show showAlert">
        <span  class="fa fa-exclamation-circle" aria-hidden="true"></span>
        <span class="msg">Incorrect password !</span>
        <div class="close-btn">
          <span class="fa fa-times-circle-o" aria-hidden="true"></span>
        </div>
    </div>');


    }
    else{
        if(!empty($_SESSION['passError']['newpassError'])){
            echo('</div>
    
            <div class="alert show showAlert">
            <span  class="fa fa-exclamation-circle" aria-hidden="true"></span>
            <span class="msg">'.$_SESSION['passError']['newpassError'].'</span>
            <div class="close-btn">
              <span class="fa fa-times-circle-o" aria-hidden="true"></span>
            </div>
        </div>');

        }
        else{
            if(!empty($_SESSION['passError']['newpass2Error'])){
                echo('</div>
    
                <div class="alert show showAlert">
                <span  class="fa fa-exclamation-circle" aria-hidden="true"></span>
                <span class="msg">'.$_SESSION['passError']['newpass2Error'].'</span>
                <div class="close-btn">
                  <span class="fa fa-times-circle-o" aria-hidden="true"></span>
                </div>
            </div>');

            }
        }
    }
}
unset($_SESSION['passError']);
}
function profileError(){
    if(isset($_SESSION['profileError'])){
        if(!empty($_SESSION['profileError']['emailError'])){
            echo('</div>
    
        <div class="alert show showAlert">
        <span  class="fa fa-exclamation-circle" aria-hidden="true"></span>
        <span class="msg">Email already taken !</span>
        <div class="close-btn">
          <span class="fa fa-times-circle-o" aria-hidden="true"></span>
        </div>
    </div>');

        }
        else{
            echo('</div>
    
            <div class="alert show showAlert">
            <span  class="fa fa-exclamation-circle" aria-hidden="true"></span>
            <span class="msg">Please Verify Your Information !</span>
            <div class="close-btn">
              <span class="fa fa-times-circle-o" aria-hidden="true"></span>
            </div>
        </div>');

        }
        unset($_SESSION['profileError']);
        
    }
}


function paramChaged($fname,$lname,$email,$tel,$adr)

{
    if(($fname!= $_SESSION['first_name'])||($lname!= $_SESSION['last_name'])||($email!= $_SESSION['email'])||($tel!= $_SESSION['tel'])||($adr!= $_SESSION['adr'])){
    echo('</div>
    
        <div class="alert show showAlert">
        <span  class="fa fa-check-circle" aria-hidden="true"></span>
        <span class="msg">information changed succ</span>
        <div class="close-btn">
          <span class="fa fa-times-circle-o" aria-hidden="true"></span>
        </div>
    </div>');
    $_SESSION['first_name']=$fname;
    $_SESSION['last_name']=$lname;
    $_SESSION['email']=$email;
    $_SESSION['tel']=$tel;
    $_SESSION['adr']=$adr;
    }
   
    
}
function passchanged()

{
    if($_SESSION['mdp']!=0){
        echo('</div>
    
        <div class="alert show showAlert">
        <span  class="fa fa-check-circle" aria-hidden="true"></span>
        <span class="msg">password changed succ</span>
        <div class="close-btn">
          <span class="fa fa-times-circle-o" aria-hidden="true"></span>
        </div>
    </div>');
    $_SESSION['mdp']=0;
    }
   
   
}

?>