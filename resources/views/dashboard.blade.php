<?php

Use App\Models\Post;


?>



<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <link rel="stylesheet" href ="./css/bootstrap.min.css">

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                            
        <?php
        $posts = Post::latest()->paginate(3);
        ?>

           
                <a href="{{ route('posts.create') }}">Criar novo post</a> <br> 
                <hr>
                <br>
                @if (session('message'))
                    <div>
                        {{ session('message') }}
                    </div>
                @endif 

                    <form action="{{ route('posts.search') }}" method="post">
                        @csrf
                        <input type="text" name="search" placeholder="Filtrar:"> <br> <br> 

                        <button type="submit" class="btn btn-primary">Filtrar</button>
                    </form>

                <h1>Posts</h1>

                @foreach ($posts as $post)
                    <p>
                        <img src="{{ url("storage/{$post->image}") }} " alt="{{ $post->title }}" style="
                    max-width:100px;
                        max-height:100px"><br>

                        {{ $post->title }} - 
                        [     
                        <a href="{{ route('posts.show', $post->id)  }}">Ver detalhes</a>  - 
                        <a href="{{ route('posts.edit', $post->id)  }}"> Editar</a>
                        ]</p> <br>
                @endforeach

                <hr>

                @if (isset($filters))

                {{ $posts->appends($filters)->links() }}
                @else

                {{ $posts->links() }}

                @endif

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
