<!DOCTYPE html>

<head>
<html lang="en">
    <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <body>
    <h1> New Users </h1>
    <input type="text" name="welcomeuser" />
   <title> Register</title> 
   <form class=back action= "file.php" method="POST">
   <input type="submit" name="Go Back" />
   </form>
   <?php

 if(isset($_POST['welcomenewuser'])){
$nameuser=$_POST['welcomenewuser'];
echo" Here's your Username";
 


}
?>







   </body>



   
   



</body>
</html>