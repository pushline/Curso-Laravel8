@if ($errors->any())
<ul>
    @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
    @endforeach
</ul>
    
@endif

@csrf<br>

<link rel="stylesheet" href ="../../../css/bootstrap.min.css">


<input type="text" name="title" id="title" placeholder="Título"
value="{{$post->title ?? old('title') }}">

<br><br>
<textarea name="content" id="content" cols="30" rows="4" 
placeholder="Conteúdo">

{{$post->title ?? old('content')}}
</textarea><br><br>

Imagem Antiga

<img src="{{ url("storage/{$post->image}") }} " 
            alt="{{ $post->title }}" 
                style="max-width:50px;max-height:50px" 
                    value="{{$post->image ?? old('image')}}">
                        
                        <br>

<input type="file" name="image" id="image"><br><br>


<button type="submit" class="btn btn-primary">Enviar</button>