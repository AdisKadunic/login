<!doctype html>
<html>
<head>
<meta charset="utf-8">
<link href="css/login.css" rel="stylesheet" type="text/css">
</head>

<body>
    <div id="navbar">
        <?php
            require "header.php" ;
        ?>
</div>
<div id="wrapper">
        <?php
                require "singup.php";
            ?>
            <style>
                <?php include "css/login.css" ;?>
                </style>
        <?php
                require "login.php"; 
            ?>  
            <style>
                <?php include "css/login.css" ;?>
                </style>
</div>
</body>
</html>