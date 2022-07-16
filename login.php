<?php
session_start();
include "db_con.php";
$unameErr = $passErr = "";
$flag =false;

if(isset($_POST['uname']) && isset($_POST['pass']))
{
    function validate ($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $uname = validate($_POST['uname']);
    $pass = validate($_POST['pass']);

    if(empty($_POST["uname"]))
    {
       $unameErr= header("Location: loginform.php?error = Username is required");
        $flag = true;
    }
    else if(empty($_POST["pass"]))
    {
       $passErr= header("Location: loginform.php?error = Password is required");
        $flag = true;
    }
    else if (!$flag)
    {
         

        $sql = "SELECT * FROM admin WHERE uname ='$uname' AND pass ='$pass'";

        $result = mysqli_query($conn, $sql);
        
        if(mysqli_num_rows($result)===1)
        {
            $row = mysqli_fetch_assoc($result);

            if($row['uname']===$uname && $row['pass']===$pass);
            {
                $SESSION['uname'] = $row ['uname'];
                $SESSION['name'] = $row ['name'];
                $SESSION['id'] = $row ['id'];
                header("Location: ahome.php");
                exit();
            }
            
        }
        else
        {
            header("Location: loginform.php?error = Username is required");
            exit();
        }
    }
}
else
{
    header("Location: index.php");
        exit();
}

?>