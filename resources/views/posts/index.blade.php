@extends('layouts.app')

@section('content')
    <table>
        <tr>
            <th>Title</th>
            <th>Content</th>
        </tr>
        @foreach ($posts as $post)
            <tr>
                <td> <a href=" {{route('posts.show', $post->id)}} "> {{$post->title}}</a> </td>
                <td> {{$post->content}} </td>
            </tr>
        @endforeach
    </table>

    {{-- <ul>
        @foreach ($posts as $post)
            <li> <a href=" {{route('posts.show', $post->id)}} ">{{$post->title}} </a> </li>
        @endforeach
    </ul> --}}
@endsection