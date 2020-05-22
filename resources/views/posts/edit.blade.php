
<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <form action="{{route('posts.update', $post->id)}}" method="POST">
            @csrf
            @method('PUT')
                <div>
                    <label for="author">Autore</label>
                    <input type="text" name="author" placeholder="Chi sei?" value="{{ (!empty(old('author') )) ? old('author') : $post->author}}">
                </div>
                <div>
                    <label for="author">IMG</label>
                    <input type="text" name="img_author" placeholder="carica un immagine" value="{{ (!empty(old('img_author') )) ? old('img_author') : $post->img_author}}">
                </div>

                <div>
                    <label for="body">Contenuto</label>
                    <textarea name="body" cols='30' rows='10'>{{$post->body}}</textarea>
                </div>
                <div class="">
                    <label for="not-published">Non pubblicato</label>
                    <input type="radio" name="published" value="0" {{($post->published == 0) ? 'checked': ''}}>
                    <label for="published">pubblicato</label>
                    <input type="radio" name="published" value="1" {{($post->published == 1) ? 'checked': ''}}>
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
