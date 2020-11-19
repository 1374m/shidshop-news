@extends('layouts.app')

@section('contant')


<h1>Edit post</h1>
{{!!Form::open(['action' => ['PostController@update'$post->id],'method' => 'PUT'])!!}}
<div class="form-group">
{{Form::label('title', 'Title')}}
{{Form::text('titel',$post->title, ['class', 'form-control', 'placeholder'=>'Title'])}}

</div>
<div class="form-group">
{{Form::label('body', 'Body')}}
{{Form::text('body',$post->body, ['class', 'form-control', 'placeholder'=>'Body'])}}

</div>
{{Form::hidden('_method', 'PUT')}}
{{Form::text('submit','', ['class' => 'btn btn-primary'])}}
{{!!Form::close()!!}}

@endsection  