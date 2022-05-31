<!--extend layout master.blade.php -->
@extends('layouts.master')
 
<!--sets value for section title to "Mini Twitter" (section title is used in messages.blade.php) -->
@section('title', 'Mini Twitter')
 
<!--starts section content, defines some html for section content and end section content
ts value for section title to "Mini Twitter" (section content is used in messages.blade.php) -->
@section('content')
<div class="container p-5 my-5 border">
    <h2>Message Details:</h2>
    <p>{{$message->author}}</p>
    <h3>{{$message->title}}</h3>

    <p>{{$message->content}}</p>

    <form action="/message/{{$message->id}}" method="post">
    @csrf
    @method('delete')
    <button type="submit" class="btn btn-warning">Delete</button>
    </form>
</div> 
<div class="container p-5 my-5 border bg-secondary">
    <form action="/message/{{$message->id}}"  method="POST" class="form-horizontal">
        {{ csrf_field() }}
    
                <input type="hidden" name="id" class="form-id" value="{{$message->id}}">
                <input type="text" name="title" class="form-title" onfocus="this.value=''" value="{{ $message->title }}">
                <input type="text" name="author" class="form-author" onfocus="this.value=''" value="{{ $message->author }}">
                <input type="text" name="content" class="form-content" onfocus="this.value=''" value="{{ $message->content }}"><br>
                
                <br>
                <button type="submit" class="btn btn-primary"><i class="save"></i>Save</button>
                                  
    </form>	
</div>							
													
 
@endsection
