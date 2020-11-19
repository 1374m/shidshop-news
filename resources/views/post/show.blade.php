tends('layouts.app')

@section('contant')

  <a href="/post" class="btn btn-defult">GO to Back</a>
    <h1>{{$post->title}}}</h1>
    <p>{{$post->body}}</p>
    <hr>
    <small>write on {{$post->created_at}}</small>
    <hr>
    <a href="/posts/{{$post->id}}/edit" class="btn btn-defult">Edit</a>
    {!!Form::open(['action' => ['PostController@destroy', $post->$id], 'method' =>'POST', 'class'=>'pull-right')!!}
    {{Form::hidden('_method','DELETE')}}
    {{Form::submit('Delete', ['class'=>btn btn-danger])}}
    {{!!Form::close()!!}}


@endsection  