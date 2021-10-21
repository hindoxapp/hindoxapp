<!DOCTYPE html>
<html lang="en">
<head>
  <title>Laravel 7.X</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header">
            <a class="navbar-brand" href="#">Laravel 7.X</a>
            </div>
            <ul class="nav navbar-nav">
                <li><a href="{{URL:: to('/')}}">Home</a></li>
                <li><a href="{{URL:: to('/apropos')}}">apropos</a></li>
                <li><a href="{{URL:: to('/services')}}">Services</a></li>
            </ul>
             <!--<ul class="nav navbar-nav navbar-right">
                <li><a href="#">New product</a></li>
            </ul>-->
        </div>
    </nav>
    <div class="container">

        <div class="jumbotron">
            <h1>Welcome to the laravel 7.X project</h1>
        </div>

    </div>
</body>
</html>