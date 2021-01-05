@extends('admin.layouts.app')



<?php

Use App\Models\Post;


?>



<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Listagem de Posts') }}
        </h2>
    </x-slot>

    <link rel="stylesheet" href ="../../../css/bootstrap.min.css">

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
        
                    <div style="text-align:right;">
                        <a href="posts">Voltar</a>
                    </div>
                    <hr>
                <h1>Detalhes do Post</h1>

                <ul>
                    <li><strong>Título:</strong>{{ $post->title }}</li>
                    <li><strong>Conteúdo:</strong>{{ $post->content }}</li>
                    <li><strong>Imagem:</strong> <img src="{{ url("storage/{$post->image}") }} " alt="{{ $post->title }}" style="
                        max-width:100px;
                            max-height:100px"><br></li>
                </ul>

                <form action="{{ route('posts.destroy', $post->id) }}" method="post">
                    @csrf
                    <input type="hidden" name="_method" value="DELETE">
                    
                    <button type="submit" class="btn btn-danger"> Deletar o Post </button>

                </form>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
