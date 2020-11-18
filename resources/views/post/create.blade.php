@extends('layouts.app')

@section('contant')


    <h1>create  post</h1>
{{!!Form::open(['action' => 'PostController@store','method' => 'POST'])!!}}
<div class="form-group">
{{Form::label('titel', 'Titel')}}
{{Form::text('titel','', ['class', 'form-control', 'placeholder'=>'Titel'])}}

</div>
<div class="form-group">
{{Form::label('body', 'Body')}}
{{Form::text('body','', ['class', 'form-control', 'placeholder'=>'Body'])}}

</div>

{{Form::text('submit','', ['class' => 'btn btn-primary'])}}
{{!!Form::close()!!}}

@endsection  