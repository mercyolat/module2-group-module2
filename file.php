<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

</head>

<body>
    
    
<h1>File Sharing</h1><br>


<div class="container">
  <label for="uname"><b>Username</b></label>
   Please input username:<input type="username" name="username" required><br>
   <form class=login action="upload.php" method="POST">
   <input type="submit" value="Login">
   <input type="checkbox" checked="checked" name="remember"> Remember me
</form>
</label>
</div>



<div class="container" style="background-color:#f1f1f1">
   
    <input type="button" ... value="Cancel" onclick="history.back();" />
  </div>
  <?php


  if (isset($_POST['username'])){
      echo "login success";
      $username=$_POST['username'];
      echo $username;
      $user_file = fopen("/home/mercy/users.txt", "r");
    
      $flag =false;
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
  
      if ($falg = true)
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