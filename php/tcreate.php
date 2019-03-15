<?php
  require_once('connect.php');

  function generateToken($id, $new, $con){
    $header = [
      'typ' => 'JWT',
      'alg' => 'HS256',
      'dev' => 'Darlyn Artsel Bayog'
    ];

    $header = json_encode($header);
    $header = str_replace(['+', '/', '='], ['-', '_', ''], base64_encode($header));


    $sql = "SELECT * FROM tbl_users WHERE id = '" . $id . "'";
		$result = mysqli_query($con, $sql);
    $row = mysqli_fetch_array($result);

 
    if($new == 0){
      $t = time();
      $date = date("Y-m-d h:m:s",$t);

      $sql = "UPDATE tbl_users SET user_date = '".$date."' WHERE id = '".$id."'";
      $result = mysqli_query($con, $sql);
    }else{

      $date = $row['user_date'];
    }

    $payload = [
      'id' => $row['id'],
      'user_name' => $row['user_name'],
      'user_desc' => $row['user_desc'],
      'user_date' => $date
    ];

    $payload = json_encode($payload);
    $payload = str_replace(['+', '/', '='], ['-', '_', ''], base64_encode($payload));

    $signature = hash_hmac('sha256', $header.".".$payload, base64_encode('jeks13'));
    $signature = str_replace(['+', '/', '='], ['-', '_', ''], base64_encode($signature));

    $jwt = "$header.$payload.$signature";
    return $jwt;
  }
?>
