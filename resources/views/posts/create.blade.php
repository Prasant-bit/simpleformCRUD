@extends('layouts.app')

@section('content')

    <h1>Create a Post</h1>

    {{-- <form method="POST" action="/posts"> --}}
        {!! Form::open(['url'=> '/posts',
        'method'=>'POST', 'files'=>true]) !!}
        @csrf
        {{-- <input type="text" name="title" placeholder="Enter title here"> --}}

        <div class="form-group">
            {!! Form::label('title', 'Title :', [
                'placeholder' => 'Enter title here'
            ] ) !!}
            {!! Form::text('title') !!}
        </div>
        <br>
        {{-- <input type="text" name="content" placeholder="Enter content here"> --}}

        <div class="form-group">
            {!! Form::label('content', 'Content :') !!}
            {!! Form::textarea('content') !!}
        </div>
        <br>

        {!! Form::file('file', ['class'=>'form-control']) !!}
        
        {{-- <button type="submit">Submit</button> --}}
        {!! Form::submit('Submit') !!}

    {!! Form::close() !!}

    @if (count($errors)>0)
        <div style="color: red">
            @foreach ($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </div>
    @endif
    
@endsection