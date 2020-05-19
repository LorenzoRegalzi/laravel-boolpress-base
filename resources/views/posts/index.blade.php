<main>
    @foreach ($posts as $post)
        {{-- <li>{{$post->img-author}}</li> --}}
        <h2>{{$post->author}}</h2>
        <p>{{$post->body}}</p>
        <small>{{$post->created_at}}</small>
    @endforeach
</main>
