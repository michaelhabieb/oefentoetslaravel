@extends('layouts.app')

@section('content')


<br>
<a href="{{route('forum.create')}}" class="fs-6 btn btn-primary">New post</a>
<br>
 
@foreach($posts as $post)
    <br>
    <div class="border border-black p-3">
        <p class="fs-2">{{$post->subject}}</p>
        <p class="fs-5">{{$post->content}}</p>
        <p class="fs-6">Gepost door: {{ optional($post->user)->name ?? 'Unknown User' }}.</p>
        <br>
        @if($post->user_id == Auth::user()->id)
            <div class="d-flex align-items-start">
                <a href="{{route('forum.edit', $post->id)}}" class="me-3 btn btn-primary">Edit</a>
                <br>
                <form action="{{route('forum.destroy', $post->id)}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-outline-danger">Delete</button>
                </form>
            </div>
        @endif
        @foreach($post->comments as $comment)
            <br>
            <div class="border border-primary p-3">
                <p class="fs-6">Commented by {{ optional($comment->user)->name ?? 'Unknown User' }}.</p>
                <p class="fs-6">{{$comment->content}}</p>
            </div>
        @endforeach
    </div>
    <br>
@endforeach

@endsection