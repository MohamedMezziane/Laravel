<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Home Page</title>
    </head>

    <body>

        <h1>Liste des Articles</h1>
        <a href="{{ route('articles.create') }}">Créer un nouvel article</a>
        <ul>
            @foreach ($articles as $article)
                <li>
                    <a href="{{ route('articles.show', $article->id) }}">{{ $article->title }}</a>
                    <a href="{{ route('articles.edit', $article->id) }}">Modifier</a>
                    <form action="{{ route('articles.destroy', $article->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Supprimer</button>
                    </form>
                </li>
            @endforeach
        </ul>
        
    </body>
</html>