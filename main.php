<!DOCTYPE html>

<head>
<html lang="en">
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <h1> New Users </h1>
    <form><input type="text" name="welcomeuser" />
    <input type="submit" value="Your Username "> 
    <input type="submit" value="Register confirm" />
   </form>
   <title> Register</title> 
   
   <form class=back action= "file.php" method="POST">
   <input type="submit" name="Go Back" />
   </form>
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
