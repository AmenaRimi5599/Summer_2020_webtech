<?php 
    session_start();
    require_once('../service/userService.php');

    if(isset($_POST['submit'])){

        $username   = $_POST['username'];
        $password   = $_POST['password'];
        $email      = $_POST['email'];

        if(empty($username) || empty($password) || empty($email)){
            header('location: ../views/registration.php?error=null_value');
        }else{

            $user = [
                'username'=> $username,
                'password'=> $password,
                'email'=> $email
            ];

            $status = insert($user);

            if($status){
                header('location: ../views/login.php?success=registration_done');
            }else{
                header('location: ../views/registration.php?error=db_error');
            }
        }
    }



?>