<main>
    <h1>questi sono tutti i post</h1>
    @foreach ($posts as $post)
        <h2>{{$post->author}}</h2>
        <p>{{$post->body}}</p>
        <img src="{{$post->img_author}}" alt="">
        <small>{{$post->created_at}}</small>
        <p><a href="{{route('posts.edit', $post->id)}}">Modifica</a></p>
        <p><a href="{{route('posts.show', $post->id)}}">visualizza</a></p>
        {{-- <p><a href="{{route('posts.delete', $post->id)}}">Elimina</a></p> --}}
    @endforeach
</main>
