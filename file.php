<!DOCTYPE html>

<head>
<html lang="en">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>

<h1>Log in</h1><br>
     <label for="uname"><b>Username</b></label>
      Please input username:<input type="username" name="username" required><br>
   
     
      <input type="checkbox" checked="checked" name="remember"> Remember me
     </label>
<form action="main.php" method="POST"><input type="submit" value="log in here "></form>








<?php


if (isset($_POST['username'])){
    echo "login success";
    $username=$_POST['username'];
    echo $username;
    $user_file = fopen("/home/mercy/users.txt", "r");
  
    $flag = false;
    while(!feof($user_file)){
        $getname = fgets($user_file);
        echo $getname;
        echo trim($getname);
        if (trim($getname) == $username){
            $flag = true;
            break;
        }

    }
    fclose($user_file);

    if ($falg == true)
{
    session_start();
    $_SESSION['usr'] = $username;
    $_SESSION['login'] = true;
    header("Location: main.php");
    exit;
}
else{
    echo "False";
}
}








?>
</body>

</html>
