<main>
    <h1>questi sono i post pubblicati</h1>
    @foreach ($posts as $post)
        <h2>{{$post->author}}</h2>
        <p>{{$post->body}}</p>
        <img src="{{$post->img_author}}" alt="">
        <small>{{$post->created_at}}</small>
    @endforeach
</main>
