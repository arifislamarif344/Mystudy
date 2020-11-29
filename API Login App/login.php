<?php
    include_once "fb_login.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login App</title>
    <style>
        .container{
            max-width: 760px;
            margin: 100px auto;
        }
        a{
            margin: 20px 50px;
            padding: 10px 25px;
            border-radius: 20px;
            background-color: gray;
            color: #fff;
        }
    </style>
</head>
<body>
    <div class="container">
        <a href="<?php echo $url; ?>">Login With Facebook</a>
        <a href="">Login With Google</a>
    </div>
</body>
</html>
