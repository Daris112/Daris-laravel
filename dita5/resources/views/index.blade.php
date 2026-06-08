<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
        echo $name;
    ?>
    <p>Hello {{ $name }}</p>

    <p>Hello, {{$script}}</p>
    <p>Hello, <?php echo $script; ?></p>


    <p>Hello, {{$html}}</p>
    <p>Hello, <?php echo $html; ?></p>

    <p>Hello, {{$array[0]}}</p>

    @if
</body>
</html>