<?php
                require 'glob_funcc.php';

                $users= getseller();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Seller</title>
</head>
    <header>
        <h1>Welcome To <b>E-</b></h1>
        <h2>Seller Page</h2>
    </header>
    <body>
        <table class="table">
            <thead>
                <tr>
                    <th>Seller Name</th>
                    <th>Seller Id</th>
                    <th>Seller Type</th>
                </tr>
            </thead>
            <tbody>
            
                <?php foreach ($users as $user): ?>
                    <tr>
                        <td><?php echo $user['sname']?></td> <br>
                        <td><?php echo $user['id']?></td>
                        <td><?php echo $user['stype']?></td>
                        <td> 
                            
                            <button onclick="document.location='update.php'">Edit</button>
                            
                        </td>
                    </tr>
                <?php endforeach;;?>
            </tbody>
        </table>
    </body>
</html>