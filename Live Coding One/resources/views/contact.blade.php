<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>

    <body>
        <!-- Contact Form -->
        <form method="POST" action="">
        @csrf
        <div>
            <label for="name">Nom :</label>
            <input type="text" name="name" id="name">
        </div>
        <div>
            <label for="email">Email :</label>
            <input type="email" name="email" id="email">
        </div>
        <div>
            <label for="description">Message :</label>
            <textarea name="description" id="description"></textarea>
        </div>
        <button type="submit">Envoyer</button>
    </form>
    </body>
</html>
