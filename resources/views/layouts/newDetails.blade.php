<!--extend layout master.blade.php -->
@extends('layouts.master')
 
<!--sets value for section title to "Mini Twitter" (section title is used in messages.blade.php) -->
@section('title', 'Mini Twitter')
 
<!--starts section content, defines some html for section content and end section content
ts value for section title to "Mini Twitter" (section content is used in messages.blade.php) -->
@section('content')
 
<h2>Message Details:</h2>
<p>{{$message->author}}</p>
<h3>{{$message->title}}</h3>

<p>{{$message->content}}</p>
<form action="/message/{{$message->id}}"  method="POST" class="form-horizontal">
								{{ csrf_field() }}
								<input type="hidden" name="id" class="form-control" value="{{$savedmessage->id ?? ''}}">
								<input type="text" name="property" class="form-control" value="{{  old('property',$savedmessage->property ?? null) }}">
								<button type="submit" class="btn btn-default">
									<i class="fa fa-btn fa-plus"></i>Speichern
								</button>
							
						</form>


 
@endsection