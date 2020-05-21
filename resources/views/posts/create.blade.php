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
            @method('POST')
                <div>
                    <label for="author">Autore</label>
                    <input type="text" name="author" placeholder="Chi sei?">
                </div>
                <div>
                    <label for="author">IMG</label>
                    <input type="text" name="img_author" placeholder="carica un immagine" value="https://picsum.photos/200/300">
                </div>

                <div>
                    <label for="body">Contenuto</label>
                    <textarea name="body" cols='30' rows='10'>Inserisci il testo </textarea>
                </div>
                <div class="">
                    <label for="not-published">Non pubblicato</label>
                    <input type="radio" name="published" value="0">
                    <label for="published">pubblicato</label>
                    <input type="radio" name="published" value="1">
                </div>
                {{-- <div>
                    <label for="title">Pubblicato</label>
                    <input type="checkbox" name="published">
                </div> --}}
                <div>
                    <input type="submit" value="Salva">
                </div>
        </form>
    </body>
</html>
