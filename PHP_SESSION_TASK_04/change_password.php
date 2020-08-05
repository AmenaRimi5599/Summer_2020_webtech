<?php
    if(isset($_POST['Submit']))
    {
        if($_COOKIE['currPassword']==$_POST['rtpassword'])
        {
            if($_POST['password']==$_POST['rtpassword'])
            {
                setcookie('currPassword',$_POST['password'],time()+3600,'/');
                header('location:login.php');
            }
            else
            {
                echo "password doesn't match";
            }            
        }
        else
        {
            echo "Invalid password";
        }
    }
?>
<body>
    <table border="1px" border="1" cellspacing="0" cellpadding="5" align="center">
        <tr>
            <td width="80%" colspan="3">
                <h2>Xcompany</h2>
                <ul align="right">
                
                    Logged in as<a href="dashboard.php"><?=$_COOKIE['name']?></a> |
                    <a href="logout.php"> Logout </a>
                </ul>
            </td>
        </tr>

        <tr height="400px">
            <td>
                <ul>
                    <li><a href="dashboard.php"> Dashboard </a></li>
                    <li><a href="view_profile.php"> View Profile </a></li>
                    <li><a href="edit_profile.php"> Edit Profile </a></li>
                    <li><a href="picture.php"> Change Profile Picture </a></li>
                    <li><a href="change_password.php"> Change Password</a></li>
                    <li><a href="logout.php"> Logout</a></li>
                </ul>
            </td>
            <td width="60%">
                <form>
                    <fieldset>
                            <legend><b>CHANGE PASSWORD</b></legend>
                            <form>
                                <table>
                                    <tr>
                                        <td><font size="3">Current Password</font></td>
                                        <td>:</td>
                                        <td><input type="password" name="currPassword" /></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td><font size="3" color="green">New Password</font></td>
                                        <td>:</td>
                                        <td><input type="password" name="password" /></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td><font size="3" color="red">Retype New Password</font></td>
                                        <td>:</td>
                                        <td><input type="password" name="rtpassword" /></td>
                                        <td></td>
                                    </tr>
                                </table>
                                <hr />
                                 <input type="submit" value="submit" />
                            </form>
                </fieldset>


            </form>
            </td>
        </tr>
        <tr>
            <td align="center" colspan="2">copyright @2017</td>
        </tr>
    </table>
</body>
                