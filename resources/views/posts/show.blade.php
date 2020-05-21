<main>
    <h1>post singoli</h1>
        <h2>{{$post->author}}</h2>
        <p>{{$post->body}}</p>
        <img src="{{$post->img_author}}" alt="">
        <small>{{$post->created_at}}</small>
</main>
