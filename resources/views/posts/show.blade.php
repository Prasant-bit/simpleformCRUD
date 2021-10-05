@extends('layouts.app')

@section('content')
    <p>Hi, I am <a href=" {{route('posts.edit', $post->id)}} ">{{$post->title}}</a>  </p>
@endsection