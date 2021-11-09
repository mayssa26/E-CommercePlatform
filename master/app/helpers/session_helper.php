<?php 
 session_start(); 

function checkLoggedIn()

{
    if(!isset($_SESSION['pseudo']))
    return(true);
    else
    return(false);
}

?>