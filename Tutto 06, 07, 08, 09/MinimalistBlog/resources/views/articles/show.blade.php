<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Article</title>
    </head>

    <body>
        <h1>{{ $article->title }}</h1>
        <p>{{ $article->content }}</p>
        <a href="{{ route('articles.index') }}">Retour à la liste</a>



    </body>
</html>