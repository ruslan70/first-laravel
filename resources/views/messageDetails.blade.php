<!--extend layout master.blade.php -->
@extends('layouts.master')
 
<!--sets value for section title to "Mini Twitter" (section title is used in messages.blade.php) -->
@section('title', 'Mini Twitter')
 
<!--starts section content, defines some html for section content and end section content
ts value for section title to "Mini Twitter" (section content is used in messages.blade.php) -->
@section('content')
<div class="form-edit">
    <div class="container p-5 my-5 border bg-primary">
        <h2>Message Details:</h2>
        <h3>{{$message->title}}</h3>
        <p>{{$message->author}}</p>

        <p>{{$message->content}}</p>

        <form action="/message/{{$message->id}}" method="post">
        @csrf
        @method('delete')
        <button type="submit" class="btn btn-warning">Delete</button>
        </form>
    </div> 
    <div class="container p-5 my-5 border bg-warning">
        <form action="/update/{{$message->id}}"  method="POST" class="form-horizontal">
                {{ csrf_field() }}
    
                <input type="hidden" name="id" class="form-id" value="{{$message->id}}">
                <input type="text" name="title" class="form-title"  value="{{ $message->title }}">
                <input type="text" name="author" class="form-author"  value="{{ $message->author }}">
                <input type="text" name="content" class="form-content"  value="{{ $message->content }}"><br>
                
                <br>
                <button type="submit" class="btn btn-primary"><i class="save"></i>Update</button><br>
                                  
        </form>	
        <br>
        <form action="/message/{{ $message->id }}" method="post">
                @csrf
                <button type="submit" class="btn btn-danger">Delete Content</button>
        </form>
    </div>
</div>							
													
 
@endsection
