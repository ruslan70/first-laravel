<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    
    <title>Document</title>
</head>
<body>
    
<!--extend layout master.blade.php -->
@extends('layouts/master')
    
    <!--sets value for section title to "Mini Twitter" (section title is used in messages.blade.php) -->
 @section('title', 'Mini Twitter')
  
  <!--starts section content, defines some html for section content and end section content
  ts value for section title to "Mini Twitter" (section content is used in messages.blade.php) -->
  @section('content')

   
    <h2>Create new message: </h2>
    
    <form action="/create" class="create-form" method="post">
        <input type="text" name="title" placeholder="Title">
        <input type="text" name="author" placeholder="Author">
        <input type="text" name="content" placeholder="Content">
        <br>
        <br>
        
        <!-- this blade directive is necessary for all form posts somewhere in between
            the form tags -->
        @csrf
        <button type="submit">Submit</button>
    </form>
   
  <h2>Recent messages:</h2>
    <ul>
        <!-- loops through the $messages, that this blade template
        gets from MessageController.php. for each element of the loop which
        we call $message we print the properties (title, content
        and created_at in an <li> element -->

        @foreach ($messages as $message) 
            <li class="entry-list">
                <b>
                    <!-- this link to the message details is created dynamically
                        and will point to /messages/1 for the first message -->
                    <a href="/message/{{$message->id}}">{{$message->title}}:</a>
                </b><br>
                {{$message->author}}<br>
                {{$message->content}}<br>
                
                {{$message->created_at->diffForHumans()}}           
            </li>
        @endforeach

    </ul>

    <ul>
        @foreach ($messages as $message)
        <li>
            ... ...
            <span>{{ $message->updated_at->diffForHumans() }}</span>
            <a href="/message/{{$message->id}}">Edit</a>
        </li>
        @endforeach
    </ul>
   
  @endsection
</body>
</html>


 
 
  

