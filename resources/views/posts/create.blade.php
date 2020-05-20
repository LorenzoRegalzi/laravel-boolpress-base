@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <form action="{{route('posts.store')}}" method="post">
            @csrf
            {{-- scriviamo a mano l'input --}}
            <input name="_method" type="hidden" value="POST">
            {{-- oppure usiamo blade --}}
            @method('POST')

            <label for="author">Autore</label>
            <input type="text" name="name" placeholder="Chi sei?">

            <label for="body">Contenuto</label>
            <textarea type="text" name="lastname" placeholder="Scrivi quello che stai pensando">

            <input type="submit" value="Invia">
        </form>
    </body>
</html>
