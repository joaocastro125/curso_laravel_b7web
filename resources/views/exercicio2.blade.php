<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bem vindo</title>
</head>
<body>
    <div style="
        display: flex;
        flex-direction: row;
        flex-wrap:wrap;
        justify-content: space-between;
        "
    >
        @for($i=0;$i<50;$i++)
            <div style="
            width: 150px;
            height: 150px;
            ">

            <img src="{{$url.$i}}" />

            </div>
        @endfor
    </div>
</html>