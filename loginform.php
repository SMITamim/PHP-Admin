<!DOCTYPE html>
<html>
    <head>
    <title>LOGIN</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    
<body>
    <div class="background-image"></div>
    <form action="login.php" method="post">
        <h2>Admin Log In</h2>
        <?php
        if(isset($_GET['error']))
        {
            ?>
            <p class="error"><?php echo $_GET['error']; ?> </p>
            <?php
        }
        ?>

        <p id="labels"> User Name: </p>
        <input type="text" name="uname" placeholder="User Name" id="uname" onkeyup="valid()">
        <p id="nameerror"></p>
        

        
        

        <p id="labels"> Password: </p>
        <input type="text" name="pass" placeholder="Password" id="pass" onkeyup="valid()">
        <p id="nameerror"></p>
        
        
        <button type="submit">Log in</button>
    </form>
</body>

<footer>
    <script src="validation.js"></script>
</footer>
</html>
