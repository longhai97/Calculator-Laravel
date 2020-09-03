<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- Styles -->
</head>
<body>
<div class="flex-center position-ref full-height">
    <h1>Calculator</h1>

    <form action="/calculator" method="get">

        <input type="text" name="ops" placeholder="ops">
        @error('ops')
        {{$message}}
        @enderror
        <input type="text" name="n1" placeholder="n1">
        @error('n1')
        {{$message}}
        @enderror
        <input type="text" name="n2" placeholder="n2">
        @error('n2')
        {{$message}}
        @enderror

        <input type="submit">
    </form>
</div>
</body>
</html>
