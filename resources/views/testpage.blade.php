<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pagina di prova</title>
</head>
<body>
    <h2>Cento numeri da 1 a 500</h2>

    <div class="numbers">
    @foreach ($numbers as $number)
        <p>{{$number}} - </p>
        @if ($loop->last)
        <p>{{$number}}</p>

        @endif
    @endforeach
</div>
</body>
</html>

<style>

    .numbers {
        display:flex;
        flex-wrap: wrap;
        gap:10px;
    }
    </style>
