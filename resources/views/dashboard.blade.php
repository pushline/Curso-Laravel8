
<title>Página Principal</title>
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    
                    <link rel="stylesheet" href ="../../css/bootstrap.min.css">

                    <div style="text-align:right; color:darkblue;">
                        <a href="{{route('posts.create')}}">Criar novo post</a> <bR>
                        <a href="{{route('posts.index')}}" style="text-align:right;">Posts</a>
                    </div>

                    
                    <hr><br>

                    Logado!

                   
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
