@extends('layouts.app')

@section('content')
<h1>Edit a Post</h1>

      {!! Form::model($post,['method'=>'PUT', 'route'=>['posts.update', $post->id]]) !!}
      {{-- {!! Form::open(['route'=>['posts.update', $post->id], 'method' => 'put']) !!} --}}
    {{-- <input type="text" name="title" value=" {{$post->title}} "> --}}
    {!! Form::label('title', 'Title :', ['class'=>'form-control']) !!}
    {!! Form::text('title', null, ['class'=>'form-control']) !!}
    <br><br>
    {{-- <input type="text" name="content" placeholder="Enter content here" value=" {{$post->content}} "> --}}
    {!! Form::label('content', 'Content :', ['class'=>'form-control']) !!}
    {!! Form::textarea('content', null, ['class'=>'form-control']) !!}
    <br><br>
    {{-- <button type="submit">Update</button> --}}
    {!! Form::submit('Update', ['class'=>'btn btn-primary']) !!}

 {!! Form::close() !!}

 {!! Form::model($post, ['method'=>'DELETE', 'route'=>['posts.destroy', $post->id]]) !!}
 {!! Form::submit('Delete', ['class'=>'btn btn-danger']) !!}
 {!! Form::close() !!}

 @if (count($errors)>0)
  <div style="color: red">
     @foreach ($errors->all() as $error)
         <li>{{$error}}</li>
     @endforeach
    </div>
 @endif
 
@endsection