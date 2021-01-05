@extends('admin.layouts.app')


    

    </form>


    @extends('admin.layouts.app')


    <?php
    Use App\Models\Post;
    ?>


    <title>Edição de Posts</title>
    <x-app-layout>
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Edit de Posts') }}
            </h2>
        </x-slot>
    
        <link rel="stylesheet" href ="../../css/bootstrap.min.css">
    
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200">
            
                        <div style="text-align:right;">
                            <a href="posts">Voltar</a>
                        </div>
                        <hr>
    
                    <h1>Editar o Post <strong>{{ $post->title }}</strong></h1>

                      <form action="{{ route('posts.update', $post->id) }}" method="post" enctype="multipart/form-data">
                        @method('put')
                            @include('admin.posts._partials.form')
                            
                                Imagem Antiga
                                    <img src="{{ url("storage/{$post->image}") }} " 
                                        alt="{{ $post->title }}" 
                                            style="max-width:50px;max-height:50px" 
                                                value="{{$post->image ?? old('image')}}"> <br> <br>
                            
                                <button type="submit" class="btn btn-primary">Enviar</button><br>    
                                            
                
    
                        </body>
                        </html> 
    
                    </div>
                </div>
            </div>
        </div>
    </x-app-layout>


