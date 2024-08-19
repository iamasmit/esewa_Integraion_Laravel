<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment {{ $msg }}</title>
</head>

<body>
    <h1>
        Your Payment: {{ $msg }} <br>
        {{$msg1}}
    </h1>

    <a href="{{url('/') }}"> Home </a>
</body>

</html>