<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Edit Article</title>
    </head>

    <body>
        <h1>{{ isset($article) ? 'Modifier' : 'Créer' }} un Article</h1>
        <form action="{{ isset($article) ? route('articles.update', $article->id) : route('articles.store') }}" method="POST">
            @csrf
            @if(isset($article))
                @method('PUT')
            @endif
            <label for="title">Titre :</label>
            <input type="text" name="title" value="{{ $article->title ?? old('title') }}" required>
            <label for="content">Contenu :</label>
            <textarea name="content" required>{{ $article->content ?? old('content') }}</textarea>
            <button type="submit">{{ isset($article) ? 'Mettre à jour' : 'Créer' }}</button>
        </form>


    </body>
</html>