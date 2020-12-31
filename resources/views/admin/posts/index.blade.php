    <a href="{{ route('posts.create') }}">Criar novo post</a>
    <hr>
    @if (session('message'))
        <div>
            {{ session('message') }}
        </div>
    @endif

        <form action="" method="post">

            

        </form>

    <h1>Posts</h1>


    @foreach ($posts as $post)
        <p>{{ $post->title }} - 
             [     
             <a href="{{ route('posts.show', $post->id)  }}">Ver detalhes</a>  - 
             <a href="{{ route('posts.edit', $post->id)  }}"> Editar</a>
             ]</p>
    @endforeach


<hr>

{{ $posts->links() }}
