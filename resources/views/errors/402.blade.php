<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
    body{
        margin:0;
        padding:0;
        box-sizing: border-box;
    }
    .container{
        height: 100vh;
        border:1px solid;
        display: flex;
        justify-content: center;
        align-items: center;

    }
    a{
        text-decoration:none;
        font-size: 1.2rem;
        padding:1rem;
        background-color:#e17055;
        border-radius: 5rem;
        color:white;
    }

    </style>
</head>
<body>
    <div class="container">
        <h1 id="default">{{ $exception->getMessage() }}</h1>
        <h1 id="custum">Tenemos problemas con tu pago</h1>
        <a class="navbar-brand" href="{{ url('/') }}">Home</a>
    </div>
</body>
</html>


