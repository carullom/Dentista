<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Sei stato contattato da:</h1>
    <ul>
    <li>{{$contact['name']}}</li>
        <li>{{$contact['email']}}</li>
        <li>{{$contact['text']}}</li>
    </ul>
</body>
</html>