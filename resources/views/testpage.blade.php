<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
</head>
<body>
    <header>
        @include('navbar')
    </header>
    <main>
    <h2>Cento numeri da 1 a 500</h2>

    <div class="numbers">
    @foreach ($numbers as $number)
        <p>{{$number}} - </p>
        @if ($loop->last)
        <p>{{$number}}</p>

        @endif
    @endforeach
</div>
</main>
</body>
</html>
<style>
.numbers {
    display:flex;
    flex-wrap: wrap;
    gap:10px;
}
</style>
