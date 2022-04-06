<?php 


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Contador</title>
</head>
<body class="bg-dark">
    <div class="d-flex justify-content-center align-items-center flex-column" style="height:100vh">

        <h1 class="text-center text-white mt-2">Contador</h1>
        
        <p class="text-white text-center fs-1" id="number"></p>
        
        <div class="d-flex justify-content-center">
            <button class="btn btn-danger m-2 " id="decrement">Decrementar</button>
            <button class="btn btn-success m-2" id="increment">Incrementar</button>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" referrerpolicy="no-referrer"></script>
    <script src="js/app.js"></script>
</body>
</html>