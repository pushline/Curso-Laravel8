<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <h1>Cadastrar Novo Post</h1>

    <form action="{{ route('posts.store') }}" method="post">
        @csrf<br>
        <input type="text" name="title" id="title" placeholder="Título">
        
       <br>
       <br>

       <textarea name="content" id="content" cols="30" rows="4" placeholder="Conteúdo"></textarea>
       
       <br> 
       
       <button type="submit">Enviar</button>
    </form>
</body>
</html>