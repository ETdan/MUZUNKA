<?php
error_reporting(E_ERROR | E_PARSE);
    
    class validater{

        function test_data($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }
        function test_username($data) {
            if (empty($data)) 
                return true;
            else
                return false;
        }
        function test_password($data) {
            if ((strlen($data) < 8 || strlen($data) > 32 || !preg_match('/[A-Z]/', $data) || !preg_match('/\d/', $data)))
                return true;
            else
                return false;
                // echo "Please enter a password between 8 and 32 characters that contains at least one capital letter and one digit.";
        }
        function test_email($data) {
            if (!filter_var($data, FILTER_VALIDATE_EMAIL))
                return true;
            else
                return false;
        }
    }

    // $_SERVER['HTTP_REFERER'];
    if($_SERVER['HTTP_REFERER']=='http://localhost:3000/signup.php'){
        $v=new validater();
        $username= $v->test_data($_REQUEST['username']);
        $password= $v->test_data($_REQUEST['password']);
        $email= $v->test_data($_REQUEST['email']);

        echo $username ."<br>". $email."<br>" .$password . "<br>";

        $u=$v->test_username($username);
        $p=$v->test_password($password);
        $e=$v->test_email($email);

        if($u && $p && $e)
            header("Location: http://localhost:3000/signup.php?user=Please enter a valid email address&pass=Please enter a password between 8 and 32 characters that contains at least one capital letter and one digit&email=email not valid");
        else if($u)
        {
            header("Location: http://localhost:3000/signup.php?user=Please enter a valid email address");
        }
        else if($p)
            header("Location: http://localhost:3000/signup.php?pass=Please enter a password between 8 and 32 characters that contains at least one capital letter and one digit");
            // echo "Please enter a password between 8 and 32 characters that contains at least one capital letter and one digit.<br>";
        else if($e)
        header("Location: http://localhost:3000/signup.php?email=Invalid email");
            // echo "Please enter a username.<br>";
        
        
    }
    else
    
    if($_SERVER['HTTP_REFERER']=='http://localhost:3000/login.php'){
        $v=new validater();
        $username= $v->test_data($_REQUEST['username']);
        $password= $v->test_data($_REQUEST['password']);
        
        $u=$v->test_username($username);
        $p=$v->test_username($password);
        
        if($u && $p)
            header("Location: http://localhost:3000/login.php?user=Please enter a valid email address&pass=Please enter a password between 8 and 32 characters that contains at least one capital letter and one digit?");
        else if($u)
        {
            header("Location: http://localhost:3000/login.php?user=Please enter a valid email address");
        }
        else if($p)
            header("Location: http://localhost:3000/login.php?pass=Please enter a password between 8 and 32 characters that contains at least one capital letter and one digit");
            // echo "Please enter a password between 8 and 32 characters that contains at least one capital letter and one digit.<br>";
    }
?>