<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css">
<meta charset="utf-8">
<title>Faculty Edit</title>
</head>
<body>
    
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="POST" novalidate enctype="application/x-www-form-urlencoded">
    <fieldset>
        <legend>Update Personal Information</legend>
            <label for="sname">Enter seller name:</label>
        <input type="text" id="sname" name="sname" placeholder="Please fill this blank">
        <?php echo $snameErr; ?>  <br><br>
            <label for="id">Enter seller id:</label>
        <input type="number" id="id" name="id" placeholder="Please fill this blank">
        <?php echo $idErr; ?>  <br><br>
        <label for="stype">Enter seller type:</label>
        <input type="text" id="stype" name="stype" placeholder="Please fill this blank">
        <?php echo $stypeErr; ?>  <br><br>
        
        </fieldset>
    
    <br><input type="submit" value="Submit">&nbsp;&nbsp;&nbsp;
    </form>
    <br>
    <a href="seller.php">See Updated Seller List</a><br>
    <?php echo "<b>".$successfulMessage."</b>"; ?>
    <?php echo "<b>".$errorMessage."</b>"; ?>

    
</body>
</html>


