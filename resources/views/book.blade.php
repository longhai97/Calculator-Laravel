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
    <h1>Book Library </h1>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{route('post-book')}}" method="post">
        <input type="text" name="name" placeholder="book name">
        <input type="text" name="des" placeholder="des">
        <input type="text" name="author" placeholder="author">
        <input type="submit">
        {{  csrf_field() }}
    </form>

    @foreach($books as $book)
        <div>
            {{ $book->name }} ---- {{ $book->des }} -- {{ $book->author }}
        </div>
    @endforeach

</div>
</body>
</html>
