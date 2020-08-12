
<?php

if(isset($_POST['submit'])){
    $conn = mysqli_connect('localhost', 'root', '', 'webtech');

        if(empty($_POST['userName']) || empty($_POST['pass'])){
            echo "Invalid";
        }
        else{
            $uname = $_POST['userName'];
            $password = $_POST['pass'];
            $query = "SELECT * FROM userinfo WHERE UserName = '$uname' AND Password = '$password'";
            $result = mysqli_query($conn, $query);
            
            while( $row = mysqli_fetch_assoc($result) ){
                
                $Cemail    = $row['Email'];
                $Cusername = $row['UserName'];
                $Cpassword = $row['Password'];
                $CuserType = $row['UserType'];

                if(($uname == $Cusername) && ($password == $Cpassword)){
                    if($CuserType == 'Chef'){
                        $user = ['userName'=> $Cusername,'email'=> $Cemail,'pass'=> $password, 'userType'=>$CuserType];

            
                        $_SESSION['userName']   = $Cusername;
                        $_SESSION['email']      = $Cemail;
                        $_SESSION['pass']       = $password;
                        $_SESSION['userType']   = $CuserType;
                        $_SESSION['user']       = $user;

            
                    
                        setcookie('userName', $Cusername, time()+3600, '/');
                        setcookie('email', $Cemail, time()+3600, '/');
                        setcookie('pass', $Cpassword, time()+3600, '/');
                        setcookie('userType', $CuserType, time()+3600, '/');
            
                        $_SESSION['status']  = "Ok";
                        setcookie('status', "OK", time()+3600, '/');
                        
                        echo "Cookie set.";
                        header('location: chef_page.php');
                    }
                    else if($CuserType == 'Worker'){
                        $user = ['userName'=> $Cusername,'email'=> $Cemail,'pass'=> $password, 'userType'=>$CuserType];

            
                        $_SESSION['userName']   = $Cusername;
                        $_SESSION['email']      = $Cemail;
                        $_SESSION['pass']       = $password;
                        $_SESSION['userType']   = $CuserType;
                        $_SESSION['user']       = $user;

            
                    
                        setcookie('userName', $Cusername, time()+3600, '/');
                        setcookie('email', $Cemail, time()+3600, '/');
                        setcookie('pass', $Cpassword, time()+3600, '/');
                        setcookie('userType', $CuserType, time()+3600, '/');
            
                        $_SESSION['status']  = "Ok";
                        setcookie('status', "OK", time()+3600, '/');
                        echo "Cookie set.";
                        header('location: staff_page.php');
                    }
                }
                
            } 
        }
    }  
else
{
    echo "sorry!!";
}
?>