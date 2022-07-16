<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Faculty Edit</title>
</head>
<body>
<?php
define("filepath", "seller.json");
$snameErr = $idErr= $stypeErr = "";  
$sname  = $id = $stype = "";  
$flag = false;
$successfulMessage = $errorMessage = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {  
    
    if (empty($_POST["sname"])) 
    {  
        $snameErr = " *This field can't be empty";
        $flag = True;  
    }
    if (empty($_POST["id"])) 
    {  
        $idErr = " *This field can't be empty";
        $flag = True;  
    }
    if (empty($_POST["stype"])) 
    {  
        $stypeErr = " *This field can't be empty";
        $flag = True;  
    }
   
    if(!$flag) 
    {

    $sname = input_data($_POST["sname"]);
    $id = input_data($_POST["id"]);
    $stype = input_data($_POST["stype"]);
    
      
    session_start();
    $fileData = read();
    $datas=json_decode($fileData);
    foreach($datas as $data)
    {
   
    $data->sname = $sname;
    $data->id = $id;
    $data->stype = $stype;
    $result = json_encode($datas);
    write("");
    $show = write($result);
        if($show) {
        $successfulMessage = "Data Updated";
        }
        else {
        $errorMessage = "Error while Updating.";
        }
   }
  }
 }


function input_data($data) {  
$data = trim($data);  
$data = stripslashes($data);  
$data = htmlspecialchars($data);  
return $data;  
}

function write($content) {
$file = fopen(filepath, "w");
$fw = fwrite($file, $content . "\n");
fclose($file);
return $fw;
}
?> 


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

 <?php
function read() {
$file = fopen(filepath, "r");
$fz = filesize(filepath);
$fr = "";
if($fz > 0) {
$fr = fread($file, $fz);
}
fclose($file);
return $fr;
}
?>
</body>
</html>