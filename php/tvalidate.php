<?php
    require_once('connect.php');
    require_once('tcreate.php');

    session_start();
    $jwt = $_SESSION['jwt'];    
    $id = $_SESSION['id'];

    validateToken($id, $jwt, $con);

    function validateToken($id, $userToken, $con){
        $existingToken = generateToken($id, 1, $con);

        echo "Existing token: <br>". $existingToken;

        if($userToken===$existingToken){
            echo "<br> TOKEN IS VALID";
            echo "<br>";
            echo "$userToken";
        }else{
            echo "<br> TOKEN IS INVALID";
            echo "<br>";
            echo "$userToken";
        }
    }
?>