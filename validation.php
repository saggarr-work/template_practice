<?php

    include_once("functions.php");

    $name = $email = $comment = $password = $select  = $checkbox = "";
    $name_err = $email_err = $comment_err = $password_err =  $select_err  = $checkbox_err = "";

    if($_SERVER["REQUEST_METHOD"] == "POST"){

        // ---------name input validation-----------
        if(empty($_POST["name"])){
            $name_err = "Name is required";
        }else{
            $name = test_input($_POST["name"]);
        }

     
        // --------------email input validation------------
        if(empty($_POST["email"])){
            $email_err = "email is required";
        }else{
            $email = test_input($_POST["email"]);
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $email_err = "Invalid email format";
              }
        }

        
        // ---------------comment area validation--------------
        if(trim($_POST["comment"] == "")){
            $comment = "";
        }else{
            $comment = test_input($_POST["comment"]);
        }
        

        // ---------------select gender validation----------
        if(isset($_REQUEST['select']) && $_REQUEST['select'] == '1') { 
            $select = 'male'; 
          }elseif(isset($_REQUEST['select']) && $_REQUEST['select'] == '2'){
            $select = 'female';
          }elseif(isset($_REQUEST['select']) && $_REQUEST['select'] == '3'){
            $select = 'other';
          }else{
            $select = "";
          }


        // ------------------password validation--------------
        if(empty($_POST["password"])){
        $password_err = "password is required";
        }else{
            $password = test_input($_POST["password"]);
        }

    }
?>