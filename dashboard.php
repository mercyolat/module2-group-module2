<!DOCTYPE html>

<head>
<html lang="en">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<body>
<h1>Welcome, <?php echo $username; ?></h1>
//view files 

<h2>Your Files</h2>

    

<h2>Upload File</h2>
//uploading files
    <form method="POST" enctype="multipart/form-data">
        <input type="file" name="file" required>
        <input type="submit" value="Upload">
    

     




</body>
</html>