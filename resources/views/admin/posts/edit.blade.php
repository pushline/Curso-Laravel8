<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <h1>Editar o post <strong>{{$post->title}}</strong></h1>

    @if ($errors->any())
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
        
    @endif

    <form action=" {{ route('posts.update', $post->id) }} " method="post">
        @csrf<br>
        @method('put')

        <input type="text" name="title" id="title" placeholder="Título"
         value="{{$post->title}}">
        
    
       <textarea name="content" id="content" cols="30" rows="4" placeholder="Conteúdo">
        {{$post->title}}
       </textarea>
       
       <br> 
       
       <button type="submit">Enviar</button>
    </form>
</body>
</html>