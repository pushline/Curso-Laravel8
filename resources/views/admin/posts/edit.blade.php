@extends('admin.layouts.app')

@section('title', 'Edit do post {$post->title}')

@section('content')
<h1>Editar o post <strong>{{$post->title}}</strong></h1>

  
<form action=" {{ route('posts.update', $post->id) }} " method="post" enctype="multipart/form-data">
  
    @method('put')       
    @include('admin.posts._partials.form')

</form>
</body>
</html>
@endsection