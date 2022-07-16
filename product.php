<?php
                require 'glob_funcc.php';

                $users= getproduct();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Product List</title>
</head>
    <header>
        <h1>Welcome To <b>E-</b></h1>
        <h2> Product Page</h2>
    </header>
    <body>
        <table class="table">
            <thead>
                <tr>
                    <th>Product Name</th>
                    <th>Product Id</th>
                    <th>Product Type</th>
                </tr>
            </thead>
            <tbody>
            
                <?php foreach ($users as $user): ?>
                    <tr>
                        <td><?php echo $user['pname']?></td> <br>
                        <td><?php echo $user['pid']?></td>
                        <td><?php echo $user['ptype']?></td>
                        <td> 
                            <button onclick="edit.php">Edit</button>
                            <button onclick="delet.php">Delete</button>
                        </td>
                    </tr>
                <?php endforeach;;?>
            </tbody>
        </table>
    </body>
</html>