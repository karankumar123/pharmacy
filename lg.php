<?php
include("cn.php");
if(isset($_POST['submit']))
{
    $username=$_POST['user'];
    $password=$_POST['pass'];
    $sql="select * from users where username='$username'and password='$password'";
    $result=mysqli_query($conn,$sql);
    $row=mysqli_fetch_array($result,MYSQLI_ASSOC);
    $count=mysqli_num_rows($result);
    if($count==1)
    {
        header("Location:home.php");
    }
    elseif(empty($_POST['user']))
    {
       echo'<script>
       window.location.href="login2.php";
       alert("username or password empity")
       </script>';
    }

    else
    {
        echo '<script>
        window.location.href="login2.php";
        alert("Login Failed.Invalid username or password!!!")
        </script>';
    }
}

 


?>