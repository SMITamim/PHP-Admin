<?php
 
    function getseller()
    {
        return json_decode(file_get_contents(__DIR__.'/seller.json'),associative:true);
         
    }
    function getsellerByID($id)
    {
        $users = getseller();
        foreach($users as $user)
        {
           if( $user['id'] ===$id);
            {
                return $user;
            }
        }
        return null;
    }
    function getproduct()
    {
        return json_decode(file_get_contents(__DIR__.'/product.json'),associative:true);
         
    }
    function getbuyer()
    {
        return json_decode(file_get_contents(__DIR__.'/buyer.json'),associative:true);
         
    }
    

    function delete_seller($id)
    {
        $file = "seller.json";
        $mainjson = file_get_contents($file);
        $users = json_decode($mainjson,true);
        foreach($users as  $user)
        {
            if ($user['id']==$id)
            {
                array_splice($users, $user, 1);
            }
        }
        $jsonfile = json_encode($users,JSON_PRETTY_PRINT);
        $save = file_put_contents($file,$jsonfile);
      
    }
 

    
?>