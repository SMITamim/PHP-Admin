<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Form Submission (PHP)</title>
</head>
<body>

	<?php

   $flag = false;

    if ($_SERVER['REQUEST_METHOD'] === "POST") {
            function test($data) {
                $data = trim($data);
                $data = stripslashes($data);
                $data = htmlspecialchars($data);
                return $data;
            }

   $firstname = test($_POST['firstname']);
   $lastname = test($_POST['lastname']);
 
   $username = test($_POST['username']);
   $password = test($_POST['password']);



//Input fields validation  
if ($_SERVER["REQUEST_METHOD"] == "POST") {  
      
//String Validation  
    if (empty($_POST["firstname"])) 
    {  
        header("Location:registration.php?error= first Name is required");  
        
        $flag = True;
        
    } 
  
    
   else if (empty($_POST["lastname"])) 
    { 
        header("Location:registration.php?error= Last Name is required");  
       
        $flag = True;  
    } 
  

   else if (empty($_POST["username"])) 
    { 
        header("Location:registration.php?error= Username is required"); 
       
       $flag = True;  
    } 

  else if (empty($_POST["password"])) 
    {  
        header("Location:registration.php?error= password is required");
       $flag = True;  
    } 

   else   if (empty($_POST["confirmpass"])) 
    {  
        header("Location:registration.php?error=Confirm password is required");
       echo " Confirm Password is required <br><br>";
       $flag = True;  
    } 
    
 else   if(strlen($_POST["username"])>5)
    {
        header("Location:registration.php?error= Username can be max 5 characters");
    
    	$flag = True;
    }

   else if(strcmp($_POST['password'],$_POST['confirmpass'])!=0)
    {
        header("Location:registration.php?error=  Password doesn't matched");
    	
    	$flag = True;
    }

}

	
if (!$flag) {

    define("FILENAME", "login.json");
                $file1 = fopen(FILENAME, "r");
                $fr = fread($file1, filesize(FILENAME));
                $json = json_decode($fr);
                fclose($file1);

                $file2 = fopen(FILENAME, "w");
                $users = array("fname" => $firstname, "lname" => $lastname, "username" => $username, "password" => $password);

                if ($json === NULL) {
                    $users = array($users);
                    $users = json_encode($data);
                    fwrite($file2, $data);
                }
                else {
                    $json[] = $users; 
                    $users = json_encode($json);
                    fwrite($file2, $users);
                }
                fclose($file2);

                $users = json_decode($users);

                echo "Registration Successful";

                header("Location:logingorm.php?");
 }
}
	
		
	?>

	<br><br>

	

</body>
</html>