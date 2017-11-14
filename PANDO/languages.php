<!DOCTYPE html>
<?php

    ini_set('display_errors','On');
    function getLanguage($num){
        $language = array(
                array( //english
                    "Log In",
                    "Sign Up",
                    "Username",            
                    "Password",
                    "DISCOVER THE WORLD OF TRAVELLING",
                    "DO"
                 ),
                array( //Chinese
                    " ", //log In     
                    " ", //Sign up
                    " ", //Username
                    " ", //Password
                    " ", //DISCOVER THE WORLD OF TRAVELLING
                    " ", //DO 
                ),
                array( //Russian
                    " ", //log In     
                    " ", //Sign up
                    " ", //Username
                    " ", //Password
                    " ", //DISCOVER THE WORLD OF TRAVELLING
                    " ", //DO 
                )
            );
        return $language[$num]; 
    };



?>

